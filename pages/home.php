<header class="relative">
   <div class="container min-h-screen mx-auto flex flex-col items-center gap-8 py-16">
      <div class="py-24 flex flex-col items-center justify-center mt-16">
         <img class="max-w-screen-md w-full h-auto" src="./assets/name.svg" alt="name" />
         <div class="flex gap-4 items-center justify-center z-[2]">
            <iconify-icon class="text-3xl" icon="solar:map-arrow-right-bold"></iconify-icon>
            <span id="typewritter" class="text-8xl font-semibold">Programmer</span>
            <iconify-icon class="text-3xl" icon="solar:map-arrow-left-bold"></iconify-icon>
         </div>

         <div class="absolute">
            <div class="relative">
               <div class="max-w-xs aspect-square rounded-full overflow-hidden">
                  <img src="assets/photo.png" alt="foto" />
               </div>
               <div class="max-w-xs absolute top-0 left-0 -z-[1] aspect-square rounded-full overflow-hidden w-full bg-orange-600"></div>

               <div class="mt-8 text-slate-300">
                  With <b>10 Years</b> Experience <br />
                  Ready to help you grow your bussiness
               </div>
            </div>
         </div>
      </div>

      <div class="w-44 aspect-square relative rounded-full border-2 border-white flex flex-col items-center justify-center mt-auto">
         <p>Scroll Down</p>
         <iconify-icon class="absolute mt-16 animate-bounce" icon="iconamoon:arrow-down-2-fill"></iconify-icon>
      </div>
   </div>
   <div class="absolute top-0 left-0 w-full h-full -z-[5] opacity-10 grayscale">
      <img class="w-full h-full object-cover" src="https://images.pexels.com/photos/936722/pexels-photo-936722.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="background" />
   </div>
</header>

<!-- About Section -->
<section class="py-24">
   <div>
      <img class="w-full h-auto" src="assets/about.svg" alt="" />
   </div>
   <div class="container flex items-end gap-16 mx-auto -mt-10">
      <div class="max-w-screen-md">
         <h1 class="text-8xl font-bold">Farouq Mulya Al Simabua</h1>
         <p class="text-slate-300 text-xl mt-8 leading-loose">You can call me Far. As a highly skilled design, motion graphics, and web development professional, I bring <b>10 years</b> of diverse expertise to the table.</p>
      </div>
      <div class="w-48 h-48 bg-slate-950 rounded-full justify-center items-center inline-flex">
         <div class="text-white text-xl font-medium">Read More</div>
      </div>
   </div>
</section>

<!-- Experience Section -->
<section class="overflow-hidden">
   <div class="container mx-auto pt-24">
      <div class="relative flex items-center justify-start">
         <h1 class="text-3xl font-medium">Recent Projects</h1>

         <div class="w-screen left-[16%] absolute h-0.5 bg-white"></div>
      </div>
      <div class="grid grid-cols-3 content-center">
         <div class="py-16">
            <p class="text-xl font-semibold">Nearby Massage Landing</p>
            <p class="text-slate-300">Website development</p>
            <div class="flex flex-row items-center gap-4 mt-4">
               <h2 class="text-8xl font-bold">13</h2>
               <p class="text-lg">MEI / 2024</p>
            </div>
         </div>
         <div class="py-16">
            <p class="text-xl font-semibold">Nearby Massage Landing</p>
            <p class="text-slate-300">Website development</p>
            <div class="flex flex-row items-center gap-4 mt-4">
               <h2 class="text-8xl font-bold">13</h2>
               <p class="text-lg">MEI / 2024</p>
            </div>
         </div>
         <div class="py-16">
            <p class="text-xl font-semibold">Nearby Massage Landing</p>
            <p class="text-slate-300">Website development</p>
            <div class="flex flex-row items-center gap-4 mt-4">
               <h2 class="text-8xl font-bold">13</h2>
               <p class="text-lg">MEI / 2024</p>
            </div>
         </div>
      </div>

      <div class="relative flex flex-col items-center overflow-hidden mt-24">
         <h1 class="text-3xl font-medium">Completed Projects</h1>

         <h2 class="text-[600px] font-black mt-16 -mb-16 leading-[.75]">150+</h2>
      </div>
   </div>
</section>

<!-- Experience Section -->
<section class="bg-slate-100 overflow-x-hidden text-slate-800">
   <div class="container mx-auto pt-24 relative">
      <div class="grid gap-8 grid-cols-4 w-full mb-16">
         <div class="text-slate-400 text-xl">Work-Experience</div>
         <div class="col-span-3">
            <h1 class="text-slate-900 text-6xl uppercase font-bold">My Experience through<br />time-in-Time</h1>
         </div>
      </div>
      <?php for ($x = 1; $x <= 3; $x++) { ?>
      <div class="grid gap-8 grid-cols-4 w-full group">
         <div class="relative">
            <img class="absolute top-0 left-0 scale-0 origin-top-left group-hover:scale-100 transition-all" src="https://images.pexels.com/photos/323705/pexels-photo-323705.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Website" />
         </div>
         <div class="col-span-3 grid grid-cols-4 transition-all group-hover:bg-slate-200/50 group-hover:border-slate-400 border-b border-transparent p-4">
            <div>
               <div class="text-slate-400 text-xl">March 2023 - Today</div>
            </div>
            <div class="col-span-3 flex flex-row items-center gap-8">
               <div class="text-2xl">
                  <div>
                     <span class="font-semibold">IT Support & Programmer</span>
                     <span class="text-slate-600"> - PT Jasnita Telekomindo, Tbk</span>
                  </div>
                  <div class="flex items-center text-slate-500 gap-4 text-xl mt-2">
                     <iconify-icon icon="typcn:location"></iconify-icon>
                     South Jakarta, Jakarta, Indonesia
                  </div>
               </div>
               <div class="w-12 aspect-square rounded-full border-2 border-slate-200 transition-all group-hover:shadow-xl group-hover:bg-slate-900 group-hover:border-slate-900 group-hover:text-slate-200 text-slate-400 justify-center items-center flex">
                  <iconify-icon icon="iconamoon:arrow-right-2-duotone"></iconify-icon>
               </div>
            </div>
         </div>
      </div>
      <?php } ?>
      <div class="grid gap-8 grid-cols-4 my-8 w-full">
         <div class="relative"></div>
         <div class="col-span-3 grid grid-cols-4 p-4">
            <div class="flex items-start">
               <div class="p-2 flex items-center gap-4 border-2 border-slate-400 rounded-full">
                  <div class="w-10 aspect-square rounded-full flex items-center justify-center bg-slate-900">
                     <iconify-icon class="text-white text-xl" icon="iconamoon:arrow-right-2-duotone"></iconify-icon>
                  </div>
                  <p class="mr-3 text-xl text-slate-400">View More</p>
               </div>
            </div>
            <div class="col-span-3 flex flex-row items-center gap-8"></div>
         </div>
      </div>

      <div class="w-screen left-0 absolute h-0.5 bg-slate-400"></div>
   </div>
</section>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<section class="bg-slate-100 relative text-slate-800 z-[1]">
   <div class="container mx-auto pt-16">
      <div class="flex flex-row justify-between items-center">
         <div>
            <div class="text-slate-400 text-xl mb-4">List Services I Can Offer To You</div>
            <div class="flex flex-row flex-wrap max-w-screen-lg [&>div]:text-4xl [&>div]:font-bold gap-x-4 [&>div:hover]:text-orange-600 [&>div]:transition-all">
               <div>DESIGN /</div>
               <div>ILLUSTRATION /</div>
               <div>ANIMATION /</div>
               <div>BRANDING /</div>
               <div>DEVELOPMENT /</div>
               <div>IOT /</div>
               <div>SERVER /</div>
               <div>DIGITAL MARKETING</div>
            </div>
         </div>

         <div class="w-48 h-48 bg-slate-900 rounded-full justify-center items-center inline-flex">
            <iconify-icon class="text-2xl text-white absolute translate-x-10 -translate-y-4" icon="iconamoon:arrow-top-right-2-fill"></iconify-icon>
            <div class="text-white text-xl font-medium">
               View <br />
               Portofolio
            </div>
         </div>
      </div>
   </div>
   <div class="pl-[10vw] my-8 w-full block overflow-hidden">
      <div class="swiper">
         <div class="swiper-wrapper">
            <?php for ($x = 1; $x <= 10; $x++) { ?>
            <div class="swiper-slide">
               <img class="w-full h-full" src="https://images.pexels.com/photos/936722/pexels-photo-936722.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Slide 1" />
            </div>
            <?php } ?>
         </div>
      </div>
   </div>
   <div class="container mx-auto pb-16 flex items-center justify-between">
      <div>
         <div>Services I Can Offer</div>
         <div class="text-4xl font-semibold">
            Unlock Revenue Growth <br />
            for Your Business
         </div>
      </div>

      <div class="flex gap-4">
         <div id="prev" class="w-10 aspect-square rounded-full flex items-center justify-center bg-slate-900">
            <iconify-icon class="text-white text-xl" icon="iconamoon:arrow-left-2-duotone"></iconify-icon>
         </div>
         <div id="next" class="w-10 aspect-square rounded-full flex items-center justify-center bg-slate-900">
            <iconify-icon class="text-white text-xl" icon="iconamoon:arrow-right-2-duotone"></iconify-icon>
         </div>
      </div>
   </div>
   <div class="bg-orange-600 w-full h-1/2 bottom-0 left-0 content-[''] absolute -z-[1]"></div>
</section>

<section class="group h-[480px] flex items-center justify-center overflow-hidden relative">
   <div class="absolute z-10 flex items-center justify-center">
      <iconify-icon class="text-xl absolute" icon="heroicons:play-16-solid"></iconify-icon>
      <img style="animation-duration: 20s" src="assets/reel.svg" class="w-48 animate-spin" alt="showreel" />
   </div>
   <img src="https://img.youtube.com/vi/Y5SZd3byu6M/maxresdefault.jpg" class="group-hover:scale-110 transition-all group-hover:brightness-75 w-full h-full object-cover" alt="iframe-youtube" />
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Typewritter js -->
<script src="https://cdn.jsdelivr.net/npm/typewriter-effect@2.17.0/dist/core.js"></script>

<!-- Initialize Swiper -->
<script>
   var swiper = new Swiper(".swiper", {
      slidesPerView: 4,
      spaceBetween: 30,
      navigation: {
         nextEl: "#next",
         prevEl: "#prev",
      },
      autoplay: {
         delay: 2500,
         disableOnInteraction: false,
      },
   });

   var typewriter = new Typewriter("#typewritter", {
      loop: true,
      delay: 75,
   });

   typewriter.pauseFor(500).typeString("Programmer").pauseFor(1000).deleteAll().typeString("Designer").pauseFor(1000).deleteAll().typeString("Animator").pauseFor(1000).start();
</script>
