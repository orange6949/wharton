<template>
    <div>
        <div class="subVisual">
            <h3 class="title">Apply Now</h3>
            <img src="/img/subVisual03.jpg" alt="">
        </div>

        <div class="subContent area-applyNow">
            <div class="wrap">
                <form class="m-form type01"  data-aos-duration="1500" data-aos="fade-up" @submit.prevent="store">
                    <h3 class="title">Student Information</h3>

                    <div class="m-input-wrap type01 mt-40">
                        <div class="m-input-text type01">
                            <input type="text" placeholder="First Name *" v-model="form.student_first_name">
                        </div>
                        <p class="m-input-error" v-if="form.errors.student_first_name">{{form.errors.student_first_name}}</p>
                    </div>

                    <div class="m-input-wrap type01">
                        <div class="m-input-text type01">
                            <input type="text" placeholder="Last Name *" v-model="form.student_last_name">
                        </div>
                        <p class="m-input-error" v-if="form.errors.student_last_name">{{form.errors.student_last_name}}</p>

                    </div>

                    <div class="m-input-wrap type01">
                        <h3 class="m-input-title">Birth Date *</h3>
                        <div class="m-input-text type01">
                            <input type="date" placeholder="Birthdate *" v-model="form.student_birthdate">
                        </div>
                        <p class="m-input-error" v-if="form.errors.student_birthdate">{{form.errors.student_birthdate}}</p>

                    </div>

                    <div class="m-input-wrap type01">
                        <div class="m-input-checkboxes type01">
                            <div class="m-input-checkbox">
                                <input name="sex" type="radio" id="female" value="female" v-model="form.student_sex">
                                <label for="female">Female</label>
                            </div>

                            <div class="m-input-checkbox">
                                <input name="sex" type="radio" id="male" value="male" v-model="form.student_sex">
                                <label for="male">Male</label>
                            </div>

                            <div class="m-input-checkbox">
                                <input name="sex" type="radio" id="self-identity" value="self-identity" v-model="form.student_sex">
                                <label for="self-identity">Self-Identity</label>
                            </div>
                        </div>
                        <p class="m-input-error" v-if="form.errors.student_sex">{{form.errors.student_sex}}</p>

                    </div>

                    <div class="m-input-wrap type01">
                        <div class="m-input-select type01">
                            <select name="Country" v-model="form.student_country">
                                <option value="" selected="selected" disabled>Select Country</option>
                                <option value="Afghanistan">Afghanistan</option>
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
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
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
                                <option value="North Macedonia">North Macedonia</option>
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
                                <option value="Serbia and Montenegro">Serbia and Montenegro</option>
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
                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
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
                        <p class="m-input-error" v-if="form.errors.student_country">{{form.errors.student_country}}</p>

                    </div>

                    <div class="m-input-wrap type01">
                        <div class="m-input-text type01">
                            <input type="text" placeholder="Street" v-model="form.student_street">
                        </div>
                        <p class="m-input-error" v-if="form.errors.street">{{form.errors.street}}</p>

                    </div>

                    <div class="m-input-wrap type01">
                        <div class="m-input-text type01">
                            <input type="text" placeholder="City" v-model="form.student_city">
                        </div>
                        <p class="m-input-error" v-if="form.errors.city">{{form.errors.city}}</p>

                    </div>

                    <div class="m-input-wrap type01">
                        <div class="m-input-text type01">
                            <input type="text" placeholder="State" v-model="form.student_state">
                        </div>
                        <p class="m-input-error" v-if="form.errors.state">{{form.errors.state}}</p>

                    </div>

                    <div class="m-input-wrap type01">
                        <div class="m-input-text type01">
                            <input type="text" placeholder="Postal Code" v-model="form.postal_code">
                        </div>
                        <p class="m-input-error" v-if="form.errors.postal_code">{{form.errors.postal_code}}</p>

                    </div>

                    <div class="m-input-wrap type01">
                        <div class="m-input-select type01">
                            <select name="" id="" v-model="form.student_grade">
                                <option value="" disabled selected>Current Grade *</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </div>
                        <p class="m-input-error" v-if="form.errors.student_grade">{{form.errors.student_grade}}</p>

                    </div>



                    <h3 class="title mt-80">Parent/Guardian Information</h3>

                    <div class="m-input-wrap type01 mt-40">
                        <div class="m-input-text type01">
                            <input type="text" placeholder="Relationship To Student *" v-model="form.relationship_to_student">
                        </div>
                        <p class="m-input-error" v-if="form.errors.relationship_to_student">{{form.errors.relationship_to_student}}</p>

                    </div>

                    <div class="m-input-wrap type01">
                        <div class="m-input-text type01">
                            <input type="text" placeholder="Parent/Guardian First Name *" v-model="form.guardian_first_name">
                        </div>
                        <p class="m-input-error" v-if="form.errors.guardian_first_name">{{form.errors.guardian_first_name}}</p>

                    </div>

                    <div class="m-input-wrap type01">
                        <div class="m-input-text type01">
                            <input type="text" placeholder="Parent/Guardian Last Name *" v-model="form.guardian_last_name">
                        </div>
                        <p class="m-input-error" v-if="form.errors.guardian_last_name">{{form.errors.guardian_last_name}}</p>

                    </div>

                    <div class="m-input-wrap type01">
                        <div class="m-input-text type01">
                            <input type="text" placeholder="Parent/Guardian Email Address *" v-model="form.guardian_email">
                        </div>
                        <p class="m-input-error" v-if="form.errors.guardian_email">{{form.errors.guardian_email}}</p>

                    </div>

                    <div class="m-input-wrap type01">
                        <div class="m-input-text type01">
                            <input type="text" placeholder="Parent/Guardian Mobile Number *" v-model="form.guardian_phone">
                        </div>
                        <p class="m-input-error" v-if="form.errors.guardian_phone">{{form.errors.guardian_phone}}</p>

                    </div>

                    <div class="m-input-wrap type01">
                        <p class="text primary" style="font-weight:500;">Please select which session(s) you are interested in:</p>
                        <div class="m-input-checkboxes type02 mt-10">
                            <div class="m-input-checkbox">
                                <input name="session" type="radio" id="regular" value="Regular Session (Fall - June)" v-model="form.session">
                                <label for="regular">Regular Session (Fall - June)</label>
                            </div>

                            <div class="m-input-checkbox">
                                <input name="session" type="radio" id="quater" value="Quater Session(Four 10-week sessions)" v-model="form.session">
                                <label for="quater">Quater Session(Four 10-week sessions)</label>
                            </div>

                            <div class="m-input-checkbox">
                                <input name="session" type="radio" id="ap" value="AP Single Course (10 Weeks)" v-model="form.session">
                                <label for="ap">AP Single Course (10 Weeks)</label>
                            </div>
                        </div>
                        <p class="m-input-error" v-if="form.errors.session">{{form.errors.session}}</p>

                    </div>

                    <h3 class="title mt-80">Parent/Guardian Information</h3>

                    <div class="m-input-wrap type01 mt-40">
                        <div class="m-input-select type01">
                            <select name="" id="">
                                <option value="" selected disabled>
                                    The person requesting this information is over the age of 12 or has provided contact information for parental consent. *
                                </option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>

                    <button class="m-btn type01 bg-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return {
            form: this.$inertia.form({
                student_first_name: null,
                student_last_name: null,
                student_birthdate: null,
                student_sex: null,
                student_country: "",
                student_street: null,
                student_city: null,
                student_state: null,
                student_postal_code: null,
                student_grade: "",
                relationship_to_student: null,
                guardian_first_name: null,
                guardian_last_name: null,
                guardian_email: null,
                guardian_phone: null,
                session: "",
            })
        }
    },

    methods: {
        store(){
            this.form.post("/applications",{
                preserveScroll: true,
                onSuccess: (response) => {
                    alert(response.props.flash.success);
                }
            })
        },
        focusDate(e){
            $(e.target).hide().next().css('display', "block").focus()
        }
    },

    mounted(){
        AOS.init();
    }
}
</script>
