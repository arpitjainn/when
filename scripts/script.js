$(document).ready(function () {
    $('#hamburger-icon').click(function () {
        $(this).toggleClass('open');
        $('#nav-menu').toggle();
        $('#hamburger-icon span').toggleClass('black-bg');
    });

    function isEmail(email) {
        let regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }
    function isEmpty(str) {
        if (str == '' || str == ' ' || str == null)
            return true;
    }
    function isPassword(password) {
        let regex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,20}$/;
        return regex.test(password);
    }

    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function forceDigitOnly(e, errorSelector) {
        //if the letter is not digit then display error and don't display anything
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            $(errorSelector).html("Digits Only").show();
            return false;
        }
        else {
            $(errorSelector).html("");
        }
        return true;
    }
    function validateImage(imageSelector, errorSelector, msg = "No image Selected.") {
        let selectorVal = $(imageSelector).val();
        let anImage;
        switch (selectorVal.substring(selectorVal.lastIndexOf('.') + 1).toLowerCase()) {
            case 'gif': case 'jpg': case 'png':
                anImage = true;
                break;
            default:
                anImage = false;
        }

        if (isEmpty(selectorVal)) {
            $(errorSelector).html(msg);
            return false;
        } else if (!anImage) {
            $(errorSelector).html('Not an Image File.');
            return false;
        } else {
            $(errorSelector).html('');
            return true;
        }
    }
    function validateInput(selectorName, errorSelector, msg = "can't be Empty") {
        let selectorVal = $(selectorName).val();
        if (isEmpty(selectorVal)) {
            $(errorSelector).html(msg);
            return false;
        } else {
            $(errorSelector).html('');
            return true;
        }
    }

    function validateInputAsEmail(selectorName, errorSelector, msg = "can't be Empty") {
        let selectorVal = $(selectorName).val();
        if (isEmpty(selectorVal)) {
            $(errorSelector).html(msg);
            return false;
        } else if (!isEmail(selectorVal)) {
            $(errorSelector).html('Not a Valid Email.');
            return false;

        } else {
            $(errorSelector).html('');
            return true;
        }
    }
    function validatePassword(pwdSelector, errorSelector, msg = "can't be Empty") {
        let pwdVal = $(pwdSelector).val();
        if (isEmpty(pwdVal)) {
            $(errorSelector).html(msg);
            return false;
        } else if (!isPassword(pwdVal)) {
            $(errorSelector).html('Not a Valid Password.');
            return false;

        } else {
            $(errorSelector).html('');
            return true;
        }
    }
    function validatePasswordMatch(pwdSelector, cnfPwdSelector, errorSelector, msg = "can't be Empty") {
        let pwdVal = $(pwdSelector).val();
        let cnfPwdVal = $(cnfPwdSelector).val();
        if (isEmpty(cnfPwdVal)) {
            $(errorSelector).html(msg);
            return false;
        }
        else if (cnfPwdVal != pwdVal) {
            $(errorSelector).html('Password doesn\'t match.');
            return false;
        } else {
            $(errorSelector).html('');
            return true;
        }

    }


    $("#nav-menu li").click(function () {
        if ($(window).width() < 990) {
            //Toggle the child but don't include them in the hide selector using .not()
            $(this).children('ul').toggle();
        }
        event.stopPropagation();
    });

    $('.oc-2').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: [
            "<span class='prev-slider-btn'>&lsaquo;&lsaquo;</span>",
            "<span class='next-slider-btn'>&rsaquo;&rsaquo;</span>"
        ],
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 2
            },
            800: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    })

    /************************ Provider  Form********************/

    var providerTab = $(".provider-tab");
    var loginTab = $(".login-tab");
    providerTab.click(function () {
        if (!providerTab.hasClass('active-f-tab')) {
            providerTab.addClass('active-f-tab');
            loginTab.removeClass('active-f-tab');
            $("#provider-login-form").hide();
            $("#provider-signup-form").show();
        }
    });
    loginTab.click(function () {
        if (!loginTab.hasClass('active-f-tab')) {
            loginTab.addClass('active-f-tab');
            providerTab.removeClass('active-f-tab');
            $("#provider-signup-form").hide();
            $("#provider-login-form").show();
        }
    });

    //Change Service select menu based on field select menu

    var serviceOptions={
			"Home Services":["Carpenter","Painter","Plumber","Electrician","Wood Polisher","Glass and Mirror","Architect","Builder","Interior Designer","Internet Provider","Laundry","Pundit/Puja","Photographer","Web Designer and Developer","Concrete Provider","CCTV Camera and Installation"],
			"Appliance Repair":["AC Service Repair and Installation","Refrigerator Repair","Washing Machine Repair","RO/Water Purifier Repair","Microwave Repair","TV Repair and Installation","Air Cooler Repair","Geyser/Water Heater Repair","Computer Repair","Mobile Repair"],
			"Transport":["Transport Services","Travel"],
			"Personal Services":["Cook","Driver","Yoga Trainer","Dietician","Servent","Security Guard","Dancer","Gardener"],
			"Showroom":["Car Showroom","Bike Showroom","Scooty and Scooter Showroom","Clothes","Watch","Mobile","Electronics","Ac and Cooler","Furniture","Laptop and Computer","Jewellery","Bag and Suitcase","Gifts","Footwear"],
			"Education":["IES","IAS","Gate","CAT","SSC","JE","CGL","CHSL","Army","CDS","XAT","IIT JEE","CLAT","MAT","CLAT PG","AILET PG","AILET","NEET PG","DU LLB","AIIMS MBBS","AIIMS PG","JIPMER ME","RBI Assistant","IBS PO","NDA","SBI PO","C/C++","JAVA"],
			"Wedding/Party":["DJ","Wedding Planner","Party Planner","Event Photographer","Bridal Makeup Artist","Hair Style and Makeup","Party Caterers","Wedding Caterers","Wedding Florist and Decoraters","Farm House","Halwai","Tent and Decorators","Mehandi Artist","Band","Ghori and Baggi","Flower Jhumar","Light Set","Palki, Aatish Baazi and more","Waiter Services","Video Cameraman","Jewellery"]}
		var providerField=$("select[name=prov-field]");
		var providerService=$("select[name=prov-service]");
		providerField.change(function(){
			providerService.html('')
			if(this.selectedIndex<1)
				return;
			var fieldVal=$(this).val();
			$('.transport').addClass('hidden');
			$('.education').addClass('hidden');
			$("input[name=prov-service1]").addClass('hidden');
			$('select[name=prov-service]').removeClass('hidden');
			if(fieldVal=='Transport'){
				$('.transport').removeClass('hidden')}
			else if(fieldVal=='Education'){
				$('.education').removeClass('hidden');
				$("select[name=prov-service]").addClass('hidden');
				$('input[name=prov-service1]').removeClass('hidden')}
			$.each(serviceOptions,function(ind,val){
				if(ind==fieldVal){
					$.each(val,function(ind1,val1){
						var optionObj=new Option(val1,val1);
						providerService.append(optionObj)})}})});
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
	
	
	var extraOptions = {
        "Painter": [
            "New/Fresh",
            "Repaint"
        ],
        
		// Wedding Plannig Specialities
		
		//Appliance Repair Specialities
		"Refrigerator Repair": [
            "Door Issue",
			"Water Leaking",
			"Power issue",
			"Cooling Issue",
			"Refrost Issue",
			"Noisy",
			"Not WOrking"
        ]
		
		//Transport Specialities

		//Personal Services Specialities
		
    }
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
	
	var providerSpeciality = $("select[name=prov-speciality]");
	var providerBestFor = $("select[name=prov-best-for]");
	var providerExtra = $("select[name=prov-extra]");
	var providerServiceAs = $("select[name=prov-service-as]");
	providerService.change(function () {
		var serviceVal = $(this).val();window.alert(serviceVal);
        providerSpeciality.html('');  // remove all options bar first
		$.each(specialityOptions, function (specialityInd, specialityVal) {
            if (specialityInd == serviceVal) {
                $.each(specialityVal, function (specialityInd1, specialityVal1) {
                    var optionObj = new Option(specialityVal1, specialityVal1);
                    providerSpeciality.append(optionObj);
                });
            }
        });
		providerBestFor.html('');  // remove all options bar first
		$.each(bestForOptions, function (bestForInd, bestForVal) {
            if (bestForInd == serviceVal) {
                $.each(bestForVal, function (bestForInd1, bestForVal1) {
                    var optionObj = new Option(bestForVal1, bestForVal1);
                    providerBestFor.append(optionObj);
                });
            }
        });
		providerExtra.html('');  // remove all options bar first
		$.each(extraOptions, function (extraInd, extraVal) {
            if (extraInd == serviceVal) {
                $.each(extraVal, function (extraInd1, extraVal1) {
                    var optionObj = new Option(extraVal1, extraVal1);
                    providerExtra.append(optionObj);
                });
            }
        });
		providerServiceAs.html('');  // remove all options bar first
		providerServiceAs.append("optionObj");
		$.each(serviceAsOptions, function (serviceAsInd, serviceAsVal) {
            if (serviceAsInd == serviceVal) {
                $.each(serviceAsVal, function (serviceAsInd1, serviceAsVal1) {
                    var optionObj = new Option(serviceAsVal1, serviceAsVal1);
                    providerServiceAs.append(optionObj);
                });
            }
        });
        //if (this.selectedIndex < 1)
        //    return; // done
        
        //$('.transport').addClass('hidden');
        //$('.education').addClass('hidden');
        //$("input[name=prov-service1]").addClass('hidden');
        //$('select[name=prov-service]').removeClass('hidden');
        //if (fieldVal == 'Transport') {
        //$('.transport').removeClass('hidden');
        //} else if (fieldVal == 'Education') {
        //    $('.education').removeClass('hidden');
        //    $("select[name=prov-service]").addClass('hidden');
        //    $('input[name=prov-service1]').removeClass('hidden');
        //}
    });
	
    //only digits
    $("input[name=prov-contact]").keypress(function (e) {
        return forceDigitOnly(e, ".error-prov-contact");
    });
    $(".otp").click(function () {
        var mobnumber = $("input[name=prov-contact]").val();
        var mobNumLen = mobnumber.toString().length;
        if (mobNumLen >= 10 && mobNumLen < 15) {
            var request = $.ajax({
                url: "/resources/pages/otp-sender.php",
                method: "POST",
                data: { mobNum: mobnumber },
                dataType: "html"
            });
            request.done(function (msg) {
                if (msg) {
                    $(".error-prov-contact").html("OTP Sent." + msg );
                } else{
                    $(".error-prov-contact").html("Something Went Wrong.");
                }

            });
        } else {
            $(".error-prov-contact").html("Not a valid Mobile Number.");
        }

    });
    $('.signup-next-btn').click(function () {

        let f1, f2, f3, otpFlag;
        f1 = validateInput("input[name=prov-name]", ".error-prov-name");
        f2 = validateInput("input[name=prov-contact]", ".error-prov-contact");
        f3 = validateInput("input[name=prov-otp]", ".error-prov-otp");

        var mOtp = $("input[name=prov-otp]").val();
        if (mOtp.toString().length >= 2) {
            var request = $.ajax({
                url: "/verify-otp",
                method: "POST",
                data: { mobOtp: mOtp },
                dataType: "html"
            });
            request.done(function (msg) {
                if (msg == 1) {
                    otpFlag = true;

                    if (f1 && f2 && f3 && otpFlag) {
                        $('.signup-1').hide();
                        $('.signup-2').show();
                    } else {
                        $(".error-prov-cnext").html("Kindly check all fields.");
                    }

                } else {
                    $(".error-prov-otp").html("Incorrect OTP.");
                }
            });
        }


    });

    $('.signup-prev-btn').click(function () {
        $('.signup-2').hide();
        $('.signup-1').show();
    });

    //only Digit
    $("input[name=prov-pin]").keypress(function (e) {
        return forceDigitOnly(e, ".error-prov-pin");
    });
    $('.signup-prov-btn').click(function () {
        $('.provider-submit-error').html('');
        let f1, f2, f3, f4, f5, f6, f7, f8, f9, f10, f11, f12, f13, f14, f15, f16, fh1, fh2, fh3;
        let fh = okFlag = false;
        f1 = validateInputAsEmail("input[name=prov-email]", ".error-prov-email");
        f2 = validatePassword("input[name=prov-password]", ".error-password");
        f3 = validatePasswordMatch("input[name=prov-password]", "input[name=prov-cnf-password]", ".error-cnf-password");
        f4 = validateInput("input[name=prov-dob]", ".error-prov-dob");
        f5 = validateInput("select[name=prov-gender]", ".error-prov-gender");
        f6 = validateInput("input[name=prov-addr]", ".error-prov-addr");
        f7 = validateInput("input[name=prov-pin]", ".error-prov-pin");
        f8 = validateInput("select[name=prov-state]", ".error-prov-state");
        f9 = validateInput("select[name=prov-field]", ".error-prov-field");
        if ($('.education').hasClass('hidden')) {
            f10 = validateInput("select[name=prov-service]", ".error-prov-service");
        }else{
            f10 = validateInput("input[name=prov-service1]", ".error-prov-service");
        }
        f11 = validateInput("input[name=prov-speciality]", ".error-speciality");
        f12 = validateInput("select[name=prov-workexp]", ".error-prov-workexp");
        f13 = validateInput("textarea[name=prov-record]", ".error-prov-record");
        f14 = validateInput("textarea[name=prov-about]", ".error-prov-about");
        f15 = validateImage("input[name=prov-front-id]", ".error-prov-front-id");
        f16 = validateImage("input[name=prov-back-id]", ".error-prov-back-id");

        if (!$('.transport').hasClass('hidden')) {
            fh = true;
            fh1 = validateInput("select[name=provh-vehicle]", ".error-provh-vehicle");
            fh2 = validateInput("input[name=provh-license]", ".error-provh-license");
            fh3 = validateImage("input[name=provh-lic-photo]", ".error-provh-lic-photo");

        } else if (!$('.education').hasClass('hidden')) {
            fh = true;
            fh1 = validateInput("input[name=provh-degree]", ".error-provh-degree");
            fh2 = validateInput("select[name=provh-method]", ".error-provh-method");
            fh3 = validateImage("input[name=provh-deg-img]", ".error-provh-deg-img");

        }

        if (f1 && f2 && f3 && f4 && f5 && f6 && f7 && f8 && f9 && f10 && f11 && f12 && f13 && f14 && f15 && f16) {
            okFlag = true;
        }
        if (fh) {
            if (okFlag && fh1 && fh2 && fh3) {
                $('#provider-signup-form').submit();
            } else {
                $('.provider-submit-error').append('Kindly Check All Fields.');
            }
        } else if (okFlag) {

            $('#provider-signup-form').submit();
        } else {
            $('.provider-submit-error').append('Kindly Check All Fields.');
        }

    });
    $('.provider-login-btn').click(function () {
        $('.provider-signin-error').html('');
        let f1, f2;

        f1 = validateInputAsEmail("input[name=cust-email]", ".error-email");
        f2 = validateInput("input[name=cust-password]", ".error-password");

        if (f1 && f2) {
            $('#provider-login-form').submit();
        } else {
            $('.provider-signin-error').append('Kindly Fill All Fields.');
        }

    });
    /****************************! End Provider  Form*************************/


    /************************Customer Reset Password  Form********************/
    $(".cust-forgot-pwd-btn").click(function () {

        let f1 = validateInputAsEmail("input[name=cust-email]", ".error-email");
        if (f1) {
            $('#cust-forgot-pwd-form').submit();
        }
    });

    /************************! End Customer Reset Password  Form********************/


    /*****************************Customer Sign-up  Form***************************/
    //only digits
    $("input[name=cust-mobile]").keypress(function (e) {
        return forceDigitOnly(e, ".error-mobile");
    });
    $(".cust-otp").click(function () {
        var mobnumber = $("input[name=cust-mobile]").val();
        var mobNumLen = mobnumber.toString().length;
        if (mobNumLen >= 10 && mobNumLen < 15) {
            var request = $.ajax({
                url: "/send-otp",
                method: "POST",
                data: { mobNum: mobnumber },
                dataType: "html"
            });
            request.done(function (msg) {
                if (msg) {
                    $(".error-mobile").html("OTP Sent." + msg);

                } else{
                    $(".error-mobile").html("Something Went Wrong.");
                }
            });
        } else {
            $(".error-mobile").html("Not a valid Mobile Number.");
        }

    });

    $('.cust-signup-btn').click(function () {
        $(".cust-signup-error").html("");
        let f1, f2, f3, f4, f5, otpFlag;
        f1 = validateInput("input[name=cust-name]", ".error-name");
        f2 = validateInputAsEmail("input[name=cust-email]", ".error-email");
        f3 = validateInput("input[name=cust-mobile]", ".error-mobile");
        f4 = validateInput("input[name=cust-password]", ".error-password");
        f5 = validateInput("input[name=cust-otp]", ".error-cust-otp");

        if (f1 && f2 && f3 && f4 && f5 && otpFlag) {
            $('#cust-signup-form').submit();
        }
        else {
            $(".cust-signup-error").append("Kindly Fill All Fields.");
        }

        var mOtp = $("input[name=cust-otp]").val();
        if (mOtp.toString().length >= 2) {
            var request = $.ajax({
                url: "/verify-otp",
                method: "POST",
                data: { mobOtp: mOtp },
                dataType: "html"
            });
            request.done(function (msg) {
                if (msg == 1) {
                    otpFlag = true;

                    if (f1 && f2 && f3 && f4 && f5 && otpFlag) {
                        $('#cust-signup-form').submit();
                    }
                    else {
                        $(".cust-signup-error").append("Kindly Fill All Fields.");
                    }

                } else {
                    $(".error-cust-otp").html("Incorrect OTP.");
                }
            });
        }












    });
    /************************!End Customer Sign-up  Form********************/


    /************************ Customer Login  Form********************/
    $('.cust-login-btn').click(function () {
        $(".cust-signin-error").html("");
        let f1, f2;

        f1 = validateInputAsEmail("input[name=cust-email]", ".error-email");
        f2 = validateInput("input[name=cust-password]", ".error-password");

        if (f1 && f2) {
            $('#cust-login-form').submit();
        } else {
            $(".cust-signin-error").append("Kindly Fill All Fields.");
        }

    });

    /************************! End Customer Login  Form********************/


    /************************Customer Verification Password  Form********************/
    $(".cust-reset-pwd-btn").click(function () {

        let f1, f2;
        f1 = validatePassword("input[name=cust-password]", ".error-pwd");
        f2 = validatePasswordMatch("input[name=cust-password]", "input[name=cust-cnf-password]", ".error-cnf-pwd");

        if (f1 && f2) {
            $('#cust-reset-pwd-form').submit();
        }
    });

    /************************! End Customer Verification Password  Form********************/


    $('.order-delete').click(function () {
        let orderId = $(this).closest("tr").find('td:first-child').text();
        var cnfrmCancellation = confirm("Do you really want to cancel order ?\n Click Ok to cancel Order.");
        if (cnfrmCancellation == true) {
            var posting = $.post("/handlers/formhandle/order/update-order/", { orderId: orderId });
            posting.done(function (data) {
            });
            $(this).closest("tr").hide();
        }
    });
    //order Form submission
    $('.order-btn').click(function () {
        $('#order-form').submit();
    });





    /*************************Cookies For Location************************ */

    var ww_location = getCookie("ww_location");
    if (!ww_location) {
        $("#location-popup").show();
    } else {
        $(".states-search").val(ww_location);
    }
    $(".hide-popup").click(function () {
        $("#location-popup").hide();
    });
    $(".states-options").change(function () {
        var ww_location = $(this).val();
        setCookie("ww_location", ww_location, 30);
        $(".states-search").val(ww_location);
        $("#location-popup").hide();

    });
    $(".states-search").change(function () {
        var ww_location = $(this).val();
        setCookie("ww_location", ww_location, 30);
    });
    $(".detect-btn").click(function () {
        var stateVal;
        if (window.navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var lat = position.coords.latitude,
                    lng = position.coords.longitude,
                    latlng = new google.maps.LatLng(lat, lng),
                    geocoder = new google.maps.Geocoder();
                geocoder.geocode({ 'latLng': latlng }, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[1]) {
                            for (var i = 0; i < results.length; i++) {
                                if (results[i].types[0] === "locality") {
                                    stateVal = results[i].address_components[0].short_name;
                                    if (stateVal.toLowerCase() == "delhi") {
                                        stateVal = "Delhi NCR";
                                    }
                                    setCookie("ww_location", stateVal, 30);
                                    $(".states-search").val(stateVal);
                                    $("#location-popup").hide();
                                }
                            }
                        }
                        else { console.log("No reverse geocode results.") }
                    }
                    else { console.log("Geocoder failed: " + status) }
                });
            }, function () { console.log("Geolocation not available.") });
        }

    });
    /*************************!End Cookies For Location************************ */

    /*************************Search Results************************ */
    $("#search-input").keyup(function () {
        var searchResult = $("#search-result");
        var searchStr = $("#search-input").val().toLowerCase();
        searchResult.html('');
        if (searchStr == '' || searchStr == ' ') {
            searchResult.html('');
        } else {
            $.each(serviceOptions, function (ind, val) {
                var url_param1 = ind.replace(/\s+/g, '-').toLowerCase();
                $.each(val, function (ind1, val1) {
                    var arrTextVal = val1.toLowerCase();
                  if (arrTextVal.indexOf(searchStr) != -1) {
                        var nodeEle = document.createElement("a");
                        var url_param2 = arrTextVal.replace(/\s+/g, '-').toLowerCase();
                        var textnode = document.createTextNode(arrTextVal);
                        nodeEle.appendChild(textnode);
                        nodeEle.href = "/services/" + url_param1 + '/' + url_param2;
                        searchResult.append(nodeEle);
                    }
                });

            });
        }
    });
    /*************************!End Search Results************************ */
    /*************************Services Form ************************ */
    $(".serv-get-list-btn").click(function () {
        $(".services-form").submit();
    });
    $(".firstoption").change(function () {
        $(".secondoption").removeAttr("disabled");
    });
    $(".secondoption").change(function () {
        $(".thirdoption").removeAttr("disabled");
    });
    $(".thirdoption").change(function () {
        $(".fourthoption").removeAttr("disabled");
        $(".fifthoption").removeAttr("disabled");
        $(".sixthoption").removeAttr("disabled");
    });
    /*************************!End Services Form ************************ */

});
