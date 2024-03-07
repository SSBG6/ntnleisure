<!DOCTYPE html>
<html lang="en">  
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Honeymoon Tours: NTN Leisure</title>
  <link rel="icon" type="image/x-icon" href="imgs/NTNLOG.png">
  <meta name="description" content="Explore exciting destinations and plan your dream trip with NTN Leisure's day tours in Sri Lanka. Discover Negombo, Sigiriya, Dambulla, Sinharaja Forest, Colombo, Galle, Kandy, Kitulgala, Anuradhapura, and Wilpattu National Park.">
  <meta name="keywords" content="Day Tours, NTN Leisure, Sri Lanka, Negombo, Sigiriya, Dambulla, Sinharaja Forest, Colombo, Galle, Kandy, Kitulgala, Anuradhapura, Wilpattu National Park">
  <meta name="robots" content="index, follow">
  <meta property="og:title" content="Honeymoon Tours: NTN Leisure">
  <meta property="og:description" content="Explore exciting destinations and plan your dream trip with NTN Leisure's day tours in Sri Lanka. Discover Negombo, Sigiriya, Dambulla, Sinharaja Forest, Colombo, Galle, Kandy, Kitulgala, Anuradhapura, and Wilpattu National Park.">
  <meta property="og:url" content="https://ntnleisure.com/Honeymoon.php">
  <meta property="og:type" content="website">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/packages.css">
</head>
<body>
  <?php include 'Navbar.php';?>
  <div class="loader"></div>
  <script src="js/loadscript.js"></script>
  <section class="cover">
        <div class="cover-text element">
            <h1>Honeymoon Tour</h1>
            <p>Discover the most romantic destinations for your dream honeymoon.</p>
            <p><strong>15 Days/14 Nights</strong></p>
        </div>
    </section>
    

    <section>
            <div class="package-class">
            <div class="days">
                <a>Day 1: Arrival / Pasyala</a></div>
                <p class="hidden-text">Arrive at Bandaranaike International Airport and transfer to Pasyala. Check-in at the hotel and spend the rest of the day relaxing and exploring the local area.</p>
            </div>
            <div class="package-class">
            <div class="days">
                <a>Day 2, 3 & 4: Pasyala / Anuradhapura / Cultural Triangle</a></div>
                <p class="hidden-text">Visit the ancient city of Anuradhapura, including the Sri Maha Bodhi, Jetavanarama Stupa, and other historical sites. On the next day, explore the medieval city of Polonnaruwa, including the Gal Vihara, the Royal Palace, and the Parakrama Samudra. On the third day, climb Sigiriya Rock Fortress, an ancient palace and fortress complex, and admire the stunning views from the top. Overnight stays in Pasyala and the Cultural Triangle.</p>
            </div>
            <div class="package-class">
            <div class="days">
                <a>Day 5 & 6: Cultural Triangle / Kandy</a></div>
                <p class="hidden-text">Visit the Temple of the Tooth, one of the most sacred Buddhist sites in Sri Lanka, and watch a cultural dance performance at the Kandy Cultural Centre. On the next day, you can explore the Royal Botanical Gardens in Peradeniya. Overnight stay in Kandy.</p>
            </div>
            <div class="package-class">
            <div class="days">
                <a>Day 7 & 8: Kandy / Koslanda (Hill Country)</a></div>
                <p class="hidden-text">Visit a tea plantation and factory to learn about the tea-making process and sample different teas. Take a scenic train ride through the stunning landscapes of Sri Lanka's hill country. Visit the Ravana Falls and the Nine Arch Bridge in Ella. Overnight stay in Koslanda.</p>
            </div>
            <div class="package-class">
            <div class="days">
                <a>Day 9 & 10: Koslanda / Yala National Park</a></div>
                <p class="hidden-text">Go on a safari in Yala National Park to see elephants, leopards, and other wildlife. Visit the Kataragama Temple, a holy site for Buddhists, Hindus, and Muslims. Overnight stay in Yala.</p>
            </div>
            <div class="package-class">
            <div class="days">
                <a>Day 11 & 12: Yala / Galle</a></div>
                <p class="hidden-text">Visit the historic Galle Fort, a UNESCO World Heritage Site. Explore the Dutch Reformed Church, the Galle Lighthouse, and other landmarks in the fort. Visit a turtle hatchery in Kosgoda to learn about turtle conservation and see baby turtles. Overnight stay in Galle.</p>
            </div>
            <div class="package-class">
            <div class="days">
                <a>Day 13 & 14: Galle / Bentota</a></div>
                <p class="hidden-text">Enjoy the beaches and watersports in Bentota, including surfing, windsurfing, and banana boating. Visit the Kosgoda Sea Turtle Conservation Project to see different species of turtles and learn about conservation efforts. On the next day, take a boat ride along the Bentota River to see mangroves, birdlife, and other natural attractions. Overnight stay in Bentota.</p>
            </div>
            <div class="package-class">
            <div class="days">
                <a>Day 15: Departure</a></div>
                <p class="hidden-text">Transfer to Bandaranaike International Airport for departure.</p>
            </div>
        </section>
 <?php include 'Footer.php';?>
 
  <script>
    document.querySelectorAll('.days').forEach(item => {
      item.addEventListener('click', event => {
          event.preventDefault();
          const parent = item.parentElement;
          const hiddenText = parent.querySelector('.hidden-text');
          hiddenText.classList.toggle('show');
          const shower = parent.querySelector('.days');
          if (hiddenText.classList.contains('show')) {
              shower.classList.toggle('show');
          } else {
              shower.classList.toggle('show');
          }
      });
  });
  </script>
</body>
<style>
  .cover{
    background-image: url('imgs/ntn_leisure_couple.jpg');
    height: 40vh;
    
  }
</style>
</html>