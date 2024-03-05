<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <meta charset="UTF-8">
    <title>Create Your Own Experience: NTN Leisure</title>
  <link rel="icon" type="image/x-icon" href="imgs/NTNLOG.png">
  <meta name="description" content="Explore exciting destinations and plan your dream trip with NTN Leisure's day tours in Sri Lanka. Discover Negombo, Sigiriya, Dambulla, Sinharaja Forest, Colombo, Galle, Kandy, Kitulgala, Anuradhapura, and Wilpattu National Park.">
  <meta name="keywords" content="NTN Leisure, Sri Lanka, Negombo, Sigiriya, Dambulla, Sinharaja Forest, Colombo, Galle, Kandy, Kitulgala, Anuradhapura, Wilpattu National Park">
  <meta name="robots" content="index, follow">
  <meta property="og:title" content="Create Your Own Experience: NTN Leisure">
  <meta property="og:description" content="Explore exciting destinations and plan your dream trip with NTN Leisure's tours in Sri Lanka. Discover Negombo, Sigiriya, Dambulla, Sinharaja Forest, Colombo, Galle, Kandy, Kitulgala, Anuradhapura, and Wilpattu National Park.">
  <meta property="og:url" content="https://ntnleisure.com/Bespoke.php">
  <meta property="og:type" content="website">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Include necessary CSS files for the date range picker -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
</head>
</head>
<body>
    <?php include 'Navbar.php';?>

        <script src="js/loadscript.js"></script>
        <div class="loader"></div></div>
    <div>

        <section class="cover">
            <div class="cover-content">
                <h1>Customize Your Experience</h1>
                <p>Plan your dream trip with us</p>
        </div>
        </section>
    <section class="Bespoke">
        <form action="experiencemail.php" class="Bespoke-form" method="POST">
        <div class="form-group">
            <label for="title">Title</label>
            <select class="form-control" id="title" name="title" required>
            <option value="">Select title</option>
                <option value="Mr.">Mr</option>
                <option value="Mrs.">Mrs</option>
                <option value="Miss">Miss</option>
            </select>
            </div>
          <div class="form-group">
            <label for="inquiry-name">Name: *</label>
            <input type="text" class="form-control" id="inquiry-name" name="name" required>
          </div>
          <div class="form-group">
            <label for="inquiry-email">Email: *</label>
            <input type="email" class="form-control" id="inquiry-email" name="email" required>
          </div>
          <div class="form-group">
            <label for="inquiry-phone">Phone (with Country Code):</label>
            <input type="tel" class="form-control" id="inquiry-phone" name="phone">
          </div>
          <div class="form-group">
            <label for="inquiry-country">Country of residence: *</label>
            <select class="form-control" id="inquiry-country" name="country" required>
            <option value="">Select Country</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia (Plurinational State of)">Bolivia (Plurinational State of)</option>
                <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cabo Verde">Cabo Verde</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo (Democratic Republic of the)">Congo (Democratic Republic of the)</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Curaçao">Curaçao</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-Bissau">Guinea-Bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                <option value="Holy See">Holy See</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea (Democratic People's Republic of)">Korea (Democratic People's Republic of)</option>
                <option value="Korea (Republic of)">Korea (Republic of)</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libya">Libya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia (the former Yugoslav Republic of)">Macedonia (the former Yugoslav Republic of)</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia (Federated States of)">Micronesia (Federated States of)</option>
                <option value="Moldova (Republic of)">Moldova (Republic of)</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestine, State of">Palestine, State of</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Réunion">Réunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Barthélemy">Saint Barthélemy</option>
                <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Martin (French part)">Saint Martin (French part)</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                <option value="South Sudan">South Sudan</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-Leste">Timor-Leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom of Great Britain and Northern Ireland">United Kingdom of Great Britain and Northern Ireland</option>
                <option value="United States of America">United States of America</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela (Bolivarian Republic of)">Venezuela (Bolivarian Republic of)</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select>
          </div>
          <div class="form-group">
                <label for="inquiry-budget">Budget per person in USD (Amount excluding air tickets):</label>
                <input type="number" class="form-control" id="inquiry-budget" name="budget">
            </div>
            <div class="form-group">
            <label for="date-range">Arrival and Departure Dates:</label>
            <input type="text" class="form-control" id="date-range" name="date_range" readonly>
            </div>
            
            <div class="form-group">
                <label for="inquiry-no_of_nights">Number of nights:</label>
                <input type="number" class="form-control" id="inquiry-no_of_nights" name="no_of_nights">
            </div>
            <div class="form-group">
                <label for="inquiry-flexibility">Flexibility on dates:</label>
                <select class="form-control" id="inquiry-flexibility" name="flexibility">
                    <option value="">Select</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <h2>Number of Adults</h2>
            <div class="form-group">  
            <label for="a1317">Adults Age Group (13-17):</label>
                    <select name="a1317" id="a1317">
                    <!-- Numbers 1-15 for each age category -->
                    <option value="0">Select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    </select>
                    <br><br>
          </div>
                    <div class="form-group">  
                    <label for="a1864">Adults Age Group (18-64):</label>
                    <select name="a1864" id="a1864">
                    <!-- Numbers 1-15 for each age category -->
                    <option value="0">Select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    </select>
                    <br><br>
                    </div>
                    <div class="form-group">  
                    <label for="adults_65+">Adults Age Group (65 OR ABOVE):</label>
                    <select name="adults_65_quantity" id="adults_65_quantity">
                    <!-- Numbers 1-15 for each age category -->
                    <option value="0">Select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    </select>
            </div>
            <h2>Number of Children</h2>
            <div class="form-group">
            <label for="c02">Children Age Group (0-2):</label>
                    <select name="c02" id="c02">
                    <!-- Numbers 1-15 for each age category -->
                    <option value="0">Select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    </select>
                    <br><br>
                    </div>
                    <div class="form-group">  
                    <label for="c35">Children Age Group (3-5):</label>
                    <select name="c35" id="c35">
                    <!-- Numbers 1-15 for each age category -->
                    <option value="0">Select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    </select>
                    <br><br>
                    </div>
                    <div class="form-group">  
                    <label for="c611">Children Age Group (6-11):</label>
                    <select name="c611" id="c611">
                    <!-- Numbers 1-15 for each age category -->
                    <option value="0">Select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    </select>
            </div>
            <div class="form-group">
                <label for="inquiry-hotel_type">Price guide & select your hotel types:</label>
                <select id="hotel_type" name="hotel_type">
                <option value="">First Preference</option>
                <option value="luxury_boutique_hotel">Luxury Boutique Hotel</option>
                <option value="5_star_hotel">5 Star Hotel</option>
                <option value="4_star_hotel">4 Star Hotel</option>
                <option value="3_star_hotel">3 Star Hotel</option>
                <option value="standard_boutique_hotel">Standard Boutique Hotel</option>
                <option value="mixed_star_hotel">Mixed Star Hotel</option>
                <option value="budget_hotel">Budget Hotel</option>
                </select>
                </div>
                <div class="form-group">  
                <select id="hotel_type2" name="hotel_type2">
                <option value="">Second Preference</option>
                <option value="luxury_boutique_hotel">Luxury Boutique Hotel</option>
                <option value="5_star_hotel">5 Star Hotel</option>
                <option value="4_star_hotel">4 Star Hotel</option>
                <option value="3_star_hotel">3 Star Hotel</option>
                <option value="standard_boutique_hotel">Standard Boutique Hotel</option>
                <option value="mixed_star_hotel">Mixed Star Hotel</option>
                <option value="budget_hotel">Budget Hotel</option>
                </select>
            </div>
            <div class="form-group">
                <label for="inquiry-special_interests">Your special interest on your holiday:</label>
                <br>
                <div class="checkbox-container">
                    <input type="checkbox" id="inquiry-adventure" name="special_interests[]" value="adventure">
                    <label for="inquiry-adventure">Adventure</label>

                    <input type="checkbox" id="inquiry-ayurveda" name="special_interests[]" value="ayurveda">
                    <label for="inquiry-ayurveda">Ayurveda</label>

                    <input type="checkbox" id="inquiry-cultural" name="special_interests[]" value="cultural">
                    <label for="inquiry-cultural">Cultural</label>

                    <input type="checkbox" id="inquiry-exotic-beaches" name="special_interests[]" value="exotic_beaches">
                    <label for="inquiry-exotic-beaches">Exotic Beaches</label>
                    <br>
                    <input type="checkbox" id="inquiry-honeymoon" name="special_interests[]" value="honeymoon">
                    <label for="inquiry-honeymoon">Honeymoon</label>

                    <input type="checkbox" id="inquiry-insight-tea" name="special_interests[]" value="insight_to_the_tea">
                    <label for="inquiry-insight-tea">Insight into the tea</label>

                    <input type="checkbox" id="inquiry-meditation" name="special_interests[]" value="meditation">
                    <label for="inquiry-meditation">Meditation</label>

                    <input type="checkbox" id="inquiry-nature" name="special_interests[]" value="nature">
                    <label for="inquiry-nature">Nature</label>
                    <br>
                    <input type="checkbox" id="inquiry-photography" name="special_interests[]" value="photography">
                    <label for="inquiry-photography">Photography</label>

                    <input type="checkbox" id="inquiry-pilgrimage" name="special_interests[]" value="pilgrimage">
                    <label for="inquiry-pilgrimage">Pilgrimage</label>

                    <input type="checkbox" id="inquiry-relaxation" name="special_interests[]" value="relaxation">
                    <label for="inquiry-relaxation">Relaxation</label>

                    <input type="checkbox" id="inquiry-shopping" name="special_interests[]" value="shopping">
                    <label for="inquiry-shopping">Shopping</label>
                    <br>
                    <input type="checkbox" id="inquiry-sports" name="special_interests[]" value="sports">
                    <label for="inquiry-sports">Sports</label>

                    <input type="checkbox" id="inquiry-weddings" name="special_interests[]" value="weddings">
                    <label for="inquiry-weddings">Weddings</label>

                    <input type="checkbox" id="inquiry-wildlife" name="special_interests[]" value="wildlife">
                    <label for="inquiry-wildlife">Wildlife</label>

                    <input type="checkbox" id="inquiry-spas" name="special_interests[]" value="spas">
                    <label for="inquiry-spas">Spas</label>
                </div>
                <br>
            <div class="form-group">
                <label for="inquiry-requirements">Tell us how you want to spend your holiday or any special requirements:</label>
                <textarea class="form-control" id="inquiry-requirements" name="requirements"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        </section>
        <?php include 'Footer.php';?>
</body>
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
</html>

<script>
     $(function() {
      $('#date-range').daterangepicker({
        opens: 'left', // Position the calendar to the left of the input
        autoApply: true, // Automatically apply selection on choosing dates
        minDate: moment().toDate(), // Minimum selectable date is today
        startDate: moment().toDate(), // Start date is today
        endDate: moment().add(1, 'weeks').toDate(), // Default end date is 1 week from today
        locale: {
          format: 'YYYY-MM-DD' // Date format
        }
      });
    });
</script>

<style>
            /* Style for checkbox container */
        .checkbox-container {
            margin-bottom: 10px;
        }

        /* Style for individual checkboxes */
        .checkbox-container input[type="checkbox"] {
            display: none; /* Hide the actual checkboxes */
        }

        /* Style for labels */
        .checkbox-container label {
            display: inline-block;
            Margin: 2px;
            padding: 5px 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;

        }

        /* Style for labels when checkbox is checked */
        .checkbox-container input[type="checkbox"]:checked + label {
            background-color: transparent;
            color: var(--main-color);
            border: 1px solid var(--main-color);
        }

        /* Hover effect for labels */
        .checkbox-container label:hover {
            background-color: var(--main-color);
            color: #000;
            border: 1px solid var(--main-color);
        }

    
        .Bespoke-form {
            padding-top:20px;
            background-color: transparent;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 50%; /* Adjust max-width as needed */
            margin: auto; /* Center the form */
            backdrop-filter: blur(300px);
        }
       .form-group {
            margin-bottom: 10px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        .form-control,
        select,
        textarea,
        button {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        select {
            height: 40px; /* Adjust height as needed */
        }
        textarea {
            height: 120px; /* Adjust height as needed */
        }
        .calendar-table{
          color: #000;
        }
        .cover {
            background-image: url('imgs/ntn-leisure-fishing.webp');
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
        .Bespoke{
            background-image: url('imgs/ntn-leasure-nine-arches-train-sri-lanka-srilankacornelia-pettersson-ntnleisure-unsplash.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }    
        
        @media only screen and (max-width: 600px) {
            .Bespoke-form {
            max-width: 100%; /* Adjust max-width as needed */
            margin: auto; /* Center the form */
        }
        }
    </style>
