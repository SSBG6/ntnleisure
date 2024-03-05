<footer id="Footer element">
  <div class="footer-col">
    <div class="footer-info">
    <div class="footer-left">
        
          <div class="footer-content">
          <div class="footer-logo">
            <img width="auto" height="130" src="imgs/NTNLOG.png" alt="NTN Logistics - Footer Logo">
          </div>  
          <a href="mailto:nalaka@ntnleisure.com">Email us: nalaka@ntnleisure.com</a>
          <a href="mailto:sales@ntnleisure.com">/ sales@ntnleisure.com</a>
          <a href="mailto:shamika@ntnleisure.com">/ shamika@ntnleisure.com</a><br>
            <a href="tel:+94766543874">Call us: +94766543874</a>
            <a href="tel:+94717779721">/ +94717779721</a><br>
          </div>
    </div>  
      
    </div>
  </div>
<?php include 'inquiry.php'; ?>
  <div class="footer-right">
      <div class="footer-content">
      <ul>
        <li><h1></h1>USEFUL LINKS</li>
        <li><a href="http://www.immigration.gov.lk/" target="_blank" title="Department of Immigration">Department of Immigration</a></li>
        <li><a href="https://www.sltda.gov.lk/en" title="Sri Lanka Tourism">Sri Lanka Tourism</a></li>
        <li><a href="https://www.eta.gov.lk/etaslvisa/" title="Electronic Travel Authorization">Electronic Travel Authorization</a></li>
        <li><a href="https://www.srilanka.travel/foreign-embassies" title="Sri Lankan Embassies">Sri Lankan Embassies</a></li>
        <li><a href="http://www.dwc.gov.lk/" title="Department of Wildlife">Department of Wildlife</a></li>
        <li><a href="https://www.sltb.lk/" title="Sri Lanka Transport Board">Sri Lanka Transport Board</a></li>
        <li><a href="https://www.police.lk/" title="Sri Lanka Police">Sri Lanka Police</a></li>
        <li><a href="http://dmt.gov.lk/index.php?lang=en" title="Department of Motor Traffic">Department of Motor Traffic</a></li>
        <li><a href="https://www.airport.lk/" title="Airport & Aviation Services">Airport & Aviation Services</a></li>
      </ul>
    </div>
  </div>
</footer>
<style>
  /* Footer */
footer {
  background-color: black;
  padding: 20px;
  display: flex;
  justify-content: space-between;
  color: #white;
  text-decoration: none;  
  background-image: url('imgs/ntn-leisure-ntnleisure-colombo-city-lotus-tower-christoph-theisinger-9PPYa3LK6II-unsplash-.jpg');
  background-size: cover;
  backdrop-filter: blur(5px);
 
}

.footer-col {
  width: 50%;
}

.footer-header {
  font-weight: bold;
  
}
.footer-content {
  font-weight: bold;
}

.footer-content ul {
  list-style-type: none;
  padding: 0;
}

.footer-content ul li {
  margin-bottom: 5px;
}
.footer-content a {
  color: white;
  text-decoration: none;
}

.footer-content a:hover {
  text-decoration: underline;
}

.footer-right {
  display: flex;
  align-items: center;
  padding-right: 5vw;
  margin-left: 30px;
  color: #000;
}
.footer-right a{
  color: #000;
  font-weight: bold;
}
.footer-left {
  display: flex;
  align-items: center;
  padding-left: 5vw;
}
.footer-logo img {
  max-width: 300px;
  height: auto;
}
.footer-contact {
  text-decoration: none;
  list-style: none
}

.footer-contact ul {
  list-style-type: none;
  padding: 0;
  margin-left: 10px;
  
}

.footer-contact ul li {
  margin-bottom: 5px;
}

/* Responsive */
@media (max-width: 768px) {
    .footer-col {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;
}
.footer-right a{
  color: #fff;
}

.footer-logo img {
  width: 100%;
  height: auto;
}

.footer-content {
  margin-top: 10px; /* Adjust as needed */
  color: #fff;
}

  footer {
    flex-direction: column;
    align-items: center; /* Center align items horizontally */
  }

  .footer-col {
    width: 100%;
    margin-bottom: 10px;
  }
}
.footer-content {
  padding-right: 0px;
  align-items: center;
}
</style>

