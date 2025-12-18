<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="/src/tree.png">
  <title>Order Summary</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#1a472a] text-white antialiased">

  <!-- Progress Stepper -->
  <section class="max-w-4xl mx-auto mt-8 px-4 sm:px-6 lg:px-8">
    <ol class="flex w-full text-sm font-medium text-gray-500 sm:text-base">
      <li class="flex items-center after:flex-1 after:h-1 after:border-b after:border-gray-300 after:mx-4 after:hidden sm:after:block">
        <span class="flex items-center text-green-500">
          <svg class="h-5 w-5 mr-2 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
          </svg>
          Cart
        </span>
      </li>
      <li class="flex items-center after:flex-1 after:h-1 after:border-b after:border-gray-300 after:mx-4 after:hidden sm:after:block">
        <span class="flex items-center text-green-500">
          <svg class="h-5 w-5 mr-2 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
          </svg>
          Checkout
        </span>
      </li>
      <li class="flex items-center">
        <span class="flex items-center text-yellow-500">
          <svg class="h-5 w-5 mr-2 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
          </svg>
          Order Summary
        </span>
      </li>
    </ol>
  </section>

  <!-- Order Summary Content -->
  <section class="max-w-6xl mx-auto mt-10 px-4 sm:px-6 lg:px-8 lg:flex lg:gap-8">
    
    <!-- Left: Ordered Items -->
    <div class="w-full lg:w-2/3 space-y-6">
      <!-- Item 1 -->
      <div class="rounded-lg border border-[#d4af37]/30 bg-[#0d2818] p-4 shadow-md md:p-6">
    <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
      <a href="#" class="shrink-0 md:order-1">
        <img class="h-20 w-20" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front.svg" alt="imac image" />
      </a>
      <div class="flex items-center justify-between md:order-3 md:justify-end">
        <div class="flex items-center">
          <button class="inline-flex h-5 w-5 items-center justify-center rounded-md border border-[#d4af37]/50 bg-[#1a472a] text-[#d4af37] hover:bg-[#2b6a3c]">-</button>
          <input type="text" class="w-10 text-center bg-[#0d2818] text-white border-0" value="1" />
          <button class="inline-flex h-5 w-5 items-center justify-center rounded-md border border-[#d4af37]/50 bg-[#1a472a] text-[#d4af37] hover:bg-[#2b6a3c]">+</button>
        </div>
        <div class="text-end md:order-4 md:w-32">
          <p class="text-base font-bold text-[#d4af37]">$1,499</p>
        </div>
      </div>
      <div class="w-full flex-1 md:order-2 md:max-w-md">
        <a href="#" class="text-base font-medium text-white hover:underline">Apple iMac 24" M3, 8GB, SSD 256GB</a>
        <div class="flex items-center gap-4 mt-2">
          <button class="text-sm font-medium text-[#d4af37] hover:text-white">Add to Favorites</button>
          <button class="text-sm font-medium text-red-500 hover:text-red-400">Remove</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Cart Item 2 -->
  <div class="rounded-lg border border-[#d4af37]/30 bg-[#0d2818] p-4 shadow-md md:p-6">
    <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
      <a href="#" class="shrink-0 md:order-1">
        <img class="h-20 w-20" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/macbook-pro-light.svg" alt="MacBook Pro" />
      </a>
      <div class="flex items-center justify-between md:order-3 md:justify-end">
        <div class="flex items-center">
          <button class="inline-flex h-5 w-5 items-center justify-center rounded-md border border-[#d4af37]/50 bg-[#1a472a] text-[#d4af37] hover:bg-[#2b6a3c]">-</button>
          <input type="text" class="w-10 text-center bg-[#0d2818] text-white border-0" value="1" />
          <button class="inline-flex h-5 w-5 items-center justify-center rounded-md border border-[#d4af37]/50 bg-[#1a472a] text-[#d4af37] hover:bg-[#2b6a3c]">+</button>
        </div>
        <div class="text-end md:order-4 md:w-32">
          <p class="text-base font-bold text-[#d4af37]">$1,799</p>
        </div>
      </div>
      <div class="w-full flex-1 md:order-2 md:max-w-md">
        <a href="#" class="text-base font-medium text-white hover:underline">Apple MacBook Pro 16" Laptop, M3 Pro, 16GB, 512GB SSD</a>
        <div class="flex items-center gap-4 mt-2">
          <button class="text-sm font-medium text-[#d4af37] hover:text-white">Add to Favorites</button>
          <button class="text-sm font-medium text-red-500 hover:text-red-400">Remove</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Cart Item 3 -->
  <div class="rounded-lg border border-[#d4af37]/30 bg-[#0d2818] p-4 shadow-md md:p-6">
    <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
      <a href="#" class="shrink-0 md:order-1">
        <img class="h-20 w-20" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/iphone-light.svg" alt="iPhone" />
      </a>
      <div class="flex items-center justify-between md:order-3 md:justify-end">
        <div class="flex items-center">
          <button class="inline-flex h-5 w-5 items-center justify-center rounded-md border border-[#d4af37]/50 bg-[#1a472a] text-[#d4af37] hover:bg-[#2b6a3c]">-</button>
          <input type="text" class="w-10 text-center bg-[#0d2818] text-white border-0" value="2" />
          <button class="inline-flex h-5 w-5 items-center justify-center rounded-md border border-[#d4af37]/50 bg-[#1a472a] text-[#d4af37] hover:bg-[#2b6a3c]">+</button>
        </div>
        <div class="text-end md:order-4 md:w-32">
          <p class="text-base font-bold text-[#d4af37]">$1,199</p>
        </div>
      </div>
      <div class="w-full flex-1 md:order-2 md:max-w-md">
        <a href="#" class="text-base font-medium text-white hover:underline">Apple iPhone 15, 128GB, Midnight</a>
        <div class="flex items-center gap-4 mt-2">
          <button class="text-sm font-medium text-[#d4af37] hover:text-white">Add to Favorites</button>
          <button class="text-sm font-medium text-red-500 hover:text-red-400">Remove</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Cart Item 4 -->
  <div class="rounded-lg border border-[#d4af37]/30 bg-[#0d2818] p-4 shadow-md md:p-6">
    <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
      <a href="#" class="shrink-0 md:order-1">
        <img class="h-20 w-20" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/ipad-light.svg" alt="iPad" />
      </a>
      <div class="flex items-center justify-between md:order-3 md:justify-end">
        <div class="flex items-center">
          <button class="inline-flex h-5 w-5 items-center justify-center rounded-md border border-[#d4af37]/50 bg-[#1a472a] text-[#d4af37] hover:bg-[#2b6a3c]">-</button>
          <input type="text" class="w-10 text-center bg-[#0d2818] text-white border-0" value="1" />
          <button class="inline-flex h-5 w-5 items-center justify-center rounded-md border border-[#d4af37]/50 bg-[#1a472a] text-[#d4af37] hover:bg-[#2b6a3c]">+</button>
        </div>
        <div class="text-end md:order-4 md:w-32">
          <p class="text-base font-bold text-[#d4af37]">$799</p>
        </div>
      </div>
      <div class="w-full flex-1 md:order-2 md:max-w-md">
        <a href="#" class="text-base font-medium text-white hover:underline">Apple iPad Pro 12.9", 256GB, Wi-Fi, Silver</a>
        <div class="flex items-center gap-4 mt-2">
          <button class="text-sm font-medium text-[#d4af37] hover:text-white">Add to Favorites</button>
          <button class="text-sm font-medium text-red-500 hover:text-red-400">Remove</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Cart Item 5 -->
  <div class="rounded-lg border border-[#d4af37]/30 bg-[#0d2818] p-4 shadow-md md:p-6">
    <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
      <a href="#" class="shrink-0 md:order-1">
        <img class="h-20 w-20" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/apple-watch-light.svg" alt="Apple Watch" />
      </a>
      <div class="flex items-center justify-between md:order-3 md:justify-end">
        <div class="flex items-center">
          <button class="inline-flex h-5 w-5 items-center justify-center rounded-md border border-[#d4af37]/50 bg-[#1a472a] text-[#d4af37] hover:bg-[#2b6a3c]">-</button>
          <input type="text" class="w-10 text-center bg-[#0d2818] text-white border-0" value="1" />
          <button class="inline-flex h-5 w-5 items-center justify-center rounded-md border border-[#d4af37]/50 bg-[#1a472a] text-[#d4af37] hover:bg-[#2b6a3c]">+</button>
        </div>
        <div class="text-end md:order-4 md:w-32">
          <p class="text-base font-bold text-[#d4af37]">$399</p>
        </div>
      </div>
      <div class="w-full flex-1 md:order-2 md:max-w-md">
        <a href="#" class="text-base font-medium text-white hover:underline">Apple Watch Series 9, 41mm, Midnight Aluminum</a>
        <div class="flex items-center gap-4 mt-2">
          <button class="text-sm font-medium text-[#d4af37] hover:text-white">Add to Favorites</button>
          <button class="text-sm font-medium text-red-500 hover:text-red-400">Remove</button>
        </div>
      </div>
    </div>
  </div>

</div>

    <!-- Right: Summary Totals -->
    <div class="w-full lg:w-1/3 mt-6 lg:mt-0 space-y-6">
      <div class="rounded-lg border border-[#d4af37]/30 bg-[#0d2818] p-6 shadow-md">
        <h2 class="text-xl font-semibold text-[#d4af37] mb-4">Order Summary</h2>
        <div class="space-y-3">
          <div class="flex justify-between text-white">
            <span>Subtotal</span>
            <span>$5,395</span>
          </div>
          <div class="flex justify-between text-white">
            <span>Tax</span>
            <span>$400</span>
          </div>
          <div class="flex justify-between text-white">
            <span>Shipping</span>
            <span>$99</span>
          </div>
          <div class="flex justify-between text-[#d4af37] font-bold border-t border-[#d4af37]/30 pt-2 mt-2">
            <span>Total</span>
            <span>$5,894</span>
          </div>
        </div>
        <button class="w-full mt-4 py-3 bg-[#d4af37] text-[#0d2818] font-semibold rounded hover:bg-[#e6c247]"id="confirm">Confirm Order</button>
      </div>

      <div class="rounded-lg border border-[#d4af37]/30 bg-[#0d2818] p-6 shadow-md">
        <h2 class="text-lg font-semibold text-[#d4af37] mb-2">Need Help?</h2>
        <p class="text-white text-sm">Contact our support team for assistance with your order.</p>
        <a href="#" class="text-[#d4af37] hover:text-white underline mt-2 inline-block text-sm">Contact Support</a>
      </div>
    </div>

  </section>

  <script>

document.getElementById("confirm").addEventListener("click", ()=>{
      window.location.href="../home/main.php";
    });
  </script>

</body>
</html>
