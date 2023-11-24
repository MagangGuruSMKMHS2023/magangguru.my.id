<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Navigation with Tailwind CSS and Heroicons</title>
</head>
<body class="font-sans bg-gray-100">

  <nav class="bg-blue-500 p-4">
    <ul class="flex space-x-4 items-center">
      <li>
        <a href="/" class="text-white flex items-center">
          <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h3v7h7v-7h5l-1.5-5L12 3 3 10zm6 0v7h6v-7"></path>
          </svg>
          Home
        </a>
      </li>
    </ul>
  </nav>

  <!-- Content goes here -->

</body>
</html>
