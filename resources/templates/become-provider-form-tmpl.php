<section class="form-sec">
<p class="form-title"><span>Service Provider</span> Signup/Login</p>
<div class="switch-form"><p class="provider-tab active-f-tab">Become a Provider</p><p class="login-tab">Login</p></div>
<form id="provider-signup-form" action="/resources/pages/reg-prov-submit.php" method="POST" enctype="multipart/form-data">
        <div class="signup-1">
            <div>
                <span class="input-title">Full Name</span>
                <span class="error error-prov-name"></span>
            </div>
            <input type="text" name="prov-name" class="inp-text-1">
            <div>
                <span class="input-title">Mobile Number</span>
                <span class="otp">Get OTP</span>
                <span class="error error-prov-contact"></span>
            </div>
            <input type="text" name="prov-contact"  class="inp-text-1">
            <div>
                <span class="input-title">OTP</span>
                <span class="error error-prov-otp"></span>
            </div>
            <input type="text" name="prov-otp" class="inp-text-1">
            <span class="error error-prov-cnext center"></span>
            <div class="btn signup-next-btn">Next</div>
        </div>
        <div class="signup-2">
            <span class="input-title-1">Personal Details</span>
            <div>
                <span class="input-title">Email</span>
                <span class="error error-prov-email"></span>
            </div>
            <input type="text" name="prov-email" class="inp-text-1">
            <div>
			    <span class="input-title">Password <span style="font-size: 12px;">(Must be 6-20 digit and have an alphabet, a Number and a special character)</span></span>
                <span class="error error-password"></span>
            </div>
            <input type="Password" name="prov-password" class="inp-text-1">
            <div>
			    <span class="input-title">Confirm Password</span>
                <span class="error error-cnf-password"></span>
            </div>
            <input type="Password" name="prov-cnf-password" class="inp-text-1">
            <div>
                <span class="input-title">Date of Birth</span>
                <span class="error error-prov-dob"></span>
            </div>
            <input type="date" name="prov-dob" class="inp-text-1">
            <div>
                <span class="input-title">Gender</span>
                <span class="error error-prov-gender"></span>
            </div>
            <select class="inp-text-1 inp-sel" name="prov-gender">
                <option value="" disabled selected>Choose Gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Others</option>
            </select>

            <div>
                <span class="input-title">Address</span>
                <span class="error error-prov-addr"></span>
            </div>
            <input type="text" name="prov-addr" class="inp-text-1">

            <div>
                <span class="input-title">Pincode</span>
                <span class="error error-prov-pin"></span>
            </div>
            <input type="text" name="prov-pin" class="inp-text-1">

            <div>
                <span class="input-title">State</span>
                <span class="error error-prov-state"></span>
            </div>
            <select class="inp-text-1 inp-sel" name="prov-state">
                <option value="" disabled selected>Choose Your State</option>
                <option>Delhi NCR</option>
                <option>Andhra Pradesh</option>
                <option>Arunachal Pradesh</option>
                <option>Assam</option>
                <option>Bihar</option>
                <option>Chhattisgarh</option>
                <option>Goa</option>
                <option>Gujarat</option>
                <option>Haryana</option>
                <option>Himachal Pradesh</option>
                <option>Jammu and Kashmir</option>
                <option>Jharkhand</option>
                <option>Karnataka</option>
                <option>Kerala</option>
                <option>Madhya Pradesh</option>
                <option>Maharashtra</option>
                <option>Manipur</option>
                <option>Meghalaya</option>
                <option>Mizoram</option>
                <option>Nagaland</option>
                <option>Odisha</option>
                <option>Punjab</option>
                <option>Rajasthan</option>
                <option>Sikkim</option>
                <option>Tamil Nadu</option>
                <option>Telangana</option>
                <option>Tripura</option>
                <option>Uttar Pradesh</option>
                <option>Uttarakhand</option>
                <option>West Bengal</option>
            </select>
            <span class="input-title-1">Service Details</span>
            <div>
                <span class="input-title">Field</span>
                <span class="error error-prov-field"></span>
            </div>
            <select class="inp-text-1 inp-sel" name="prov-field">
                <option disabled selected>Choose Your Field</option>
                <option >Home Services</option>
        		<option >Appliance Repair</option>
        		<option >Transport</option>
        		<option >Personal Services</option>
        		<option >Showroom</option>
        		<option >Education</option>
        		<option >Wedding/Party</option>
            </select>
            <!--Hidden Fields for Transport -->
            <div class="transport hidden">
                <div>
                    <span class="input-title">Vehicle Type</span>
                    <span class="error error-provh-vehicle"></span>
                </div>
                <select class="inp-text-1 inp-sel" name="provh-vehicle">
                    <option disabled selected>Choose Your Vehicle</option>
                    <option >Car</option>
                    <option >Bike</option>
                    <option >Auto</option>
                    <option >Scooty</option>
                </select>
                <div>
                    <span class="input-title">Licence/Permit</span>
                    <span class="error error-provh-license"></span>
                </div>
                <input type="text" name="provh-license" class="inp-text-1">
                <div>
                    <span class="input-title">Upload License Photo(Max 4 MB)</span>
                    <span class="error error-provh-lic-photo"></span>
                </div>
                <input type="file" name="provh-lic-photo" class="inp-file">
            </div>
            <!-- End Hidden Fields for Transport -->

            <!--Hidden Fields for Education -->
            <div class="education hidden">
                <div>
                    <span class="input-title">About your Degree/Diploma</span>
                    <span class="error error-provh-degree"></span>
                </div>
                <input type="text" name="provh-degree" class="inp-text-1">
                <div>
                    <span class="input-title">Method </span>
                    <span class="error error-provh-method"></span>
                </div>
                <select class="inp-text-1 inp-sel" name="provh-method">
                    <option disabled selected>Choose Your Method</option>
                    <option >Webcam</option>
                    <option >Notes</option>
                    <option >Meeting</option>
                    <option >Video</option>
                    <option >All</option>
                </select>
                <div>
                    <span class="input-title">Upload Degree Photo(Max 4 MB)</span>
                    <span class="error error-provh-deg-img"></span>
                </div>
                <input type="file" name="provh-deg-img" class="inp-file">
            </div>
            <!-- End Hidden Fields for Education -->
            <div>
                <span class="input-title">Service</span>
                <span class="error error-prov-service"></span>
            </div>
            <select class="inp-text-1 inp-sel" name="prov-service">
                <option value="" disabled selected>Choose Your Service</option>
            </select>
            <input class="inp-text-1 hidden" name="prov-service1">
			<div>
                <span class="input-title">Spec 1</span>
                <span class="error error-prov-spec-1"></span>
            </div>
            <select class="inp-text-1 inp-sel" name="prov-spec-1">
                <option value="" disabled selected>--SELECT--</option>
            </select>
			<!--input class="inp-text-1 hidden " name="prov-speciality1"-->
			<div class="prov-spec-2 hidden">
				<div>
						<span class="input-title">Spec 2</span>
						<span class="error error-prov-spec-2"></span>
				</div>
					<select class="inp-text-1 inp-sel" name="prov-spec-2">
						<option value="" disabled selected>--SELECT--</option>
					</select>
			</div>
			<div class="prov-spec-3 hidden">
				<div>
						<span class="input-title">Spec 3</span>
						<span class="error error-prov-spec-3"></span>
					</div>
					<select class="inp-text-1 inp-sel" name="prov-spec-3">
						<option value="" disabled selected>--SELECT--</option>
					</select>
			</div>
			<div class="prov-spec-4 hidden">
                <div>
					<span class="input-title">Spec 4</span>
					<span class="error error-prov-spec-4"></span>
				</div>
				<select class="inp-text-1 inp-sel" name="prov-spec-4">
					<option value="" disabled selected>--SELECT--</option>
				</select>
			</div>
            <div>
                <span class="input-title">Work Experience</span>
                <span class="error error-prov-workexp"></span>
            </div>
            <select class="inp-text-1 inp-sel" name="prov-workexp">
                <option value="" disabled selected>Choose Your Experience</option>
                <option>Fresher</option>
                <option>1-3 Year</option>
				<option>3-5 Year</option>
                <option>5-7 Year</option>
				<option>7-10 Year</option>
                <option>10-15 Year</option>
				<option>15-20 Year</option>
                <option>20-30 Year</option>
                <option>30-40 Year</option>
                <option>40-50 Year</option>
                <option>50+ Year</option>
            </select>
			<div class="prev-work-record">
				<div>
					<span class="input-title">Previous Working Records.</span>
					<span class="error error-prev-working-record"></span>
				</div>
				<div class="row" style="margin:0px;">
					<input class="inp-text-1 col-sm-4 col-md-4 col-lg-4 col-xs-4" name="prev-working-addr1" placeholder="Address">
					<input class="inp-text-1 col-sm-4 col-md-4 col-lg-4 col-xs-4" name="prev-working-pin1" placeholder="PIN">
					<input class="inp-text-1 col-sm-4 col-md-4 col-lg-4 col-xs-4" name="prev-working-contact1" placeholder="Contact">
				</div>
				<div class="row" style="margin:0px;">
					<input class="inp-text-1 col-sm-4 col-md-4 col-lg-4 col-xs-4" name="prev-working-addr2" placeholder="Address">
					<input class="inp-text-1 col-sm-4 col-md-4 col-lg-4 col-xs-4" name="prev-working-pin2" placeholder="PIN">
					<input class="inp-text-1 col-sm-4 col-md-4 col-lg-4 col-xs-4" name="prev-working-contact2" placeholder="Contact">
				</div>
			</div>
			<div>
                <span class="input-title">Starting Price</span>
				&#8377; <span id="demo"></span>
                <span class="error error-prov-price"></span>
            </div>
   			<br>
			<div class="slidecontainer">
				<input type="range" name="prov-price" min="100" max="10000" value="5000" class="slider" id="myRange">
			</div>
			
            <div>
                <span class="input-title">About Yourself and Your Service</span>
                <span class="error error-prov-about"></span>
            </div>
            <textarea  class="inp-text-1" name="prov-about"></textarea>
			
            
			<div>
                <span class="input-title">Work Samples</span>
                <span class="error error-prov-work-samples"></span>
            </div>
            <input type="file" multiple name="prov-work-samples" class="inp-file">

            <span class="input-title-1">Upload Id Proof</span>
			<div>
                <span class="input-title">Your Photo</span>
                <span class="error error-prov-photo"></span>
            </div>
            <input type="file" name="prov-photo" class="inp-file">
            <div>
                <span class="input-title">Front Side(Max 4 MB)</span>
                <span class="error error-prov-front-id"></span>
            </div>
            <input type="file" name="prov-front-id" class="inp-file">
            <div>
                <span class="input-title">Back Side(Max 4 MB)</span>
                <span class="error error-prov-back-id"></span>
            </div>
            <input type="file" name="prov-back-id" class="inp-file">
            <div>
                <div class="error center provider-submit-error"></div>
                <div class="btn signup-prov-btn">Submit</div>
                <div class="btn signup-prev-btn">&larr;</div>
            </div>
        </div>
</form>
<form id="provider-login-form"  method="POST" action="/provider-login-message" class="hidden">
        <div>
            <div>
                <span class="input-title">Email</span>
                <span class="error error-email"></span>
            </div>
            <input type="text" name="cust-email" class="inp-text-1">
            <div>
			    <span class="input-title">Password</span>
                <span class="error error-password"></span>
            </div>
            <input type="Password" name="cust-password" class="inp-text-1">
            <a href="/provider-forgot-password" class="forgot-password">Forgot Password?</a>
            <div class="error center provider-signin-error"></div>
            <div class="btn provider-login-btn">Sign in</div>
            <div class="acc-link"><a href="/become-a-provider">Dont have an account? Create New Account</a></div>
        </div>
    </form>
	<script>
		var slider = document.getElementById("myRange");
		var output = document.getElementById("demo");
		output.innerHTML = slider.value;
		slider.oninput = function() {
		  output.innerHTML = this.value;
		}
	</script>
</section>
