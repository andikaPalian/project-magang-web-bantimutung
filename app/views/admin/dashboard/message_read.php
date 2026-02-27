<div class="mb-8 flex items-center space-x-3">
  <a href="<?= BASEURL; ?>/admincontact" class="p-2.5 bg-white border border-gray-200 rounded-xl text-gray-500 hover:text-emerald-600 hover:bg-emerald-50 hover:border-emerald-200 transition shadow-sm">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
    </svg>
  </a>
  <div>
    <h1 class="text-[24px] font-bold text-gray-900 tracking-tight">Read Message</h1>
    <p class="text-sm text-gray-500 mt-0.5">Contact Inquiry Details.</p>
  </div>
</div>

<div class="bg-white rounded-[20px] shadow-sm border border-gray-100 overflow-hidden max-w-4xl">
  <div class="p-8 border-b border-gray-100">
    <h2 class="text-2xl font-bold text-gray-900 mb-6"><?= $data['message']['subjek']; ?></h2>

    <div class="flex items-center justify-between">
      <div class="flex items-center space-x-4">
        <?php
        $words = explode(" ", $data['message']['nama_pengirim']);
        $initials = "";
        foreach ($words as $w) {
          $initials .= $w[0];
        }
        $initials = strtoupper(substr($initials, 0, 2));
        ?>
        <div class="w-12 h-12 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-lg font-bold">
          <?= $initials; ?>
        </div>
        <div>
          <h4 class="text-base font-bold text-gray-900"><?= $data['message']['nama_pengirim']; ?></h4>
          <p class="text-sm text-gray-500"><?= $data['message']['email_pengirim']; ?></p>
        </div>
      </div>
      <div class="text-right">
        <p class="text-sm font-medium text-gray-900"><?= date('d F Y', strtotime($data['message']['created_at'])); ?></p>
        <p class="text-xs text-gray-500 mt-0.5"><?= date('h:i A', strtotime($data['message']['created_at'])); ?></p>
      </div>
    </div>
  </div>

  <div class="p-8 bg-gray-50/30">
    <div class="prose prose-sm max-w-none text-gray-700 leading-relaxed whitespace-pre-line">
      <?= htmlspecialchars($data['message']['isi_pesan']); ?>
    </div>
  </div>

  <div class="p-6 bg-gray-50 border-t border-gray-100 flex items-center justify-between">
    <a href="<?= BASEURL; ?>/admincontact/deleteMessage/<?= $data['message']['id']; ?>" onclick="return confirm('Hapus pesan ini dari sistem?');" class="px-5 py-2.5 bg-white border border-red-200 text-red-600 rounded-xl text-sm font-semibold hover:bg-red-50 transition shadow-sm flex items-center">
      <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
      </svg>
      Delete Message
    </a>

    <button type="button" onclick="document.getElementById('replyBox').classList.toggle('hidden')" class="px-6 py-2.5 bg-[#00d859] text-white rounded-xl text-sm font-bold hover:bg-emerald-500 transition shadow-sm flex items-center">
      <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"></path>
      </svg>
      Reply via System
    </button>
  </div>

  <div id="replyBox" class="hidden border-t-2 border-dashed border-gray-200 p-8 bg-white">
    <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
      <svg class="w-5 h-5 mr-2 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
      </svg>
      Compose Reply
    </h3>

    <form action="<?= BASEURL; ?>/admincontact/sendReply" method="POST">
      <input type="hidden" name="id" value="<?= $data['message']['id']; ?>">
      <input type="hidden" name="email_pengirim" value="<?= $data['message']['email_pengirim']; ?>">
      <input type="hidden" name="subjek_asli" value="<?= $data['message']['subjek']; ?>">

      <div class="mb-4">
        <p class="text-sm text-gray-500 mb-2">To: <span class="font-bold text-gray-800"><?= $data['message']['email_pengirim']; ?></span></p>
        <textarea name="pesan_balasan" required rows="6" placeholder="Ketik balasan email Anda di sini..." class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-sm text-gray-800 focus:outline-none focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500 transition resize-y"></textarea>
      </div>

      <div class="flex justify-end mt-4 pb-2">
        <button type="submit" class="px-8 py-3 bg-[#00d859] text-white rounded-xl text-sm font-bold hover:bg-emerald-500 transition shadow-sm flex items-center">
          <span>Send Email</span>
          <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
          </svg>
        </button>
      </div>
    </form>
  </div>

</div>
</div>