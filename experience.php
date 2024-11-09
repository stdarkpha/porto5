<!DOCTYPE html>
<html class="bg-slate-900 text-slate-100" lang="en">
   <head>
      <title>Portofolio Farouq - Experience</title>
      <?php include('components/meta.php'); ?>
   </head>

   <body>
      <?php include('components/navbar.php'); ?>
      <?php include './utils/connection.php'; ?>
      <!-- Experience Section -->
      <section class="overflow-hidden">
         <div class="container mx-auto pt-32">
            <div class="relative flex items-center justify-start">
               <h1 class="text-3xl font-medium z-[1] bg-slate-900 pr-8">Recent Projects</h1>

               <div class="w-screen left-0 absolute h-0.5 bg-white"></div>
            </div>
            <div class="grid grid-cols-3 content-center">
               <div class="py-16">
                  <p class="text-xl font-semibold">NOA Talent</p>
                  <p class="text-slate-300">Company Profile & E-Commerce</p>
                  <div class="flex flex-row items-center gap-4 mt-4">
                     <h2 class="text-8xl font-bold">
                        <?= date('j') < 10 ? '0' . date('j') : date('j'); ?>
                     </h2>
                     <p class="text-lg">MEI / 2024</p>
                  </div>
               </div>
               <div class="py-16">
                  <p class="text-xl font-semibold">Xiaoken Shop</p>
                  <p class="text-slate-300">Website E-Commerce</p>
                  <div class="flex flex-row items-center gap-4 mt-4">
                     <h2 class="text-8xl font-bold">10</h2>
                     <p class="text-lg">NOV / 2024</p>
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
                  <?php
                  $query = "
                  SELECT 
                      id,
                      company,
                      role,
                      1 AS status, -- Start status is 1
                      STR_TO_DATE(start, '%Y-%m-%d') AS order_date
                  FROM experiences
                  UNION ALL
                  SELECT 
                      id,
                      company,
                      role,
                      0 AS status, -- End status is 0
                      STR_TO_DATE(end, '%Y-%m-%d') AS order_date
                  FROM experiences
                  WHERE end IS NOT NULL
                  UNION ALL
                  SELECT 
                      id,
                      company,
                      role,
                      NULL AS status, -- Set status as NULL for ongoing jobs
                      CURDATE() AS order_date
                  FROM experiences
                  WHERE end IS NULL
                  ORDER BY order_date DESC, id;
                  ";
                  
                  // Execute the query
                  $result = mysqli_query($conn, $query);
                  
                  $grouped_experiences = [];
                  
                  if (mysqli_num_rows($result) > 0) {
                      while ($row = mysqli_fetch_assoc($result)) {
                          $order_date = $row['order_date'];
                          $month_year = date('F Y', strtotime($order_date)); // Format the date as Month Year
                          
                          // Group experiences by month and year
                          if (!isset($grouped_experiences[$month_year])) {
                              $grouped_experiences[$month_year] = [];
                          }
                  
                          // Add experience data
                          $grouped_experiences[$month_year][] = [
                              'company' => $row['company'],
                              'role' => $row['role'],
                              'status' => $row['status'] // Add the status field (1, 0, or NULL)
                          ];
                      }
                  }
?>

<?php foreach ($grouped_experiences as $month_year => $companies): ?>
    <div class="swiper-slide select-none !w-auto py-16">
        <div class="text-orange-600 font-semibold"><?= htmlspecialchars($month_year); ?></div>
        <iconify-icon class="text-xs my-4 text-orange-600" icon="tabler:triangle-inverted-filled"></iconify-icon>

        <?php foreach ($companies as $company): ?>
            <p class="font-semibold"><?= htmlspecialchars($company['company']); ?></p>
            <p class="text-slate-400"><?= htmlspecialchars($company['role']); ?></p>
            <?php if ($company['status'] === '1'): ?>
               <p class="text-green-600">Started this month</p>
            <?php elseif ($company['status'] === '0'): ?>
               <p class="text-red-600">Ended this month</p>
            <?php elseif ($company['status'] === NULL): ?>
               <p class="text-blue-600">Currently Working</p>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
<?php endforeach; ?>
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
               freeMode: true,
               grabCursor: true,
               spaceBetween: 200,
               pagination: {
                  el: ".swiper-pagination",
                  clickable: true,
               },
            });
         </script>
         <?php

            $query = "SELECT * FROM experiences";
            $result = mysqli_query($conn, $query);
   
            if (mysqli_num_rows($result) > 0): 
         ?>
      
         <?php 
            $count = 0; 
            while ($row = mysqli_fetch_assoc($result))
            { 
               $count++;
               $start = DateTime::createFromFormat('Y-m-d', $row['start']);
               $end = $row['end'] ? DateTime::createFromFormat('Y-m-d', $row['end']) : null;
               
         ?>
         <div class="container mx-auto">
            <div class="mx-auto grid gap-8 border-b border-slate-300 mb-8 pb-4 grid-cols-4 w-full group">
               <div class="relative">
                  <div class="text-slate-400"><?= $start->format('Y F') . ' - ' . ($row['end'] ? $end->format('Y F') : 'Today') ?></div>
                  <div class="text-lg">
                     <div>
                        <span class="font-semibold">
                           <?= $row['role'] ?>
                        </span>
                        <span class="text-slate-600"> - 
                           <?= $row['company'] ?>
                        </span>
                     </div>
                     <div class="flex items-start text-orange-600 gap-2 mt-2">
                        <iconify-icon class="mt-1" icon="typcn:location"></iconify-icon>
                        <span><?= $row['location'] ?></span>
                     </div>
                  </div>
               </div>
               <div class="col-span-3 whitespace-pre-line leading-loose">
                  <?= $row['desc'] ?>
               </div>
            </div>
         </div>
         <?php } ?>
         <?php endif; ?>
      </section>

      <?php include('components/footer.php'); ?>
   </body>
</html>
