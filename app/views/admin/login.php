<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $data['judul']; ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }

    .bg-login-gradient {
      background: linear-gradient(135deg, #c49a6c 0%, #8ca18d 50%, #4f8279 100%);
    }
  </style>
</head>

<body class="bg-login-gradient h-screen w-full flex items-center justify-center relative overflow-hidden">

  <a href="<?= BASEURL; ?>/" class="absolute top-8 left-8 flex items-center text-white/90 hover:text-white font-medium text-sm transition">
    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
    </svg>
    Go back to website
  </a>

  <div class="bg-[#f2efe9] w-[400px] rounded-2xl p-10 shadow-2xl relative z-10">

    <div class="flex flex-col items-center mb-8">
      <div class="w-8 h-8 text-[#145d43] mb-3">
        <svg viewBox="0 0 24 24" fill="currentColor">
          <path d="M17.5,2.5c-4.6,0-9.1,2.8-11.4,7.3C4.8,12.4,4,15.6,4,18.8c0,0.6,0.6,1,1.1,0.8c2.6-0.9,5.2-1.6,7.9-1.6 c4.6,0,9.1-2.8,11.4-7.3c1.3-2.6,2.1-5.8,2.1-9c0-0.6-0.6-1-1.1-0.8C22.8,1.8,20.2,2.5,17.5,2.5z M13.8,13.8 c-1.5,1.5-3.5,2.5-5.6,3c0.3-2.2,1.3-4.2,2.8-5.8c1.5-1.5,3.5-2.5,5.6-3C16.3,10.3,15.3,12.3,13.8,13.8z" />
        </svg>
      </div>
      <h1 class="text-xl font-extrabold text-[#2a3632] tracking-tight">BANTIMURUNG</h1>
      <p class="text-[10px] font-bold text-gray-500 uppercase tracking-widest mt-1">National Park Admin</p>
    </div>

    <?php if (isset($_SESSION['login_error'])) : ?>
      <div class="mb-4 bg-red-100 border border-red-200 text-red-600 text-xs px-3 py-2 rounded-lg text-center font-medium">
        <?= $_SESSION['login_error']; ?>
      </div>
      <?php unset($_SESSION['login_error']); ?>
    <?php endif; ?>

    <form action="<?= BASEURL; ?>/login/authenticate" method="POST" class="space-y-5">
      <div>
        <label class="block text-[11px] font-bold text-gray-500 uppercase mb-1.5">Username or Email</label>
        <input type="text" name="username" required placeholder="Enter your username" class="w-full px-4 py-2.5 bg-white border border-gray-200 rounded text-sm text-gray-800 focus:outline-none focus:border-[#00b070] focus:ring-1 focus:ring-[#00b070] transition">
      </div>

      <div>
        <label class="block text-[11px] font-bold text-gray-500 uppercase mb-1.5">Password</label>
        <input type="password" name="password" required placeholder="••••••••" class="w-full px-4 py-2.5 bg-white border border-gray-200 rounded text-sm text-gray-800 focus:outline-none focus:border-[#00b070] focus:ring-1 focus:ring-[#00b070] transition">
      </div>

      <div class="flex items-center justify-between pt-1">
        <label class="flex items-center space-x-2 cursor-pointer">
          <input type="checkbox" class="w-3.5 h-3.5 text-[#00b070] rounded border-gray-300 focus:ring-[#00b070]">
          <span class="text-xs font-medium text-gray-500">Remember me</span>
        </label>
        <a href="#" class="text-xs font-bold text-[#00b070] hover:text-[#008a57] transition">Forgot password?</a>
      </div>

      <button type="submit" class="w-full py-3 mt-2 bg-[#00a86b] text-white rounded font-bold text-sm shadow-[0_4px_14px_0_rgba(0,168,107,0.39)] hover:bg-[#008f5a] hover:shadow-[0_6px_20px_rgba(0,168,107,0.23)] transition-all duration-200">
        Sign In
      </button>
    </form>

    <div class="mt-8 text-center">
      <p class="text-[10px] font-medium text-gray-400">© 2026 Bantimurung National Park System</p>
    </div>
  </div>

</body>

</html>