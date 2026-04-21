console.log('🚀 [JobsArchive DEBUG] Module loaded v2.0 (fixed multiple requests)');

class JobsArchive {
    constructor() {
        this.ajaxurl = window.ajaxurl || window.sageData?.ajaxurl;
        console.log('🔧 ajaxurl thực tế =', this.ajaxurl);

        if (!this.ajaxurl) {
            console.error('❌ ajaxurl chưa có! Kiểm tra Blade template');
            return;
        }

        this.wrapper = document.getElementById('jobs-archive-wrapper');
        if (!this.wrapper) return;

        this.listing = document.getElementById('jobs-listing-container');
        this.pagination = document.getElementById('jobs-pagination-container');

        this.isLoading = false;           // ← Ngăn double-click / multiple request
        this.listenersAttached = false;   // ← Chỉ attach 1 lần duy nhất

        this.attachListenersOnce();
    }

    /**
     * CHỈ ATTACH LISTENER 1 LẦN DUY NHẤT (delegation trên document)
     */
    attachListenersOnce() {
        if (this.listenersAttached) return;
        this.listenersAttached = true;

        document.addEventListener('click', (e) => {
            const link = e.target.closest('.js-ajax-page');
            if (!link) return;

            e.preventDefault();

            const paged = parseInt(link.dataset.page);
            if (isNaN(paged) || this.isLoading) return;

            console.log(`🔄 Click page ${paged} → ${link.href}`);

            // Update URL sạch sẽ
            history.pushState({paged}, '', link.href);

            this.loadPage(paged);
        });

        console.log('✅ Event listeners attached (chỉ 1 lần)');
    }

    async loadPage(paged) {
        if (!this.listing || this.isLoading) return;

        this.isLoading = true;
        this.listing.style.opacity = '0.6';

        try {
            const formData = new FormData();
            formData.append('action', 'load_jobs_archive');
            formData.append('paged', paged);

            console.log('📡 Gọi AJAX page', paged);

            const res = await fetch(this.ajaxurl, {
                method: 'POST',
                body: formData,
                credentials: 'same-origin'
            });

            const text = await res.text();
            if (!res.ok) throw new Error(`HTTP ${res.status}`);

            const json = JSON.parse(text);

            if (json.success) {
                console.log(`✅ AJAX SUCCESS - ĐÃ LOAD PAGE ${paged}`);

                this.listing.innerHTML = json.data.content;
                this.pagination.innerHTML = json.data.pagination;

                // KHÔNG gọi attachListeners() nữa → tránh duplicate
                window.dispatchEvent(new CustomEvent('sage:ajax-loaded'));

                this.wrapper.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        } catch (err) {
            console.error('❌ AJAX error:', err);
        } finally {
            this.listing.style.opacity = '1';
            this.isLoading = false;
        }
    }
}

// Khởi tạo chỉ 1 lần
document.addEventListener('DOMContentLoaded', () => {
    new JobsArchive();
});