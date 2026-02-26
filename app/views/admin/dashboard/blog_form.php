<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<div class="mb-8 flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
  <div>
    <div class="flex items-center space-x-2 mb-1">
      <a href="<?= BASEURL; ?>/adminblog" class="text-gray-400 hover:text-emerald-500 transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
        </svg>
      </a>
      <h1 class="text-[28px] font-bold text-gray-900 tracking-tight">
        <?= isset($data['blog']) ? 'Edit Article' : 'Write New Article'; ?>
      </h1>
    </div>
    <p class="text-sm text-gray-500 ml-7">Fill in the details below to publish your post.</p>
  </div>
</div>

<form action="<?= isset($data['blog']) ? BASEURL . '/adminblog/update' : BASEURL . '/adminblog/store'; ?>" method="POST" enctype="multipart/form-data" id="blogForm" class="pb-10">

  <?php if (isset($data['blog'])) : ?>
    <input type="hidden" name="id" value="<?= $data['blog']['id']; ?>">
  <?php endif; ?>

  <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

    <div class="lg:col-span-2 space-y-6">

      <div class="bg-white rounded-[12px] shadow-sm border border-gray-200 p-6">
        <div class="mb-5">
          <label class="block text-sm font-semibold text-gray-800 mb-2">Article Title</label>
          <input type="text" name="judul_artikel" required value="<?= $data['blog']['judul_artikel'] ?? ''; ?>" placeholder="Enter a catchy title..." class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500 transition">
        </div>

        <div class="mb-2">
          <label class="block text-sm font-semibold text-gray-800 mb-2">Article Content</label>
          <input type="hidden" name="konten_artikel" id="input_konten_artikel">
          <div id="editor_blog" class="bg-white"><?= $data['blog']['konten_artikel'] ?? ''; ?></div>
        </div>
      </div>

    </div>

    <div class="space-y-6">

      <div class="bg-white rounded-[12px] shadow-sm border border-gray-200 p-6">
        <h3 class="text-sm font-bold text-gray-900 mb-4 border-b border-gray-100 pb-3">Post Details</h3>

        <div class="space-y-4">
          <div>
            <label class="block text-[12px] font-semibold text-gray-500 mb-1">Category</label>
            <select name="category_id" required class="w-full px-3 py-2 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:outline-none focus:border-emerald-500 transition cursor-pointer">
              <option value="">-- Select Category --</option>
              <?php foreach ($data['categories'] as $cat) : ?>
                <?php $selected = (isset($data['blog']) && $data['blog']['category_id'] == $cat['id']) ? 'selected' : ''; ?>
                <option value="<?= $cat['id']; ?>" <?= $selected; ?>><?= $cat['nama_kategori']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div>
            <label class="block text-[12px] font-semibold text-gray-500 mb-1">Author Name</label>
            <input type="text" name="penulis" required value="<?= $data['blog']['penulis'] ?? 'Admin User'; ?>" class="w-full px-3 py-2 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:outline-none focus:border-emerald-500 transition">
          </div>

          <div>
            <label class="block text-[12px] font-semibold text-gray-500 mb-1">Publish Date</label>
            <input type="date" name="tanggal_rilis" required value="<?= $data['blog']['tanggal_rilis'] ?? date('Y-m-d'); ?>" class="w-full px-3 py-2 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:outline-none focus:border-emerald-500 transition">
          </div>

          <div>
            <label class="block text-[12px] font-semibold text-gray-500 mb-1">Location (Optional)</label>
            <input type="text" name="lokasi_penulis" value="<?= $data['blog']['lokasi_penulis'] ?? ''; ?>" placeholder="e.g. Helena Sky Bridge" class="w-full px-3 py-2 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:outline-none focus:border-emerald-500 transition">
          </div>

          <div>
            <label class="block text-[12px] font-semibold text-gray-500 mb-1">Status</label>
            <select name="status" class="w-full px-3 py-2 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:outline-none focus:border-emerald-500 transition cursor-pointer">
              <option value="published" <?= (isset($data['blog']) && $data['blog']['status'] == 'published') ? 'selected' : ''; ?>>Published</option>
              <option value="draft" <?= (isset($data['blog']) && $data['blog']['status'] == 'draft') ? 'selected' : ''; ?>>Draft</option>
            </select>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-[12px] shadow-sm border border-gray-200 p-6">
        <h3 class="text-sm font-bold text-gray-900 mb-4 border-b border-gray-100 pb-3">Thumbnail Image</h3>

        <div class="relative w-full h-48 rounded-xl border-2 border-dashed border-gray-200 bg-gray-50 hover:bg-gray-100 hover:border-emerald-300 transition-all flex flex-col items-center justify-center overflow-hidden group">
          <input type="file" name="gambar_thumbnail" accept="image/jpeg, image/png, image/jpg" <?= isset($data['blog']) ? '' : 'required'; ?> class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20" onchange="previewBlogImage(this)">

          <img id="blog_preview" src="<?= isset($data['blog']['gambar_thumbnail']) ? BASEURL . '/img/blog/' . $data['blog']['gambar_thumbnail'] : ''; ?>" class="<?= isset($data['blog']['gambar_thumbnail']) ? '' : 'hidden'; ?> absolute inset-0 w-full h-full object-cover z-10" alt="Thumbnail Preview">

          <div id="blog_placeholder" class="<?= isset($data['blog']['gambar_thumbnail']) ? 'hidden' : 'flex'; ?> flex-col items-center justify-center text-center p-4 z-0 pointer-events-none">
            <div class="w-12 h-12 bg-white rounded-full shadow-sm flex items-center justify-center mb-3">
              <svg class="w-6 h-6 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
              </svg>
            </div>
            <span class="text-[13px] font-semibold text-slate-700">Upload thumbnail</span>
            <span class="text-xs text-slate-500 mt-1">PNG, JPG (Max 2MB)</span>
          </div>

          <div id="blog_overlay" class="absolute inset-0 bg-slate-900/40 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity z-10 pointer-events-none">
            <div class="w-10 h-10 bg-white/20 rounded-full backdrop-blur-sm flex items-center justify-center mb-2">
              <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
              </svg>
            </div>
            <span class="text-white text-xs font-medium">Click to Change</span>
          </div>
        </div>
      </div>

      <button type="submit" class="w-full py-3.5 bg-[#00d859] text-white rounded-[12px] text-sm font-bold hover:bg-emerald-500 transition shadow-sm flex items-center justify-center">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"></path>
        </svg>
        <?= isset($data['blog']) ? 'Update Article' : 'Publish Article'; ?>
      </button>

    </div>
  </div>
</form>

<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<script src="<?= BASEURL; ?>/js/blog-admin.js"></script>