<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

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

<form action="<?= BASEURL; ?>/adminabout/saveAbout" method="POST" enctype="multipart/form-data" id="aboutForm" class="pb-10">

  <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4 border-b border-gray-100 pb-5">
    <div>
      <h1 class="text-[24px] font-bold text-gray-900">About Page Management</h1>
      <p class="text-sm text-gray-500 mt-1">Update the content, facts, and imagery for the About section.</p>
    </div>
    <div class="flex items-center space-x-3">
      <a href="<?= BASEURL; ?>/about" target="_blank" class="px-4 py-2 bg-white border border-gray-200 text-gray-700 rounded-lg text-sm font-semibold hover:bg-gray-50 transition flex items-center shadow-sm">
        <svg class="w-4 h-4 mr-1.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
        </svg>
        Preview Page
      </a>
      <button type="submit" class="px-5 py-2 bg-[#00d859] text-white rounded-lg text-sm font-semibold hover:bg-emerald-500 transition shadow-sm flex items-center">
        <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
        </svg>
        Save Changes
      </button>
    </div>
  </div>

  <div class="bg-white rounded-[12px] shadow-sm border border-gray-200 overflow-hidden mb-8">
    <div class="p-6">
      <h2 class="text-lg font-bold text-gray-900 mb-6">Page Content</h2>

      <div class="mb-8">
        <div class="flex items-center justify-between mb-2">
          <label class="block text-sm font-semibold text-gray-800">Sejarah & Signifikansi</label>
          <input type="text" name="sejarah_title" value="<?= $data['about']['sejarah_title'] ?? ''; ?>" placeholder="Judul Sejarah..." class="px-3 py-1.5 bg-gray-50 border border-gray-200 rounded text-xs focus:outline-none focus:border-emerald-500 w-64">
        </div>
        <input type="hidden" name="sejarah_content" id="input_sejarah_content">
        <div id="editor_sejarah" class="h-40 bg-white"><?= $data['about']['sejarah_content'] ?? ''; ?></div>
      </div>

      <div class="mb-8">
        <div class="flex items-center justify-between mb-2">
          <label class="block text-sm font-semibold text-gray-800">Keindahan Alam</label>
          <input type="text" name="keindahan_title" value="<?= $data['about']['keindahan_title'] ?? ''; ?>" placeholder="Judul Keindahan..." class="px-3 py-1.5 bg-gray-50 border border-gray-200 rounded text-xs focus:outline-none focus:border-emerald-500 w-64">
        </div>
        <input type="hidden" name="keindahan_content" id="input_keindahan_content">
        <div id="editor_keindahan" class="h-40 bg-white"><?= $data['about']['keindahan_content'] ?? ''; ?></div>
      </div>

      <div class="mb-2">
        <div class="flex items-center justify-between mb-2">
          <label class="block text-sm font-semibold text-gray-800">Konservasi Kupu-Kupu</label>
          <input type="text" name="konservasi_title" value="<?= $data['about']['konservasi_title'] ?? ''; ?>" placeholder="Judul Konservasi..." class="px-3 py-1.5 bg-gray-50 border border-gray-200 rounded text-xs focus:outline-none focus:border-emerald-500 w-64">
        </div>
        <input type="hidden" name="konservasi_content" id="input_konservasi_content">
        <div id="editor_konservasi" class="h-40 bg-white"><?= $data['about']['konservasi_content'] ?? ''; ?></div>
      </div>

    </div>
  </div>

  <div class="bg-white rounded-[12px] shadow-sm border border-gray-200 overflow-hidden mb-8">
    <div class="p-6">
      <h2 class="text-lg font-bold text-gray-900 mb-6">Data & Fakta Menarik</h2>
      <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
          <label class="block text-[11px] font-semibold text-gray-500 mb-1">Angka / Nilai</label>
          <input type="text" name="fakta_1_angka" value="<?= $data['about']['fakta_1_angka'] ?? ''; ?>" class="w-full px-3 py-2 bg-white border border-gray-200 rounded-md text-sm font-bold text-gray-900 focus:outline-none focus:border-emerald-500 mb-2">
          <label class="block text-[11px] font-semibold text-gray-500 mb-1">Keterangan</label>
          <input type="text" name="fakta_1_teks" value="<?= $data['about']['fakta_1_teks'] ?? ''; ?>" class="w-full px-3 py-2 bg-white border border-gray-200 rounded-md text-xs text-gray-600 focus:outline-none focus:border-emerald-500">
        </div>
        <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
          <label class="block text-[11px] font-semibold text-gray-500 mb-1">Angka / Nilai</label>
          <input type="text" name="fakta_2_angka" value="<?= $data['about']['fakta_2_angka'] ?? ''; ?>" class="w-full px-3 py-2 bg-white border border-gray-200 rounded-md text-sm font-bold text-gray-900 focus:outline-none focus:border-emerald-500 mb-2">
          <label class="block text-[11px] font-semibold text-gray-500 mb-1">Keterangan</label>
          <input type="text" name="fakta_2_teks" value="<?= $data['about']['fakta_2_teks'] ?? ''; ?>" class="w-full px-3 py-2 bg-white border border-gray-200 rounded-md text-xs text-gray-600 focus:outline-none focus:border-emerald-500">
        </div>
        <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
          <label class="block text-[11px] font-semibold text-gray-500 mb-1">Angka / Nilai</label>
          <input type="text" name="fakta_3_angka" value="<?= $data['about']['fakta_3_angka'] ?? ''; ?>" class="w-full px-3 py-2 bg-white border border-gray-200 rounded-md text-sm font-bold text-gray-900 focus:outline-none focus:border-emerald-500 mb-2">
          <label class="block text-[11px] font-semibold text-gray-500 mb-1">Keterangan</label>
          <input type="text" name="fakta_3_teks" value="<?= $data['about']['fakta_3_teks'] ?? ''; ?>" class="w-full px-3 py-2 bg-white border border-gray-200 rounded-md text-xs text-gray-600 focus:outline-none focus:border-emerald-500">
        </div>
        <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
          <label class="block text-[11px] font-semibold text-gray-500 mb-1">Angka / Nilai</label>
          <input type="text" name="fakta_4_angka" value="<?= $data['about']['fakta_4_angka'] ?? ''; ?>" class="w-full px-3 py-2 bg-white border border-gray-200 rounded-md text-sm font-bold text-gray-900 focus:outline-none focus:border-emerald-500 mb-2">
          <label class="block text-[11px] font-semibold text-gray-500 mb-1">Keterangan</label>
          <input type="text" name="fakta_4_teks" value="<?= $data['about']['fakta_4_teks'] ?? ''; ?>" class="w-full px-3 py-2 bg-white border border-gray-200 rounded-md text-xs text-gray-600 focus:outline-none focus:border-emerald-500">
        </div>
      </div>
    </div>
  </div>

  <div class="bg-white rounded-[12px] shadow-sm border border-gray-200 overflow-hidden">
    <div class="p-6">
      <h2 class="text-lg font-bold text-gray-900 mb-6">Section Images</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

        <div>
          <h4 class="text-sm font-semibold text-gray-800 mb-3">Hero Image</h4>
          <div class="relative w-full h-48 rounded-xl border-2 border-dashed border-gray-200 bg-gray-50 hover:bg-gray-100 hover:border-emerald-300 transition-all flex flex-col items-center justify-center overflow-hidden group">

            <input type="file" name="hero_image" accept="image/jpeg, image/png, image/jpg" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20" onchange="previewAboutImage(this, 'hero_preview', 'hero_placeholder', 'hero_overlay')">

            <img id="hero_preview" src="<?= BASEURL; ?>/img/about/<?= $data['about']['hero_image'] ?? 'default.jpg'; ?>" class="absolute inset-0 w-full h-full object-cover z-10" alt="Hero Image" onerror="this.classList.add('hidden'); document.getElementById('hero_placeholder').classList.remove('hidden'); document.getElementById('hero_overlay').classList.add('hidden');">

            <div id="hero_placeholder" class="hidden flex flex-col items-center justify-center text-center p-4 z-0 pointer-events-none">
              <div class="w-12 h-12 bg-white rounded-full shadow-sm flex items-center justify-center mb-3">
                <svg class="w-6 h-6 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
              </div>
              <span class="text-[15px] font-semibold text-slate-700">Upload new image</span>
              <span class="text-sm text-slate-500 mt-1">Supports PNG, JPG (Max 2MB)</span>
            </div>

            <div id="hero_overlay" class="absolute inset-0 bg-slate-900/40 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity z-10 pointer-events-none">
              <div class="w-10 h-10 bg-white/20 rounded-full backdrop-blur-sm flex items-center justify-center mb-2">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                </svg>
              </div>
              <span class="text-white text-sm font-medium">Click to Change</span>
            </div>
          </div>
        </div>

        <div>
          <h4 class="text-sm font-semibold text-gray-800 mb-3">History Feature Image</h4>
          <div class="relative w-full h-48 rounded-xl border-2 border-dashed border-gray-200 bg-gray-50 hover:bg-gray-100 hover:border-emerald-300 transition-all flex flex-col items-center justify-center overflow-hidden group">
            <input type="file" name="sejarah_image" accept="image/jpeg, image/png, image/jpg" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20" onchange="previewAboutImage(this, 'sejarah_preview', 'sejarah_placeholder', 'sejarah_overlay')">
            <img id="sejarah_preview" src="<?= BASEURL; ?>/img/about/<?= $data['about']['sejarah_image'] ?? 'default.jpg'; ?>" class="absolute inset-0 w-full h-full object-cover z-10" alt="Sejarah Image" onerror="this.classList.add('hidden'); document.getElementById('sejarah_placeholder').classList.remove('hidden'); document.getElementById('sejarah_overlay').classList.add('hidden');">

            <div id="sejarah_placeholder" class="hidden flex flex-col items-center justify-center text-center p-4 z-0 pointer-events-none">
              <div class="w-12 h-12 bg-white rounded-full shadow-sm flex items-center justify-center mb-3">
                <svg class="w-6 h-6 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
              </div>
              <span class="text-[15px] font-semibold text-slate-700">Upload new image</span>
              <span class="text-sm text-slate-500 mt-1">Supports PNG, JPG (Max 2MB)</span>
            </div>

            <div id="sejarah_overlay" class="absolute inset-0 bg-slate-900/40 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity z-10 pointer-events-none">
              <div class="w-10 h-10 bg-white/20 rounded-full backdrop-blur-sm flex items-center justify-center mb-2">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                </svg>
              </div>
              <span class="text-white text-sm font-medium">Click to Change</span>
            </div>
          </div>
        </div>

        <div>
          <h4 class="text-sm font-semibold text-gray-800 mb-3">Nature Feature Image</h4>
          <div class="relative w-full h-48 rounded-xl border-2 border-dashed border-gray-200 bg-gray-50 hover:bg-gray-100 hover:border-emerald-300 transition-all flex flex-col items-center justify-center overflow-hidden group">
            <input type="file" name="keindahan_image" accept="image/jpeg, image/png, image/jpg" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20" onchange="previewAboutImage(this, 'keindahan_preview', 'keindahan_placeholder', 'keindahan_overlay')">
            <img id="keindahan_preview" src="<?= BASEURL; ?>/img/about/<?= $data['about']['keindahan_image'] ?? 'default.jpg'; ?>" class="absolute inset-0 w-full h-full object-cover z-10" alt="Keindahan Image" onerror="this.classList.add('hidden'); document.getElementById('keindahan_placeholder').classList.remove('hidden'); document.getElementById('keindahan_overlay').classList.add('hidden');">

            <div id="keindahan_placeholder" class="hidden flex flex-col items-center justify-center text-center p-4 z-0 pointer-events-none">
              <div class="w-12 h-12 bg-white rounded-full shadow-sm flex items-center justify-center mb-3">
                <svg class="w-6 h-6 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
              </div>
              <span class="text-[15px] font-semibold text-slate-700">Upload new image</span>
              <span class="text-sm text-slate-500 mt-1">Supports PNG, JPG (Max 2MB)</span>
            </div>

            <div id="keindahan_overlay" class="absolute inset-0 bg-slate-900/40 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity z-10 pointer-events-none">
              <div class="w-10 h-10 bg-white/20 rounded-full backdrop-blur-sm flex items-center justify-center mb-2">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                </svg>
              </div>
              <span class="text-white text-sm font-medium">Click to Change</span>
            </div>
          </div>
        </div>

        <div>
          <h4 class="text-sm font-semibold text-gray-800 mb-3">Conservation Image</h4>
          <div class="relative w-full h-48 rounded-xl border-2 border-dashed border-gray-200 bg-gray-50 hover:bg-gray-100 hover:border-emerald-300 transition-all flex flex-col items-center justify-center overflow-hidden group">
            <input type="file" name="konservasi_image" accept="image/jpeg, image/png, image/jpg" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20" onchange="previewAboutImage(this, 'konservasi_preview', 'konservasi_placeholder', 'konservasi_overlay')">
            <img id="konservasi_preview" src="<?= BASEURL; ?>/img/about/<?= $data['about']['konservasi_image'] ?? 'default.jpg'; ?>" class="absolute inset-0 w-full h-full object-cover z-10" alt="Konservasi Image" onerror="this.classList.add('hidden'); document.getElementById('konservasi_placeholder').classList.remove('hidden'); document.getElementById('konservasi_overlay').classList.add('hidden');">

            <div id="konservasi_placeholder" class="hidden flex flex-col items-center justify-center text-center p-4 z-0 pointer-events-none">
              <div class="w-12 h-12 bg-white rounded-full shadow-sm flex items-center justify-center mb-3">
                <svg class="w-6 h-6 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
              </div>
              <span class="text-[15px] font-semibold text-slate-700">Upload new image</span>
              <span class="text-sm text-slate-500 mt-1">Supports PNG, JPG (Max 2MB)</span>
            </div>

            <div id="konservasi_overlay" class="absolute inset-0 bg-slate-900/40 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity z-10 pointer-events-none">
              <div class="w-10 h-10 bg-white/20 rounded-full backdrop-blur-sm flex items-center justify-center mb-2">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                </svg>
              </div>
              <span class="text-white text-sm font-medium">Click to Change</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

</form>

<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<script src="<?= BASEURL; ?>/js/about-admin.js"></script>