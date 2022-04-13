<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>NationsStar Bank PLC | New Account</title>
</head>
<body>

<!-- As a link -->
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('index') }}"> <h1 style="font-weight: bolder; color: #0079c1">NationsStar Bank PLC</h1></a>
    </div>
</nav>


<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <div class="navbar navbar-light bg-light mb-3">
                <div class="container-fluid">
                    <span class="navbar-brand mb-0 h1 text-center">Personal Information</span>
                </div>
            </div>
            <hr>
            <form action="{{ route('new_account') }}" method="POST" class="row g-3" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="col-md-2">
                    <label for="inputEmail4" class="form-label">Title</label>
                    <span style="color: red !important; display: inline; float: none;">*</span>
                    <select class="form-control" name="title" id="">
                        <option selected disabled>Choose Title</option>
                        <option value="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                        <option value="Mrs">Miss</option>
                    </select>
                </div>
                <div class="col-md-5">
                    <label for="inputEmail4" class="form-label">First Name</label>
                    <span style="color: red !important; display: inline; float: none;">*</span>
                    <input name="first_name" type="text" class="form-control" id="inputEmail4" placeholder="John" required>
                </div>
                <div class="col-md-5">
                    <label for="inputPassword4" class="form-label">Last Name</label>
                    <span style="color: red !important; display: inline; float: none;">*</span>
                    <input name="last_name" type="text" class="form-control" id="inputPassword4" required placeholder="Doe">
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">Address</label>
                    <span style="color: red !important; display: inline; float: none;">*</span>
                    <input name="address" type="text" class="form-control" id="inputAddress" required placeholder="1234 Main St">
                </div>
                <div class="col-6">
                    <label for="inputAddress2" class="form-label">Address 2</label>
                    <input type="text" name="address_2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>

                <div class="col-md-4">
                    <label for="country" class="form-label">Country</label>
                    <span style="color: red !important; display: inline; float: none;">*</span>

                    <select id="country" name="country" class="form-control">
                        <option selected>Choose Country</option>
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Åland Islands">Åland Islands</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
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
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Bouvet Island">Bouvet Island</option>
                        <option value="Brazil">Brazil</option>
                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Cape Verde">Cape Verde</option>
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
                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
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
                        <option value="Guinea-bissau">Guinea-bissau</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
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
                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                        <option value="Korea, Republic of">Korea, Republic of</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macao">Macao</option>
                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
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
                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                        <option value="Moldova, Republic of">Moldova, Republic of</option>
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
                        <option value="Netherlands Antilles">Netherlands Antilles</option>
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
                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
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
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russian Federation">Russian Federation</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Saint Helena">Saint Helena</option>
                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                        <option value="Saint Lucia">Saint Lucia</option>
                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                        <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                        <option value="Samoa">Samoa</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Timor-leste">Timor-leste</option>
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
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Viet Nam">Viet Nam</option>
                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                        <option value="Western Sahara">Western Sahara</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="inputState" class="form-label">State</label>
                    <span style="color: red !important; display: inline; float: none;">*</span>
                    <input name="state" type="text" required class="form-control" id="inputCity">
                </div>

                <div class="col-md-2">
                    <label for="inputCity" class="form-label">City</label>
                    <span style="color: red !important; display: inline; float: none;">*</span>
                    <input name="city" type="text" required class="form-control" id="inputCity">
                </div>

                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <span style="color: red !important; display: inline; float: none;">*</span>
                    <input name="zipcode" type="text" required class="form-control" id="inputZip">
                </div>
                <div class="col-md-6">
                    <label for="inputZip" class="form-label">Date of Birth</label>
                    <span style="color: red !important; display: inline; float: none;">*</span>
                    <input name="date_of_birth" type="date" class="form-control" id="inputZip">
                </div>
                <div class="col-md-6">
                    <label for="inputZip" class="form-label">Gender</label>
                    <span style="color: red !important; display: inline; float: none;">*</span>
                    <select name="gender" class="form-control" id="">
                        <option selected disabled>Choose Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
                <div class="navbar navbar-light bg-light mb-3">
                    <div class="container-fluid">
                        <span class="navbar-brand mb-0 h1 text-center">Account Information</span>
                    </div>
                </div>
                <hr>
                <div class="col-md-6">
                    <label for="inputZip" class="form-label">Preferred Currency</label>
                    <span style="color: red !important; display: inline; float: none;">*</span>
                    <select name="preferred_currency" required class="form-control currency_changer" id="currency">
                        <option selected>Prefered Currency</option>
                        <option value="USD">USD</option>
                        <option value="GBP">British pound (GBP)</option>
                        <option value="EURO">EURO (EUR)</option>
                        <option value="AUD" >Australian Dollar (AUD)</option>
                        <option value="CAD">Canadian Dollars (CAD)</option>
                        <option value="CHF">Swiss Franc (fr)</option>
                        <option value="JPY">Japanese Yen (JPY)</option>
                        <option value="NZD">New Zealand Dollars (NZD)</option>
                    </select>
                </div>
                <div class="col-md-6" >
                    <label for=""  class="form-label">Account Type</label>
                    <span style="color: red !important; display: inline; float: none;">*</span>
                    <select name="account_type" class="form-control" id="account_type" required>

                        <option selected disabled>Account Type</option>
                        <option value="Savings">Savings</option>
                        <option value="Checking">Checking</option>
                        <option value="Current">Current</option>
                        <option value="Offshore">Offshore</option>
                        <option value="Joint">Joint</option>
                        <option value="Fixed">Fixed</option>
                    </select>
                </div>



                <div class="navbar navbar-light bg-light mb-3">
                    <div class="container-fluid">
                        <span class="navbar-brand mb-0 h1 text-center">Contact Information</span>
                    </div>
                </div>
                <hr>
                <div class="col-md-4">
                    <label for="inputZip" class="form-label">Email</label>
                    <span style="color: red !important; display: inline; float: none;">*</span>
                    <input name="email" type="email" class="form-control" id="inputZip">
                </div>
                <div class="col-md-4">
                    <label for="inputZip" class="form-label">Phone</label>
                    <span style="color: red !important; display: inline; float: none;">*</span>
                    <input name="phone" type="tel" class="form-control" id="inputZip">
                </div>
                <div class="col-md-4">
                    <label for="inputZip" class="form-label">Account Holder’s Photo</label>
                    <span style="color: red !important; display: inline; float: none;">*</span>
                    <input name="avatar" type="file" class="form-control-file" id="inputZip">
                </div>

                <div class="col-md-6">
                    <label for="inputZip" class="form-label">Password</label>
                    <span style="color: red !important; display: inline; float: none;">*</span>
                    <input name="password" type="password" class="form-control" id="inputZip">
                </div>
                <div class="col-md-6">
                    <label for="inputZip" class="form-label">Confirm Password</label>
                    <span style="color: red !important; display: inline; float: none;">*</span>
                    <input name="password_confirmation" type="password" class="form-control" id="inputZip">
                </div>

                <div class="navbar navbar-light bg-light mb-3">
                    <div class="container-fluid">
                        <span class="navbar-brand mb-0 h1 text-center">Personal Identification</span>
                    </div>
                </div>
                <hr>
                <div class="col-md-4">
                    <label for="inputZip" class="form-label">Type of Identification</label>
                    <span style="color: red !important; display: inline; float: none;">*</span>
                    <select name="cus_identification" class="form-control" id="cus_identification">
                        <option value="Select">Select</option>
                        <option value="Passport">International Passport</option>
                        <option value="Driver's Licence">Driver's Licence</option>
                        <option value="Driver's Licence">Voter's Card</option>
                        <option value="Social Security Number">Social Security Number</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="inputZip" class="form-label">Expiry Date</label>
                    <span style="color: red !important; display: inline; float: none;">*</span>
                    <input name="cus_expiry" type="date" class="form-control" id="inputZip">
                </div>
                <div class="col-md-4">
                    <label for="inputZip" class="form-label">Identification Number</label>
                    <span style="color: red !important; display: inline; float: none;">*</span>
                    <input name="cus_idnumber" type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-md-6">
                    <label for="inputZip" class="form-label">Identification Photograph</label>
                    <span style="color: red !important; display: inline; float: none;">*</span>
                    <input name="cus_image" type="file" class="form-control-file" id="inputZip">
                </div>


                <div class="navbar navbar-light bg-light mb-3">
                    <div class="container-fluid">
                        <span class="navbar-brand mb-0 h1 text-center">Employment Information</span>
                    </div>
                </div>
                <hr>

                <div class="col-md-4">
                    <label for="inputZip" class="form-label">Occupation</label>
                    <span style="color: red !important; display: inline; float: none;">*</span>
                    <input name="occupation" type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-md-4">
                    <label for="inputZip" class="form-label">Annual Salary</label>
                    <span style="color: red !important; display: inline; float: none;">*</span>
                    <input name="annual_salary" type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-md-4">
                    <label for="inputZip" class="form-label">Position</label>
                    <span style="color: red !important; display: inline; float: none;">*</span>
                    <input name="position" type="text" class="form-control" id="inputZip">
                </div>

                <div class="col-md-4">
                    <label for="inputZip" class="form-label">Office Address</label>
                    <span style="color: red !important; display: inline; float: none;">*</span>
                    <input name="office_address" type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-md-4">
                    <label for="inputZip" class="form-label">Office Phone</label>
                    <span style="color: red !important; display: inline; float: none;">*</span>
                    <input name="office_name" type="tel" class="form-control" id="inputZip">
                </div>
                <div class="col-md-4">
                    <label for="inputZip" class="form-label">Employer's Name</label>
                    <span style="color: red !important; display: inline; float: none;">*</span>
                    <input name="employer_name" type="text" class="form-control" id="inputZip">
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>
