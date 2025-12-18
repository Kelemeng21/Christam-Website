

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./cart.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Tailwind CSS CDN -->
        <script src="https://cdn.tailwindcss.com"></script>

<!-- Flowbite CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.5/flowbite.min.css" rel="stylesheet" />
<!-- Flowbite JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.5/flowbite.min.js"></script>
    <title>Document</title>
</head>
<body>


<section class="py-8 antialiased bg-[#1a472a] md:py-16">
  <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
    <h2 class="text-xl font-semibold text-[#d4af37] sm:text-2xl">Shopping Cart</h2>

    <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
      
<!-- Left Side: Cart Items -->
<div class="w-full lg:w-2/3 space-y-6">

<ol class="flex w-full  mx-auto text-sm font-medium text-gray-500 sm:text-base">
  <!-- Step 1: Cart -->
  <li class="flex items-center after:flex-1 after:h-1 after:border-b after:border-gray-300 after:mx-4 after:hidden sm:after:block">
    <span class="flex items-center text-green-600">
      <svg class="h-5 w-5 mr-2 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
      </svg>
      Cart
    </span>
  </li>

  <!-- Step 2: Checkout -->
  <li class="flex items-center after:flex-1 after:h-1 after:border-b after:border-gray-300 after:mx-4 after:hidden sm:after:block">
    <span class="flex items-center text-yellow-500">
      <svg class="h-5 w-5 mr-2 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
      </svg>
      Checkout
    </span>
  </li>

  <!-- Step 3: Order Summary -->
  <li class="flex items-center">
    <span class="flex items-center text-gray-400">
      <svg class="h-5 w-5 mr-2 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
      </svg>
      Order Summary
    </span>
  </li>
</ol>

  
  <!-- Cart Item 1 -->
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


      <!-- Right Side: Order Summary / Additional Content -->
      <div class="w-full lg:w-1/3 mt-6 lg:mt-0 lg:pl-6 space-y-6">
        <div class="rounded-lg border border-[#d4af37]/30 bg-[#0d2818] p-4 shadow-md sm:p-6">
          <p class="text-xl font-semibold text-[#d4af37]">Order Summary</p>
          <div class="space-y-4 mt-4">
            <dl class="flex items-center justify-between gap-4">
              <dt class="text-base font-normal text-white">Original price</dt>
              <dd class="text-base font-medium text-[#d4af37]">$7,592.00</dd>
            </dl>
            <dl class="flex items-center justify-between gap-4">
              <dt class="text-base font-normal text-white">Savings</dt>
              <dd class="text-base font-medium text-green-500">-$299.00</dd>
            </dl>
            <dl class="flex items-center justify-between gap-4">
              <dt class="text-base font-normal text-white">Store Pickup</dt>
              <dd class="text-base font-medium text-[#d4af37]">$99</dd>
            </dl>
            <dl class="flex items-center justify-between gap-4">
              <dt class="text-base font-normal text-white">Tax</dt>
              <dd class="text-base font-medium text-[#d4af37]">$799</dd>
            </dl>
          </div>
          <dl class="flex items-center justify-between gap-4 border-t border-[#d4af37]/30 pt-2 mt-4">
            <dt class="text-base font-bold text-[#d4af37]">Total</dt>
            <dd class="text-base font-bold text-[#d4af37]">$8,191.00</dd>
          </dl>
          <a href="#" class="flex w-full items-center justify-center rounded-lg bg-[#d4af37] px-5 py-2.5 text-sm font-medium text-[#0d2818] hover:bg-[#e6c247] mt-4">Proceed to Checkout</a>
        </div>

        <!-- Additional Content -->
        <div class="rounded-lg border border-[#d4af37]/30 bg-[#0d2818] p-4 shadow-md sm:p-6">
          <p class="text-lg font-semibold text-[#d4af37]">Promotions & Coupons</p>
          <input type="text" placeholder="Enter coupon code" class="mt-2 w-full p-2 rounded bg-[#1a472a] text-white border border-[#d4af37]/50" />
          <button class="mt-2 w-full bg-[#d4af37] hover:bg-[#e6c247] text-[#0d2818] py-2 rounded font-medium">Apply</button>
        </div>

        <div class="rounded-lg border border-[#d4af37]/30 bg-[#0d2818] p-4 shadow-md sm:p-6">
          <p class="text-lg font-semibold text-[#d4af37]">Need Help?</p>
          <p class="text-white mt-2 text-sm">Contact our support team for assistance with your order.</p>
          <a href="#" class="mt-2 inline-block text-[#d4af37] hover:text-white underline text-sm">Contact Support</a>
        </div>
      </div>

    </div>
  </div>
</section>



</body>
</html>