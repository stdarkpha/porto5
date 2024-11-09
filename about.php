<!DOCTYPE html>
<html class="bg-slate-900 text-slate-100" lang="en">
   <head>
      <title>Portofolio Farouq - About Me</title>
      <?php include('components/meta.php'); ?>
   </head>

   <body>
      <?php include('components/navbar.php'); ?>

      <!-- About Section -->
      <section class="py-24">
         <div>
            <img class="w-full h-auto" src="assets/about.svg" alt="" />
         </div>
         <div class="container mx-auto -mt-10">
            <div class="max-w-screen-md">
               <h1 class="text-8xl font-bold">Farouq Mulya Al Simabua</h1>
            </div>
            <div class="grid grid-cols-4 gap-8 my-8">
               <div>
                  <img src="assets/formal.png" alt="" />
               </div>
               <div class="col-span-3 [&>p]:mb-8 text-xl font-thin leading-relaxed tracking-wider">
                  <p>
                     You can call me Far. As a highly skilled design, motion graphics, and web development professional, I bring 10 years of diverse expertise to the table. My design capabilities allow me to craft visually captivating brand identities, marketing materials, and user interfaces that effectively communicate my clients' messages. In the realm of motion graphics, I excel at bringing static designs to life through seamless integration of animation, video, and sound - from product
                     explainer videos to social media promotions.
                  </p>

                  <p>Regarding web development, I possess the technical skills to design and develop custom websites that not only look great but also function seamlessly across devices and platforms. Whether it's e-commerce solutions or content management systems, I have a proven track record of delivering high-quality, on-brand deliverables that exceed my clients' expectations.</p>

                  <div class="grid grid-cols-3 gap-8 my-8">
                     <img src="/assets/gw.png" alt="gw" />
                     <img src="/assets/vector.png" alt="gw" />
                     <img src="/assets/farouq.png" alt="gw" />
                  </div>
               </div>
            </div>
         </div>
      </section>

      <?php include('components/footer.php'); ?>
   </body>
</html>
