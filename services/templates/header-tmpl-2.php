<header>
        <div class="logo-and-name">
            <a href="/">
                <img src="/images/icons/logo.png" class="site-logo">
                <span class="site-name">WhenWing</span>
            </a>
        </div>
        
		<form style="display:inline-block;width:70%;vertical-align:middle;">
            <select name="speciality1" id="speciality1" style="width:20%;padding:5px;border-radius:5px;vertical-align:middle;">
				<option value="">Select</option>   
			</select>
			
			<select name="speciality2" id="speciality2"  style="width:20%;padding:5px;border-radius:5px;vertical-align:middle;"	>
				<option value="">Select</option>
			</select>
			<input type = "submit" value="Search" name="search" class="btn btn-light" style="width:20%;margin:0px;" >
		</form>
		
		<div id="dropdown">
			<div id="nav-icon4">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div id="dropdown-content">
				<a href="#">Login/Signup</a>
				<a href="/resources/pages/cart.php">Cart</a>
				<a href="#">Become a Provider</a>
				<a href="#">About WhenWing</a>
				<a href="#">Contact Us</a>
			</div>
		</div>
		<script type="text/javascript">
			window.onload = function() {    
					populateSpeciality1();
					populateSpeciality2();
					};
					var specialityOptions = {
        "Carpenter": [
            "Bed",
            "Sofa",
            "Chair",
            "Door",
            "Window",
            "Table",
            "Almirah",
            "Home Interior",
            "Wood Carving"
        ],
        "Painter": [
            "House",
            "Office",
            "Apartment"
        ],
        "Plumber": [
            "House",
            "Office",
            "Apartment"
        ],
        "Electrician": [
            "Repair",
            "Electrical Wiring/Rewiring",
            "Fitting",
            "Maintenance",
            "Electricity Breakdown"
        ],
        "Wood Polisher": [
			"Bed",
            "Sofa",
            "Chair",
            "Door",
            "Window",
            "Table",
            "Almirah",
            "Home Interior"
        ],
        "Glass and Mirror": [
            "Glass",
			"Mirror"
        ],
        "Architect": [
            "House/Appartment",
            "Commercial"
        ],
		"Builder": [
            "House/Appartment",
            "Commercial"
        ],
		"Interior Designer": [
            "House",
            "Office",
			"Showroom",
			"Hotel",
			"Shop"
        ],
		"Exterior Designer": [
            "House",
            "Office",
			"Showroom",
			"Hotel",
			"Shop"
        ],
		"Internet Provider": [
            "Installation",
            "Fixture"
        ],
		"Laundry": [
            "Wash",
            "Iron",
			"Dry Clean"
        ],
		"Pundit/Puja": [
            "Naamkaran",
            "Katha",
			"Grahpravesh",
			"Jaagran"
        ],
		"Photographer": [
            "Photography",
            "Videography"
        ],
		"Web Designer and Developer": [
            "UI/UX",
            "Backend",
			"Full Stack"
        ],
		"Concrete Provider": [
            "House",
            "Office",
			"School",
			"Hotel"
        ],
		"CCTV Camera and Installation": [
            "Installation",
            "Repair",
			"Replace"
        ],
		// Wedding Plannig Specialities
		"DJ": [
            "Wedding",
			"Birthday",
			"Corporate Events"
        ],
		"Wedding Planner": [
            "Entire Wedding",
            "Sangeet",
			"Reception",
			"Engagement",
			"Christian Wedding",
			"Mehandi"
        ],
		"Party Planner": [
            "Birthday",
			"Corporate Party",
			"Anniversary Party"
        ],
		"Event Photographer": [
            "Birthday Party",
			"Anniversary Party",
			"Cocktail/Other Party",
			"Commercial",
			"Wedding"
        ],
		"Bridal Makeup Artist": [
            "The Classy Chic",
            "The Gorgeous Festive",
			"The Natrally Stunning"
        ],
		"Hair Style and Makeup": [
            "Makeup",
			"Hair Styling",
			"Hair coloring",
			"Hair Cut",
			"Hair Care Treatment",
			"Trimming",
			"Bleaching Service",
			"Hair Straightening",
			"Nail Art",
			"Manicure",
			"Pedicure",
			"Face Threading",
			"Head Massage",
			"Facial",
			"Body Waxing"
        ],
		"Party Caterers": [
            "Wedding Catering Service",
            "Pantry Catering Service",
			"Event Catering Service",
			"Birthday Catering Service"
        ],
		"Wedding Caterers": [
            "Wedding Catering Service",
            "Pantry Catering Service",
			"Event Catering Service",
			"Birthday Catering Service"
        ],
		"Wedding Florist and Decoraters": [
            "Flower Decoration",
            "Lamp Decoration",
			"Candle Decoration",
			"Rangoli"
        ],
		"Farm House": [
            "Wedding Party",
            "Office Party",
			"Event Party",
			"Birthday Party"
        ],
		"Halwai": [
            "Wedding",
            "Birthday",
			"Anniversary",
			"Corporate Event"
        ],
		"Tent and Decorators": [
            "Wedding",
            "Birthday",
			"Anniversary",
			"Corporate Event",
			"College Function",
			"Jaagran"
        ],
		"Mehandi Artist": [
            "General Mehandi",
            "Typical Indian Mehandi",
			"Bridal Mehandi",
			"Arabic Mehandi",
			"Colored Mehandi"
        ],
		"Band": [
            "Dhol",
            "Baja",
			"Bagpipes"
        ],
		"Ghori and Baggi": [
            "Ghori",
            "Baggi",
			"Car"
        ],
		"Flower Jhumar": [
            "Flower",
            "Jhumar",
			"Garlands"
        ],
		"Light Set": [
            "Fairy Lights",
            "Fancy Lights",
			"Disco light"
        ],
		"Palki, Aatish Baazi and more": [
            "Palki",
            "Aatishbaazi",
        ],
		"Waiter Services": [
            "Wedding",
            "Birthday",
			"Anniversary",
			"Corporate Event",
			"College Function"
        ],
		"Video Cameraman": [
            "Birthday Party",
			"Anniversary Party",
			"Cocktail/Other Party",
			"Commercial",
			"Wedding",
			"Event Videography"
        ],
		"Jewellery": [
            "Earrings",
            "Necklace",
			"Anklet",
			"Nose Pin",
			"Bangles",
			"Rings"
        ],
		//Appliance Repair Specialities
		"AC Service Repair and Installation": [
            "Repair",
            "Installation",
			"Replace",
			"Maintenance"
        ],
		"Refrigerator Repair": [
            "Repair",
			"Replace",
			"Maintenance"
        ],
		"Washing Machine Repair": [
            "Repair",
			"Replace",
			"Maintenance"
        ],
		"RO/Water Purifier Repair": [
            "Repair",
			"Replace",
			"Maintenance"
        ],
		"Microwave Repair": [
            "Repair",
            "Door Broken",
			"Turn Table Issue",
			"Power Issue"
        ],
		"TV Repair and Installation": [
            "LCD",
            "LED",
			"Plasma",
			"Standard/CRT"
        ],
		"Air Cooler Repair": [
            "Repair",
			"Replace",
			"Maintenance",
			"Installation"
        ],
		"Geyser/Water Heater Repair": [
            "Repair",
			"Replace",
			"Maintenance",
			"Installation"
        ],
		"Computer Repair": [
            "Repair",
			"Replace",
			"Maintenance",
			"Installation"
        ],
		"Mobile Repair": [
            "Repair",
			"Replace",
			"Maintenance",
			"Installation"
        ],
		//Transport Specialities
		"Transport Services": [
            "Bus",
			"Truck",
			"Taxi",
			"Mini Taxi",
			"Flight",
			"Train"
        ],
		"Travel": [
            "Interstate",
			"International",
			"Domestic",
			"Two Way",
			"Guide"
        ],
		//Personal Services Specialities
		"Cook": [
            "Men",
			"Women",
			"Kids",
			"Family"
        ],
		"Driver": [
            "Driver for Personal Use",
			"Outstation Trip",
			"Local Trip",
			"Airport Pickup/Drop"
        ],
		"Yoga Trainer": [
            "Men",
			"Women",
			"Groups",
			"Corporates",
			"Family"
        ],
		"Dietician": [
            "Weight Loss",
			"Weight Gain",
			"Diet Consultant"
        ],
		"Servent": [
            "Cleaning",
			"Washing",
			"Dusting",
			"Sweeping",
			"Mopping"
        ],
		"Security Guard": [
            "Residential",
			"Commercial",
			"Events",
			"Industrial",
			"Personal Security"
        ],
		"Dancer": [
            "School and College Event",
			"Family/Wedding Event",
			"Coorporate Event",
			"Public Event",
			"Reality Show/Competition"
        ],
		"Gardener": [
            "House",
			"Office"
        ]
    }
	
	var bestForOptions = {
        "Carpenter": [
            "Repair",
            "Make a New",
            "Assemble/Disassemble"
        ],
        "Painter": [
            "Interiors",
            "Exteriors",
            "Full Property"
        ],
        "Plumber": [
            "Normal Plumbing Service (Leaks, Blocks and FIxtures)",
            "Installation",
			"Repair Leakage"
        ],
        "Electrician": [
            "House",
            "Office"
        ],
        "Wood Polisher": [
			"New/Fresh",
            "Repair"
        ],
        "Architect": [
            "House/Appartment",
            "Commercial"
        ],
		"Interior Designer": [
            "Designing",
            "Decorators",
			"Gold and Silver Leafing"
        ],
		"Exterior Designer": [
            "Full Exterior",
            "Full Property"
        ],
		"Photographer": [
            "Photography",
            "Videography"
        ],
		"Web Designer and Developer": [
            "UI/UX",
            "Backend",
			"Full Stack"
        ],
		"Concrete Provider": [
            "Timber",
            "Stone",
			"Reinforced Concrete",
			"Brick",
			"Steel"
        ],
		"CCTV Camera and Installation": [
            "Dome",
            "Wireless",
			"Bullet",
			"Network/IP",
			"Spy"
        ],
		// Wedding Plannig Specialities
		"Wedding Planner": [
            "Flower Decoration",
			"Venue Decoration",
			"DJ",
			"Catering",
			"Mandap Decoration",
			"Sound & Lighting",
			"Hosting",
			"Photography",
			"Tent & Tarpaulin",
			"Furniture Rental",
			"Manpower Provider",
			"Electrical Appliances Rental",
			"Artist Management",
			"Return gifts"
        ],
		"Party Planner": [
            "Flower Decoration",
			"Venue Decoration",
			"DJ",
			"Catering",
			"Mandap Decoration",
			"Sound & Lighting",
			"Hosting",
			"Photography",
			"Tent & Tarpaulin",
			"Furniture Rental",
			"Manpower Provider",
			"Electrical Appliances Rental",
			"Artist Management",
			"Return gifts"
        ],
		"Event Photographer": [
            "Digital Copies",
			"Canvas/Frame Print",
			"Online Album",
			"DVD",
			"Live Streaming",
			"Album Creation"
        ],
		"Bridal Makeup Artist": [
            "Only Wedding Day",
            "Only Other Function",
			"Wedding Day and 1 Other Function"
        ],
		"Hair Style and Makeup": [
            "Individual",
			"Package"
        ],
		"Party Caterers": [
            "Vegetarian",
			"Non Vegetarian",
			"Both Vegetarian and Non Vegetarian"
        ],
		"Wedding Caterers": [
            "Vegetarian",
			"Non Vegetarian",
			"Both Vegetarian and Non Vegetarian"
        ],
		"Halwai": [
            "South Indan",
            "North Indian"
        ],
		"Mehandi Artist": [
            "1-2",
            "3-5",
			"6-10",
			"More than 10"
        ],
		"Waiter Services": [
            "5-10",
            "10-50",
			"More than 50",
			"Corporate Event",
			"College Function"
        ],
		"Video Cameraman": [
            "Digital Copies",
			"Online Album",
			"DVD",
			"Live Streaming",
			"Album Creation"
        ],
		//Appliance Repair Specialities
		"AC Service Repair and Installation": [
            "Window AC",
            "Split AC"
        ],
		"Refrigerator Repair": [
            "One Door",
			"Two Door"
        ],
		"Washing Machine Repair": [
            "Front Load",
			"Top Load",
			"Semi Automatic",
			"Full Automatic"
        ],
		"RO/Water Purifier Repair": [
            "RO",
			"UV",
			"RO + UV",
			"UF Gravity",
			"RO + UV + UF"
        ],
		"Microwave Repair": [
            "Convection",
            "Grill",
			"Solo",
			"Oven, Toaster, Grill"
        ],
		"TV Repair and Installation": [
            "Repair/Replacement",
            "Installation",
			"Not Working"
        ],
		"Air Cooler Repair": [
            "Not WOrking",
			"Water Leaking",
			"Noisy",
			"Odour"
        ],
		"Geyser/Water Heater Repair": [
            "Not WOrking",
			"Water Leaking",
			"Heating Issue"
        ],
		//Transport Specialities

		//Personal Services Specialities
		"Cook": [
            "Part TIme",
			"Full TIme",
			"Full TIme in Home"
        ],
		"Driver": [
            "Temporary",
			"Permanent"
        ],
		"Yoga Trainer": [
            "Power",
			"Ashtanga",
			"Iyengar",
			"Kundalini",
			"Therapy Yoga"
        ],
		"Dietician": [
            "Men",
			"Women",
			"Kids"
        ],
		"Servent": [
            "Part Time(2-8 Hours)",
			"Full TIme(9-12 Hours)",
			"Full TIme in House(24 Hours)"
        ],
		"Security Guard": [
            "Temporary",
			"Permanent"
        ],
		"Dancer": [
            "Adults",
			"Kids"
        ],
		"Gardener": [
            "Part Time",
			"Full TIme",
			"Permanent"
        ]
    }
	
	
	
	
			var speciality1 = $("select[name=speciality1]");
			function populateSpeciality1(){
				var serviceVal = "<?php echo $profession ?>";
				//speciality1.html('');  // remove all options bar first
				$.each(specialityOptions, function (Ind, Val) {
					if (Ind == serviceVal) {
						$.each(Val, function (Ind1, Val1) {
							var optionObj = new Option(Val1, Val1);
							speciality1.append(optionObj);
						});
					}
				});
			}
			var speciality2 = $("select[name=speciality2]");
			function populateSpeciality2(){
				var serviceVal = "<?php echo $profession ?>";
				//speciality2.html('');  // remove all options bar first
				$.each(bestForOptions, function (Ind, Val) {
					if (Ind == serviceVal) {
						$.each(Val, function (Ind1, Val1) {
							var optionObj = new Option(Val1, Val1);
							speciality2.append(optionObj);
						});
					}
				});	
			}
		</script>
</header>
