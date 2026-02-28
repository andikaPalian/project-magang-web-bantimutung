<?php
$imgSrc = !empty($data['blog']['gambar_thumbnail']) ? BASEURL . '/uploads/img/blog/' . htmlspecialchars($data['blog']['gambar_thumbnail']) : BASEURL . '/img/default_blog.jpg';
$tanggal_rilis = date('d F Y', strtotime($data['blog']['tanggal_rilis']));
?>

<section class="pt-32 pb-12 bg-white">
  <div class="max-w-4xl mx-auto px-6 text-center" data-aos="fade-up">

    <a href="<?= BASEURL; ?>/blog" class="inline-flex items-center text-sm font-bold text-emerald-600 hover:text-emerald-700 transition mb-8 group">
      <svg class="w-4 h-4 mr-2 transform group-hover:-translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
      </svg>
      Kembali ke Blog
    </a>

    <div class="mb-6">
      <span class="text-emerald-700 bg-emerald-50 border border-emerald-100 px-4 py-1.5 rounded-full text-xs font-bold tracking-wide uppercase">
        <?= htmlspecialchars($data['blog']['nama_kategori'] ?? 'Uncategorized'); ?>
      </span>
    </div>

    <h1 class="text-4xl md:text-5xl lg:text-6xl font-serif text-gray-900 mb-8 leading-tight">
      <?= htmlspecialchars($data['blog']['judul_artikel']); ?>
    </h1>

    <div class="flex flex-wrap items-center justify-center text-gray-500 text-sm space-x-6">
      <span class="flex items-center mb-2">
        <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 font-bold mr-2">
          <?= strtoupper(substr($data['blog']['penulis'], 0, 1)); ?>
        </div>
        <?= htmlspecialchars($data['blog']['penulis']); ?>
      </span>
      <span class="flex items-center mb-2">
        <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
        </svg>
        <?= $tanggal_rilis; ?>
      </span>
      <span class="flex items-center mb-2">
        <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
        </svg>
        <?= number_format($data['blog']['jumlah_pembaca'] ?? 0, 0, ',', '.'); ?>x dibaca
      </span>
    </div>

  </div>
</section>

<section class="max-w-5xl mx-auto px-6 mb-16" data-aos="fade-up" data-aos-delay="100">
  <div class="rounded-3xl overflow-hidden shadow-xl h-[400px] md:h-[500px] lg:h-[600px] relative group">
    <img src="<?= $imgSrc; ?>" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-1000" alt="<?= htmlspecialchars($data['blog']['judul_artikel']); ?>">
    <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
  </div>
</section>

<section class="pb-24 bg-white">
  <div class="max-w-3xl mx-auto px-6">

    <article class="prose prose-lg prose-emerald max-w-none text-gray-600" data-aos="fade-up">
      <?= $data['blog']['konten_artikel']; ?>
    </article>

    <div class="mt-16 pt-8 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between" data-aos="fade-up">
      <p class="text-sm text-gray-500 font-medium mb-4 sm:mb-0">
        Terima kasih telah membaca artikel ini.
      </p>
      <div class="flex space-x-3">
        <button onclick="navigator.clipboard.writeText(window.location.href); alert('Link artikel disalin!');" class="flex items-center px-4 py-2 bg-gray-50 text-gray-600 rounded-full text-sm font-medium hover:bg-emerald-50 hover:text-emerald-600 transition border border-gray-100">
          <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
          </svg>
          Salin Tautan
        </button>
      </div>
    </div>

  </div>
</section>