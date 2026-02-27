<?php
$total_messages = count($data['messages']);
$unread_messages = 0;
$resolved_messages = 0;

foreach ($data['messages'] as $msg) {
  if ($msg['status'] == 'new') $unread_messages++;
  if ($msg['status'] == 'replied') $resolved_messages++;
}
?>

<?php if (isset($_SESSION['pesan_sukses'])) : ?>
  <div class="mb-6 bg-emerald-50 border border-emerald-200 text-emerald-700 px-4 py-3 rounded-xl relative flex items-center" role="alert">
    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
    </svg>
    <span class="block sm:inline font-medium"><?= $_SESSION['pesan_sukses']; ?></span>
  </div>
  <?php unset($_SESSION['pesan_sukses']); ?>
<?php endif; ?>

<div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
  <div>
    <h1 class="text-[28px] font-bold text-gray-900 tracking-tight">Contact Inquiries</h1>
    <p class="text-sm text-gray-500 mt-1">Manage incoming messages and support requests.</p>
  </div>
  <div class="flex items-center space-x-3 w-full md:w-auto">
    <div class="relative w-full md:w-64 group">
      <svg class="w-4 h-4 text-gray-400 absolute left-4 top-1/2 transform -translate-y-1/2 group-focus-within:text-emerald-500 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
      </svg>
      <input type="text" placeholder="Search inquiries..." class="w-full bg-white border border-gray-200 text-sm rounded-xl pl-11 pr-4 py-2.5 focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition shadow-sm">
    </div>
    <button class="flex items-center space-x-2 px-4 py-2.5 bg-white border border-gray-200 rounded-xl text-sm font-medium text-gray-700 hover:bg-gray-50 transition shadow-sm">
      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
      </svg>
      <span>Filter</span>
    </button>
  </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
  <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm flex items-center justify-between">
    <div>
      <p class="text-sm font-medium text-gray-500 mb-1">Total Messages</p>
      <h3 class="text-3xl font-bold text-gray-900"><?= number_format($total_messages); ?></h3>
    </div>
    <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center text-blue-500">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
      </svg>
    </div>
  </div>
  <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm flex items-center justify-between">
    <div>
      <p class="text-sm font-medium text-gray-500 mb-1">Unread</p>
      <h3 class="text-3xl font-bold text-gray-900"><?= number_format($unread_messages); ?></h3>
    </div>
    <div class="w-12 h-12 bg-emerald-50 rounded-xl flex items-center justify-center text-emerald-500">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
      </svg>
    </div>
  </div>
  <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm flex items-center justify-between">
    <div>
      <p class="text-sm font-medium text-gray-500 mb-1">Resolved Today</p>
      <h3 class="text-3xl font-bold text-gray-900"><?= number_format($resolved_messages); ?></h3>
    </div>
    <div class="w-12 h-12 bg-purple-50 rounded-xl flex items-center justify-center text-purple-500">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
      </svg>
    </div>
  </div>
</div>

<div class="bg-white rounded-[20px] shadow-sm border border-gray-100 overflow-hidden">
  <div class="overflow-x-auto">
    <table class="w-full text-left border-collapse">
      <thead>
        <tr class="border-b border-gray-100 bg-white">
          <th class="py-4 px-6 text-[11px] font-bold text-gray-400 uppercase tracking-wider">ID</th>
          <th class="py-4 px-6 text-[11px] font-bold text-gray-400 uppercase tracking-wider">Sender Name</th>
          <th class="py-4 px-6 text-[11px] font-bold text-gray-400 uppercase tracking-wider">Email</th>
          <th class="py-4 px-6 text-[11px] font-bold text-gray-400 uppercase tracking-wider">Subject</th>
          <th class="py-4 px-6 text-[11px] font-bold text-gray-400 uppercase tracking-wider">Date</th>
          <th class="py-4 px-6 text-[11px] font-bold text-gray-400 uppercase tracking-wider text-center">Status</th>
          <th class="py-4 px-6 text-[11px] font-bold text-gray-400 uppercase tracking-wider text-right">Actions</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-50">
        <?php if (empty($data['messages'])) : ?>
          <tr>
            <td colspan="7" class="py-10 text-center text-gray-500 text-sm">Belum ada pesan masuk.</td>
          </tr>
        <?php else : ?>
          <?php foreach ($data['messages'] as $msg) : ?>
            <tr class="hover:bg-gray-50/50 transition-colors group">
              <td class="py-4 px-6 text-sm font-medium text-gray-400">
                #<?= str_pad($msg['id'], 3, '0', STR_PAD_LEFT); ?>
              </td>

              <td class="py-4 px-6">
                <div class="flex items-center space-x-3">
                  <?php
                  $words = explode(" ", $msg['nama_pengirim']);
                  $initials = "";
                  foreach ($words as $w) {
                    $initials .= $w[0];
                  }
                  $initials = strtoupper(substr($initials, 0, 2));
                  $colors = ['bg-blue-100 text-blue-600', 'bg-orange-100 text-orange-600', 'bg-purple-100 text-purple-600', 'bg-yellow-100 text-yellow-600', 'bg-emerald-100 text-emerald-600'];
                  $colorClass = $colors[ord($initials[0]) % count($colors)];
                  ?>
                  <div class="w-8 h-8 rounded-full flex items-center justify-center text-xs font-bold <?= $colorClass; ?>">
                    <?= $initials; ?>
                  </div>
                  <span class="text-sm font-bold text-gray-900"><?= $msg['nama_pengirim']; ?></span>
                </div>
              </td>

              <td class="py-4 px-6"><span class="text-sm text-gray-500"><?= $msg['email_pengirim']; ?></span></td>

              <td class="py-4 px-6"><span class="text-sm font-medium text-gray-700 line-clamp-1 w-48"><?= $msg['subjek']; ?></span></td>

              <td class="py-4 px-6">
                <div class="flex flex-col">
                  <span class="text-sm text-gray-700"><?= date('M d, Y', strtotime($msg['created_at'])); ?></span>
                  <span class="text-xs text-gray-400"><?= date('h:i A', strtotime($msg['created_at'])); ?></span>
                </div>
              </td>

              <td class="py-4 px-6 text-center">
                <?php if ($msg['status'] == 'new') : ?>
                  <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-emerald-50 text-emerald-600 border border-emerald-100">Unread</span>
                <?php elseif ($msg['status'] == 'read') : ?>
                  <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-600 border border-gray-200">Read</span>
                <?php else : ?>
                  <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-purple-50 text-purple-600 border border-purple-100">Resolved</span>
                <?php endif; ?>
              </td>

              <td class="py-4 px-6 text-right">
                <div class="flex items-center justify-end space-x-2 text-gray-400">
                  <a href="<?= BASEURL; ?>/admincontact/show/<?= $msg['id']; ?>" class="p-1.5 text-gray-400 hover:text-emerald-500 hover:bg-emerald-50 rounded transition" title="View Message">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                  </a>
                  <a href="<?= BASEURL; ?>/admincontact/deleteMessage/<?= $msg['id']; ?>" onclick="return confirm('Hapus pesan ini?');" class="p-1.5 text-gray-400 hover:text-red-500 hover:bg-red-50 rounded transition" title="Delete Message">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
    <span class="text-sm text-gray-500">Showing <span class="font-bold text-gray-900"><?= count($data['messages']); ?></span> entries</span>
    <div class="flex items-center space-x-2">
      <button class="px-3 py-1.5 border border-gray-200 text-gray-500 text-sm font-medium rounded-lg hover:bg-gray-50 disabled:opacity-50 transition" disabled>Previous</button>
      <button class="px-3 py-1.5 border border-gray-200 text-gray-700 text-sm font-medium rounded-lg hover:bg-gray-50 transition">Next</button>
    </div>
  </div>
</div>