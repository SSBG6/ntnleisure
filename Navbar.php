<link rel="stylesheet" type="text/css" href="css/navbar.css">
<header class="sticky">
    <ul class="navbar">
        <a href="index.php" class="logo">NTN<span> Leisure</span></a>
        <a href="index.php">Home</a>
        <a href="About.php">About Us</a>
        <a href="Bespoke.php">Bespoke Experiences</a>
        <a href="Packages.php">Packages</a>
        <a href="Activities.php">Activities</a>
        <a href="Contact.php">Contact Us</a>
    </ul>
    <div class="h-right">
        <i class='bx-fw bx bxl-instagram'></i>
        <i class='bx-fw bx bxl-facebook-square'></i>
        <i class='bx-fw bx bxl-whatsapp'></i>
        <div class="bx bx-menu" id="menu-icon"></div>
    </div>
</header>
 <script>
    document.addEventListener('DOMContentLoaded', function() {
    const menuIcon = document.getElementById('menu-icon');
    const navbar = document.getElementById('navbar');

    menuIcon.addEventListener('click', function() {
        navbar.classList.toggle('responsive');
    });
});
 </script>