<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Admin Dashboard</title>
      <?php include('../../components/meta.php'); ?>
   </head>
   <body class="bg-gray-100">
      <div class="container mx-auto p-4">
         <h1 class="text-2xl font-bold mb-4">Admin Dashboard</h1>

         <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-start">
            <!-- Experience List -->
            <form action="submit_exp.php" method="POST" class="bg-white p-4 rounded shadow">
               <h2 class="text-xl font-semibold mb-2">Experience List</h2>
               <input type="hidden" name="id" value="">
               <ul id="experience-list" class="list-disc pl-5">
                  <!-- Experience items will be added here -->
               </ul>
               <div class="flex justify-between gap-4">
                  <div class="w-full">
                     <div>Day Start</div>
                     <input name="start" type="date" class="border p-2 w-full mt-2" />
                  </div>
                  <div class="w-full">
                     <div>Day End</div>
                     <input name="end" type="date" class="border p-2 w-full mt-2" />
                  </div>
               </div>
               <div class="w-full">
                  <div>role</div>
                  <input name="role" type="text" class="border p-2 w-full mt-2" />
               </div>
               <div class="w-full">
                  <div>company</div>
                  <input name="company" type="text" class="border p-2 w-full mt-2" />
               </div>
               <div class="w-full">
                  <div>job desc</div>
                  <textarea name="desc" class="border p-2 w-full mt-2"></textarea>
               </div>
               <button name="submit" type="submit" class="bg-blue-500 text-white p-2 mt-2 w-full">Add Experience</button>
            </form>

            <!-- Portfolio -->
            <div class="bg-white p-4 rounded shadow">
               <h2 class="text-xl font-semibold mb-2">Portfolio</h2>
               <ul id="portfolio-list" class="list-disc pl-5">
                  <!-- Portfolio items will be added here -->
               </ul>
               <input type="text" id="portfolio-input" class="border p-2 w-full mt-2" placeholder="Add new portfolio item" />
               <button onclick="addPortfolio()" class="bg-blue-500 text-white p-2 mt-2 w-full">Add Portfolio</button>
            </div>

            <!-- Contact List -->
            <div class="bg-white p-4 rounded shadow">
               <h2 class="text-xl font-semibold mb-2">Contact List</h2>
               <ul id="contact-list" class="list-disc pl-5">
                  <!-- Contact items will be added here -->
               </ul>
               <input type="text" id="contact-input" class="border p-2 w-full mt-2" placeholder="Add new contact" />
               <button onclick="addContact()" class="bg-blue-500 text-white p-2 mt-2 w-full">Add Contact</button>
            </div>
         </div>

         <div class="mt-8 bg-white p-4 rounded shadow">
            <div class="flex justify-between items-center mb-4">
               <h1 class="text-2xl font-semibold text-center">Experience List</h1>
               <button onclick="modalExperience(this, 'add')" class="bg-blue-500 text-white text-xs px-4 rounded-md py-3">Add New</button>
            </div>
            <?php
            include '../../utils/connection.php';

            $query = "SELECT * FROM experiences";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) >
            0) { echo '
            
            <table class="min-w-full bg-white">
               <thead>
                  <tr>
                     <th class="border px-4 py-2">#</th>
                     <th class="border px-4 py-2">Role</th>
                     <th class="border px-4 py-2">Company</th>
                     <th class="border px-4 py-2">Start</th>
                     <th class="border px-4 py-2">End</th>
                     <th class="border px-4 py-2">Description</th>
                     <th class="border px-4 py-2">Actions</th>
                  </tr>
               </thead>
               <tbody>
                  '; $counter = 1; while ($row = mysqli_fetch_assoc($result)) { echo '
                  <tr>
                     <td class="border px-4 py-2">'.$counter.'</td>
                     <td class="border px-4 py-2">'.$row['role'].'</td>
                     <td class="border px-4 py-2">'.$row['company'].'</td>
                     <td class="border px-4 py-2">'.$row['start'].'</td>
                     <td class="border px-4 py-2">'.$row['end'].'</td>
                     <td class="border px-4 py-2">'.$row['desc'].'</td>
                     <td class="border px-4 py-2 flex items-center justify-center gap-4">
                        <button data-id="'.$row['id'].'" data-start="'.$row['start'].'" data-end="'.$row['end'].'" data-role="'.$row['role'].'" data-company="'.$row['company'].'" data-desc="'.$row['desc'].'" onclick="modalExperience(this, \'edit\')" class="bg-yellow-500 text-white text-xs px-4 rounded-md py-2">Edit</button>
                        <button onclick="deleteModal(\'exp\','.$row['id'].')" class="bg-red-500 text-white text-xs px-4 rounded-md py-2">Delete</button>
                     </td>
                  </tr>
                  '; $counter++; } echo '
               </tbody>
            </table>
            '; } else { echo '
            <p class="text-center">No experiences found.</p>
            '; } mysqli_close($conn); ?>
         </div>

         <!-- List Contact -->
         <div class="mt-8 bg-white p-4 rounded shadow">
            <div class="flex justify-center items-center mb-4">
               <h1 class="text-2xl font-semibold text-center">Contact List</h1>
            </div>
            <?php
            include '../../utils/connection.php';

            $query = "SELECT * FROM contacts";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
               echo '
               <table class="min-w-full bg-white">
                  <thead>
                    <tr>
                      <th class="border px-4 py-2">#</th>
                      <th class="border px-4 py-2">Name</th>
                      <th class="border px-4 py-2">Email</th>
                      <th class="border px-4 py-2">Message</th>
                      <th class="border px-4 py-2">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
               ';
               $counter = 1;
               while ($row = mysqli_fetch_assoc($result)) {
                  echo '
                  <tr>
                     <td class="border px-4 py-2">'.$counter.'</td>
                     <td class="border px-4 py-2">'.$row['name'].'</td>
                     <td class="border px-4 py-2">'.$row['email'].'</td>
                     <td class="border px-4 py-2">'.$row['message'].'</td>
                     <td class="border px-4 py-2 flex items-center justify-center gap-4">
                       <button onclick="deleteModal(\'contact\','.$row['id'].')" class="bg-red-500 text-white text-xs px-4 rounded-md py-2">Delete</button>
                     </td>
                  </tr>
                  ';
                  $counter++;
               }
               echo '
                  </tbody>
               </table>
               ';
            } else {
               echo '
               <p class="text-center">No contacts found.</p>
               ';
            }
            mysqli_close($conn);
            ?>
      </div>

      <div id="modal" class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center">
         <div class="bg-white p-6 rounded shadow-lg w-1/2"></div>
      </div>

      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

      <script>
         function toggleModal(content) {
            const modal = document.getElementById("modal");
            modal.classList.toggle("hidden");
            modal.querySelector("div").innerHTML = content;
         }

         function modalExperience(e, type) {
            // Get the experience data from the button
            const id = e.getAttribute("data-id") ?? '';
            const start = e.getAttribute("data-start") ?? '';
            const end = e.getAttribute("data-end") ?? '';
            const role = e.getAttribute("data-role") ?? '';
            const company = e.getAttribute("data-company") ?? '';
            const desc = e.getAttribute("data-desc") ?? '';

            const form = `
               <h2 class="text-xl font-semibold mb-4">${id ? "Edit" : "Add New"} Experience</h2>
               <form action="submit_exp.php" method="POST">
                  <input type="hidden" name="${id ? 'id' : ''}" value="${id}" />
                  <div class="mb-4">
                     <label for="modal-role" class="block text-sm font-medium text-gray-700">Role</label>
                     <input value="${role}" type="text" id="modal-role" name="role" class="border p-2 w-full mt-2" />
                  </div>
                  <div class="mb-4">
                     <label for="modal-company" class="block text-sm font-medium text-gray-700">Company</label>
                     <input value="${company}" type="text" id="modal-company" name="company" class="border p-2 w-full mt-2" />
                  </div>
                  <div class="flex justify-between gap-4">
                     <div class="w-full">
                        <div>Day Start</div>
                        <input value="${start}" name="start" type="date" class="border p-2 w-full mt-2" />
                     </div>
                     <div class="w-full">
                        <div>Day End</div>
                        <input value="${end}" name="end" type="date" class="border p-2 w-full mt-2" />
                     </div>
                  </div>
                  <div class="mb-4">
                     <label for="modal-desc" class="block text-sm font-medium text-gray-700">Description</label>
                     <textarea id="modal-desc" name="desc" class="border p-2 w-full mt-2">${desc}</textarea>
                  </div>
                  <div class="flex justify-end gap-4">
                     <button type="button" onclick="toggleModal('')" class="bg-gray-500 text-white p-2 rounded">Cancel</button>
                     <button type="submit" name="submit" class="bg-blue-500 text-white p-2 rounded">Save</button>
                  </div>
               </form>
            `;
            toggleModal(form);
         }

         function deleteModal(type, id) {
            console.log(type, id);
            swal({
               title: "Are you sure?",
               text: "Once deleted, you will not be able to recover this data!",
               icon: "warning",
               buttons: true,
               dangerMode: true,
            }).then((willDelete) => {
               if (willDelete) {
                  window.location.href = `delete.php?${type}=${id}`;
               }
            });
         }
      </script>
   </body>
</html>
