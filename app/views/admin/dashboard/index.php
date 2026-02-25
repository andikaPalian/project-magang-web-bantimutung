<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">

  <div class="bg-white rounded-[20px] p-6 border border-gray-100 shadow-sm flex justify-between items-center">
    <div>
      <p class="text-sm font-medium text-gray-500 mb-2">Total Visitors (Monthly)</p>
      <h3 class="text-[32px] leading-tight font-bold text-gray-900 mb-2">
        <?= number_format($data['total_pengunjung'] ?? 0, 0, ',', '.'); ?>
      </h3>
      <p class="text-xs font-medium text-emerald-500 flex items-center">
        <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
        </svg>
        <?= isset($data['pertumbuhan_pengunjung']) ? $data['pertumbuhan_pengunjung'] : '0'; ?>% from last month
      </p>
    </div>
    <div class="w-16 h-16 rounded-full bg-emerald-50 flex items-center justify-center text-emerald-500 flex-shrink-0">
      <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0z" />
      </svg>
    </div>
  </div>

  <div class="bg-white rounded-[20px] p-6 border border-gray-100 shadow-sm flex justify-between items-center">
    <div>
      <p class="text-sm font-medium text-gray-500 mb-2">Total Blog Posts</p>
      <h3 class="text-[32px] leading-tight font-bold text-gray-900 mb-2">
        <?= number_format($data['total_blog'] ?? 0, 0, ',', '.'); ?>
      </h3>
      <p class="text-xs font-medium text-gray-400 flex items-center">
        <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        Last post: <?= isset($data['post_terakhir']) ? $data['post_terakhir'] : 'Belum ada artikel'; ?>
      </p>
    </div>
    <div class="w-16 h-16 rounded-full bg-blue-50 flex items-center justify-center text-blue-500 flex-shrink-0">
      <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
      </svg>
    </div>
  </div>

  <div class="bg-white rounded-[20px] p-6 border border-gray-100 shadow-sm flex justify-between items-center">
    <div>
      <p class="text-sm font-medium text-gray-500 mb-2">New Inquiries</p>
      <h3 class="text-[32px] leading-tight font-bold text-gray-900 mb-2">
        <?= number_format($data['total_pesan_baru'] ?? 0, 0, ',', '.'); ?>
      </h3>
      <p class="text-xs font-medium text-red-500 flex items-center">
        <span class="font-bold mr-1 text-sm leading-none">!</span> <?= number_format($data['total_pesan_baru'] ?? 0, 0, ',', '.'); ?> require attention
      </p>
    </div>
    <div class="w-16 h-16 rounded-full bg-orange-50 flex items-center justify-center text-orange-400 flex-shrink-0">
      <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
      </svg>
    </div>
  </div>
</div>


<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">

  <div class="lg:col-span-2 bg-white rounded-[20px] p-7 border border-gray-100 shadow-sm">
    <div class="flex justify-between items-center mb-8">
      <h2 class="text-lg font-bold text-gray-900">Visitor Trends</h2>

      <form method="GET" action="<?= BASEURL; ?>/admin" class="m-0">
        <div class="relative">
          <select name="range" onchange="this.form.submit()" class="text-xs font-medium text-gray-500 border border-gray-200 px-3 py-1.5 pr-8 rounded-lg cursor-pointer hover:bg-gray-50 transition focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 appearance-none bg-white z-10 relative">
            <option value="7" <?= ($data['current_range'] == 7) ? 'selected' : ''; ?>>Last 7 Days</option>
            <option value="14" <?= ($data['current_range'] == 14) ? 'selected' : ''; ?>>Last 14 Days</option>
            <option value="30" <?= ($data['current_range'] == 30) ? 'selected' : ''; ?>>Last 30 Days</option>
          </select>
          <svg class="w-3.5 h-3.5 text-gray-400 absolute right-2.5 top-1/2 transform -translate-y-1/2 pointer-events-none z-20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </div>
      </form>
    </div>

    <div class="relative h-64 w-full mt-4 flex flex-col">

      <div class="absolute top-0 left-0 right-0 bottom-6 flex flex-col justify-between z-0">
        <div class="border-b border-gray-100 w-full h-0"></div>
        <div class="border-b border-gray-100 w-full h-0"></div>
        <div class="border-b border-gray-100 w-full h-0"></div>
        <div class="border-b border-gray-100 w-full h-0"></div>
      </div>

      <?php
      $gapClass = 'gap-2';
      if ($data['current_range'] == 14) $gapClass = 'gap-1.5';
      if ($data['current_range'] == 30) $gapClass = 'gap-[2px]';
      ?>

      <div class="w-full h-full flex justify-between items-end z-10 <?= $gapClass; ?>">
        <?php if (!empty($data['chart_data'])) : ?>
          <?php
          $totalData = count($data['chart_data']);
          foreach ($data['chart_data'] as $index => $chart) :

            $bgClass = ($index == $totalData - 1) ? 'bg-emerald-400' : 'bg-emerald-200 hover:bg-emerald-400';

            $text = $chart['day'];
            $showText = true;

            if ($data['current_range'] == 30) {
              if ($index % 6 != 0 && $index != 29) $showText = false;
            } elseif ($data['current_range'] == 14) {
              if ($index % 2 != 0 && $index != 13) $showText = false;
            }
          ?>
            <div class="flex flex-col justify-end items-center w-full h-full group">

              <div class="w-full h-full flex items-end pb-1 relative">
                <div class="w-full <?= $bgClass; ?> transition-colors rounded-t-sm cursor-pointer" style="height: <?= $chart['percentage']; ?>%;">
                  <div class="absolute -top-7 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-[10px] font-bold py-1 px-1.5 rounded hidden group-hover:block z-30 shadow-md whitespace-nowrap">
                    <?= $chart['count']; ?> Visitors
                  </div>
                </div>
              </div>

              <div class="h-5 w-full flex justify-center items-center overflow-visible">
                <?php if ($showText): ?>
                  <span class="text-[9px] sm:text-[10px] text-gray-400 font-medium tracking-tighter whitespace-nowrap">
                    <?= $text; ?>
                  </span>
                <?php endif; ?>
              </div>

            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <div class="bg-white rounded-[20px] p-7 border border-gray-100 shadow-sm">
    <h2 class="text-lg font-bold text-gray-900 mb-5">Quick Actions</h2>
    <div class="space-y-3">
      <a href="#" class="flex items-center justify-between p-3.5 border border-gray-100 rounded-xl hover:shadow-md transition bg-white group cursor-pointer">
        <div class="flex items-center">
          <div class="w-10 h-10 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center group-hover:bg-blue-500 group-hover:text-white transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
            </svg>
          </div>
          <span class="font-semibold text-sm text-gray-700 ml-4">Write New Post</span>
        </div>
        <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </a>
      <a href="#" class="flex items-center justify-between p-3.5 border border-gray-100 rounded-xl hover:shadow-md transition bg-white group cursor-pointer">
        <div class="flex items-center">
          <div class="w-10 h-10 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center group-hover:bg-emerald-500 group-hover:text-white transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
          </div>
          <span class="font-semibold text-sm text-gray-700 ml-4">Update Gallery</span>
        </div>
        <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </a>
      <a href="#" class="flex items-center justify-between p-3.5 border border-gray-100 rounded-xl hover:shadow-md transition bg-white group cursor-pointer">
        <div class="flex items-center">
          <div class="w-10 h-10 rounded-lg bg-orange-50 text-orange-500 flex items-center justify-center group-hover:bg-orange-500 group-hover:text-white transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
            </svg>
          </div>
          <span class="font-semibold text-sm text-gray-700 ml-4">Manage Tickets</span>
        </div>
        <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </a>
      <a href="#" class="flex items-center justify-between p-3.5 border border-gray-100 rounded-xl hover:shadow-md transition bg-white group cursor-pointer">
        <div class="flex items-center">
          <div class="w-10 h-10 rounded-lg bg-purple-50 text-purple-600 flex items-center justify-center group-hover:bg-purple-500 group-hover:text-white transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
            </svg>
          </div>
          <span class="font-semibold text-sm text-gray-700 ml-4">Add User</span>
        </div>
        <svg class="w-4 h-4 text-gray-400 group-hover:text-gray-600 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </a>
    </div>
  </div>
</div>


<div class="bg-white rounded-[20px] p-7 border border-gray-100 shadow-sm mb-10">
  <div class="flex justify-between items-center mb-6">
    <h2 class="text-lg font-bold text-gray-900">Recent Contact Inquiries</h2>
    <a href="#" class="text-sm font-semibold text-emerald-600 hover:text-emerald-700 transition flex items-center">
      View All
      <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
      </svg>
    </a>
  </div>

  <div class="overflow-x-auto">
    <table class="w-full text-left border-collapse">
      <thead>
        <tr>
          <th class="pb-4 px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider border-b border-gray-100">ID</th>
          <th class="pb-4 px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider border-b border-gray-100">NAME</th>
          <th class="pb-4 px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider border-b border-gray-100">SUBJECT</th>
          <th class="pb-4 px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider border-b border-gray-100">DATE</th>
          <th class="pb-4 px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider border-b border-gray-100">STATUS</th>
          <th class="pb-4 px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider border-b border-gray-100">ACTION</th>
        </tr>
      </thead>
      <tbody class="text-sm text-gray-600">

        <?php if (!empty($data['pesan_terbaru'])) : ?>
          <?php foreach ($data['pesan_terbaru'] as $pesan) : ?>
            <?php
            $inisial = strtoupper(substr($pesan['nama_pengirim'], 0, 2));

            $badgeClass = '';
            $statusText = ucfirst($pesan['status']);
            if ($pesan['status'] == 'new') {
              $badgeClass = 'bg-emerald-50 text-emerald-600';
            } elseif ($pesan['status'] == 'read') {
              $badgeClass = 'bg-amber-50 text-amber-600';
            } else {
              $badgeClass = 'bg-gray-100 text-gray-500';
            }
            ?>
            <tr class="hover:bg-gray-50/50 transition border-b border-gray-50 last:border-0">
              <td class="py-4 px-3 text-gray-400 font-medium">#MSG-<?= $pesan['id']; ?></td>
              <td class="py-4 px-3 flex items-center space-x-3">
                <div class="w-8 h-8 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center font-bold text-xs tracking-wider">
                  <?= $inisial; ?>
                </div>
                <span class="font-semibold text-gray-900"><?= htmlspecialchars($pesan['nama_pengirim']); ?></span>
              </td>
              <td class="py-4 px-3 text-gray-500"><?= htmlspecialchars($pesan['subjek']); ?></td>
              <td class="py-4 px-3 text-gray-500"><?= date('d M Y, H:i', strtotime($pesan['created_at'])); ?></td>
              <td class="py-4 px-3">
                <span class="px-3 py-1 rounded-full text-xs font-semibold tracking-wide <?= $badgeClass; ?>">
                  <?= $statusText; ?>
                </span>
              </td>
              <td class="py-4 px-3">
                <a href="#" class="text-emerald-600 font-semibold hover:text-emerald-700 transition">View</a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else : ?>
          <tr>
            <td colspan="6" class="py-8 text-center text-gray-400 font-medium">Belum ada pesan masuk.</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>