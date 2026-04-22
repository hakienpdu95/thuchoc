<header class="bg-white border-b shadow-sm top-0 z-50">
  <div class="container nav mx-auto px-4">
    <div class="flex items-center justify-between py-2 w-full">
      
      <!-- Brand -->
      <div class="brand flex items-center gap-3">
        <a class="logo" href="{{ home_url('/') }}"><img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-[275px]"></a>
      </div>

      <!-- Navigation links -->
      <nav class="nav-links hidden lg:flex items-center gap-9 text-gray-700 font-medium">
        <a href="#goi" class="hover:text-indigo-600 transition-colors">Gói chương trình</a>
        <a href="#test" class="hover:text-indigo-600 transition-colors">Bài test</a>
        <a href="#faq" class="hover:text-indigo-600 transition-colors">Câu hỏi</a>
      </nav>

      <!-- CTA Button -->
      <a href="#test" 
         class="btn btn-primary px-8 py-3.5 text-lg font-semibold bg-indigo-600 hover:bg-indigo-700 text-white rounded-3xl transition-all">
        Làm test ngay
      </a>
    </div>
  </div>
</header>