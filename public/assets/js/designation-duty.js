

// Countries
var country_arr = new Array( "Professor","Associate Professor","Assistant Professor","Lecturer",
	"Current Student","Former Student","Officers","Employers");



// States
var s_a = new Array();
s_a[0]="";
s_a[1]="On Duty|On Leave";s_a[2]="On Duty|On Leave";s_a[3]="On Duty|On Leave";s_a[4]="On Duty|On Leave";
s_a[5]="";s_a[6]="";s_a[7]="On Duty|On Leave";s_a[8]="On Duty|On Leave";





function populateStates( countryElementId, stateElementId ){
	
	var selectedCountryIndex = document.getElementById( countryElementId ).selectedIndex;

	var stateElement = document.getElementById( stateElementId );
	
	stateElement.length=0;	// Fixed by Julian Woods
	stateElement.options[0] = new Option('--Select Duty--','');
	stateElement.selectedIndex = 0;
	
	var state_arr = s_a[selectedCountryIndex].split("|");
	
	for (var i=0; i<state_arr.length; i++) {
		stateElement.options[stateElement.length] = new Option(state_arr[i],state_arr[i]);
	}
}

function populateCountries(countryElementId, stateElementId){
	// given the id of the <select> tag as function argument, it inserts <option> tags
	var countryElement = document.getElementById(countryElementId);
	countryElement.length=0;
	countryElement.options[0] = new Option('--Select Designation--','-1');
	countryElement.selectedIndex = 0;
	for (var i=0; i<country_arr.length; i++) {
		countryElement.options[countryElement.length] = new Option(country_arr[i],country_arr[i]);
	}

	// Assigned all countries. Now assign event listener for the states.

	if( stateElementId ){
		countryElement.onchange = function(){
			populateStates( countryElementId, stateElementId );
		};
	}
}