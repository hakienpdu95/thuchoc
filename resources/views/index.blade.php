@extends('layouts.app')

@section('content')
<style>
  .container {
    width: min(var(--max), calc(100% - 32px));
    margin: 0 auto;
}

.btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 50px;
    padding: 0 22px;
    border-radius: 999px;
    font-weight: 700;
    border: 0;
    cursor: pointer;
    transition: 0.2s ease;
}
.btn:hover {
    transform: translateY(-1px);
}
.btn-primary {
    background: var(--accent);
    color: #2f2a16;
    box-shadow: 0 10px 24px rgba(255, 180, 0, 0.28);
}
.btn-secondary {
    background: rgba(255, 255, 255, 0.14);
    color: #fff;
    border: 1px solid rgba(255, 255, 255, 0.35);
}

header {
    position: sticky;
    top: 0;
    z-index: 10;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(12px);
    border-bottom: 1px solid rgba(226, 61, 99, 0.08);
}
.nav {
    height: 74px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
}
.brand {
    display: flex;
    align-items: center;
    gap: 12px;
    font-weight: 800;
}
.brand-mark {
    width: 42px;
    height: 42px;
    border-radius: 12px;
    background: linear-gradient(135deg, var(--primary), #ff6b8f);
    color: #fff;
    display: grid;
    place-items: center;
    box-shadow: var(--shadow);
}
.brand small {
    display: block;
    color: var(--muted);
    font-size: 12px;
    font-weight: 600;
    margin-top: 2px;
}
.nav-links {
    display: flex;
    gap: 22px;
    color: #485062;
    font-weight: 600;
    font-size: 14px;
}

.hero {
    background: linear-gradient(135deg, #d93258 0%, #ea4b73 55%, #ff7a98 100%);
    color: #fff;
    overflow: hidden;
    position: relative; 

    h1 {
      line-height: 1.4;
    }
}
.hero:after {
    content: "";
    position: absolute;
    width: 440px;
    height: 440px;
    right: -80px;
    top: -100px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.13);
}
.hero-wrap {
    position: relative;
    z-index: 1;
    display: grid;
    grid-template-columns: 1.08fr 0.92fr;
    gap: 38px;
    align-items: center;
    padding: 78px 0 64px;
}
.eyebrow {
    display: inline-block;
    padding: 8px 14px;
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.16);
    font-size: 13px;
    font-weight: 700;
    margin-bottom: 14px;
}
h1 {
    font-family: var(--font2);
    margin: 0 0 14px;
    font-size: 34px;
    line-height: 1.08;
}
.hero p {
    margin: 0 0 24px;
    font-size: 17px;
    color: rgba(255, 255, 255, 0.92);
    max-width: 620px;
}
.hero-actions {
    display: flex;
    gap: 14px;
    flex-wrap: wrap;
    margin-bottom: 18px;
}
.hero-points {
    display: flex;
    flex-wrap: wrap;
    gap: 14px;
    font-size: 14px;
    color: rgba(255, 255, 255, 0.92);
}

.hero-card {
    background: rgba(255, 255, 255, 0.12);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 20px;
    padding: 12px;
    box-shadow: 0 18px 36px rgba(116, 10, 34, 0.18);
}
.mock {
    background: #fff;
    border-radius: 15px;
    color: var(--text);
    padding: 15px;
    box-shadow: 0 20px 40px rgba(92, 10, 28, 0.12);
    font-family: var(--font3);
}
.mock h3 {
    margin: 0 0 10px;
    font-size: 21px;
    font-weight: 500;
    line-height: 1.2;
}

.mock .muted {
  font-size: 15px;
}

.score-box {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 12px;
    margin-top: 14px;
}
.mini {
    background: #fff7f8;
    border: 1px solid #f4d6de;
    border-radius: 16px;
    padding: 14px;
}
.mini strong {
    display: block;
    color: var(--primary);
    font-size: 24px;
    margin-bottom: 4px;
}

section {
    padding: 78px 0;
}
.section-head {
    text-align: center;
    max-width: 760px;
    margin: 0 auto 34px;

    h2 {
      font-family: var(--font2);
      font-size: 30px;
      line-height: 1.3;
    }
}
h2 {
    margin: 0 0 12px;
    font-size: clamp(28px, 4vw, 42px);
    line-height: 1.15;
}
.section-head p {
    margin: 0;
    color: var(--muted);
    font-size: 17px;
}

.grid-3 {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 18px;
}
.card {
    background: var(--card);
    border: 1px solid #f2e1e5;
    border-radius: var(--radius);
    padding: 24px;
    box-shadow: 0 10px 24px rgba(30, 30, 30, 0.04);
}
.icon {
    width: 54px;
    height: 54px;
    border-radius: 16px;
    background: #fff0f3;
    color: var(--primary);
    display: grid;
    place-items: center;
    font-size: 24px;
    margin-bottom: 14px;
}

.solution {
    background: var(--bg);
}
.solution-wrap {
    display: grid;
    grid-template-columns: 0.95fr 1.05fr;
    gap: 24px;
    align-items: center;
}
.illustration {
    background: linear-gradient(180deg, #fff, #fff0f4);
    border: 1px solid var(--line);
    border-radius: 28px;
    padding: 24px;
    box-shadow: var(--shadow);

    h3 {
      font-family: var(--font2);
      font-weight: 500;
      font-size: 22px;
      line-height: 1.3;
      margin-bottom: 10px;
    }
}
.flow-item {
    display: flex;
    gap: 14px;
    align-items: flex-start;
    padding: 14px 0;
    border-bottom: 1px dashed #ebc2cc;
}
.flow-item:last-child {
    border-bottom: 0;
}
.flow-no {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: var(--primary);
    color: #fff;
    display: grid;
    place-items: center;
    font-weight: 800;
    flex: none;
}

.pricing {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 18px;
}
.price-card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-height: 100%;
    background: #fff;
    border: 1px solid #f2e1e5;
    border-radius: 24px;
    padding: 28px;
    box-shadow: 0 12px 28px rgba(30, 10, 15, 0.05);
}
.price-card.featured {
    border: 2px solid var(--primary);
    transform: translateY(-8px);
    box-shadow: 0 18px 40px rgba(226, 61, 99, 0.18);
}
.ribbon {
    position: absolute;
    top: 16px;
    right: 16px;
    background: var(--primary);
    color: #fff;
    padding: 8px 12px;
    border-radius: 999px;
    font-size: 12px;
    font-weight: 800;
}
.price {
    font-size: 34px;
    color: var(--primary);
    font-weight: 800;
    margin: 10px 0 12px;
}
.price-card ul {
    padding-left: 18px;
    margin: 0 0 22px;
    list-style: disc;
}
.price-card li {
    margin-bottom: 10px;
}
.price-card .btn {
    margin-top: auto;
}

.test-wrap {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 24px;
    align-items: start;
}
.quiz {
    background: #fff;
    border: 1px solid #f2e1e5;
    border-radius: 24px;
    padding: 24px;
    box-shadow: 0 12px 30px rgba(30, 10, 15, 0.05);
}
.question {
    margin-bottom: 18px;
}
.question h4 {
    margin: 0 0 10px;
    font-size: 18px;
}
.option {
    display: block;
    padding: 10px 12px;
    border-radius: 14px;
    border: 1px solid #f0dce2;
    margin-bottom: 8px;
    cursor: pointer;
}
.option:hover {
    background: #fff7f8;
}
input[type="radio"] {
    margin-right: 8px;
}
input[type="text"],
input[type="email"],
select {
    width: 100%;
    min-height: 48px;
    padding: 12px 14px;
    border-radius: 14px;
    border: 1px solid #e8d4da;
    font: inherit;
    margin-bottom: 12px;
}
.muted {
    color: var(--muted);
}
.result {
    display: none;
    margin-top: 18px;
    background: #fff7f8;
    border: 1px solid #f2d5de;
    border-radius: 18px;
    padding: 18px;
}
.result h3 {
    margin: 0 0 8px;
    color: var(--primary);
}
.cta {
    background: linear-gradient(135deg, #d93258, #ef5379);
    color: #fff;
}
.cta-box {
    display: grid;
    grid-template-columns: 1fr auto;
    gap: 20px;
    align-items: center;
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.18);
    border-radius: 30px;
    padding: 40px;
}

.footer-grid {
    display: grid;
    grid-template-columns: 1.2fr 1fr 1fr;
    gap: 20px;
}

.sticky-mobile {
    display: none;
    position: fixed;
    left: 16px;
    right: 16px;
    bottom: 16px;
    z-index: 30;
    box-shadow: 0 20px 30px rgba(226, 61, 99, 0.2);
}

@media (max-width: 980px) {
    .nav-links {
        display: none;
    }
    .hero-wrap,
    .solution-wrap,
    .test-wrap,
    .cta-box,
    .footer-grid {
        grid-template-columns: 1fr;
    }
    .grid-3,
    .pricing {
        grid-template-columns: 1fr;
    }
    .price-card.featured {
        transform: none;
    }
}
@media (max-width: 680px) {
    .nav {
        height: 66px;
    }
    .hero-wrap {
        padding: 54px 0 48px;
    }
    .hero p {
        font-size: 16px;
    }
    section {
        padding: 58px 0;
    }
    .sticky-mobile {
        display: inline-flex;
    }
    body {
        padding-bottom: 84px;
    }
}

</style>
<section class="hero">
    <div class="container hero-wrap">
      <div>
        <h1>7 ngày – kiếm được tiền đầu tiên</h1>
        <p class="italic">Không cần kinh nghiệm. Không cần vốn. THUCHOCVN giúp bạn học nhanh, làm thật và có cơ hội tạo thu nhập thật ngay từ bước đầu tiên.</p>
        <div class="hero-actions">
          <a class="btn btn-primary" href="#test">Test 2 phút ngay</a>
          <a class="btn btn-secondary" href="#goi">Xem 3 gói chương trình</a>
        </div>
        <div class="hero-points">
          <span>✔ Có mentor hỗ trợ</span>
          <span>✔ Có bài test định hướng</span>
          <span>✔ Có chương trình vào doanh nghiệp</span>
        </div>
      </div>
      <div class="hero-card">
        <div class="mock">
          <h3>Lộ trình bắt đầu cùng THUCHOCVN</h3>
          <div class="muted">Bắt đầu từ bài test để biết bạn phù hợp với cách kiếm tiền nào.</div>
          <div class="score-box">
            <div class="mini"><strong>01</strong>Test định hướng 2 phút</div>
            <div class="mini"><strong>02</strong>Nhận kết quả phù hợp</div>
            <div class="mini"><strong>03</strong>Chọn gói bắt đầu</div>
            <div class="mini"><strong>04</strong>Thực chiến và follow-up</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="section-head">
        <h2>THUCHOCVN dành cho ai?</h2>
      </div>
      <div class="grid-3">
        <div class="card">
          <div class="icon">①</div>
          <h3 class="font-bold mb-2">Sinh viên chưa có kinh nghiệm</h3>
          <p class="muted">Cần môi trường bắt đầu nhanh, rõ ràng và ít rủi ro hơn so với tự mày mò.</p>
        </div>
        <div class="card">
          <div class="icon">②</div>
          <h3 class="font-bold mb-2">Người muốn kiếm thêm tiền</h3>
          <p class="muted">Muốn thử sức trong môi trường thực chiến, có định hướng và được kèm sát hơn.</p>
        </div>
        <div class="card">
          <div class="icon">③</div>
          <h3 class="font-bold mb-2">Người muốn vào doanh nghiệp</h3>
          <p class="muted">Muốn đi theo lộ trình làm thật, có kết nối cơ hội thay vì chỉ học lý thuyết.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="solution">
    <div class="container solution-wrap">
      <div class="illustration">
        <h3>THUCHOCVN không dạy lý thuyết suông</h3>
        <p class="muted">Mô hình đúng là: hiểu mình trước, chọn hướng phù hợp, rồi mới đi vào thực chiến.</p>
        <div class="flow-item">
          <div class="flow-no">1</div>
          <div><strong>Làm test</strong><div class="muted">Biết mình phù hợp kiếm tiền theo kiểu nào.</div></div>
        </div>
        <div class="flow-item">
          <div class="flow-no">2</div>
          <div><strong>Nhận lộ trình</strong><div class="muted">Được gợi ý gói phù hợp và hướng thực chiến.</div></div>
        </div>
        <div class="flow-item">
          <div class="flow-no">3</div>
          <div><strong>Follow-up & chốt</strong><div class="muted">Tư vấn nhanh, vào gói trải nghiệm hoặc chương trình sâu hơn.</div></div>
        </div>
      </div>
      <div>
        
      </div>
    </div>
  </section>

  <section id="goi">
    <div class="container">
      <div class="section-head">
        <h2>3 gói sản phẩm THUCHOCVN</h2>
      </div>
      <div class="pricing">
        <div class="price-card">
          <h3>7 ngày kiếm tiền đầu tiên</h3>
          <div class="price">199k</div>
          <p class="muted mb-2">Gói trải nghiệm cho người mới bắt đầu, cần vào nhanh và hiểu nghề rõ hơn.</p>
          <ul>
            <li>Định hướng nghề phù hợp</li>
            <li>Test và phân loại lead</li>
            <li>Có mentor cơ bản</li>
            <li>Phù hợp cho người mới</li>
          </ul>
          <a class="btn btn-primary" href="#test">Bắt đầu với gói này</a>
        </div>
        <div class="price-card featured">
          <span class="ribbon">Nổi bật</span>
          <h3>14 ngày cầm tay kiếm tiền</h3>
          <div class="price">1–3 triệu</div>
          <p class="muted mb-2">Gói sâu hơn để chốt nhóm thật sự nghiêm túc và muốn vào môi trường thực chiến mạnh hơn.</p>
          <ul>
            <li>Mentor theo sát</li>
            <li>Kịch bản làm việc thực tế</li>
            <li>Follow-up và hỗ trợ chốt</li>
            <li>Phù hợp để upsell</li>
          </ul>
          <a class="btn btn-primary" href="#test">Làm test để được tư vấn</a>
        </div>
        <div class="price-card">
          <h3>Vào doanh nghiệp làm thật</h3>
          <div class="price">Tư vấn</div>
          <p class="muted mb-2">Dành cho người phù hợp nhóm thực chiến và muốn có cơ hội đi tiếp vào doanh nghiệp.</p>
          <ul>
            <li>Gắn với cơ hội thực tế</li>
            <li>Định hướng đúng nhóm</li>
            <li>Phù hợp nhóm C / lead nóng</li>
            <li>Dùng cho giai đoạn chốt sâu</li>
          </ul>
          <a class="btn btn-primary" href="#test">Nhận lộ trình</a>
        </div>
      </div>
    </div>
  </section>

  <section id="test" class="solution" style="background:#fff;">
    <div class="container">
      <div class="section-head">
        <h2>🔥 Test 2 phút: Bạn kiếm tiền theo cách nào?</h2>
      </div>
      <div class="test-wrap">
        <div class="quiz">
          <div class="question">
            <h4>1. Bạn thích kiểu công việc nào hơn?</h4>
            <label class="option"><input type="radio" name="q1" value="A"> Giao tiếp, nói chuyện, tạo năng lượng</label>
            <label class="option"><input type="radio" name="q1" value="B"> Phân tích, suy nghĩ, logic</label>
            <label class="option"><input type="radio" name="q1" value="C"> Làm thực tế, thấy kết quả rõ</label>
            <label class="option"><input type="radio" name="q1" value="D"> Sáng tạo, linh hoạt, tự do</label>
          </div>
          <div class="question">
            <h4>2. Bạn muốn bắt đầu kiếm tiền theo cách nào?</h4>
            <label class="option"><input type="radio" name="q2" value="A"> Bán hàng, tư vấn, kết nối khách hàng</label>
            <label class="option"><input type="radio" name="q2" value="B"> Học kỹ một kỹ năng chuyên môn</label>
            <label class="option"><input type="radio" name="q2" value="C"> Làm dự án, triển khai thực tế</label>
            <label class="option"><input type="radio" name="q2" value="D"> Tự tạo hướng đi riêng</label>
          </div>
          <div class="question">
            <h4>3. Mục tiêu gần nhất của bạn là gì?</h4>
            <label class="option"><input type="radio" name="q3" value="A"> Có tiền sớm</label>
            <label class="option"><input type="radio" name="q3" value="B"> Tìm hướng phát triển đúng</label>
            <label class="option"><input type="radio" name="q3" value="C"> Vào doanh nghiệp làm thật</label>
            <label class="option"><input type="radio" name="q3" value="D"> Tự do hơn trong cách làm việc</label>
          </div>
        </div>

        <div class="quiz">
          <h3 class="font-bold mb-3">Nhập thông tin để nhận kết quả</h3>
          <input type="text" id="name" placeholder="Họ và tên" />
          <input type="text" id="phone" placeholder="Số điện thoại" />
          <input type="email" id="email" placeholder="Email" />
          <select id="goal">
            <option value="">Mục tiêu của bạn</option>
            <option value="Kiếm thêm tiền">Kiếm thêm tiền</option>
            <option value="Tìm nghề phù hợp">Tìm nghề phù hợp</option>
            <option value="Muốn vào doanh nghiệp">Muốn vào doanh nghiệp</option>
            <option value="Muốn kinh doanh">Muốn kinh doanh</option>
          </select>
          <button class="btn btn-primary" id="submitBtn" style="width:100%;" onclick="calculateResult()"><span id="btnText">Xem kết quả ngay</span></button>

          <div class="result" id="resultBox" style="display: none;">
            <h3 id="resultTitle"></h3>
            <p id="resultText" class="muted" style="margin:0 0 12px;"></p>
            <div id="resultCTA"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Toast thông báo -->
<div id="toast" class="hidden fixed bottom-6 right-6 px-6 py-4 rounded-3xl shadow-2xl text-white flex items-center gap-3 z-[9999]"></div>

  <section class="cta">
    <div class="container">
      <div class="cta-box">
        <div>
          <h2 style="margin:0 0 10px;">Muốn biến bản demo này thành website chạy thật?</h2>
          <p style="margin:0; color:rgba(255,255,255,.92); font-size:17px;">Bản production sẽ nối form, CRM, dashboard, phân quyền sale và gửi kết quả tự động.</p>
        </div>
        <a class="btn btn-primary" href="#test">Trải nghiệm thử ngay</a>
      </div>
    </div>
  </section>

  <section id="faq">
    <div class="container">
      <div class="section-head">
        <h2>Câu hỏi thường gặp</h2>
      </div>
      <div class="grid-3">
        <div class="card"><h3>Đây là bản demo hay bản chạy thật?</h3><p class="muted">Đây là bản demo tương tác để xem ngay. Bản production có thể nối backend/CRM thật.</p></div>
        <div class="card"><h3>Có thể đổi logo, hotline, ảnh thật không?</h3><p class="muted">Có. Dev chỉ cần thay asset và content theo brand THUCHOCVN.</p></div>
        <div class="card"><h3>Có thể dùng đi hội chợ luôn không?</h3><p class="muted">Có thể dùng bản này để demo. Nếu đi hội chợ thật thì nên nối form lưu lead thật.</p></div>
      </div>
    </div>
  </section>
<script>
const GOOGLE_SCRIPT_URL = "https://script.google.com/macros/s/AKfycbxtl4aLPwjr0eIRXHcG-btUIfLSanyUGpxJdj7566CLe6vkPpMf9fyqs3BTm1T2qnAb/exec";

async function calculateResult() {
  const btn = document.getElementById('submitBtn');
  const btnText = document.getElementById('btnText');

  // === VALIDATION FORM ===
  if (!validateForm()) {
    resetButton();
    return;
  }

  // Loading
  btn.disabled = true;
  btnText.innerHTML = `⏳ Đang xử lý...`;

  console.log('%c=== BẮT ĐẦU TÍNH KẾT QUẢ ===', 'color: #10b981; font-weight: bold');

  // Lấy câu trả lời
  const required = ['q1','q2','q3'];
  let A = 0, B = 0, C = 0, D = 0;
  let answers = {};

  for (const q of required) {
    const picked = document.querySelector(`input[name="${q}"]:checked`);
    if (!picked) {
      alert('Vui lòng trả lời đủ 3 câu hỏi để xem kết quả.');
      resetButton();
      return;
    }
    answers[q] = picked.value;
    if (picked.value === 'A') A++;
    if (picked.value === 'B') B++;
    if (picked.value === 'C') C++;
    if (picked.value === 'D') D++;
  }

  // Tính group (giữ nguyên logic cũ)
  const scores = { A, B, C, D };
  let group = Object.keys(scores).reduce((a, b) => scores[a] >= scores[b] ? a : b);
  const goal = document.getElementById('goal').value;

  const max = Math.max(...Object.values(scores));
  const ties = Object.keys(scores).filter(k => scores[k] === max);

  if (ties.length > 1 && goal) {
    if (goal === 'Kiếm thêm tiền') group = 'A';
    else if (goal === 'Muốn vào doanh nghiệp') group = 'C';
    else if (goal === 'Tìm nghề phù hợp') group = 'B';
    else if (goal === 'Muốn kinh doanh') group = 'D';
  }

  console.log('Group tính được:', group);

  // Map kết quả
  const map = {
    A: { title: '🔥 Bạn thuộc nhóm KIẾM TIỀN NHANH', text: 'Bạn phù hợp với môi trường sale, tư vấn, giao tiếp và tạo kết quả sớm. Nhóm này rất hợp để bắt đầu với gói 7 ngày kiếm tiền đầu tiên.', cta: '<a class="btn btn-primary" href="#goi">Xem gói phù hợp cho nhóm A</a>' },
    B: { title: '🔵 Bạn thuộc nhóm CHUYÊN MÔN', text: 'Bạn thiên về logic, học bài bản và cần một lộ trình rõ ràng. Bạn nên bắt đầu bằng tư vấn định hướng trước khi chọn hướng thực chiến.', cta: '<a class="btn btn-primary" href="#goi">Xem gói tư vấn phù hợp</a>' },
    C: { title: '🟢 Bạn thuộc nhóm THỰC CHIẾN', text: 'Bạn hợp với môi trường làm thật, thấy kết quả thật và học qua trải nghiệm. Đây là nhóm rất phù hợp để đi tiếp vào doanh nghiệp.', cta: '<a class="btn btn-primary" href="#goi">Xem lộ trình vào doanh nghiệp</a>' },
    D: { title: '🟡 Bạn thuộc nhóm TỰ DO / SÁNG TẠO', text: 'Bạn thiên về sự linh hoạt, sáng tạo và thích tự chủ hơn trong cách kiếm tiền. Bạn nên bắt đầu với lộ trình ngắn để test thị trường trước.', cta: '<a class="btn btn-primary" href="#goi">Xem gói khởi động phù hợp</a>' }
  };

  // Hiển thị kết quả
  document.getElementById('resultTitle').innerHTML = map[group].title;
  document.getElementById('resultText').innerHTML = map[group].text;
  document.getElementById('resultCTA').innerHTML = map[group].cta;
  document.getElementById('resultBox').style.display = 'block';
  document.getElementById('resultBox').scrollIntoView({ behavior: 'smooth' });

  console.log('%c✅ Kết quả đã hiển thị', 'color: #10b981');

  // === GỬI DỮ LIỆU LÊN GOOGLE SHEETS ===
  const payload = {
    name: document.getElementById('name').value.trim(),
    phone: document.getElementById('phone').value.trim(),
    email: document.getElementById('email').value.trim(),
    goal: goal,
    q1: answers.q1,
    q2: answers.q2,
    q3: answers.q3,
    group: group,
    resultTitle: map[group].title
  };

  console.log('Payload gửi đi:', payload);

  try {
    await fetch(GOOGLE_SCRIPT_URL, {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(payload),
      mode: 'no-cors'
    });
    console.log('%c✅ Request đã gửi thành công đến Google Script', 'color: #10b981');
    // showToast("✅ Đã lưu lead vào Google Sheets!", "success");
  } catch (err) {
    console.error('❌ Lỗi khi gửi fetch:', err);
    // showToast("⚠️ Không kết nối được với Google Sheet", "error");
  }

  resetButton();
}

// ====================== VALIDATION ======================
function validateForm() {
  const name = document.getElementById('name').value.trim();
  const phone = document.getElementById('phone').value.trim();
  const email = document.getElementById('email').value.trim();
  const goal = document.getElementById('goal').value;

  // Reset highlight cũ
  document.querySelectorAll('#formArea input, #formArea select').forEach(el => {
    el.style.borderColor = '';
  });

  if (!name) {
    showToast("Vui lòng nhập Họ và tên", "error");
    document.getElementById('name').style.borderColor = '#ef4444';
    document.getElementById('name').focus();
    return false;
  }

  if (!phone) {
    showToast("Vui lòng nhập Số điện thoại", "error");
    document.getElementById('phone').style.borderColor = '#ef4444';
    document.getElementById('phone').focus();
    return false;
  }
  if (!/^[0-9]{10,11}$/.test(phone)) {
    showToast("Số điện thoại phải là 10 hoặc 11 chữ số", "error");
    document.getElementById('phone').style.borderColor = '#ef4444';
    document.getElementById('phone').focus();
    return false;
  }

  if (!email) {
    showToast("Vui lòng nhập Email", "error");
    document.getElementById('email').style.borderColor = '#ef4444';
    document.getElementById('email').focus();
    return false;
  }
  if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
    showToast("Email không đúng định dạng", "error");
    document.getElementById('email').style.borderColor = '#ef4444';
    document.getElementById('email').focus();
    return false;
  }

  if (!goal) {
    showToast("Vui lòng chọn Mục tiêu của bạn", "error");
    document.getElementById('goal').style.borderColor = '#ef4444';
    document.getElementById('goal').focus();
    return false;
  }

  return true;
}

function resetButton() {
  const btn = document.getElementById('submitBtn');
  const btnText = document.getElementById('btnText');
  btn.disabled = false;
  btnText.innerHTML = 'Xem kết quả ngay';
}

function showToast(message, type) {
  const toast = document.getElementById('toast');
  toast.textContent = message;
  toast.style.backgroundColor = type === 'success' ? '#10b981' : '#ef4444';
  toast.classList.remove('hidden');
  setTimeout(() => toast.classList.add('hidden'), 4500);
}
</script>

@endsection

@section('sidebar')
    @include('sections.sidebar')
@endsection