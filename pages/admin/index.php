<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Admin Dashboard</title>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.25.1/ui/trumbowyg.min.css">
      <script src="//cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.25.1/trumbowyg.min.js"></script>
      <?php include('../../components/meta.php'); ?>
   </head>
   <body class="bg-gray-100">
      <div class="container mx-auto p-4">
         <h1 class="text-2xl font-bold mb-4">Admin Dashboard</h1>
         <!-- List Experience -->
         <div class="mt-8 bg-white p-4 rounded shadow">
            <div class="flex justify-between items-center mb-4">
               <h1 class="text-2xl font-semibold text-center">Experience List</h1>
               <button onclick="modalExperience(this)" class="bg-blue-500 text-white text-xs px-4 rounded-md py-3">Add New</button>
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
                     <th class="border px-4 py-2">Location</th>
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
                     <td class="border px-4 py-2 role">'.$row['role'].'</td>
                     <td class="border px-4 py-2 company">'.$row['company'].'</td>
                     <td class="border px-4 py-2 location">'.$row['location'].'</td>
                     <td class="border px-4 py-2 start">'.$row['start'].'</td>
                     <td class="border px-4 py-2 end">'.($row['end'] ? $row['end'] : 'Current').'</td>
                     <td class="border px-4 py-2">
                        <div class="desc line-clamp-3">'.$row['desc'].'</div>
                     </td>
                     <td class="border px-4 py-2 flex items-center justify-center gap-4">
                        <button data-id="'.$row['id'].'" onclick="modalExperience(this)" class="bg-yellow-500 text-white text-xs px-4 rounded-md py-2">Edit</button>
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

         <!-- List Portofolio -->
         <div class="mt-8 bg-white p-4 rounded shadow">
            <div class="flex justify-between items-center mb-4">
               <h1 class="text-2xl font-semibold text-center">Portofolio List</h1>

               <button onclick="modalPortofolio(this)" class="bg-blue-500 text-white text-xs px-4 rounded-md py-3">Add New</button>
            </div>
            <?php
            include '../../utils/connection.php';

            $query = "SELECT * FROM portofolios";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
               echo '
               <table class="min-w-full bg-white">
                  <thead>
                    <tr>
                      <th class="border px-4 py-2">#</th>
                      <th class="border px-4 py-2">Name</th>
                      <th class="border px-4 py-2">Type</th>
                      <th class="border px-4 py-2">Image</th>
                      <th class="border px-4 py-2">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
               ';
               $counter = 1;
               while ($row = mysqli_fetch_assoc($result)) {
                  echo '
                  <tr>
                     <td class="px-4 py-2">'.$counter.'</td>
                     <td class="px-4 py-2">'.$row['name'].'</td>
                     <td class="px-4 py-2">'.$row['type'].'</td>
                     <td class="px-4 py-2"><img src="../../assets/upload/'.$row['img'].'" class="w-20 h-20 object-cover" /></td>
                     <td class="px-4 py-2 flex items-center justify-center gap-4">
                        <button data-id="'.$row['id'].'" data-name="'.$row['name'].'" data-type="'.$row['type'].'" data-img="'.$row['img'].'" onclick="modalPortofolio(this)" class="bg-yellow-500 text-white text-xs px-4 rounded-md py-2">Edit</button>
                       <button onclick="deleteModal(\'porto\','.$row['id'].')" class="bg-red-500 text-white text-xs px-4 rounded-md py-2">Delete</button>
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
               <p class="text-center">No portofolios found.</p>
               ';
            }
            mysqli_close($conn);
            ?>
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

      <div id="modal" class="hidden fixed inset-0 flex items-center justify-center">
         <div class="bg-white z-[1] max-h-[500px] overflow-auto p-6 rounded shadow-lg w-1/2"></div>
         <!-- Close -->
         <div onclick="toggleModal('')" class="w-full h-full cursor-pointer bg-gray-600 bg-opacity-50 backdrop-blur-sm fixed inset-0"></div>
      </div>

      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

      <script>
         function toggleModal(content) {
            const modal = document.getElementById("modal");
            modal.classList.toggle("hidden");
            modal.querySelector("div").innerHTML = content;
         }

         function modalExperience(e) {
            // Get the experience data from the button
            const id = e.getAttribute("data-id");
            let start, end, role, company, location, desc;
            
            if(id) {
               const row = e.closest('tr');
               start = row.querySelector(".start").innerText;
               end = row.querySelector(".end").innerText;
               role = row.querySelector(".role").innerText;
               company = row.querySelector(".company").innerText;
               location = row.querySelector(".location").innerText;
               desc = row.querySelector(".desc").innerHTML;            
            } else {
               start = '';
               end = '';
               role = '';
               company = '';
               location = '';
               desc = '';
            }

            const form = `
               <h2 class="text-xl font-semibold mb-4">${id ? "Edit" : "Add New"} Experience</h2>
               <form action="submit_exp.php" method="POST">
                  <input type="hidden" name="${id ? 'id' : ''}" value="${id}" />
                  <div class="mb-4">
                     <label for="modal-role" class="block text-sm font-medium text-gray-700">Role</label>
                     <input value="${role}" type="text" id="modal-role" name="role" class="border p-2 w-full mt-2" />
                  </div>
                  <div class="mb-4">
                     <label class="block text-sm font-medium text-gray-700">Company</label>
                     <input value="${company}" type="text" name="company" class="border p-2 w-full mt-2" />
                  </div>
                  <div class="mb-4">
                     <label class="block text-sm font-medium text-gray-700">Location</label>
                     <input value="${location}" type="text" name="location" class="border p-2 w-full mt-2" />
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

            $('textarea').trumbowyg();
         }

         function modalPortofolio(e) {
            const id = e.getAttribute("data-id") ?? '';
            const name = e.getAttribute("data-name") ?? '';
            const type = e.getAttribute("data-type") ?? '';
            const img = e.getAttribute("data-img") ?? '';

            const form = `
               <h2 class="text-xl font-semibold mb-4">${id ? "Edit" : "Add New"} Portofolio</h2>
               <form action="submit_porto.php" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="${id ? 'id' : ''}" value="${id}" />
                  <div class="mb-4">
                     <label for="modal-name" class="block text-sm font-medium text-gray-700">Name</label>
                     <input value="${name}" type="text" id="modal-name" name="name" class="border p-2 w-full mt-2" />
                  </div>
                  <div class="mb-4">
                     <label for="modal-type" class="block text-sm font-medium text-gray-700">Type</label>
                     <select id="modal-type" name="type" class="border p-2 w-full mt-2">
                        <option value="">Choose Type</option>
                        <option value="1" ${type == 1 ? 'selected' : ''}>Design</option>
                        <option value="2" ${type == 2 ? 'selected' : ''}>Animation</option>
                        <option value="3" ${type == 3 ? 'selected' : ''}>Development</option>
                     </select>
                  </div>
                  <div class="mb-4">
                     <label for="modal-img" class="block text-sm font-medium text-gray-700">Image</label>
                     <input type="file" id="modal-img" name="img" class="border p-2 w-full mt-2" />
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
