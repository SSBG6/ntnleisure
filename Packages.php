<!DOCTYPE html>
<html lang="en">  
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Packages: NTN Leisure</title>
  <link rel="icon" type="image/x-icon" href="imgs/NTNLOG.png">
  <meta name="description" content="Explore exciting destinations with NTN Leisure's packages in Sri Lanka. Choose from Adventurous Sri Lanka Tour, Classic Sri Lankan Tour, Sri Lankan Wellness Tour, Sri Lankan Wildlife Tour, Family Holiday In Sri Lanka, Sri Lankan Beach Tour, and Personalised Tours.">
  <meta name="keywords" content="NTN Leisure, Sri Lanka, Packages, Adventurous Sri Lanka Tour, Classic Sri Lankan Tour, Sri Lankan Wellness Tour, Sri Lankan Wildlife Tour, Family Holiday In Sri Lanka, Sri Lankan Beach Tour, Personalised Tours">
  <meta name="robots" content="index, follow">
  <meta property="og:title" content="Packages: NTN Leisure">
  <meta property="og:description" content="Explore exciting destinations with NTN Leisure's packages in Sri Lanka. Choose from Adventurous Sri Lanka Tour, Classic Sri Lankan Tour, Sri Lankan Wellness Tour, Sri Lankan Wildlife Tour, Family Holiday In Sri Lanka, Sri Lankan Beach Tour, and Personalised Tours.">
  <meta property="og:url" content="https://ntnleisure.com/packages.php">
  <meta property="og:type" content="website">

  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>

<?php include 'Navbar.php';?>
<script src="js/loadscript.js"></script>
  <div class="loader"></div></div>
  
        <section class="cover">
            <div class="cover-content">
                <h1>Packages</h1>
                <p>Explore exciting destinations.</p>
        </div>
        </section>
      
        <div class="grid-container">

        <div class="grid-item">
          <img src="imgs/ntn-leisure-sri-lanka-srilankan-adventures.jpg">
          <div class="overlay">
            <div class="overlay-text">
            <h2>Adventurous Sri Lanka Tour</h2>
            <p>This program is a 15-day travel itinerary that takes you on a journey through Sri Lanka, exploring s...</p>
            <button class="read-more">Read More</button>  
          </div>
          </div>
        </div>
        <div class="grid-item">
          <img src="imgs/ntn-leisure-sigiriya.jpg">
          <div class="overlay">
          <div class="overlay-text">
            <h2>Classic Sri Lankan Tour</h2>
            <p>This program is a 15-day travel itinerary that takes you on a journey through the beautiful island o...</p>
            <button class="read-more">Read More</button>  
          </div>
          </div>
        </div>
        <div class="grid-item">
          <img src="imgs/ntn-leisure-meditation-wellness.jpg">
          <div class="overlay">
            <div class="overlay-text">
            <h2>Sri Lankan Wellness Tour</h2>
            <p>This program is a 13-day travel itinerary that takes you on a journey through the scenic beauty of S...</p>
            <button class="read-more">Read More</button>  
          </div>
            </div>
        </div>
        <div class="grid-item">
          <img src="imgs/ntn-leisure-yala-unawatuna-leopard.jpg">
          <div class="overlay">
          <div class="overlay-text">
            <h2>Sri Lankan Wildlife Tour</h2>
            <p>This program is a 15-day travel itinerary that takes you on a journey through the natural beauty of...</p>
            <button class="read-more">Read More</button>  
            </div>
          </div>
        </div>
        <div class="grid-item">
          <img src="imgs/ntn-leisure-family-beach-tour-holiday.jpg">
          <div class="overlay">
          <div class="overlay-text">
            <h2>Family Holiday In Sri Lanka</h2>
            <p>This travel program takes you on a 15-day journey through some of the most fascinating and beautiful...</p>
            <button class="read-more">Read More</button>  
          </div>
          </div>
        </div>
        <div class="grid-item">
          <img src="imgs/ntn-leisure-tea-and-beach.jpg">
          <div class="overlay">
          <div class="overlay-text">
            <h2>Sri Lankan Beach Tour</h2>
            <p>This program is a short 7-day trip around Sri Lanka, starting with arrival in Colombo and then headi...</p>
            <button class="read-more">Read More</button>
            </div>
            
          </div>
        </div>
        <div class="grid-item" onclick="window.location.href='Bespoke.php';" style="cursor: pointer;">
          <img src="imgs/ntn-leisure-9-archs.webp">
          <div class="overlay">
          <div class="overlay-text">
            <h2>Personalised Tours</h2>
            <p>Create an experience that suits your needs.</p>
            </div>
          </div>
        </div>
        </div>
      </div>
</section>
<?php include 'Footer.php';?>
</body>
<script>
  document.querySelectorAll('.read-more').forEach(item => {
    item.addEventListener('click', event => {
        event.preventDefault();
        const parent = item.parentElement;
        const hiddenText = parent.querySelector('.hidden-text');
        hiddenText.classList.toggle('show');
        if (hiddenText.classList.contains('show')) {
            item.textContent = 'Read Less';
        } else {
            item.textContent = 'Read More';
        }
    });
});
</script>
<style>
  .grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); /* 3x3 grid on larger screens */
    grid-gap: 5px;
    margin: 5px;
  }

  @media (max-width: 767px) {
    .grid-container {
      grid-template-columns: 1fr; /* 1x1 grid on smaller screens */
    }
    .cover {
            background-image: url('imgs/ntn-leisure-tour-srilanka-yala-unawatuna-sri-lanka-udara-karunarathna-Leopard-unsplash.jpg');
            height: 40vh;
            background-size: cover;
            position: relative;
            background-position: bottom;
            }
  }
  h2{
    font-size: 2vh;
  }
  .grid-item {
    border: 1px solid black;
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden; /* Ensure images don't overflow grid items */
  }

  .grid-item img {
    width: 100%; /* Make images fill the width of grid items */
    height: 100%; /* Make images fill the height of grid items */
    object-fit: cover; /* Maintain aspect ratio and fill the space */
  }

  .grid-item:hover .overlay {
    opacity: 1;
    visibility: visible;
  }

  .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    position: bottom;
    justify-content: flex-end; /* Align content to the bottom */
  }

  .overlay-text {
    padding: 5px;
    backdrop-filter: blur(100px);
    margin-top: auto; /* Push text to the bottom */
     }
  

  .read-more {
    background-color: transparent;
    color: white;
    border: 1px solid white;
    padding: 5px 10px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    border-radius: 50px;
    font-weight: bold;

  }

  .read-more:hover {
    background-color: var(--main-color);
    border: none;
  }

  .cover {
            background-image: url('imgs/ntn-leisure-tour-srilanka-yala-unawatuna-sri-lanka-udara-karunarathna-Leopard-unsplash.jpg');
            height: 40vh;
            background-size: cover;
            position: relative;
            background-position: center;
            }
        h1 {
            font-size: 4.5vh;
        }
            .cover-content {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            color: #fff;
            backdrop-filter: blur(30px);
            }       
</style>
