<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Tailwind CSS Page</title>
  <link rel="stylesheet" href="{{ asset('assets/css/taiwindcss.css') }}">
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
  <header class="bg-white shadow-md">
    <div class="container mx-auto px-4 py-6 flex items-center justify-between">
      <h1 class="text-2xl font-bold text-gray-800">My Photo Gallery</h1>
      <nav class="text-gray-600">
        <a href="homePage" class="mx-4 hover:text-gray-800">Home</a>
        <a href="galleryPage" class="mx-4 hover:text-gray-800">Gallery</a>
        <a href="aboutPage" class="mx-4 hover:text-gray-800">About</a>
    </nav>
</div>
</header>

    @yield('newblade')
    @yield('body')

  <footer class="bg-gray-800 text-white">
    <div class="container mx-auto px-4 py-6 flex justify-between">
      <p>© 2023 My Photo Gallery. All rights reserved.</p>
      <nav>
        <a href="#" class="mx-4 hover:text-gray-300">Privacy Policy</a>
        <a href="#" class="mx-4 hover:text-gray-300">Terms of Service</a>
      </nav>
    </div>
  </footer>

  <script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>
</html>