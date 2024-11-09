<!DOCTYPE html>
<html class="bg-slate-900 text-slate-100" lang="en">
   <head>
      <title>Portofolio Farouq - About Me</title>
      <?php include('components/meta.php'); ?>
   </head>

   <body>
      <?php include('components/navbar.php'); ?>

      <!-- Experience Section -->
      <section class="overflow-hidden">
         <div class="container mx-auto pt-32">
            <div class="relative flex items-center justify-start">
               <h1 class="text-3xl font-medium z-[1] bg-slate-900 pr-8">Recent Projects</h1>

               <div class="w-screen left-0 absolute h-0.5 bg-white"></div>
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

            <div class="relative flex flex-col items-center mt-24">
               <h1 class="text-3xl font-medium">Completed Projects</h1>

               <h2 class="text-[600px] font-black mt-16 -mb-16 leading-[.75]">150+</h2>
            </div>
         </div>
      </section>

      <!-- Experience Section -->
      <section class="bg-slate-100 overflow-hidden text-slate-800 py-24">
         <div class="container mx-auto grid gap-8 grid-cols-4 w-full">
            <div class="text-slate-400 text-xl">Work-Experience</div>
            <div class="col-span-3">
               <h1 class="text-slate-900 text-6xl uppercase font-bold">My Experience through<br />time-in-Time</h1>
            </div>
         </div>
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

         <div class="relative mb-8">
            <div class="w-full h-[1px] bg-slate-400 absolute top-[109px]"></div>
            <div class="container mx-auto">
               <div class="swiper mySwiper">
                  <div class="swiper-wrapper">
                     <?php for ($i = 1; $i <= 20; $i++) { ?>
                     <div class="swiper-slide !w-auto py-16">
                        <div class="text-orange-600">March 2023 - Now</div>
                        <iconify-icon class="text-xs my-4" icon="tabler:triangle-inverted-filled"></iconify-icon>
                        <p class="font-semibold">PT. Jasnita Telekomindo, Tbk</p>
                        <p class="text-slate-400">IT Support & Programmer</p>
                        <p class="font-semibold mt-4">Noa Talent Agency</p>
                        <p class="text-slate-400">Full-Stack Dev & Product Design</p>
                     </div>
                     <?php } ?>
                     <!-- Add more slides as needed -->
                  </div>
                  <!-- Add Pagination -->
                  <div style="--swiper-theme-color: #ff5e0d" class="swiper-pagination"></div>
               </div>
            </div>
         </div>

         <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
         <script>
            var swiper = new Swiper(".mySwiper", {
               slidesPerView: "auto",
               spaceBetween: 200,
               pagination: {
                  el: ".swiper-pagination",
                  clickable: true,
               },
               navigation: {
                  nextEl: ".swiper-button-next",
                  prevEl: ".swiper-button-prev",
               },
            });
         </script>
         <?php for ($x = 1; $x <= 3; $x++) { ?>
         <div class="container mx-auto">
            <div class="mx-auto grid gap-8 border-b border-slate-300 mb-8 pb-4 grid-cols-4 w-full group">
               <div class="relative">
                  <div class="text-slate-400">March 2023 - Today</div>
                  <div class="text-lg">
                     <div>
                        <span class="font-semibold">IT Support & Programmer</span>
                        <span class="text-slate-600"> - PT Jasnita Telekomindo, Tbk</span>
                     </div>
                     <div class="flex items-center text-orange-600 gap-2 mt-2">
                        <iconify-icon icon="typcn:location"></iconify-icon>
                        South Jakarta, Indonesia
                     </div>
                  </div>
               </div>
               <div class="col-span-3 whitespace-pre-line leading-loose">
                  As an IT Application Support Specialist at Jasnita Telekomindo Company, I was responsible for proactively monitoring and maintaining the company's mission-critical applications across various private and government projects. Key responsibilities included: + Performing comprehensive monitoring and root cause analysis to identify and resolve issues within enterprise applications. + Configuring and managing settings for CRM, CMS, and other client-facing applications to ensure
                  optimal performance. + Collaborating closely with the programming team to troubleshoot complex problems and implement effective solutions. + Conducting hardware maintenance and enforcing network security measures to protect client systems.Assisting with database management tasks and occasionally contributing to front-end website development during peak programming periods. + Serving as a technical liaison between clients and the IT department to ensure seamless application
                  support and user experiences. + Creating User Guides, delivering presentations and training sessions to educate end-users on leveraging the company's office applications effectively.Through my versatile IT skillset, solutions-oriented approach, and strong communication abilities, I played a crucial role in maintaining the reliability, security, and functionality of Jasnita Telekomindo's diverse application portfolio across numerous client engagements.
               </div>
            </div>
         </div>
         <?php } ?>
      </section>

      <?php include('components/footer.php'); ?>
   </body>
</html>
