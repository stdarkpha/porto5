<!DOCTYPE html>
<html class="bg-slate-900 text-slate-100" lang="en">
   <head>
      <title>Portofolio Farouq - About Me</title>
      <?php include('components/meta.php'); ?>
   </head>

   <body>
      <?php include('components/navbar.php'); ?>

      <!-- Contact Section -->
      <section id="contact" class="py-32">
         <div class="container mx-auto px-4">
            <h2 class="text-4xl text-center font-bold mb-6">Contact Me</h2>
            <form action="utils/send_contact.php" method="POST" class="bg-slate-800 p-6 rounded-lg shadow-md">
               <div class="mb-4">
                  <label for="name" class="block text-sm font-medium">Name</label>
                  <input type="text" id="name" name="name" class="mt-1 block w-full p-2 bg-slate-700 border border-slate-600 rounded-md" value="far" required />
               </div>
               <div class="mb-4">
                  <label for="email" class="block text-sm font-medium">Email</label>
                  <input type="email" id="email" name="email" class="mt-1 block w-full p-2 bg-slate-700 border border-slate-600 rounded-md" value="far@gmail.com" required />
               </div>
               <div class="mb-4">
                  <label for="message" class="block text-sm font-medium">Message</label>
                  <textarea id="message" name="message" rows="4" class="mt-1 block w-full p-2 bg-slate-700 border border-slate-600 rounded-md" required>faroq</textarea>
               </div>
               <div>
                  <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Send</button>
               </div>
            </form>
         </div>
      </section>

      <?php include('components/footer.php'); ?>
   </body>
</html>
