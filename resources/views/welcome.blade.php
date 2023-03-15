<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Tailwind CSS Page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css">
</head>
<body class="bg-gray-100">
  <header class="bg-white shadow-md">
    <div class="container mx-auto px-4 py-6 flex items-center justify-between">
      <h1 class="text-2xl font-bold text-gray-800">My Photo Gallery</h1>
      <nav class="text-gray-600">
        <a href="#" class="mx-4 hover:text-gray-800">Home</a>
        <a href="#" class="mx-4 hover:text-gray-800">Gallery</a>
        <a href="#" class="mx-4 hover:text-gray-800">About</a>
      </nav>
    </div>
  </header>
  <div class="container mx-auto px-4 py-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
    <img src="https://via.placeholder.com/500x500.png?text=Photo+1" alt="Photo 1" class="rounded-lg shadow-md">
    <img src="https://via.placeholder.com/500x500.png?text=Photo+2" alt="Photo 2" class="rounded-lg shadow-md">
    <img src="https://via.placeholder.com/500x500.png?text=Photo+3" alt="Photo 3" class="rounded-lg shadow-md">
    <img src="https://via.placeholder.com/500x500.png?text=Photo+4" alt="Photo 4" class="rounded-lg shadow-md">
    <img src="https://via.placeholder.com/500x500.png?text=Photo+5" alt="Photo 5" class="rounded-lg shadow-md">
    <img src="https://via.placeholder.com/500x500.png?text=Photo+6" alt="Photo 6" class="rounded-lg shadow-md">
  </div>
</body>
</html>
