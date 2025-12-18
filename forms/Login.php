<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.5/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.5/flowbite.min.js"></script>
  <style>
    .logo-img {
      width: 250px;
      height: auto;
      margin: 0 auto;
    }
  </style>
  <title>Christmas Log In</title>
</head>
<body class="bg-gradient-to-b from-[#1a472a] via-[#0d2818] to-[#1a472a] text-white min-h-screen flex items-center justify-center px-6 py-12">

  <div class="flex flex-col lg:flex-row w-full max-w-6xl bg-green-900/80 backdrop-blur-md rounded-2xl shadow-xl overflow-hidden">
    
    <!-- Left Side Content -->
    <div class="lg:w-1/2 hidden lg:flex flex-col justify-center items-center bg-green-800 p-10">
      <img src="https://images.seeklogo.com/logo-png/42/2/merry-christmas-logo-png_seeklogo-426633.png" alt="Christmas Illustration" class="logo-img mb-6" />
      <h2 class="text-3xl font-bold text-yellow-400 mb-4 text-center">Welcome to Your Christmas Dashboard</h2>
      <p class="text-white/80 text-center">
        Celebrate this festive season with joy, gifts, and surprises! Sign in to access your personalized Christmas experience.
      </p>
    </div>

    <!-- Right Side Form -->
    <div class="lg:w-1/2 w-full p-8 sm:p-12">
      <div class="text-center mb-8">
        <h2 class="text-2xl font-bold tracking-tight text-yellow-400">Log in to Your Christmas Account</h2>
        <p class="mt-2 text-sm text-white/80">Celebrate the season with your festive dashboard</p>
      </div>

      <form action="#" method="POST" class="space-y-6">
        
        <div>
          <label for="email" class="block text-sm font-medium text-yellow-400">Email Address</label>
          <input id="email" type="email" name="email" required autocomplete="email"
            class="mt-2 block w-full rounded-md bg-green-800/50 px-3 py-2 text-white placeholder:text-yellow-200/50 focus:outline-none focus:ring-2 focus:ring-yellow-400" />
        </div>

        <div>
          <label for="password" class="block text-sm font-medium text-yellow-400">Password</label>
          <input id="password" type="password" name="password" required autocomplete="current-password"
            class="mt-2 block w-full rounded-md bg-green-800/50 px-3 py-2 text-white placeholder:text-yellow-200/50 focus:outline-none focus:ring-2 focus:ring-yellow-400" />
        </div>

        <div class="flex items-center justify-between">
          <div class="flex items-center">
            <input id="remember" type="checkbox" class="h-4 w-4 text-yellow-400 bg-green-700 border-green-600 rounded focus:ring-yellow-400" />
            <label for="remember" class="ml-2 block text-sm text-white">Remember me</label>
          </div>
          <div class="text-sm">
            <a href="#" class="font-semibold text-yellow-400 hover:text-yellow-300">Forgot password?</a>
          </div>
        </div>

        <button type="submit"
          class="w-full rounded-md bg-yellow-400 px-3 py-2 text-green-900 font-semibold hover:bg-yellow-300 focus:ring-2 focus:ring-yellow-500 transition">
          Log In
        </button>
      </form>

      <p class="mt-6 text-center text-sm text-white/70">
        Not a member?
        <a href="#" class="font-semibold text-yellow-400 hover:text-yellow-300">Start your Christmas adventure</a>
      </p>
    </div>
  </div>

</body>
</html>
