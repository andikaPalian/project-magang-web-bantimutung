<nav id="main-navbar" class="fixed top-0 left-0 w-full z-50 px-6 py-6 transition-all duration-300 bg-transparent text-white">
  <div class="max-w-7xl mx-auto flex justify-between items-center">
    <a href="<?= BASEURL; ?>" id="nav-logo" class="flex items-center space-x-2 text-2xl font-serif font-bold tracking-wide transition-colors duration-300">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
      </svg>
      <span>Bantimurung</span>
    </a>

    <div class="hidden md:flex space-x-8 font-medium text-sm items-center">
      <a href="<?= BASEURL; ?>/home" class="nav-item <?= (($data['page'] ?? '') == 'home') ? 'nav-active bg-white/20 px-5 py-2 rounded-full backdrop-blur-sm' : 'px-5 py-2 hover:text-gray-300 transition' ?>">Home</a>

      <a href="<?= BASEURL; ?>/about" class="nav-item <?= (($data['page'] ?? '') == 'about') ? 'nav-active bg-white/20 px-5 py-2 rounded-full backdrop-blur-sm' : 'px-5 py-2 hover:text-gray-300 transition' ?>">About</a>

      <a href="<?= BASEURL; ?>/blog" class="nav-item <?= (($data['page'] ?? '') == 'blog') ? 'nav-active bg-white/20 px-5 py-2 rounded-full backdrop-blur-sm' : 'px-5 py-2 hover:text-gray-300 transition' ?>">Blog</a>

      <a href="<?= BASEURL; ?>/contact" class="nav-item <?= (($data['page'] ?? '') == 'contact') ? 'nav-active bg-white/20 px-5 py-2 rounded-full backdrop-blur-sm' : 'px-5 py-2 hover:text-gray-300 transition' ?>">Contact</a>

      <span class="text-gray-400 opacity-50">|</span>

      <a href="<?= BASEURL; ?>/admin" class="nav-item flex items-center space-x-2 px-3 py-2 hover:text-gray-300 transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
        </svg>
        <span>Admin</span>
      </a>
    </div>
  </div>
</nav>

<script>
  window.addEventListener('scroll', function() {
    const nav = document.getElementById('main-navbar');
    const logo = document.getElementById('nav-logo');
    const items = document.querySelectorAll('.nav-item');
    const activeItem = document.querySelector('.nav-active');

    if (window.scrollY > 50) {
      // SAAT DI-SCROLL: Navbar jadi putih, bayangan halus, mengecil
      nav.classList.remove('bg-transparent', 'text-white', 'py-6');
      nav.classList.add('bg-white/95', 'backdrop-blur-md', 'text-gray-800', 'shadow-sm', 'py-4', 'border-b', 'border-gray-100');
      logo.classList.add('text-primary');

      items.forEach(item => {
        if (!item.classList.contains('nav-active')) {
          item.classList.remove('hover:text-gray-300');
          item.classList.add('hover:text-primary');
        }
      });

      if (activeItem) {
        // Menu aktif berubah jadi hijau sesuai desain Figma kamu
        activeItem.classList.remove('bg-white/20', 'text-white');
        activeItem.classList.add('bg-secondary', 'text-primary');
      }
    } else {
      // SAAT DI ATAS: Kembali transparan
      nav.classList.add('bg-transparent', 'text-white', 'py-6');
      nav.classList.remove('bg-white/95', 'backdrop-blur-md', 'text-gray-800', 'shadow-sm', 'py-4', 'border-b', 'border-gray-100');
      logo.classList.remove('text-primary');

      items.forEach(item => {
        if (!item.classList.contains('nav-active')) {
          item.classList.add('hover:text-gray-300');
          item.classList.remove('hover:text-primary');
        }
      });

      if (activeItem) {
        activeItem.classList.add('bg-white/20', 'text-white');
        activeItem.classList.remove('bg-secondary', 'text-primary');
      }
    }
  });
</script>