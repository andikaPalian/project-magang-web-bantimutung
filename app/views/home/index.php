<section id="hero" class="relative h-screen flex items-center justify-center text-center text-white">
  <div class="absolute inset-0 bg-cover bg-center bg-no-repeat grayscale-[30%]" style="background-image: url('https://i0.wp.com/www.bantimurungbulusaraung.id/wp-content/uploads/2023/10/051A5961-scaled.jpg?fit=2560%2C1707&ssl=1');">
    <div class="absolute inset-0 bg-black/50"></div>
  </div>

  <div class="relative z-10 px-4 max-w-4xl mx-auto mt-16" data-aos="fade-up" data-aos-duration="1000">
    <p class="text-xs md:text-sm tracking-[0.3em] uppercase mb-4 text-gray-300">Sulawesi Selatan, Indonesia</p>
    <h1 class="text-6xl md:text-8xl font-serif mb-6">Bantimurung</h1>
    <p class="text-lg md:text-xl mb-10 font-light max-w-2xl mx-auto text-gray-200">
      Kingdom of Butterflies — Surga tersembunyi dengan air terjun megah dan 250+ spesies kupu-kupu
    </p>
    <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-4">
      <a href="#explore" class="bg-white text-gray-900 px-8 py-3.5 rounded-full font-medium hover:bg-gray-200 transition transform hover:-translate-y-1">Jelajahi Sekarang</a>
      <a href="<?= BASEURL; ?>/blog" class="bg-transparent border border-white/70 text-white px-8 py-3.5 rounded-full font-medium hover:bg-white/10 transition transform hover:-translate-y-1">Baca Artikel</a>
    </div>
  </div>

  <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 z-20 animate-bounce">
    <a href="#explore" class="text-white/60 hover:text-white transition duration-300 block p-2">
      <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
      </svg>
    </a>
  </div>
</section>

<section class="py-16 bg-white border-b border-gray-100">
  <div class="max-w-5xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
    <div data-aos="fade-up" data-aos-delay="0">
      <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-emerald-50 text-emerald-600 mb-4">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0z"></path>
        </svg>
      </div>
      <h3 class="text-3xl font-bold text-gray-900"><?= number_format($data['total_visitors'] ?? 15852, 0, ',', '.'); ?></h3>
      <p class="text-gray-500 text-sm mt-1">Pengunjung</p>
    </div>
    <div data-aos="fade-up" data-aos-delay="150">
      <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-emerald-50 text-emerald-600 mb-4">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
        </svg>
      </div>
      <h3 class="text-3xl font-bold text-gray-900">250+</h3>
      <p class="text-gray-500 text-sm mt-1">Spesies Kupu-Kupu</p>
    </div>
    <div data-aos="fade-up" data-aos-delay="300">
      <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-emerald-50 text-emerald-600 mb-4">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
        </svg>
      </div>
      <h3 class="text-3xl font-bold text-gray-900">43.750</h3>
      <p class="text-gray-500 text-sm mt-1">Hektar Kawasan</p>
    </div>
  </div>
</section>

<section id="explore" class="py-24 bg-white scroll-mt-10">
  <div class="max-w-7xl mx-auto px-6 text-center">
    <div data-aos="fade-up">
      <p class="text-emerald-600 text-xs font-bold tracking-[0.2em] uppercase mb-4">Tentang Kami</p>
      <h2 class="text-4xl md:text-5xl font-serif text-gray-900 mb-16">Keajaiban Alam Bantimurung</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-left">

      <div class="group cursor-pointer" onclick="openModal(this)" data-aos="fade-up" data-aos-delay="0">
        <div class="overflow-hidden rounded-3xl mb-6">
          <img src="<?= BASEURL; ?>/uploads/img/home/<?= !empty($data['home_content']['image_1']) ? htmlspecialchars($data['home_content']['image_1']) : 'default.jpg'; ?>" alt="Air Terjun" class="modal-img w-full h-64 object-cover transform group-hover:scale-110 transition duration-700">
        </div>
        <div class="flex items-center space-x-2 text-emerald-600 font-bold mb-3">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
          </svg>
          <h3 class="modal-title uppercase tracking-wider text-sm">Keajaiban Alam</h3>
        </div>
        <p class="text-gray-500 text-sm leading-relaxed line-clamp-3"><?= htmlspecialchars($data['home_content']['paragraph_1'] ?? 'Teks belum diatur oleh admin.'); ?></p>
        <span class="text-emerald-500 text-xs font-bold mt-3 inline-block group-hover:underline">Baca selengkapnya &rarr;</span>
        <div class="modal-full-text hidden"><?= nl2br(htmlspecialchars($data['home_content']['paragraph_1'] ?? '')); ?></div>
      </div>

      <div class="group cursor-pointer" onclick="openModal(this)" data-aos="fade-up" data-aos-delay="150">
        <div class="overflow-hidden rounded-3xl mb-6">
          <img src="<?= BASEURL; ?>/uploads/img/home/<?= !empty($data['home_content']['image_2']) ? htmlspecialchars($data['home_content']['image_2']) : 'default.jpg'; ?>" alt="Kupu-kupu" class="modal-img w-full h-64 object-cover transform group-hover:scale-110 transition duration-700">
        </div>
        <div class="flex items-center space-x-2 text-emerald-600 font-bold mb-3">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477-4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
          </svg>
          <h3 class="modal-title uppercase tracking-wider text-sm">Kerajaan Kupu-Kupu</h3>
        </div>
        <p class="text-gray-500 text-sm leading-relaxed line-clamp-3"><?= htmlspecialchars($data['home_content']['paragraph_2'] ?? 'Teks belum diatur oleh admin.'); ?></p>
        <span class="text-emerald-500 text-xs font-bold mt-3 inline-block group-hover:underline">Baca selengkapnya &rarr;</span>
        <div class="modal-full-text hidden"><?= nl2br(htmlspecialchars($data['home_content']['paragraph_2'] ?? '')); ?></div>
      </div>

      <div class="group cursor-pointer" onclick="openModal(this)" data-aos="fade-up" data-aos-delay="300">
        <div class="overflow-hidden rounded-3xl mb-6">
          <img src="<?= BASEURL; ?>/uploads/img/home/<?= !empty($data['home_content']['image_3']) ? htmlspecialchars($data['home_content']['image_3']) : 'default.jpg'; ?>" alt="Hutan" class="modal-img w-full h-64 object-cover transform group-hover:scale-110 transition duration-700">
        </div>
        <div class="flex items-center space-x-2 text-emerald-600 font-bold mb-3">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path>
          </svg>
          <h3 class="modal-title uppercase tracking-wider text-sm">Aktivitas Wisata</h3>
        </div>
        <p class="text-gray-500 text-sm leading-relaxed line-clamp-3"><?= htmlspecialchars($data['home_content']['paragraph_3'] ?? 'Teks belum diatur oleh admin.'); ?></p>
        <span class="text-emerald-500 text-xs font-bold mt-3 inline-block group-hover:underline">Baca selengkapnya &rarr;</span>
        <div class="modal-full-text hidden"><?= nl2br(htmlspecialchars($data['home_content']['paragraph_3'] ?? '')); ?></div>
      </div>

    </div>
  </div>
</section>

<section class="py-24 bg-[#f8fafc]">
  <div class="max-w-7xl mx-auto px-6">
    <div class="flex justify-between items-end mb-12" data-aos="fade-up">
      <div>
        <p class="text-emerald-600 text-xs font-bold tracking-[0.2em] uppercase mb-4">Blog</p>
        <h2 class="text-4xl md:text-5xl font-serif text-gray-900">Artikel Terbaru</h2>
      </div>
      <a href="<?= BASEURL; ?>/blog" class="text-emerald-600 font-medium hover:underline flex items-center mb-2">Lihat Semua <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
        </svg></a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <?php if (empty($data['latest_blogs'])) : ?>
        <p class="text-gray-500 col-span-3 text-center py-10">Belum ada artikel yang dipublikasikan.</p>
      <?php else : ?>
        <?php foreach ($data['latest_blogs'] as $blog) : ?>
          <a href="<?= BASEURL; ?>/blog/read/<?= $blog['slug']; ?>" class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-md transition transform hover:-translate-y-2 block" data-aos="fade-up">
            <img src="<?= BASEURL; ?>/img/blog/<?= $blog['gambar_thumbnail'] ? htmlspecialchars($blog['gambar_thumbnail']) : 'default.jpg'; ?>" class="w-full h-48 object-cover" alt="<?= htmlspecialchars($blog['judul_artikel']); ?>">
            <div class="p-6">
              <span class="inline-block bg-emerald-50 text-emerald-600 text-xs font-bold px-3 py-1 rounded-full mb-4">
                <?= htmlspecialchars($blog['nama_kategori'] ?? 'Berita'); ?>
              </span>
              <h3 class="text-xl font-bold text-gray-900 mb-2 line-clamp-2 hover:text-emerald-600 transition">
                <?= htmlspecialchars($blog['judul_artikel']); ?>
              </h3>
              <p class="text-gray-400 text-xs">
                <?= htmlspecialchars($blog['penulis']); ?> · <?= date('d M Y', strtotime($blog['tanggal_rilis'])); ?>
              </p>
            </div>
          </a>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="relative py-24 flex items-center justify-center text-center text-white">
  <div class="absolute inset-0 bg-cover bg-center grayscale-[20%]" style="background-image: url('https://images.unsplash.com/photo-1542273917363-3b1817f69a2d?auto=format&fit=crop&w=1920&q=80');">
    <div class="absolute inset-0 bg-black/60"></div>
  </div>
  <div class="relative z-10 px-4" data-aos="zoom-in" data-aos-duration="800">
    <p class="text-sm tracking-[0.2em] uppercase mb-4 text-gray-300">Rencanakan Perjalanan Anda</p>
    <h2 class="text-4xl md:text-6xl font-serif mb-6">Siap Menjelajahi Bantimurung?</h2>
    <p class="mb-10 font-light text-gray-200">Rasakan keajaiban alam yang tak terlupakan di Sulawesi Selatan.</p>
    <a href="<?= BASEURL; ?>/contact" class="bg-emerald-500 text-white px-10 py-4 rounded-full font-bold uppercase tracking-wider hover:bg-emerald-600 transition transform hover:-translate-y-1 inline-block shadow-lg">Hubungi Kami</a>
  </div>
</section>

<div id="infoModal" class="fixed inset-0 z-[100] hidden items-center justify-center p-4 sm:p-6 opacity-0 transition-opacity duration-300">
  <div class="absolute inset-0 bg-black/60 backdrop-blur-sm transition-opacity" onclick="closeModal()"></div>

  <div class="relative w-full max-w-2xl bg-white rounded-3xl shadow-2xl overflow-hidden transform scale-95 transition-transform duration-300 flex flex-col max-h-[90vh]">
    <button onclick="closeModal()" class="absolute top-4 right-4 z-10 bg-black/20 hover:bg-black/40 text-white w-8 h-8 rounded-full flex items-center justify-center transition focus:outline-none">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
      </svg>
    </button>

    <div class="h-64 sm:h-80 w-full shrink-0">
      <img id="modalImage" src="" alt="Modal Image" class="w-full h-full object-cover">
    </div>

    <div class="p-8 overflow-y-auto">
      <p class="text-emerald-600 text-xs font-bold tracking-[0.2em] uppercase mb-2">Informasi Bantimurung</p>
      <h2 id="modalTitle" class="text-3xl font-serif text-gray-900 mb-6">Judul Modal</h2>
      <div id="modalText" class="text-gray-600 text-base leading-relaxed space-y-4">
      </div>

      <div class="mt-8 text-center sm:text-left">
        <button onclick="closeModal()" class="bg-gray-100 text-gray-800 px-6 py-2.5 rounded-full font-medium hover:bg-gray-200 transition">Tutup Papan Informasi</button>
      </div>
    </div>
  </div>
</div>

<script src="<?= BASEURL; ?>/js/home.js"></script>