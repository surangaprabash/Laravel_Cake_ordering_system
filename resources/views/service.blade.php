<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="/bootstrap-5.3.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/css/stylehome.css">
    <script src="/bootstrap-5.3.2-dist/js/bootstrap.js"></script>
    <script src="/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="/jQuery/jQuery.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>


</head>
<body class="bg-gray-500">

<!-- nav bar -->
@include('nav')
<!-- end navbar -->
    
<section class="text-black-600 body-font">
        <div class="container px-1 py-10 mx-auto flex flex-col">
          <div class="lg:w-4/6 mx-auto">
            <div class="rounded-lg h-64 overflow-hidden">
              <img alt="content" class="object-cover object-center h-full w-full" src="/images/cake-1869227_1920.jpg">
            </div>
            <div class="flex flex-col sm:flex-row mt-10">
              <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                  </svg>
                </div>
                <div class="flex flex-col items-center text-center justify-center">
                  <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">IAD Group 11</h2>
                  <div class="w-12 h-1 bg-blue-500 rounded mt-2 mb-4"></div>
                  <p class="text-base">our mission is to sweeten life's moments by delivering joy, creativity, and exceptional taste through our delightful confections. We are dedicated to being the go-to platform for individuals and businesses seeking not just cakes, 
                    but experiences that elevate every celebration.
                </p>
                </div>
              </div>
              <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
                <p class="leading-relaxed text-lg mb-4">In a world filled with joyous celebrations and momentous occasions, Cake Paradise emerges as the sweet haven where your dessert dreams come to life. This online cake ordering platform is not just a website; it's an experience crafted to add a touch of sweetness to every celebration.
                    In the realm of online cake ordering, Cake Paradise stands out as more than just a service provider; it's a partner in creating memorable moments. With its user-friendly interface, customization options, secure transactions, swift deliveries, and a touch of community engagement, Cake Paradise is set to redefine how we experience the joy of sweet indulgence.
                    So, whether you're celebrating a birthday, an anniversary, or simply craving a slice of happiness, let Cake Paradise be your guide to a world of exquisite cakes and unparalleled sweetness.
                    Where Every Celebration Deserves a Slice of Perfection!
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Services -->
      <section class="text-gray-900 body-font">
        <div class="container px-1 py-1 mx-auto">
          <div class="flex flex-col text-center w-full mb-20">
            <h1 class="text-2xl font-large title-font mb-4 text-gray-900 tracking-widest">OUR SERVICES</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whether it's a birthday, wedding, or just a craving for something sweet, 
                here to turn ordinary moments into extraordinary memories. Join us on this sweet journey 
                as we continue to redefine the art of celebration, 
                one delicious cake at a time.</p>
          </div>
          <div class="flex flex-wrap -m-4">
            <div class="p-4 lg:w-1/2">
              <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="/images/serviceimg.jpg">
                <div class="flex-grow sm:pl-8">
                  <h2 class="title-font font-large text-lg text-gray-900">Custom Cakes</h2>
                  
                  <p class="mb-4">We create beautiful and delicious custom cakes for all occasions. Whether it's a birthday, wedding, or any special event, our skilled bakers will craft a unique cake just for you.</p>
                  <span class="inline-flex">
                    <a class="text-gray-500">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                      </svg>
                    </a>
                    <a class="ml-2 text-gray-500">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                      </svg>
                    </a>
                    <a class="ml-2 text-gray-500">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                      </svg>
                    </a>
                  </span>
                </div>
              </div>
            </div>
            <div class="p-4 lg:w-1/2">
              <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="/images/cupcakes-2285209_1920.jpg">
                <div class="flex-grow sm:pl-8">
                    <h2 class="title-font font-medium text-lg text-gray-900">Cupcakes</h2>
                 
                  <p class="mb-4">Enjoy the convenience of our cake delivery service. We deliver freshly baked cakes to your doorstep, ensuring that you can celebrate your special moments without any hassle.</p>
                  <span class="inline-flex">
                    <a class="text-gray-500">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                      </svg>
                    </a>
                    <a class="ml-2 text-gray-500">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                      </svg>
                    </a>
                    <a class="ml-2 text-gray-500">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                      </svg>
                    </a>
                  </span>
                </div>
              </div>
            </div>
            <div class="p-4 lg:w-1/2">
              <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="/images/bakery-1868396_1920.jpg">
                <div class="flex-grow sm:pl-8">
                  <h2 class="title-font font-medium text-lg text-gray-900">Master Chefs</h2>
                  
                  <p class="mb-4">In the heart of our bakery, magic happens every day. It's not just the aroma of freshly baked goods or the sight of beautifully decorated cakes that makes our patrons smile; it's the culinary artistry of our Master Baker</p>
                  <span class="inline-flex">
                    <a class="text-gray-500">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                      </svg>
                    </a>
                    <a class="ml-2 text-gray-500">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                      </svg>
                    </a>
                    <a class="ml-2 text-gray-500">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                      </svg>
                    </a>
                  </span>
                </div>
              </div>
            </div>
            <div class="p-4 lg:w-1/2">
              <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="/images/pexels-kindel-media-6869042.jpg">
                <div class="flex-grow sm:pl-8">
                  <h2 class="title-font font-medium text-lg text-gray-900">Fast & Safe Delivery</h2>
                 
                  <p class="mb-4">By prioritizing both speed and safety in the delivery process, a cake ordering website can build trust with customers and enhance their overall experience, making them more likely to return for future orders.</p>
                  <span class="inline-flex">
                    <a class="text-gray-500">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                      </svg>
                    </a>
                    <a class="ml-2 text-gray-500">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                      </svg>
                    </a>
                    <a class="ml-2 text-gray-500">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                      </svg>
                    </a>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


<!-- footer -->
@include('footer')
<!-- end footer -->
      
<script>
  var element = document.getElementById("act3");
  element.classList.add("active");
  var nav = document.getElementById("navbar");
  nav.classList.remove("fixed-top");
</script>

</body>
</html>