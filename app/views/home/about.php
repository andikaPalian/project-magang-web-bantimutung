<?php
$tanggal_update = date('d F Y', strtotime($data['about']['updated_at']));
?>

<section class="relative h-[60vh] min-h-[500px] flex items-center justify-center text-center text-white pt-20">
  <div class="absolute inset-0 bg-cover bg-center bg-no-repeat grayscale-[20%]" style="background-image: url('https://i0.wp.com/www.bantimurungbulusaraung.id/wp-content/uploads/2023/10/IMG_5944-scaled.jpg?fit=2560%2C1707&ssl=1');">
    <div class="absolute inset-0 bg-black/70"></div>
  </div>
  <div class="relative z-10 px-4 max-w-3xl mx-auto" data-aos="fade-up" data-aos-duration="1000">
    <p class="text-xs md:text-sm tracking-[0.3em] uppercase mb-4 text-gray-300">Tentang</p>
    <h1 class="text-5xl md:text-7xl font-serif mb-6">Mengenal Bantimurung</h1>
    <p class="text-lg font-light text-gray-200">
      Keajaiban alam yang telah memikat dunia sejak abad ke-19
    </p>
  </div>
</section>

<section class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-6 space-y-32">

    <div class="flex flex-col md:flex-row items-center gap-12 md:gap-20">
      <div class="w-full md:w-1/2" data-aos="fade-right">
        <img src="<?= BASEURL; ?>/uploads/img/about/<?= $data['about']['sejarah_image']; ?>" alt="Sejarah Bantimurung" class="w-full h-[400px] object-cover rounded-3xl shadow-lg transform hover:scale-105 transition duration-500">
      </div>
      <div class="w-full md:w-1/2" data-aos="fade-left">
        <p class="text-emerald-600 text-xs font-bold tracking-[0.2em] uppercase mb-3">Sejarah</p>
        <h2 class="text-4xl md:text-5xl font-serif text-gray-900 mb-6"><?= htmlspecialchars($data['about']['sejarah_title']); ?></h2>

        <div class="text-gray-500 text-sm leading-relaxed space-y-4 prose prose-emerald max-w-none">
          <?= $data['about']['sejarah_content']; ?>
        </div>

        <div class="mt-8 flex items-center text-gray-400 text-xs">
          <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
          </svg>
          <span>Diperbarui: <?= $tanggal_update; ?></span>
        </div>
      </div>
    </div>

    <div class="flex flex-col md:flex-row-reverse items-center gap-12 md:gap-20">
      <div class="w-full md:w-1/2" data-aos="fade-left">
        <img src="<?= BASEURL; ?>/uploads/img/about/<?= $data['about']['keindahan_image']; ?>" alt="Keindahan Alam" class="w-full h-[400px] object-cover rounded-3xl shadow-lg transform hover:scale-105 transition duration-500">
      </div>
      <div class="w-full md:w-1/2" data-aos="fade-right">
        <p class="text-emerald-600 text-xs font-bold tracking-[0.2em] uppercase mb-3">Keindahan</p>
        <h2 class="text-4xl md:text-5xl font-serif text-gray-900 mb-6"><?= htmlspecialchars($data['about']['keindahan_title']); ?></h2>

        <div class="text-gray-500 text-sm leading-relaxed space-y-4 prose prose-emerald max-w-none">
          <?= $data['about']['keindahan_content']; ?>
        </div>

        <div class="mt-8 flex items-center text-gray-400 text-xs">
          <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
          </svg>
          <span>Diperbarui: <?= $tanggal_update; ?></span>
        </div>
      </div>
    </div>

    <div class="flex flex-col md:flex-row items-center gap-12 md:gap-20">
      <div class="w-full md:w-1/2" data-aos="fade-right">
        <img src="<?= BASEURL; ?>/uploads/img/about/<?= $data['about']['konservasi_image']; ?>" alt="Konservasi" class="w-full h-[400px] object-cover rounded-3xl shadow-lg transform hover:scale-105 transition duration-500">
      </div>
      <div class="w-full md:w-1/2" data-aos="fade-left">
        <p class="text-emerald-600 text-xs font-bold tracking-[0.2em] uppercase mb-3">Konservasi</p>
        <h2 class="text-4xl md:text-5xl font-serif text-gray-900 mb-6"><?= htmlspecialchars($data['about']['konservasi_title']); ?></h2>

        <div class="text-gray-500 text-sm leading-relaxed space-y-4 prose prose-emerald max-w-none">
          <?= $data['about']['konservasi_content']; ?>
        </div>

        <div class="mt-8 flex items-center text-gray-400 text-xs">
          <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
          </svg>
          <span>Diperbarui: <?= $tanggal_update; ?></span>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="py-24 bg-dark text-white text-center">
  <div class="max-w-6xl mx-auto px-6">
    <div data-aos="fade-up">
      <p class="text-primary text-xs font-bold tracking-[0.2em] uppercase mb-4">Data & Fakta</p>
      <h2 class="text-4xl md:text-5xl font-serif mb-16">Fakta Menarik</h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">

      <div class="border border-white/10 bg-white/5 rounded-3xl p-10 hover:bg-white/10 transition duration-300" data-aos="fade-up" data-aos-delay="0">
        <h3 class="text-5xl font-serif font-bold mb-4"><?= htmlspecialchars($data['about']['fakta_1_angka']); ?></h3>
        <p class="text-white/70 text-sm"><?= htmlspecialchars($data['about']['fakta_1_teks']); ?></p>
      </div>

      <div class="border border-white/10 bg-white/5 rounded-3xl p-10 hover:bg-white/10 transition duration-300" data-aos="fade-up" data-aos-delay="150">
        <h3 class="text-5xl font-serif font-bold mb-4"><?= htmlspecialchars($data['about']['fakta_2_angka']); ?></h3>
        <p class="text-white/70 text-sm"><?= htmlspecialchars($data['about']['fakta_2_teks']); ?></p>
      </div>

      <div class="border border-white/10 bg-white/5 rounded-3xl p-10 hover:bg-white/10 transition duration-300" data-aos="fade-up" data-aos-delay="300">
        <h3 class="text-5xl font-serif font-bold mb-4"><?= htmlspecialchars($data['about']['fakta_3_angka']); ?></h3>
        <p class="text-white/70 text-sm"><?= htmlspecialchars($data['about']['fakta_3_teks']); ?></p>
      </div>

      <div class="border border-white/10 bg-white/5 rounded-3xl p-10 hover:bg-white/10 transition duration-300" data-aos="fade-up" data-aos-delay="450">
        <h3 class="text-5xl font-serif font-bold mb-4"><?= htmlspecialchars($data['about']['fakta_4_angka']); ?></h3>
        <p class="text-white/70 text-sm"><?= htmlspecialchars($data['about']['fakta_4_teks']); ?></p>
      </div>

    </div>
  </div>
</section>