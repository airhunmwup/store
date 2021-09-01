<template>
  <!-- main content -->
  <div class="justify-content-center text-sm">
    <div class="row">
      <div class="col-6 d-lg-none h6 d-md-none text-lg pl-3 text-left">
        
      </div>

    </div>
        <div class="row justify-center">

<!--recently viewed-->
                <div class="row col-sm-12 p-3 col-lg-8 col-md-8">
                  <span class="text  h5 font-weight-bold p-3 font-weight-normal">
                  Edit address
                  </span>
                  
                      <div class="content">
                        <div class="tab-content">
                          <div
                            class="tab-pane fade in active show col-md-8 col-lg-8 col-sm-8"
                            id="checkout-guest-form"
                            role="tabpanel"
                          >
                            <form>
                              <div> 
                              <div class="form-group row">
                              <label class="title text-dark font-weight-bold">Country/Region</label>
                              <select id="country" 
                              name="country" 
                              class="border-secondary text-sm form-control"
                              @change="countryChange($event)"
                              v-model="formData.country"
                              disabled>
                                <option value="United Kingdom">United Kingdom</option>
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
                                <div class="form-group row">
                                  <label class="title text-dark font-weight-bold">Full name
                                    <span style="color:red; font-size: 11px;" class="required" v-text="errors.fullname">*</span>
                                  </label>
                                  <input
                                    class="form-control text-sm border-secondary"
                                    name="fullname"
                                    type="text"
                                    placeholder=""
                                    v-model="formData.fullname"
                                  />
                                </div>
                                <div class="form-group row">
                                  <label class="title text-dark font-weight-bold">Phone number
                                    <span style="color:red; font-size: 11px;" class="required" v-text="errors.phonenumber">*</span>
                                  </label>
                                  <input
                                    class="form-control text-sm border-secondary"
                                    name="fullname"
                                    type="tel"
                                    placeholder=""
                                    v-model="formData.phonenumber"
                                  />
                                </div>
                                <div class="form-group row">
                                  <label class="title text-dark font-weight-bold">Postcode
                                    <span style="color:red; font-size: 11px;" class="required" v-text="errors.postal_code">*</span>
                                  </label>
                                  <input
                                    class="form-control text-sm border-secondary"
                                    name="firstname"
                                    type="text"
                                    placeholder="Enter your area postcode"
                                    v-model="formData.postal_code"
                                  />
                                </div>
                                <div class="form-group row">
                                  <label class="title text-dark font-weight-bold">Address line 1
                                    <span style="color:red; font-size: 11px;" class="required" v-text="errors.address_line1">*</span>
                                  </label>
                                  <input
                                    class="form-control text-sm border-secondary"
                                    name="firstname"
                                    type="text"
                                    placeholder="type your address"
                                    v-model="formData.address_line1"
                                  />
                                </div>
                                <div class="form-group row">
                                  <label class="title text-dark font-weight-bold">Address line 2 (optional)</label>
                                  <input
                                    class="form-control text-sm border-secondary"
                                    name="firstname"
                                    type="text"
                                    placeholder=""
                                    v-model="formData.address_line2"
                                  />
                                </div>
                                <div class="form-group row">
                                  <label class="title text-dark font-weight-bold">Town/City
                                    <span style="color:red; font-size: 11px;" class="required" v-text="errors.town_city">*</span>
                                  </label>
                                  <input
                                    class="form-control text-sm border-secondary"
                                    name="firstname"
                                    type="text"
                                    placeholder=""
                                    v-model="formData.town_city"
                                  />
                                </div>
                                <div class="form-group row">
                                  <label class="title text-dark font-weight-bold">County (if applicable)</label>
                                  <input
                                    class="form-control text-sm border-secondary"
                                    name="firstname"
                                    type="text"
                                    placeholder=""
                                    v-model="formData.county"
                                  />
                                </div>
                                <div class="form-group row">
                                    <p class="text-dark text-md font-weight-bold"
                                      > Add delivery instructions (optional)
                                    </p>
                                      <p class="text-dark text-sm"
                                        >Do we need additional instructions to find this address?
                                      </p>

                                  <textarea
                                    class="form-control text-sm border-secondary text-xs"
                                    name="firstname"
                                    type="text"
                                    row="10"
                                    placeholder="Provide details such as building description, a nearby landmark, or other navigation instruction"
                                    v-model="formData.delivery_instruction"
                                  ></textarea>
                                </div>
                                <div class="form-group row">
                                      <p class="text-dark text-sm"
                                        >Do we need a security code or a call box number to access this building?
                                      </p>

                                  <input
                                    class="form-control text-sm border-secondary"
                                    name="firstname"
                                    type="text"
                                    placeholder="1234"
                                    v-model="formData.securitycode"
                                  />
                                </div>
                              </div>
                               <input
                                    class="form-control text-sm border-secondary"
                                    name="pid"
                                    type="hidden"
                                    placeholder=""
                                    v-model="formData.pid"
                                  /> 
                                            <div class="">
                                            <router-link
                                v-bind:to="'/editaddress/' + pid"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Continue"
                              >
                                <button type="button" class="btn btn-warning bg-gradient border" @click.prevent="editAddress">Edit address</button></router-link
                              >
                                        </div>
                            </form>
                          </div>
                        </div>
                      </div>
                </div>


          <!-- end col-md-9-1 -->
        </div>
        
    <hr>
  </div>
</template>
<script>

import User from '../../apis/User';
export default {
  props: ['pid'],
address_details: {},
  data() {
    return {
      formData: {
        user_id: '',
        country: 'United Kingdom',
        fullname: '',
        phonenumber: '',
        postal_code: '',
        address_line1: '',
        address_line2: '',
        town_city: '',
        county: '',
        delivery_instruction: '',
        securitycode: '',
        pid: this.pid,
      },
      
      errors: {},
      loading: false,
    }
  },
  methods: {
    editAddress() {
      this.formData.user_id = this.$store.state.currentUser.id;
      User.editaddress(this.formData).then((res) => {
        document.getElementById("alat").innerHTML = "Address updated successfully";
      }).catch(errors => {
        this.errors = {};
          const err = Object.keys(errors.response.data.errors);
          err.forEach((key)=>{
            var strError = errors.response.data.errors[key][0];
            this.errors[key] = strError;
          })
          console.log(err);
      });
    },
    countryChange(event) {
      console.log(event.target.value);
    },
    loadData(){
        User.fetchAddress(this.pid)
            .then(response=>{
                        this.address_details = response.data;
                        this.formData = response.data[0]; 
                        this.formData.pid = response.data[0].id;                       
                })
                .catch(errors => {                    
                        this.errors = {};
          const err = Object.keys(errors.response.data.errors);
          err.forEach((key)=>{
            var strError = errors.response.data.errors[key][0];
            this.errors[key] = strError;
          })
          console.log(err);                    
                 });
            }
    },
    created() {
            this.loadData()
        }  
}

</script>
        