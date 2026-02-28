<?php if (isset($_SESSION['pesan_sukses'])) : ?>
  <div class="mb-6 bg-emerald-50 border border-emerald-200 text-emerald-700 px-4 py-3 rounded-xl flex items-center shadow-sm">
    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
    </svg>
    <span class="font-medium"><?= $_SESSION['pesan_sukses']; ?></span>
  </div>
  <?php unset($_SESSION['pesan_sukses']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['pesan_info'])) : ?>
  <div class="mb-6 bg-blue-50 border border-blue-200 text-blue-700 px-4 py-3 rounded-xl flex items-center shadow-sm">
    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
    </svg>
    <span class="font-medium"><?= $_SESSION['pesan_info']; ?></span>
  </div>
  <?php unset($_SESSION['pesan_info']); ?>
<?php endif; ?>

<div class="mb-8">
  <h1 class="text-[28px] font-bold text-gray-900 tracking-tight">Kelola Halaman Home</h1>
  <p class="text-sm text-gray-500 mt-1">Ubah teks deskripsi dan gambar ilustrasi pada bagian 'Tentang Kami' di Landing Page.</p>
</div>

<form action="<?= BASEURL; ?>/adminhome/saveHome" method="POST" enctype="multipart/form-data" class="pb-10">
  <div class="bg-white rounded-[20px] shadow-sm border border-gray-100 overflow-hidden">

    <div class="p-8 space-y-10">

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 pb-10 border-b border-gray-100">
        <div>
          <label class="block text-sm font-bold text-emerald-600 mb-3 flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
            Kartu 1: Keajaiban Alam
          </label>
          <textarea name="paragraph_1" required rows="5" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition placeholder-gray-400"><?= htmlspecialchars($data['home']['paragraph_1'] ?? ''); ?></textarea>
        </div>
        <div>
          <label class="block text-sm font-bold text-gray-700 mb-3">Gambar Ilustrasi 1</label>
          <div class="flex items-start space-x-6">

            <?php $img1 = (!empty($data['home']['image_1']) && $data['home']['image_1'] !== 'default.jpg') ? $data['home']['image_1'] : null; ?>
            <div class="w-40 h-28 rounded-xl <?= $img1 ? 'border border-gray-200' : 'border-2 border-dashed border-gray-300' ?> overflow-hidden bg-gray-50 shrink-0 flex items-center justify-center">
              <?php if ($img1) : ?>
                <img src="<?= BASEURL; ?>/img/home/<?= htmlspecialchars($img1); ?>" class="w-full h-full object-cover" alt="Preview Image 1">
              <?php else : ?>
                <div class="flex flex-col items-center justify-center text-gray-400">
                  <svg class="w-8 h-8 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                  </svg>
                  <span class="text-[10px] font-medium">No Image</span>
                </div>
              <?php endif; ?>
            </div>

            <div class="flex-1">
              <input type="file" name="image_1" accept="image/jpeg, image/png, image/webp" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-bold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100 transition cursor-pointer">
              <p class="text-xs text-gray-400 mt-2 leading-relaxed">Format: JPG, PNG, WEBP.<br>Maks: 2MB.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 pb-10 border-b border-gray-100">
        <div>
          <label class="block text-sm font-bold text-emerald-600 mb-3 flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477-4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
            </svg>
            Kartu 2: Kerajaan Kupu-Kupu
          </label>
          <textarea name="paragraph_2" required rows="5" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition placeholder-gray-400"><?= htmlspecialchars($data['home']['paragraph_2'] ?? ''); ?></textarea>
        </div>
        <div>
          <label class="block text-sm font-bold text-gray-700 mb-3">Gambar Ilustrasi 2</label>
          <div class="flex items-start space-x-6">

            <?php $img2 = (!empty($data['home']['image_2']) && $data['home']['image_2'] !== 'default.jpg') ? $data['home']['image_2'] : null; ?>
            <div class="w-40 h-28 rounded-xl <?= $img2 ? 'border border-gray-200' : 'border-2 border-dashed border-gray-300' ?> overflow-hidden bg-gray-50 shrink-0 flex items-center justify-center">
              <?php if ($img2) : ?>
                <img src="<?= BASEURL; ?>/img/home/<?= htmlspecialchars($img2); ?>" class="w-full h-full object-cover" alt="Preview Image 2">
              <?php else : ?>
                <div class="flex flex-col items-center justify-center text-gray-400">
                  <svg class="w-8 h-8 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                  </svg>
                  <span class="text-[10px] font-medium">No Image</span>
                </div>
              <?php endif; ?>
            </div>

            <div class="flex-1">
              <input type="file" name="image_2" accept="image/jpeg, image/png, image/webp" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-bold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100 transition cursor-pointer">
              <p class="text-xs text-gray-400 mt-2 leading-relaxed">Format: JPG, PNG, WEBP.<br>Maks: 2MB.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div>
          <label class="block text-sm font-bold text-emerald-600 mb-3 flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path>
            </svg>
            Kartu 3: Aktivitas Wisata
          </label>
          <textarea name="paragraph_3" required rows="5" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition placeholder-gray-400"><?= htmlspecialchars($data['home']['paragraph_3'] ?? ''); ?></textarea>
        </div>
        <div>
          <label class="block text-sm font-bold text-gray-700 mb-3">Gambar Ilustrasi 3</label>
          <div class="flex items-start space-x-6">

            <?php $img3 = (!empty($data['home']['image_3']) && $data['home']['image_3'] !== 'default.jpg') ? $data['home']['image_3'] : null; ?>
            <div class="w-40 h-28 rounded-xl <?= $img3 ? 'border border-gray-200' : 'border-2 border-dashed border-gray-300' ?> overflow-hidden bg-gray-50 shrink-0 flex items-center justify-center">
              <?php if ($img3) : ?>
                <img src="<?= BASEURL; ?>/img/home/<?= htmlspecialchars($img3); ?>" class="w-full h-full object-cover" alt="Preview Image 3">
              <?php else : ?>
                <div class="flex flex-col items-center justify-center text-gray-400">
                  <svg class="w-8 h-8 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                  </svg>
                  <span class="text-[10px] font-medium">No Image</span>
                </div>
              <?php endif; ?>
            </div>

            <div class="flex-1">
              <input type="file" name="image_3" accept="image/jpeg, image/png, image/webp" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-bold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100 transition cursor-pointer">
              <p class="text-xs text-gray-400 mt-2 leading-relaxed">Format: JPG, PNG, WEBP.<br>Maks: 2MB.</p>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="p-6 bg-gray-50 border-t border-gray-100 flex justify-end">
      <button type="submit" class="px-6 py-3 bg-[#00d859] text-white rounded-xl text-sm font-bold hover:bg-emerald-500 transition shadow-sm flex items-center">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"></path>
        </svg>
        <span>Simpan Perubahan</span>
      </button>
    </div>

  </div>
</form>