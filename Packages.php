<!DOCTYPE html>
<html lang="en">  
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Travel Website</title>

  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>

<?php include 'Navbar.php';?>
<style>
  h1{
    margin-bottom: 20px;
  }
</style>
  <section class="Home-T">
    <div class="home-texts">
    <h1>Packages</h1>
     <p>Welcome to NTN Logistics, your premier destination for exceptional Sri Lanka tours and luxury holidays! At NTN Logistics, we specialize in curating extraordinary travel experiences to Sri Lanka, showcasing the unmatched beauty and cultural diversity of this captivating island nation. Our meticulously crafted tours provide you with the opportunity to fully immerse yourself in the vibrant tapestry of Sri Lankan life, from its idyllic beaches to its ancient temples, verdant landscapes, and dynamic urban centers. Whether you're in search of a tranquil beach retreat, an enriching cultural journey, or a blend of both, our Sri Lanka tour packages are expertly designed to cater to your every preference. Embark on a journey of exploration with NTN Logistics, where you'll encounter the genuine warmth of Sri Lankan hospitality and forge cherished memories to last a lifetime. Discover the wonders of Sri Lanka with NTN Logistics, and let us bring your dream vacation to fruition</p>
     <div class="wrapper">
        <div class="card">
            <img src="imgs/premium_photo-1661957683219-f1656e9a46fb.webp">
             <div class="info" ></div>
             <h1>Adventures Sri Lanka</h1>
             <p class="hidden-text">This program is a 15-day travel itinerary that takes you on a journey through Sri Lanka, exploring some of its most breathtaking destinations. The trip begins with two days in Kalpitiya, a coastal town known for its stunning beaches and water sports activities. From there, you will travel to the Cultural Triangle, where you will spend two days visiting ancient ruins and historical sites.
                The following three days will be spent in the Knuckles mountain range, trekking and exploring the natural beauty of the region. You will then travel to Ella, a town famous for its scenic train ride and hiking trails, where you will spend two days.
                The next two days will be spent in Kithulgala, where you can engage in adventure activities such as white water rafting and zip-lining. You will also visit the Sinharajah rainforest, known for its unique flora and fauna.
                 The trip concludes with three days in Mirissa, a popular coastal town famous for its beautiful beaches and whale watching opportunities. The final day of the trip is dedicated to departure.</p>
                 <a href="#" class="read-more">Read More</a>
     </div>
     
     <div class="card">
        <img src="imgs/photo-1607672996533-98ec2fb71625.webp">
         <div class="info" ></div>
         <h1> Sri Lanka Tea and Beach</h1>
         <p class="hidden-text">
            This program is a short 7-day trip around Sri Lanka, starting with arrival in Colombo and then heading to Kandy for a day. The next two days are spent in Koslanda, which is known for its beautiful hills and tea plantations. After that, the tour moves to Galle for two days, where you can explore the colonial architecture and relax on the beach. Finally, the tour ends with departure from Galle.</p>
             <a href="#" class="read-more">Read More</a>

 </div>
 <div class="card">
    <img src="imgs/ele-2.jpeg">
     <div class="info" ></div>
     <h1>Wild Life Sri Lanka</h1>
<p class="hidden-text">
  This program is a 15-day travel itinerary that takes you on a journey through the natural beauty of Sri Lanka. The trip begins with one day in Chillaw, a coastal town. From there, you will travel to Wilpattu, Sri Lanka’s largest national park, for a day of wildlife spotting.
    The following two days will be spent in Bobilella, a town near Kandy, where you can explore the surrounding countryside. You will then travel to Gal Oya Eco Lodge for a night in a unique jungle lodge and a day of exploring Gal Oya National Park.
    The next two days will be spent in Yala, home to Sri Lanka’s most popular national park, where you can spot leopards, elephants, and other wildlife. You will then travel to Tangalle, a beach town known for its beautiful beaches and coral reefs.
    The following day will be spent exploring Sinharajah, a UNESCO World Heritage Site, and tropical rainforest is known for its unique flora and fauna. The final three days of the trip will be spent in Mirissa, a popular coastal town famous for its beautiful beaches and whale-watching opportunities. The trip concludes with a departure on day 15.
    </p>
         <a href="#" class="read-more">Read More</a>

</div>
<div class="card">
  <img src="imgs/tee.webp">
   <div class="info" ></div>
   <h1>Classic Sri lankan Tour</h1>
   <p class="hidden-text">
      This program is a 15-day travel itinerary that takes you on a journey through the beautiful island of Sri Lanka. The trip begins with one day in Negombo, a coastal town known for its fishing industry and beach resorts. From there, you will travel to Sigiriya, where you will spend the next three days exploring the famous Sigiriya Rock Fortress and other historical sites in the area.
      The following two days will be spent in Kandy, a city nestled in the hills, known for its cultural significance and picturesque surroundings. You will then travel to Ella, a charming town surrounded by rolling hills and tea plantations, where you will spend two days.
      The next two days will be spent in Yala, home to Sri Lanka’s most popular national park, where you can spot leopards, elephants, and other wildlife. You will then travel to Galle, a historic city on the southern coast known for its colonial architecture and UNESCO World Heritage Site.
      The final three days of the trip will be spent in Hikkaduwa, a beach town known for its coral reefs and water sports activities. The trip concludes with departure on day 15..</p>
       <a href="#" class="read-more">Read More</a>

</div>
    </div>
  </section>
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