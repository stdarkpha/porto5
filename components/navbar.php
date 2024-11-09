<nav class="fixed transition-all w-full top-0 left-0 z-50 [&.active]:bg-slate-900/90 [&.active]:backdrop-blur-2xl">
   <div class="container mx-auto flex flex-row items-center justify-center gap-16 py-8">
      <a href="/">Home</a>
      <a href="about.php">About Me</a>
      <a href="experience.php">Experience</a>
      <img src="assets/logo.svg" class="max-w-32 h-auto" alt="F.A.R Logo" />
      <a href="portofolio.php">Portofolio</a>
      <a href="#">Services</a>
      <a href="contact.php">Contact</a>
   </div>
</nav>

<script>
   // if window scroll more than 100px, add bg-slate-900 to navbar
   window.addEventListener("scroll", () => {
      const navbar = document.querySelector("nav");
      if (window.scrollY > 100) {
         navbar.classList.add("active");
      } else {
         navbar.classList.remove("active");
      }
   });
</script>
