<?php if (isset($_SESSION['pesan_sukses'])) : ?>
  <div class="mb-6 bg-emerald-50 border border-emerald-200 text-emerald-700 px-4 py-3 rounded-xl relative flex items-center" role="alert">
    <svg class="w-5 h-5 mr-2 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
    </svg>
    <span class="block sm:inline font-medium"><?= $_SESSION['pesan_sukses']; ?></span>
  </div>
  <?php unset($_SESSION['pesan_sukses']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['pesan_info'])) : ?>
  <div class="mb-6 bg-blue-50 border border-blue-200 text-blue-700 px-4 py-3 rounded-xl relative flex items-center" role="alert">
    <svg class="w-5 h-5 mr-2 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
    </svg>
    <span class="block sm:inline font-medium"><?= $_SESSION['pesan_info']; ?></span>
  </div>
  <?php unset($_SESSION['pesan_info']); ?>
<?php endif; ?>

<div class="mb-8">
  <h1 class="text-[28px] font-bold text-gray-900 tracking-tight">System Settings</h1>
  <p class="text-sm text-gray-500 mt-1">Update website contact information, address, and maps location.</p>
</div>

<form action="<?= BASEURL; ?>/adminsettings/update" method="POST" class="pb-10">
  <div class="bg-white rounded-[20px] shadow-sm border border-gray-100 overflow-hidden">

    <div class="p-8">
      <h2 class="text-lg font-bold text-gray-900 mb-6 border-b border-gray-100 pb-3">Contact Information</h2>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

        <div class="space-y-6">
          <div>
            <label class="block text-sm font-semibold text-gray-800 mb-2">Official Email Address</label>
            <div class="relative">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
              </div>
              <input type="email" name="email" value="<?= $data['contact']['email'] ?? ''; ?>" required placeholder="info@bantimurung.com" class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition">
            </div>
          </div>

          <div>
            <label class="block text-sm font-semibold text-gray-800 mb-2">Phone Number / WhatsApp</label>
            <div class="relative">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
              </div>
              <input type="text" name="no_telepon" value="<?= $data['contact']['no_telepon'] ?? ''; ?>" required placeholder="+62 812 3456 7890" class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition">
            </div>
          </div>
        </div>

        <div class="space-y-6">
          <div>
            <label class="block text-sm font-semibold text-gray-800 mb-2">Physical Address</label>
            <textarea name="alamat" required rows="2" placeholder="Masukkan alamat lengkap lokasi..." class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition resize-none"><?= $data['contact']['alamat'] ?? ''; ?></textarea>
          </div>

          <div>
            <label class="block text-sm font-semibold text-gray-800 mb-2">Google Maps Embed Link (URL)</label>
            <input type="text" name="link_gmaps" value="<?= $data['contact']['link_gmaps'] ?? ''; ?>" required placeholder="https://maps.google.com/..." class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition">
            <p class="text-xs text-gray-500 mt-2">Paste the "src" URL dari fitur Share > Embed map di Google Maps.</p>
          </div>
        </div>

      </div>
    </div>

    <div class="p-6 bg-gray-50 border-t border-gray-100 flex justify-end">
      <button type="submit" class="px-6 py-3 bg-[#00d859] text-white rounded-xl text-sm font-bold hover:bg-emerald-500 transition shadow-sm flex items-center justify-center">
        <span>Save Settings</span>
        <svg class="w-4 h-4 ml-2 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"></path>
        </svg>
      </button>
    </div>

  </div>
</form>