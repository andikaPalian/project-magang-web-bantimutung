<section class="relative h-[50vh] min-h-[400px] flex items-center justify-center text-center text-white pt-20">
  <div class="absolute inset-0 bg-cover bg-center bg-no-repeat grayscale-[20%]" style="background-image: url('https://i0.wp.com/www.bantimurungbulusaraung.id/wp-content/uploads/2023/10/DJI_0169-scaled.jpg?fit=2560%2C1635&ssl=1');">
    <div class="absolute inset-0 bg-black/60"></div>
  </div>
  <div class="relative z-10 px-4 max-w-3xl mx-auto" data-aos="zoom-in" data-aos-duration="1000">
    <p class="text-xs md:text-sm tracking-[0.3em] uppercase mb-4 text-gray-300">Kontak</p>
    <h1 class="text-5xl md:text-7xl font-serif mb-6">Hubungi Kami</h1>
    <p class="text-lg font-light text-gray-200">
      Punya pertanyaan? Kami siap membantu merencanakan kunjungan Anda
    </p>
  </div>
</section>

<section class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-16">

    <div data-aos="fade-right" data-aos-duration="800">
      <p class="text-emerald-600 text-xs font-bold tracking-[0.2em] uppercase mb-3">Info</p>
      <h2 class="text-4xl font-serif text-gray-900 mb-10">Informasi Kontak</h2>

      <div class="space-y-8">

        <div class="flex items-start space-x-4">
          <div class="bg-emerald-50 text-emerald-600 p-3 rounded-full flex-shrink-0">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
          </div>
          <div>
            <p class="text-xs text-gray-400 mb-1">Alamat</p>
            <p class="text-gray-700 text-sm leading-relaxed">
              <?= !empty($data['contact_info']['alamat']) ? nl2br(htmlspecialchars($data['contact_info']['alamat'])) : 'Alamat belum diatur oleh admin.'; ?>
            </p>
          </div>
        </div>

        <div class="flex items-start space-x-4">
          <div class="bg-emerald-50 text-emerald-600 p-3 rounded-full flex-shrink-0">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
          </div>
          <div>
            <p class="text-xs text-gray-400 mb-1">Telepon</p>
            <p class="text-gray-700 text-sm">
              <?= !empty($data['contact_info']['no_telepon']) ? htmlspecialchars($data['contact_info']['no_telepon']) : '-'; ?>
            </p>
          </div>
        </div>

        <div class="flex items-start space-x-4 border-b border-gray-100 pb-8">
          <div class="bg-emerald-50 text-emerald-600 p-3 rounded-full flex-shrink-0">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
          </div>
          <div>
            <p class="text-xs text-gray-400 mb-1">Email</p>
            <p class="text-gray-700 text-sm">
              <?= !empty($data['contact_info']['email']) ? htmlspecialchars($data['contact_info']['email']) : '-'; ?>
            </p>
          </div>
        </div>
      </div>

      <div class="mt-8">
        <p class="text-xs text-gray-400 mb-4">Media Sosial</p>
        <div class="flex space-x-4">
          <a href="#" class="bg-gray-50 p-3 rounded-full text-gray-600 hover:bg-emerald-600 hover:text-white transition shadow-sm"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.7-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
            </svg></a>
          <a href="#" class="bg-gray-50 p-3 rounded-full text-gray-600 hover:bg-emerald-600 hover:text-white transition shadow-sm"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
            </svg></a>
        </div>
      </div>
    </div>

    <div data-aos="fade-left" data-aos-duration="800">

      <?php if (isset($_SESSION['pesan_sukses'])) : ?>
        <div class="mb-6 bg-emerald-50 border border-emerald-200 text-emerald-700 px-5 py-4 rounded-2xl flex items-center shadow-sm">
          <svg class="w-6 h-6 mr-3 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
          <span class="font-medium"><?= $_SESSION['pesan_sukses']; ?></span>
        </div>
        <?php unset($_SESSION['pesan_sukses']); ?>
      <?php endif; ?>

      <?php if (isset($_SESSION['pesan_error'])) : ?>
        <div class="mb-6 bg-red-50 border border-red-200 text-red-700 px-5 py-4 rounded-2xl flex items-center shadow-sm">
          <svg class="w-6 h-6 mr-3 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
          <span class="font-medium"><?= $_SESSION['pesan_error']; ?></span>
        </div>
        <?php unset($_SESSION['pesan_error']); ?>
      <?php endif; ?>

      <div class="bg-white border border-gray-100 rounded-[2rem] p-10 shadow-xl shadow-gray-100/50 relative overflow-hidden">

        <p class="text-emerald-600 text-xs font-bold tracking-[0.2em] uppercase mb-3">Pesan</p>
        <h2 class="text-4xl font-serif text-gray-900 mb-8">Kirim Pesan</h2>

        <form action="<?= BASEURL; ?>/contact/sendMessage" method="POST" class="space-y-6 relative z-10">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
              <label class="block text-xs text-gray-500 mb-2">Nama Lengkap *</label>
              <input type="text" name="nama" required class="w-full bg-gray-50/80 border border-gray-100 rounded-xl px-5 py-3.5 text-sm focus:outline-none focus:bg-white focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition" placeholder="Nama Anda">
            </div>
            <div>
              <label class="block text-xs text-gray-500 mb-2">Email *</label>
              <input type="email" name="email" required class="w-full bg-gray-50/80 border border-gray-100 rounded-xl px-5 py-3.5 text-sm focus:outline-none focus:bg-white focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition" placeholder="email@contoh.com">
            </div>
          </div>

          <div>
            <label class="block text-xs text-gray-500 mb-2">Subjek *</label>
            <input type="text" name="subjek" required class="w-full bg-gray-50/80 border border-gray-100 rounded-xl px-5 py-3.5 text-sm focus:outline-none focus:bg-white focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition" placeholder="Subjek pesan">
          </div>

          <div>
            <label class="block text-xs text-gray-500 mb-2">Pesan *</label>
            <textarea name="pesan" required rows="5" class="w-full bg-gray-50/80 border border-gray-100 rounded-xl px-5 py-3.5 text-sm focus:outline-none focus:bg-white focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition resize-none" placeholder="Tulis pesan Anda..."></textarea>
          </div>

          <button type="submit" class="w-full bg-emerald-500 text-white font-bold rounded-xl px-5 py-4 flex items-center justify-center space-x-2 hover:bg-emerald-600 transition shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
            </svg>
            <span>Kirim Pesan Sekarang</span>
          </button>
        </form>
      </div>
    </div>

  </div>
</section>

<section class="pb-24 bg-white">
  <div class="max-w-7xl mx-auto px-6" data-aos="fade-up" data-aos-duration="1000">
    <div class="w-full h-[450px] bg-gray-100 rounded-3xl overflow-hidden shadow-sm border border-gray-100 relative group">

      <?php if (!empty($data['contact_info']['link_gmaps'])) : ?>
        <iframe
          src="<?= htmlspecialchars($data['contact_info']['link_gmaps']); ?>"
          width="100%"
          height="100%"
          style="border:0;"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="w-full h-full grayscale-[20%] group-hover:grayscale-0 transition duration-700">
        </iframe>
      <?php else: ?>
        <div class="w-full h-full flex flex-col items-center justify-center text-gray-400 bg-gray-50">
          <svg class="w-16 h-16 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
          </svg>
          <p>Peta Google Maps Belum Diatur Admin</p>
        </div>
      <?php endif; ?>

      <div class="absolute bottom-6 left-6 right-6 md:right-auto bg-white/95 backdrop-blur-sm p-4 rounded-2xl shadow-lg border border-gray-100 flex items-center space-x-3 pointer-events-none">
        <div class="bg-emerald-50 text-emerald-600 p-2 rounded-full">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
        </div>
        <div>
          <p class="text-sm font-bold text-gray-900">Bantimurung</p>
          <p class="text-xs text-gray-500">Kabupaten Maros</p>
        </div>
      </div>

    </div>
  </div>
</section>