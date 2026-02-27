<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $data['judul'] ?? 'Admin Panel'; ?></title>

  <link href="<?= BASEURL; ?>/css/output.css" rel="stylesheet">
  <link href="<?= BASEURL; ?>/css/admin-custom.css" rel="stylesheet">

  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800 font-sans antialiased overflow-hidden">

  <div class="flex h-screen w-full">

    <aside class="w-64 bg-white border-r border-gray-100 flex flex-col justify-between hidden md:flex">
      <div>
        <div class="h-20 flex items-center px-8 border-b border-gray-50">
          <div class="flex items-center space-x-2 text-xl font-bold text-gray-900">
            <svg class="h-6 w-6 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
            </svg>
            <span>Bantimurung</span>
          </div>
        </div>

        <div class="p-6">
          <div class="flex items-center space-x-3 bg-gray-50 p-3 rounded-xl border border-gray-100">
            <div class="w-10 h-10 rounded-full bg-gray-300 flex-shrink-0"></div>
            <div>
              <p class="text-sm font-bold text-gray-900">Admin User</p>
              <p class="text-xs text-gray-500">Administrator</p>
            </div>
          </div>
        </div>

        <nav class="px-4 space-y-1">
          <a href="<?= BASEURL; ?>/admin" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-sm font-medium <?= (isset($data['menu_aktif']) && $data['menu_aktif'] == 'dashboard') ? 'bg-emerald-50 text-emerald-600' : 'text-gray-600 hover:bg-gray-50' ?> transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
            </svg>
            <span>Dashboard</span>
          </a>

          <a href="<?= BASEURL; ?>/adminabout" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-sm font-medium <?= (isset($data['menu_aktif']) && $data['menu_aktif'] == 'about') ? 'bg-emerald-50 text-emerald-600' : 'text-gray-600 hover:bg-gray-50' ?> transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>About</span>
          </a>

          <a href="<?= BASEURL; ?>/adminblog" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-sm font-medium <?= (isset($data['menu_aktif']) && $data['menu_aktif'] == 'blog') ? 'bg-emerald-50 text-emerald-600' : 'text-gray-600 hover:bg-gray-50' ?> transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
            </svg>
            <span>Blog</span>
          </a>

          <a href="<?= BASEURL; ?>/admincontact" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-sm font-medium <?= (isset($data['menu_aktif']) && $data['menu_aktif'] == 'contact') ? 'bg-emerald-50 text-emerald-600' : 'text-gray-600 hover:bg-gray-50' ?> transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
            <span>Contact</span>
          </a>

          <a href="<?= BASEURL; ?>/adminsettings" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-sm font-medium <?= (isset($data['menu_aktif']) && $data['menu_aktif'] == 'settings') ? 'bg-emerald-50 text-emerald-600' : 'text-gray-600 hover:bg-gray-50' ?> transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <span>Settings</span>
          </a>
        </nav>
      </div>

      <div class="p-6">
        <a href="#" class="flex items-center space-x-3 px-4 py-3 text-sm font-medium text-red-500 hover:bg-red-50 rounded-xl transition">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
          </svg>
          <span>Logout</span>
        </a>
      </div>
    </aside>

    <main class="flex-1 flex flex-col h-screen overflow-hidden bg-gray-50">

      <header class="flex items-center justify-between px-10 pt-10 pb-4 z-10">

        <div>
          <?php if (isset($data['menu_aktif']) && $data['menu_aktif'] == 'dashboard') : ?>
            <h1 class="text-[28px] font-bold text-gray-900 mb-1 tracking-tight">Overview</h1>
            <p class="text-sm text-gray-500">Welcome back, Admin. Here's what's happening at the park today.</p>
          <?php endif; ?>
        </div>

        <div class="flex items-center space-x-6">
          <div class="relative hidden lg:block group">
            <svg class="w-4 h-4 text-gray-400 absolute left-4 top-1/2 transform -translate-y-1/2 group-focus-within:text-emerald-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            <input type="text" placeholder="Search..." class="bg-white shadow-sm border border-gray-100 text-sm rounded-full pl-11 pr-4 py-2.5 focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 w-72 transition">
          </div>
          <button class="relative text-gray-400 hover:text-emerald-500 transition bg-white p-2.5 rounded-full shadow-sm border border-gray-100">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
            <span class="absolute top-2 right-2.5 block h-2 w-2 rounded-full bg-red-500 ring-2 ring-white animate-pulse"></span>
          </button>
        </div>
      </header>

      <div class="flex-1 overflow-y-auto px-8 pb-8 pt-6">