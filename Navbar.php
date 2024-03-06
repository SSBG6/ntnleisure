<link rel="stylesheet" type="text/css" href="css/navbar.css">
<header class="sticky element">
    <div class="navbar">
        <div class="log">
        <a href="index.php" class="logo">NTN<span> Leisure</span></a></div>
        <div class="nav">
        <a href="index.php">Home</a>
        <a href="About.php">About Us</a>
        <a href="Daytour.php">Day Tours</a>
        <a href="Packages.php">Packages</a>
        <a href="Bespoke.php">Bespoke Experiences</a>
        <a href="Bespoke.php">Inquire Now</a>
        </div>
    </div>
    <div class="side">
    <div class="nav-side">
        <a href="index.php" class="logo">NTN<span> Leisure</span></a>
        <a href="index.php">Home</a>
        <a href="About.php">About Us</a>
        <a href="Daytour.php">Day Tours</a>
        <a href="Packages.php">Packages</a>
        <a href="Bespoke.php">Bespoke Experiences</a>
        <a href="Bespoke.php">Inquire Now</a>
    </div>
    </div>
    <div class="h-right">
    <div class="nav">
        <a href="" class='bx-fw bx bxl-instagram'></a>
        <a href="" class='bx-fw bx bxl-facebook-square'></a>
        <a href="https://wa.me/94766543874" class='bx-fw bx bxl-whatsapp'></a>
        </div>
        <a class="bi bi-list menu-icon" onclick="toggleSidebar()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
        </svg></a>
        <a class="bi bi-x-lg menu-icon close" onclick="toggleSidebar()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
         <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
            </svg></a>
    </div>
</header>
 <script>
    function toggleSidebar() {
    var sidebar = document.querySelector(".side");
    sidebar.classList.toggle("active");
    var sidebar = document.querySelector(".log");
    sidebar.classList.toggle("de-active");
    var sidebar = document.querySelector(".close");
    sidebar.classList.toggle("active");
}
const element = document.querySelector('.element');

if (!CSS.supports('backdrop-filter', 'blur(35px)')) {
  element.classList.add('no-backdrop-filter-support');
}
 </script>
 