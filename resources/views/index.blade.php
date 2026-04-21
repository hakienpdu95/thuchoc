@extends('layouts.app')

@section('content')
<section class="hero">
    <div class="container hero-wrap">
      <div>
        <span class="eyebrow">THUCHOCVN – Phiên bản xem ngay</span>
        <h1>7 ngày – kiếm được tiền đầu tiên</h1>
        <p>Không cần kinh nghiệm. Không cần vốn. THUCHOCVN giúp bạn học nhanh, làm thật và có cơ hội tạo thu nhập thật ngay từ bước đầu tiên.</p>
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
        <p>Bản landing page này được làm theo hướng chốt nhanh: nhìn là hiểu, test là có lead, tư vấn là chốt được.</p>
      </div>
      <div class="grid-3">
        <div class="card">
          <div class="icon">①</div>
          <h3>Sinh viên chưa có kinh nghiệm</h3>
          <p class="muted">Cần môi trường bắt đầu nhanh, rõ ràng và ít rủi ro hơn so với tự mày mò.</p>
        </div>
        <div class="card">
          <div class="icon">②</div>
          <h3>Người muốn kiếm thêm tiền</h3>
          <p class="muted">Muốn thử sức trong môi trường thực chiến, có định hướng và được kèm sát hơn.</p>
        </div>
        <div class="card">
          <div class="icon">③</div>
          <h3>Người muốn vào doanh nghiệp</h3>
          <p class="muted">Muốn đi theo lộ trình làm thật, có kết nối cơ hội thay vì chỉ học lý thuyết.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="solution">
    <div class="container solution-wrap">
      <div class="illustration">
        <h3 style="margin-top:0; font-size:30px;">THUCHOCVN không dạy lý thuyết suông</h3>
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
        <h2>Mô hình này phù hợp để đi hội chợ và chạy lead</h2>
        <p class="muted">Thay vì chỉ xin CV, THUCHOCVN dùng landing page để lấy lead, phân loại khách và chốt theo nhu cầu thật.</p>
        <div class="card" style="margin-top:18px;">
          <h3 style="margin-top:0;">Lợi ích chính</h3>
          <ul>
            <li>Tăng tỷ lệ quét QR vì có yếu tố tò mò từ bài test.</li>
            <li>Không chỉ lấy số điện thoại mà còn hiểu lead thuộc nhóm nào.</li>
            <li>Sale follow-up nhanh hơn vì có sẵn logic HOT/WARM/COLD.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="goi">
    <div class="container">
      <div class="section-head">
        <h2>3 gói sản phẩm THUCHOCVN</h2>
        <p>Thiết kế để chốt theo từng mức độ sẵn sàng của người dùng.</p>
      </div>
      <div class="pricing">
        <div class="price-card">
          <h3>7 ngày kiếm tiền đầu tiên</h3>
          <div class="price">199k</div>
          <p class="muted">Gói trải nghiệm cho người mới bắt đầu, cần vào nhanh và hiểu nghề rõ hơn.</p>
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
          <p class="muted">Gói sâu hơn để chốt nhóm thật sự nghiêm túc và muốn vào môi trường thực chiến mạnh hơn.</p>
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
          <p class="muted">Dành cho người phù hợp nhóm thực chiến và muốn có cơ hội đi tiếp vào doanh nghiệp.</p>
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
        <p>Làm test ngay trên landing page để xem trải nghiệm thực tế. Bản này là demo có logic chấm điểm trực tiếp trên trang.</p>
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
          <h3 style="margin-top:0;">Nhập thông tin để nhận kết quả</h3>
          <p class="muted">Ở bản production, phần này sẽ lưu vào CRM và tự phân loại lead.</p>
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
        <p>Bản này được làm để bạn xem layout và trải nghiệm ngay trong canvas.</p>
      </div>
      <div class="grid-3">
        <div class="card"><h3>Đây là bản demo hay bản chạy thật?</h3><p class="muted">Đây là bản demo tương tác để xem ngay. Bản production có thể nối backend/CRM thật.</p></div>
        <div class="card"><h3>Có thể đổi logo, hotline, ảnh thật không?</h3><p class="muted">Có. Dev chỉ cần thay asset và content theo brand THUCHOCVN.</p></div>
        <div class="card"><h3>Có thể dùng đi hội chợ luôn không?</h3><p class="muted">Có thể dùng bản này để demo. Nếu đi hội chợ thật thì nên nối form lưu lead thật.</p></div>
      </div>
    </div>
  </section>
<script>
// Thay YOUR_WEB_APP_URL bằng URL bạn vừa deploy ở bước 1
const GOOGLE_SCRIPT_URL = "https://script.google.com/macros/s/AKfycbxtl4aLPwjr0eIRXHcG-btUIfLSanyUGpxJdj7566CLe6vkPpMf9fyqs3BTm1T2qnAb/exec";

async function calculateResult() {
  const btn = document.getElementById('submitBtn');
  const btnText = document.getElementById('btnText');
  const originalBtnText = btnText.innerHTML;

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

  // Tính group (giữ nguyên logic cũ của bạn)
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

      const map = {
        A: {
          title: '🔥 Bạn thuộc nhóm KIẾM TIỀN NHANH',
          text: 'Bạn phù hợp với môi trường sale, tư vấn, giao tiếp và tạo kết quả sớm. Nhóm này rất hợp để bắt đầu với gói 7 ngày kiếm tiền đầu tiên.',
          cta: '<a class="btn btn-primary" href="#goi">Xem gói phù hợp cho nhóm A</a>'
        },
        B: {
          title: '🔵 Bạn thuộc nhóm CHUYÊN MÔN',
          text: 'Bạn thiên về logic, học bài bản và cần một lộ trình rõ ràng. Bạn nên bắt đầu bằng tư vấn định hướng trước khi chọn hướng thực chiến.',
          cta: '<a class="btn btn-primary" href="#goi">Xem gói tư vấn phù hợp</a>'
        },
        C: {
          title: '🟢 Bạn thuộc nhóm THỰC CHIẾN',
          text: 'Bạn hợp với môi trường làm thật, thấy kết quả thật và học qua trải nghiệm. Đây là nhóm rất phù hợp để đi tiếp vào doanh nghiệp.',
          cta: '<a class="btn btn-primary" href="#goi">Xem lộ trình vào doanh nghiệp</a>'
        },
        D: {
          title: '🟡 Bạn thuộc nhóm TỰ DO / SÁNG TẠO',
          text: 'Bạn thiên về sự linh hoạt, sáng tạo và thích tự chủ hơn trong cách kiếm tiền. Bạn nên bắt đầu với lộ trình ngắn để test thị trường trước.',
          cta: '<a class="btn btn-primary" href="#goi">Xem gói khởi động phù hợp</a>'
        }
      };

     // HIỂN THỊ KẾT QUẢ (fix bằng style.display)
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
    const response = await fetch(GOOGLE_SCRIPT_URL, {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(payload),
      mode: 'no-cors'
    });

    console.log('%c✅ Request đã gửi thành công đến Google Script', 'color: #10b981');
    showToast("✅ Đã lưu lead vào Google Sheets!", "success");
  } catch (err) {
    console.error('❌ Lỗi khi gửi fetch:', err);
    showToast("⚠️ Không kết nối được với Google Sheet", "error");
  }

  resetButton();
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