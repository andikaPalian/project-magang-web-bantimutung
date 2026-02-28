<?php if (isset($_SESSION['pesan_sukses'])) : ?>
  <div class="mb-6 bg-emerald-50 border border-emerald-200 text-emerald-700 px-4 py-3 rounded-xl relative flex items-center" role="alert">
    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
    </svg>
    <span class="block sm:inline font-medium"><?= $_SESSION['pesan_sukses']; ?></span>
  </div>
  <?php unset($_SESSION['pesan_sukses']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['pesan_info'])) : ?>
  <div class="mb-6 bg-blue-50 border border-blue-200 text-blue-700 px-4 py-3 rounded-xl relative flex items-center" role="alert">
    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
    </svg>
    <span class="block sm:inline font-medium"><?= $_SESSION['pesan_info']; ?></span>
  </div>
  <?php unset($_SESSION['pesan_info']); ?>
<?php endif; ?>

<div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
  <div>
    <h1 class="text-[28px] font-bold text-gray-900 tracking-tight">Blog Management</h1>
    <p class="text-sm text-gray-500 mt-1">Manage your articles, news, and updates.</p>
  </div>
  <div class="flex items-center space-x-4">
    <button class="text-gray-400 hover:text-emerald-500 transition relative">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
      </svg>
      <span class="absolute top-0 right-0 block h-2 w-2 rounded-full bg-red-500 ring-2 ring-white"></span>
    </button>
    <a href="<?= BASEURL; ?>/adminblog/create" class="px-5 py-2.5 bg-[#00d859] text-white rounded-full text-sm font-semibold hover:bg-emerald-500 transition shadow-sm flex items-center">
      <svg class="w-5 h-5 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
      </svg>
      Add New Article
    </a>
  </div>
</div>

<div class="bg-white rounded-[20px] shadow-sm border border-gray-100 overflow-hidden">

  <div class="p-5 border-b border-gray-100 flex flex-col md:flex-row justify-between items-center gap-4">
    <div class="relative w-full md:w-96 group">
      <svg class="w-4 h-4 text-gray-400 absolute left-4 top-1/2 transform -translate-y-1/2 group-focus-within:text-emerald-500 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
      </svg>
      <input type="text" placeholder="Search articles..." class="w-full bg-gray-50 border border-gray-200 text-sm rounded-xl pl-11 pr-4 py-2.5 focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition">
    </div>

    <div class="flex items-center space-x-3 w-full md:w-auto">
      <button class="flex-1 md:flex-none flex items-center justify-between space-x-2 px-4 py-2.5 bg-white border border-gray-200 rounded-xl text-sm font-medium text-gray-700 hover:bg-gray-50 transition">
        <div class="flex items-center">
          <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
          </svg>
          Filter by Category
        </div>
        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
      </button>
      <button class="flex-1 md:flex-none flex items-center justify-between space-x-2 px-4 py-2.5 bg-white border border-gray-200 rounded-xl text-sm font-medium text-gray-700 hover:bg-gray-50 transition">
        <div class="flex items-center">
          <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h13M3 8h9m-9 4h6m4 0l4-4m0 0l4 4m-4-4v12"></path>
          </svg>
          Sort: Newest
        </div>
        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
      </button>
    </div>
  </div>

  <div class="overflow-x-auto">
    <table class="w-full text-left border-collapse">
      <thead>
        <tr class="border-b border-gray-100 bg-white">
          <th class="py-4 px-6 text-[11px] font-bold text-gray-400 uppercase tracking-wider">ID</th>
          <th class="py-4 px-6 text-[11px] font-bold text-gray-400 uppercase tracking-wider">Article Title</th>
          <th class="py-4 px-6 text-[11px] font-bold text-gray-400 uppercase tracking-wider">Author</th>
          <th class="py-4 px-6 text-[11px] font-bold text-gray-400 uppercase tracking-wider">Date</th>
          <th class="py-4 px-6 text-[11px] font-bold text-gray-400 uppercase tracking-wider">Location</th>
          <th class="py-4 px-6 text-[11px] font-bold text-gray-400 uppercase tracking-wider">Views</th>
          <th class="py-4 px-6 text-[11px] font-bold text-gray-400 uppercase tracking-wider text-right">Actions</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-50">

        <?php if (empty($data['blogs'])) : ?>
          <tr>
            <td colspan="7" class="py-10 text-center text-gray-500 text-sm">
              Belum ada artikel yang ditambahkan. Klik tombol "Add New Article" untuk mulai menulis.
            </td>
          </tr>
        <?php else : ?>

          <?php foreach ($data['blogs'] as $blog) : ?>
            <tr class="hover:bg-gray-50/50 transition-colors group">
              <td class="py-4 px-6 text-sm font-medium text-gray-400">
                #<?= str_pad($blog['id'], 3, '0', STR_PAD_LEFT); ?>
              </td>

              <td class="py-4 px-6">
                <div class="flex items-center space-x-4">
                  <div class="w-10 h-10 rounded-lg bg-gray-100 overflow-hidden flex-shrink-0">
                    <?php if ($blog['gambar_thumbnail']) : ?>
                      <img id="blog_preview"
                        src="<?= isset($data['blog']['gambar_thumbnail']) ? BASEURL . '/uploads/img/blog/' . $data['blog']['gambar_thumbnail'] : ''; ?>"
                        class="<?= isset($data['blog']['gambar_thumbnail']) ? '' : 'hidden'; ?> absolute inset-0 w-full h-full object-cover z-10"
                        alt="Thumbnail Preview">
                    <?php else : ?>
                      <div class="w-full h-full flex items-center justify-center bg-emerald-50 text-emerald-500">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                      </div>
                    <?php endif; ?>
                  </div>
                  <div>
                    <h4 class="text-sm font-bold text-gray-900 group-hover:text-emerald-600 transition-colors line-clamp-1"><?= $blog['judul_artikel']; ?></h4>
                    <p class="text-[12px] text-gray-500 mt-0.5"><?= $blog['nama_kategori'] ?? 'Uncategorized'; ?></p>
                  </div>
                </div>
              </td>

              <td class="py-4 px-6">
                <div class="flex items-center space-x-2">
                  <div class="w-6 h-6 rounded-full bg-slate-200 flex items-center justify-center text-[10px] font-bold text-slate-600">
                    <?= strtoupper(substr($blog['penulis'], 0, 1)); ?>
                  </div>
                  <span class="text-sm font-medium text-gray-700"><?= $blog['penulis']; ?></span>
                </div>
              </td>

              <td class="py-4 px-6">
                <span class="text-sm text-gray-600"><?= date('M d, Y', strtotime($blog['tanggal_rilis'])); ?></span>
              </td>

              <td class="py-4 px-6">
                <span class="text-sm text-gray-600"><?= $blog['lokasi_penulis'] ?: '-'; ?></span>
              </td>

              <td class="py-4 px-6">
                <span class="text-sm font-bold text-gray-900"><?= number_format($blog['jumlah_pembaca']); ?></span>
              </td>

              <td class="py-4 px-6 text-right">
                <div class="flex items-center justify-end space-x-3 text-gray-400">
                  <a href="<?= BASEURL; ?>/adminblog/edit/<?= $blog['id']; ?>" class="p-1.5 text-gray-400 hover:text-emerald-500 hover:bg-emerald-50 rounded transition" title="Edit Article">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                    </svg>
                  </a>
                  <a href="<?= BASEURL; ?>/adminblog/delete/<?= $blog['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini? Tindakan ini tidak dapat dibatalkan.');" class="p-1.5 text-gray-400 hover:text-red-500 hover:bg-red-50 rounded transition" title="Delete Article">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                    </svg>
                  </a>
                </div>
              </td>
            </tr>
          <?php endforeach; ?>

        <?php endif; ?>

      </tbody>
    </table>
  </div>

  <div class="p-5 border-t border-gray-100 flex items-center justify-between">
    <span class="text-sm text-gray-500">Showing <span class="font-bold text-gray-900"><?= count($data['blogs']); ?></span> results</span>
    <div class="flex items-center space-x-2">
      <button class="px-3 py-1.5 border border-gray-200 text-gray-500 text-sm font-medium rounded-lg hover:bg-gray-50 disabled:opacity-50 transition" disabled>Previous</button>
      <button class="px-3 py-1.5 border border-gray-200 text-gray-700 text-sm font-medium rounded-lg hover:bg-gray-50 transition">Next</button>
    </div>
  </div>
</div>