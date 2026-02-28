<section class="relative h-[50vh] min-h-[400px] flex items-center justify-center text-center text-white pt-20">
  <div class="absolute inset-0 bg-cover bg-center bg-no-repeat grayscale-[20%]" style="background-image: url('https://i0.wp.com/www.bantimurungbulusaraung.id/wp-content/uploads/2023/10/051A5681-scaled.jpg?fit=2560%2C1707&ssl=1');">
    <div class="absolute inset-0 bg-black/60"></div>
  </div>
  <div class="relative z-10 px-4 max-w-3xl mx-auto" data-aos="zoom-in" data-aos-duration="1000">
    <p class="text-xs md:text-sm tracking-[0.3em] uppercase mb-4 text-gray-300">Cerita & Informasi</p>
    <h1 class="text-5xl md:text-7xl font-serif mb-6">Blog & Artikel</h1>
    <p class="text-lg font-light text-gray-200">
      Temukan tips, cerita, dan informasi seputar wisata Bantimurung
    </p>
  </div>
</section>

<section class="sticky top-[72px] z-40 bg-white/95 backdrop-blur-md pt-6 pb-4 border-b border-gray-100 transition-all shadow-sm">
  <div class="max-w-7xl mx-auto px-6">
    <div class="flex flex-col lg:flex-row items-center gap-4 mb-4" data-aos="fade-up">

      <div class="relative w-full lg:flex-1">
        <div class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none">
          <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
        </div>
        <input type="text" id="searchInput" class="block w-full pl-12 pr-4 py-3 bg-gray-50/80 border border-gray-100 rounded-full text-sm placeholder-gray-400 focus:outline-none focus:bg-white focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition" placeholder="Cari artikel berdasarkan judul...">
      </div>

      <div class="flex overflow-x-auto w-full lg:w-auto pb-2 lg:pb-0 gap-3 items-center" style="scrollbar-width: none;">
        <button class="filter-btn active px-6 py-3 bg-emerald-600 text-white text-sm font-medium rounded-full whitespace-nowrap shadow-sm transition" data-filter="all">Semua</button>

        <?php if (!empty($data['categories'])) : ?>
          <?php foreach ($data['categories'] as $category) : ?>
            <button class="filter-btn px-6 py-3 bg-gray-50 text-gray-600 text-sm font-medium rounded-full whitespace-nowrap hover:bg-gray-100 transition border border-gray-100" data-filter="<?= htmlspecialchars($category['nama_kategori']); ?>">
              <?= htmlspecialchars($category['nama_kategori']); ?>
            </button>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>

    </div>

    <p id="totalBlogsText" class="text-sm text-gray-500" data-aos="fade-up" data-aos-delay="100">
      Menampilkan <?= $data['total_blogs']; ?> artikel
    </p>
  </div>
</section>

<section class="pb-24 bg-white min-h-[50vh]">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8" id="blogContainer">

      <?php if (empty($data['blogs'])) : ?>
        <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center py-20 bg-gray-50 rounded-3xl border border-gray-100 border-dashed" id="emptyStateContainer">
          <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
          </svg>
          <h3 class="text-xl font-bold text-gray-700">Belum Ada Artikel</h3>
          <p class="text-gray-500 mt-2">Nantikan cerita dan informasi menarik dari kami segera.</p>
        </div>
      <?php else : ?>

        <?php $delay = 0; ?>
        <?php foreach ($data['blogs'] as $blog) : ?>

          <a href="<?= BASEURL; ?>/blog/read/<?= htmlspecialchars($blog['slug']); ?>"
            class="blog-card bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition duration-300 border border-gray-50 group flex flex-col h-full"
            data-category="<?= htmlspecialchars($blog['nama_kategori'] ?? 'Uncategorized'); ?>"
            data-aos="fade-up"
            data-aos-delay="<?= $delay; ?>">

            <div class="relative h-56 overflow-hidden bg-gray-100 shrink-0">
              <?php $imgSrc = !empty($blog['gambar_thumbnail']) ? BASEURL . '/uploads/img/blog/' . htmlspecialchars($blog['gambar_thumbnail']) : BASEURL . '/img/default_blog.jpg'; ?>
              <img src="<?= $imgSrc; ?>" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-700" alt="<?= htmlspecialchars($blog['judul_artikel']); ?>">
            </div>

            <div class="p-6 flex flex-col flex-grow">

              <div class="flex justify-between items-center mb-4 text-xs font-bold shrink-0">
                <span class="text-emerald-700 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-100">
                  <?= htmlspecialchars($blog['nama_kategori'] ?? 'Uncategorized'); ?>
                </span>
                <span class="flex items-center text-gray-400">
                  <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                  </svg>
                  <?= number_format($blog['jumlah_pembaca'] ?? 0, 0, ',', '.'); ?>
                </span>
              </div>

              <h3 class="blog-title text-xl font-bold text-gray-900 mb-3 leading-tight group-hover:text-emerald-600 transition line-clamp-2 shrink-0">
                <?= htmlspecialchars($blog['judul_artikel']); ?>
              </h3>

              <div class="text-gray-500 text-sm mb-6 line-clamp-3 flex-grow">
                <?= htmlspecialchars(substr(strip_tags($blog['konten_artikel']), 0, 160)) . '...'; ?>
              </div>

              <div class="flex items-center text-gray-400 text-xs border-t border-gray-100 pt-4 mt-auto shrink-0">
                <svg class="w-4 h-4 mr-1 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                <span class="mr-4 truncate max-w-[120px] font-medium"><?= htmlspecialchars($blog['penulis']); ?></span>
                <span class="ml-auto"><?= date('d M Y', strtotime($blog['tanggal_rilis'])); ?></span>
              </div>

            </div>
          </a>

          <?php $delay += 100; // Efek stagger agar kartu muncul berurutan 
          ?>
        <?php endforeach; ?>
      <?php endif; ?>

      <div id="noResultsMessage" class="hidden col-span-1 md:col-span-2 lg:col-span-3 text-center py-20">
        <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM13 10V3L4 14h7v7l9-11h-7z"></path>
        </svg>
        <h3 class="text-xl font-bold text-gray-700">Artikel Tidak Ditemukan</h3>
        <p class="text-gray-500 mt-2">Coba gunakan kata kunci pencarian yang lain.</p>
      </div>

    </div>
  </div>
</section>

<script src="<?= BASEURL; ?>/js/blog.js"></script>