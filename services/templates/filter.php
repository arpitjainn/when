<form>
			<label for="location"><b>Budget :</b> &#8377; </label>
			<span id="demo"></span> 
			<br>
				<div class="slidecontainer">
						<input type="range" name="budget" min="100" max="10000" value="5" class="slider" id="myRange">
				</div>
				<label for="location"><b>Location</b></label>
				<input type="text" name="location"  style="width:100%; padding:5px;border-radius:5px;margin-top:10px;margin-bottom:20px; ">
				<label for="Provides Service as" id="prov-service-as-label" class="hidden" style="margin-bottom:5px;"><b>Provides Services as</b></label>
				<div id="wrapper" class="hidden"></div>
				<input type="text" name="speciality1" hidden value="<?php echo isset($_GET['speciality1']) ? $_GET['speciality1'] : '' ?>" style="width:100%; padding:5px;border-radius:5px;margin-top:10px;margin-bottom:10px; ">
				<input type="text" name="speciality2" hidden value="<?php echo isset($_GET['speciality2']) ? $_GET['speciality2'] : '' ?>" style="width:100%; padding:5px;border-radius:5px;margin-top:10px;margin-bottom:10px; ">
				<input type="text" name="speciality3" hidden value="<?php echo isset($_GET['speciality3']) ? $_GET['speciality3'] : '' ?>" style="width:100%; padding:5px;border-radius:5px;margin-top:10px;margin-bottom:10px; ">
				<input type="submit" class="btn btn-success" name="apply" value="Apply" style="width:100%;">
</form>
<script>
//var myArray = ["Asian", "Thai", "Korean", "Chinese", "Mexican"];
var serviceAsOptions = {
        "Carpenter": [
            "Helper",
            "Mistri",
            "Contractor",
            "All Above"
        ],
        "Painter": [
            "Painter Only",
            "Painter + Material"
        ],
        "Plumber": [
            "Contractor",
            "Helper"
        ],
        "Wood Polisher": [
			"Polish Only",
            "Polish + Material"
        ],
        "Glass and Mirror": [
            "Workers",
			"Suppliers"
        ],
		"Architect": [
            "100-1000 square feet",
            "1000-2000 square feet",
			"2000-5000 square feet",
			"5000-10000 square feet",
			"10000+ square feet"
        ],
		"Builder": [
            "100-1000 square feet",
            "1000-2000 square feet",
			"2000-5000 square feet",
			"5000-10000 square feet",
			"10000+ square feet"
        ],
		"Interior Designer": [
            "100-1000 square feet",
            "1000-2000 square feet",
			"2000-5000 square feet",
			"5000+ square feet"
        ],
		"Exterior Designer": [
            "100-1000 square feet",
            "1000-2000 square feet",
			"2000-5000 square feet",
			"5000+ square feet"
        ],
		"Pundit/Puja": [
            "Basic Consultation",
            "Detailed Consulation"
        ],
		"CCTV Camera and Installation": [
            "2MP",
            "1MP"
        ],
		// Wedding Plannig Specialities
		"Wedding Planner": [
            "Less then 100 Guests",
            "101-250",
			"251-500",
			"501-1000",
			"More than 1000"
        ],
		"Party Planner": [
            "Less then 100 Guests",
            "101-250",
			"251-500",
			"501-1000",
			"More than 1000"
        ],
		"Bridal Makeup Artist": [
            "Basic Makeup",
            "HD Makeup",
			"Air Brush Makeup"
        ],
		"Party Caterers": [
            "South Indian",
            "North Indian"
        ],
		"Wedding Caterers": [
            "South Indian",
            "North Indian"
        ],
		"Mehandi Artist": [
            "For Male",
            "For Female"
        ],
		"Waiter Services": [
            "Male",
            "Female"
        ],
		//Appliance Repair Preference
		
		//Transport Preference
		
		//Personal Services Preference
		"Cook": [
            "Male",
			"Female"
        ],
		"Driver": [
            "Male",
			"Female"
        ],
		"Yoga Trainer": [
            "Male",
			"Female"
        ],
		"Dietician": [
            "Male",
			"Female"
        ],
		"Servent": [
            "Male",
			"Female"
        ],
		"Security Guard": [
            "Male",
			"Female"
        ],
		"Dancer": [
            "Male",
			"Female"
        ],
		"Gardener": [
            "Male",
			"Female"
        ]
    }

var wrapper = document.getElementById('wrapper');
var elementsToInsert = [];
var serviceVal = "<?php echo $profession ?>";
        //providerSpeciality.html('');  // remove all options bar first
		$.each(serviceAsOptions, function (Ind, Val) {
            if (Ind == serviceVal) {
				var provServiceAsLabel= document.getElementById('prov-service-as-label');
				provServiceAsLabel.classList.remove("hidden");
				wrapper.classList.remove("hidden");
                $.each(Val, function (Ind1, Val1) {
					var radio = document.createElement('input');
					var label = document.createElement('label');
					radio.type = 'radio';
					radio.name = "provideServiceAs";
					radio.value = Val1;

					label.setAttribute("for", Val1);
					label.innerHTML = Val1;

					elementsToInsert.push({ label: label, radio: radio });
					//var toInsert = elementsToInsert.splice(randomIndex, 1)[0];
					
					wrapper.appendChild(elementsToInsert[Ind1].radio);
					wrapper.appendChild(elementsToInsert[Ind1].label);
					var br = document.createElement("br");
					wrapper.appendChild(br);
                });
            }
        });

</script>
				
			