console.log('🚀 [JobsArchive DEBUG] Module loaded');

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

        this.attachListeners();
    }

    attachListeners() {
        document.addEventListener('click', (e) => {
            const link = e.target.closest('.js-ajax-page');
            if (!link) return;

            e.preventDefault();
            const paged = parseInt(link.dataset.page);
            if (isNaN(paged)) return;

            console.log(`🔄 Click page ${paged} → ${link.href}`);

            history.pushState({paged}, '', link.href);
            this.loadPage(paged);
        });
    }

    async loadPage(paged) {
        if (!this.listing) return;
        this.listing.style.opacity = '0.6';

        try {
            const formData = new FormData();
            formData.append('action', 'load_jobs_archive');
            formData.append('paged', paged);

            console.log('📡 Gọi AJAX page', paged, 'với url:', this.ajaxurl);

            const res = await fetch(this.ajaxurl, {
                method: 'POST',
                body: formData,
                credentials: 'same-origin'
            });

            const text = await res.text(); // đọc raw trước để debug
            console.log('📥 Response status:', res.status, '| First 200 chars:', text.substring(0, 200));

            if (!res.ok) throw new Error(`HTTP ${res.status}`);

            const json = JSON.parse(text);

            if (json.success) {
                console.log(`✅ AJAX SUCCESS - ĐÃ LOAD PAGE ${paged}`);
                this.listing.innerHTML = json.data.content;
                this.pagination.innerHTML = json.data.pagination;

                this.attachListeners(); // re-attach sau khi thay pagination

                window.dispatchEvent(new CustomEvent('sage:ajax-loaded'));
                this.wrapper.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        } catch (err) {
            console.error('❌ AJAX error:', err);
        } finally {
            this.listing.style.opacity = '1';
        }
    }
}

document.addEventListener('DOMContentLoaded', () => {
    new JobsArchive();
});