<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.5/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.5/flowbite.min.js"></script>
  <style>
    .img{
        display: grid;
        justify-self: center;
        width: auto;
        height: 200px;
    }
  </style>
  <title>Christmas Sign In</title>
</head>
<body class="bg-gradient-to-b from-[#1a472a] via-[#0d2818] to-[#1a472a] text-white min-h-screen flex items-center justify-center px-6 py-12">

  <div class="w-full max-w-sm">
    <!-- Logo -->
    <div class="text-center">
      <img src="https://img.pikbest.com/origin/09/42/10/57bpIkbEsTHUh.png!sw800" alt="Christmas Logo" class="img" />
      <h2 class="mt-6 text-2xl font-bold tracking-tight text-yellow-400">Sign in to Your Christmas Account</h2>
      <p class="mt-2 text-sm text-white/80">Celebrate the season with your festive dashboard</p>
    </div>

    <!-- Form -->
    <form action="#" method="POST" class="mt-8 space-y-6 bg-green-900/80 p-6 rounded-xl shadow-lg backdrop-blur-md">
      
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
        Sign In
      </button>
    </form>

    <!-- Sign Up Link -->
    <p class="mt-6 text-center text-sm text-white/70">
      Not a member?
      <a href="#" class="font-semibold text-yellow-400 hover:text-yellow-300">Start your Christmas adventure</a>
    </p>
  </div>

</body>
</html>
