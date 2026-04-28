<style>
    .footer {
  background: linear-gradient(135deg, #1c2541, #2c2f59);
  color: #fff;
  padding: 60px 0 20px;
  font-family: 'Inter', sans-serif;
}

.footer-container {
  max-width: 1100px;
  margin: auto;
  display: flex;
  gap: 50px;
  padding: 0 20px;
}

/* LEFT */
.footer-left {
  flex: 1.5;
}

.footer-slogan {
  color: #ff7a00;
  font-size: 14px;
  margin: 10px 0;
}

.footer-desc {
  font-size: 14px;
  opacity: 0.8;
  line-height: 1.6;
  margin-bottom: 20px;
}

.footer-contact div {
  margin-bottom: 10px;
  font-size: 14px;
  display: flex;
  gap: 8px;
}

/* COL */
.footer-col {
  flex: 1;
}

.footer-col h4 {
  margin-bottom: 15px;
  font-size: 16px;
  position: relative;
}

.footer-col h4::after {
  content: "";
  width: 30px;
  height: 2px;
  background: #ff4d79;
  position: absolute;
  bottom: -6px;
  left: 0;
}

.footer ul {
  list-style: none;
}

.footer ul li {
  margin-bottom: 12px;
  font-size: 14px;
  opacity: 0.85;
  cursor: pointer;
  transition: 0.3s;
}

.footer ul li:hover {
  color: #ff7a00;
  transform: translateX(3px);
}

/* SOCIAL */
.footer-social li {
  display: flex;
  align-items: center;
  gap: 10px;
}

.icon {
  width: 34px;
  height: 34px;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: bold;
  color: #fff;
}

.fb { background: #3b5998; }
.tiktok { background: #000; }
.yt { background: #ff0000; }
.zalo { background: #0068ff; }

/* BOTTOM */
.footer-bottom {
  text-align: center;
  margin-top: 40px;
  border-top: 1px solid rgba(255,255,255,0.1);
  padding-top: 15px;
  font-size: 13px;
  opacity: 0.6;
}

/* RESPONSIVE */
@media(max-width: 768px){
  .footer-container {
    flex-direction: column;
  }
}
</style>
<footer class="footer">
  <div class="footer-container">

    <!-- LEFT -->
    <div class="footer-left">
      <div class="footer-logo">
        <a class="logo" href="{{ home_url('/') }}"><img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-[275px]"></a>
      </div>

      <p class="footer-slogan">Học thật – Làm thật – Giá trị thật</p>

      <p class="footer-desc">
        Nền tảng giúp bạn hiểu mình, chọn đúng hướng
        và bắt đầu hành trình tạo thu nhập bền vững.
      </p>

      <div class="footer-contact">
        <div><span>📞</span> 0397 791 737</div>
        <div><span>🌐</span> thuchocvn.vn</div>
        <div><span>✉️</span> support@thuchocvn.vn</div>
      </div>
    </div>

    <!-- COMPANY -->
    <div class="footer-col">
      <h4>Công ty</h4>
      <ul>
        <li>Giới thiệu</li>
        <li>Chương trình</li>
        <li>Bài test</li>
        <li>Blog kiến thức</li>
        <li>Liên hệ</li>
      </ul>
    </div>

    <!-- SOCIAL -->
    <div class="footer-col">
      <h4>Kết nối với chúng tôi</h4>
      <ul class="footer-social">
        <li><div class="icon fb">f</div> Facebook</li>
        <li><div class="icon tiktok">♪</div> TikTok</li>
        <li><div class="icon yt">▶</div> YouTube</li>
        <li><div class="icon zalo">Z</div> Zalo Official</li>
      </ul>
    </div>

    <!-- POLICY -->
    <div class="footer-col">
      <h4>Chính sách</h4>
      <ul>
        <li>Chính sách bảo mật</li>
        <li>Điều khoản sử dụng</li>
        <li>Chính sách hoàn tiền</li>
      </ul>
    </div>

  </div>

  <div class="footer-bottom">
    © 2026 THUCHOCVN. All rights reserved.
  </div>
</footer>