

// Countries
var members _arr = new Array( "Professor","Associate Professor","Assistant Professor","Lecturer",
	"Current Student","Former Student","Officers","Employers");



function populateMembers(membersElementId){
	// given the id of the <select> tag as function argument, it inserts <option> tags
	var membersElement = document.getElementById(membersElementId);
	membersElement.length=0;
	membersElement.options[0] = new Option('--Select Designation--','-1');
	membersElement.selectedIndex = 0;
	for (var i=0; i<members_arr.length; i++) {
		membersElement.options[membersElement.length] = new Option(members_arr[i],members_arr[i]);
	}

	// Assigned all countries. Now assign event listener for the states.


}