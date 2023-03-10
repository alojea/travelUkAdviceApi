<html>
<head>
<meta charset="utf-8">

  
 
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
</style>
</head>
    <body>

    <main role="main" class="container-fluid">       
        <div class="row text-center justify-content-center"  style="border: 1px solid red;">   
        <div class="col-12">

            <!--SELECT-->
            <select id="countriesDropDown" onchange="change(value)">
            <option value="" selected disabled hidden>Select country from this list</option><option value="afghanistan">Afghanistan</option><option value="albania">Albania</option><option value="algeria">Algeria</option><option value="andorra">Andorra</option><option value="angola">Angola</option><option value="anguilla">Anguilla</option><option value="antarctica-british-antarctic-territory">Antarctica</option><option value="antigua-and-barbuda">Antigua and Barbuda</option><option value="argentina">Argentina</option><option value="armenia">Armenia</option><option value="aruba">Aruba</option><option value="australia">Australia</option><option value="austria">Austria</option><option value="azerbaijan">Azerbaijan</option><option value="bahamas">Bahamas</option><option value="bahrain">Bahrain</option><option value="bangladesh">Bangladesh</option><option value="barbados">Barbados</option><option value="belarus">Belarus</option><option value="belgium">Belgium</option><option value="belize">Belize</option><option value="benin">Benin</option><option value="bermuda">Bermuda</option><option value="bhutan">Bhutan</option><option value="bolivia">Bolivia</option><option value="bonaire-st-eustatius-saba">Bonaire St Eustatius Saba</option><option value="bosnia-and-herzegovina">Bosnia and Herzegovina</option><option value="botswana">Botswana</option><option value="brazil">Brazil</option><option value="british-indian-ocean-territory">British Indian Ocean Territory</option><option value="brunei">Brunei</option><option value="bulgaria">Bulgaria</option><option value="burkina-faso">Burkina Faso</option><option value="burundi">Burundi</option><option value="cape-verde">Cape Verde</option><option value="cambodia">Cambodia</option><option value="cameroon">Cameroon</option><option value="canada">Canada</option><option value="cayman-islands">Cayman Islands</option><option value="central-african-republic">Central African Republic</option><option value="chad">Chad</option><option value="chile">Chile</option><option value="china">China</option><option value="colombia">Colombia</option><option value="comoros">Comoros</option><option value="congo">Congo</option><option value="cook-islands-tokelau-and-niue">Cook Islands</option><option value="costa-rica">Costa Rica</option><option value="croatia">Croatia</option><option value="cuba">Cuba</option><option value="curacao">Cura??ao</option><option value="cyprus">Cyprus</option><option value="czech-republic">Czech Republic</option><option value="cote-d-ivoire">C??te d'Ivoire</option><option value="democratic-republic-of-the-congo">Democratic Republic of Congo</option><option value="denmark">Denmark</option><option value="djibouti">Djibouti</option><option value="dominica">Dominica</option><option value="dominican-republic">Dominican Republic</option><option value="ecuador">Ecuador</option><option value="egypt">Egypt</option><option value="el-salvador">El Salvador</option><option value="equatorial-guinea">Equatorial Guinea</option><option value="eritrea">Eritrea</option><option value="estonia">Estonia</option><option value="eswatini">Eswatini</option><option value="ethiopia">Ethiopia</option><option value="fiji">Fiji</option><option value="finland">Finland</option><option value="france">France</option><option value="french-guiana">French Guiana</option><option value="french-polynesia">French Polynesia</option><option value="gabon">Gabon</option><option value="the-gambia">Gambia</option><option value="georgia">Georgia</option><option value="germany">Germany</option><option value="ghana">Ghana</option><option value="gibraltar">Gibraltar</option><option value="greece">Greece</option><option value="grenada">Grenada</option><option value="guadeloupe">Guadeloupe</option><option value="guatemala">Guatemala</option><option value="guinea">Guinea</option><option value="guinea-bissau">Guinea-Bissau</option><option value="guyana">Guyana</option><option value="haiti">Haiti</option><option value="honduras">Honduras</option><option value="hong-kong">Hong Kong</option><option value="hungary">Hungary</option><option value="iceland">Iceland</option><option value="india">India</option><option value="indonesia">Indonesia</option><option value="iran">Iran</option><option value="iraq">Iraq</option><option value="ireland">Ireland</option><option value="israel">Israel</option><option value="italy">Italy</option><option value="jamaica">Jamaica</option><option value="japan">Japan</option><option value="jordan">Jordan</option><option value="kazakhstan">Kazakhstan</option><option value="kenya">Kenya</option><option value="kiribati">Kiribati</option><option value="kuwait">Kuwait</option><option value="kyrgyzstan">Kyrgyzstan</option><option value="laos">Laos</option><option value="latvia">Latvia</option><option value="lebanon">Lebanon</option><option value="lesotho">Lesotho</option><option value="liberia">Liberia</option><option value="libya">Libya</option><option value="liechtenstein">Liechtenstein</option><option value="lithuania">Lithuania</option><option value="luxembourg">Luxembourg</option><option value="macao">Macao</option><option value="madagascar">Madagascar</option><option value="malawi">Malawi</option><option value="malaysia">Malaysia</option><option value="maldives">Maldives</option><option value="mali">Mali</option><option value="malta">Malta</option><option value="marshall-islands">Marshall Islands</option><option value="martinique">Martinique</option><option value="mauritania">Mauritania</option><option value="mauritius">Mauritius</option><option value="mayotte">Mayotte</option><option value="mexico">Mexico</option><option value="micronesia">Micronesia</option><option value="moldova">Moldova</option><option value="monaco">Monaco</option><option value="mongolia">Mongolia</option><option value="montenegro">Montenegro</option><option value="montserrat">Montserrat</option><option value="morocco">Morocco</option><option value="mozambique">Mozambique</option><option value="myanmar">Myanmar</option><option value="namibia">Namibia</option><option value="nauru">Nauru</option><option value="nepal">Nepal</option><option value="netherlands">Netherlands</option><option value="new-caledonia">New Caledonia</option><option value="new-zealand">New Zealand</option><option value="nicaragua">Nicaragua</option><option value="niger">Niger</option><option value="nigeria">Nigeria</option>><option value="north-korea">North Korea</option><option value="norway">Norway</option><option value="oman">Oman</option><option value="pakistan">Pakistan</option><option value="palau">Palau</option><option value="panama">Panama</option><option value="papua-new-guinea">Papua New Guinea</option><option value="paraguay">Paraguay</option><option value="peru">Peru</option><option value="philippines">Philippines</option><option value="pitcairn-island">Pitcairn Island</option><option value="poland">Poland</option><option value="portugal">Portugal</option><option value="qatar">Qatar</option><option value="north-macedonia">Republic of North Macedonia</option><option value="romania">Romania</option><option value="russia">Russia</option><option value="rwanda">Rwanda</option><option value="reunion">R??union</option><option value="st-helena-ascension-and-tristan-da-cunha">Saint Helena, Ascension and Tristan da Cunha</option><option value="st-pierre-and-miquelon">Saint Pierre and Miquelon</option><option value="st-kitts-and-nevis">Saint Kitts and Nevis</option><option value="st-vincent-and-the-grenadines">Saint Vincent and the Grenadines</option><option value="st-martin-and-st-barthelemy">Saint Martin and Saint Barth??lemy</option><option value="st-lucia">Saint Lucia</option><option value="samoa">Samoa</option><option value="san-marino">San Marino</option><option value="sao-tome-and-principe">Sao Tome and Principe</option><option value="saudi-arabia">Saudi Arabia</option><option value="senegal">Senegal</option><option value="serbia">Serbia</option><option value="seychelles">Seychelles</option><option value="sierra-leone">Sierra Leone</option><option value="singapore">Singapore</option><option value="st-maarten">Sint Maarten</option><option value="slovakia">Slovakia</option><option value="slovenia">Slovenia</option><option value="solomon-islands">Solomon Islands</option><option value="somalia">Somalia</option><option value="south-africa">South Africa</option><option value="south-korea">South Korea</option><option value="south-sudan">South Sudan</option><option value="spain">Spain</option><option value="sri-lanka">Sri Lanka</option><option value="sudan">Sudan</option><option value="suriname">Suriname</option><option value="sweden">Sweden</option><option value="switzerland">Switzerland</option><option value="syria">Syria</option><option value="taiwan">Taiwan</option><option value="tajikistan">Tajikistan</option><option value="tanzania">Tanzania</option><option value="thailand">Thailand</option><option value="timor-leste">Timor-Leste</option><option value="togo">Togo</option><option value="tonga">Tonga</option><option value="trinidad-and-tobago">Trinidad and Tobago</option><option value="tunisia">Tunisia</option><option value="turkey">Turkey</option><option value="turkmenistan">Turkmenistan</option><option value="turks-and-caicos-islands">Turks and Caicos Islands</option><option value="tuvalu">Tuvalu</option><option value="uganda">Uganda</option><option value="ukraine">Ukraine</option><option value="united-arab-emirates">United Arab Emirates</option><option value="usa">United States Of America</option><option value="united-states-of-america">United States of America</option><option value="uruguay">Uruguay</option><option value="uzbekistan">Uzbekistan</option><option value="vanuatu">Vanuatu</option><option value="venezuela">Venezuela</option><option value="vietnam">Vietnam</option><option value="wallis-and-futuna">Wallis and Futuna</option><option value="western-sahara">Western Sahara</option><option value="yemen">Yemen</option><option value="zambia">Zambia</option><option value="zimbabwe">Zimbabwe</option>
            </select>
            <hr>

            <!--Js Content-->
            <div id="jsContent"></div>
             </div>
        </div>
</main>


<!-- <select id="countriesDropDown" onchange="change(value)"/> -->

<div id="country"></div>
<div id="lastupdate"></div>
<div id="map"></div>

<button class="accordion">Summary</button>
<div class="panel" id="summary">
    <p><span id="summary"/>No data found</p>
</div>

<button class="accordion">Coronavirus</button>
<div class="panel" id="corona">
    <p><span id="corona"/>No data found</p>
</div>

<button class="accordion">Safety and security</button>
<div class="panel">
   <p><span id="safety"/>No data found</p>
</div>

<button class="accordion">Terrorism</button>
<div class="panel">
    <p><span id="terrorism"/>No data found</p>
</div>

<button class="accordion">Local laws and customs</button>
<div class="panel">
    <p><span id="laws"/>No data found</p>
</div>

<button class="accordion">Entry requirements</button>
<div class="panel">
    <p><span id="requirements"/>No data found</p>
</div>

<button class="accordion">Health</button>
<div class="panel">
    <p><span id="health"/>No data found</p>
</div>

<button class="accordion">Natural disasters</button>
<div class="panel">
    <p><span id="disasters"/>No data found</p>
</div>


<button class="accordion">Money</button>
<div class="panel">
    <p><span id="money"/>No data found</p>
</div>

<button class="accordion">Travel advice help and support</button>
<div class="panel">
    <p><span id="help"/>No data found</p>
</div>


<script type="text/javascript">

const countryList = [
	"Afghanistan",
	"Albania",
	"Algeria",
	"American Samoa",
	"Andorra",
	"Angola",
	"Anguilla",
	"Antarctica",
	"Antigua and Barbuda",
	"Argentina",
	"Armenia",
	"Aruba",
	"Australia",
	"Austria",
	"Azerbaijan",
	"Bahamas",
	"Bahrain",
	"Bangladesh",
	"Barbados",
	"Belarus",
	"Belgium",
	"Belize",
	"Benin",
	"Bermuda",
	"Bhutan",
	"Bolivia",
	"Bonaire St Eustatius Saba",
	"Bosnia and Herzegovina",
	"Botswana",
	"Bouvet Island",
	"Brazil",
	"British Indian Ocean Territory",
	"Brunei Darussalam",
	"Bulgaria",
	"Burkina Faso",
	"Burundi",
	"Cabo Verde",
	"Cambodia",
	"Cameroon",
	"Canada",
	"Cayman Islands",
	"Central African Republic",
	"Chad",
	"Chile",
	"China",
	"Christmas Island",
	"Colombia",
	"Comoros",
	"Democratic Republic of Congo",
	"Congo",
	"Cook Islands",
	"Costa Rica",
	"Croatia",
	"Cuba",
	"Cura??ao",
	"Cyprus",
	"Czechia",
	"C??te d'Ivoire",
	"Denmark",
	"Djibouti",
	"Dominica",
	"Dominican Republic",
	"Ecuador",
	"Egypt",
	"El Salvador",
	"Equatorial Guinea",
	"Eritrea",
	"Estonia",
	"Eswatini",
	"Ethiopia",
	"Faroe Islands",
	"Fiji",
	"Finland",
	"France",
	"French Guiana",
	"French Polynesia",
	"French Southern Territories",
	"Gabon",
	"Gambia",
	"Georgia",
	"Germany",
	"Ghana",
	"Gibraltar",
	"Greece",
	"Greenland",
	"Grenada",
	"Guadeloupe",
	"Guam",
	"Guatemala",
	"Guernsey",
	"Guinea",
	"Guinea-Bissau",
	"Guyana",
	"Haiti",
	"Heard Island and McDonald Islands",
	"Holy See",
	"Honduras",
	"Hong Kong",
	"Hungary",
	"Iceland",
	"India",
	"Indonesia",
	"Iran)",
	"Iraq",
	"Ireland",
	"Isle of Man",
	"Israel",
	"Italy",
	"Jamaica",
	"Japan",
	"Jersey",
	"Jordan",
	"Kazakhstan",
	"Kenya",
	"Kiribati",
	"Kuwait",
	"Kyrgyzstan",
	"Lao People's Democratic Republic",
	"Latvia",
	"Lebanon",
	"Lesotho",
	"Liberia",
	"Libya",
	"Liechtenstein",
	"Lithuania",
	"Luxembourg",
	"Macao",
	"Madagascar",
	"Malawi",
	"Malaysia",
	"Maldives",
	"Mali",
	"Malta",
	"Marshall Islands",
	"Martinique",
	"Mauritania",
	"Mauritius",
	"Mayotte",
	"Mexico",
	"Micronesia (Federated States of)",
	"Moldova (the Republic of)",
	"Monaco",
	"Mongolia",
	"Montenegro",
	"Montserrat",
	"Morocco",
	"Mozambique",
	"Myanmar",
	"Namibia",
	"Nauru",
	"Nepal",
	"Netherlands",
	"New Caledonia",
	"New Zealand",
	"Nicaragua",
	"Niger",
	"Nigeria",
	"Niue",
	"Norfolk Island",
	"Northern Mariana Islands",
    "North Korea",
	"Norway",
	"Oman",
	"Pakistan",
	"Palau",
	"Panama",
	"Papua New Guinea",
	"Paraguay",
	"Peru",
	"Philippines",
	"Pitcairn",
	"Poland",
	"Portugal",
	"Puerto Rico",
	"Qatar",
	"Republic of North Macedonia",
	"Romania",
	"Russian",
	"Rwanda",
	"R??union",
	"Saint Barth??lemy",
	"Saint Helena, Ascension and Tristan da Cunha",
	"Saint Kitts and Nevis",
	"Saint Lucia",
	"Saint Martin)",
	"Saint Pierre and Miquelon",
	"Saint Vincent and the Grenadines",
	"Samoa",
	"San Marino",
	"Sao Tome and Principe",
	"Saudi Arabia",
	"Senegal",
	"Serbia",
	"Seychelles",
	"Sierra Leone",
	"Singapore",
	"Sint Maarten",
	"Slovakia",
	"Slovenia",
	"Solomon Islands",
	"Somalia",
	"South Africa",
	"South Georgia and the South Sandwich Islands",
    "South Korea",
	"South Sudan",
	"Spain",
	"Sri Lanka",
	"Sudan",
	"Suriname",
	"Svalbard and Jan Mayen",
	"Sweden",
	"Switzerland",
	"Syrian Arab Republic",
	"Taiwan",
	"Tajikistan",
	"Tanzania",
	"Thailand",
	"Timor-Leste",
	"Togo",
	"Tokelau",
	"Tonga",
	"Trinidad and Tobago",
	"Tunisia",
	"Turkey",
	"Turkmenistan",
	"Turks and Caicos Islands",
	"Tuvalu",
	"Uganda",
	"Ukraine",
	"United Arab Emirates",
	"United Kingdom of Great Britain and Northern Ireland",
	"United States Minor Outlying Islands",
	"United States of America",
	"Uruguay",
	"Uzbekistan",
	"Vanuatu",
	"Venezuela",
	"Vietnam",
	"Wallis and Futuna",
	"Western Sahara",
	"Yemen",
	"Zambia",
	"Zimbabwe"
];

    function change(country) {
        var url = "https://www.gov.uk/api/content/foreign-travel-advice/" + country;
        var id, name;
        var xhr;
        if (window.XMLHttpRequest) {
            xhr = new XMLHttpRequest();
        } else {
            xhr = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                const result = JSON.parse(xhr.responseText)
				document.getElementById('country').innerHTML='<h1 style="text-align: center;">' + result.details.country.name + '</h1>';
				document.getElementById('lastupdate').innerHTML='<p style="text-align: center;"><em>' + "Data Last Update: " + new Date(result.public_updated_at) + '</em></p>';	
				try {
					document.getElementById('map').innerHTML='<img src=' + result.details.image.url + ' class="img-fluid rounded mx-auto d-block">';
				} catch (e) {
					document.getElementById('map').innerHTML='';
				}
				document.getElementById('summary').innerHTML=result.details.summary;
                document.getElementById('corona').innerHTML=result.details.parts[0].body;
                document.getElementById('safety').innerHTML=result.details.parts[1].body;
                document.getElementById('terrorism').innerHTML=result.details.parts[2].body;
                document.getElementById('laws').innerHTML=result.details.parts[3].body;
                document.getElementById('requirements').innerHTML=result.details.parts[4].body;
                document.getElementById('health').innerHTML=result.details.parts[5].body;
                document.getElementById('disasters').innerHTML=result.details.parts[6].body;
                document.getElementById('money').innerHTML=result.details.parts[7].body;
                document.getElementById('help').innerHTML=result.details.parts[8].body;
            }
        }
        xhr.open("GET", url, true);
        xhr.send();
    }

// for (let key in countryList) {

//   let option = document.createElement("option");
//   option.setAttribute('value', countryList[key].replace(/\s+/g, '-').toLowerCase());

//   let optionText = document.createTextNode(countryList[key]);
//   option.appendChild(optionText);

//   countriesDropDown.appendChild(option);

//   console.log(countriesDropDown.value);
// }

    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
		acc[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var panel = this.nextElementSibling;
			if (panel.style.display === "block") {
			panel.style.display = "none";
			} else {
			panel.style.display = "block";
			}
		});
    }
</script>
</body>
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
    </div>
    <!-- Left -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Travel UK API
          </h6>
          <p>
            All the information from this website comming from GOV UK API. 
            For more information and documentation visit:
            <a class="text-reset fw-bold" href="https://content-api.publishing.service.gov.uk/reference.html">GOV.UK Content API</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <!-- Grid column -->

        <!-- Grid column -->
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Developer</h6>
          <p><i class="fas fa-home me-3"></i> Alejandro Ojea</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    ?? 2023 Copyright:
    <a class="text-reset fw-bold" href="https://alojea.com/">alojea.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</html>