//HTTP 5103 - FINAL PROJECT RESTUARANT WEBSITE
//UNDERWATER RESTUARANT
//WEEKLY SPECIALS FEATURE CODED BY ENRINA WILMS

jQuery(document).ready(function(){

// VARIABLE DELCARED TO GET HTML ELEMENT FOR WEEKLY SPECIALS
var weeklySpecials = document.getElementsByClassName("sec-container");

//GETTING THE DATE AND CURRENT DAY OF THE WEEK
var today = new Date();
var dayHighlight = today.getDay();
    
    
//SWITCH STATEMENT USED TO SWITCH EVERY CASE WHENEVER IS THE CURRENT DAY IT WILL BE HIGHLIGHTED OR CSS STYLING WILL BE IMPLEMENTED 
//ON THE CSS FILE. A CLASS NAMED "highlights" WILL BE ADDED AND OVERWRITE THE CURRENT CSS STYLING OF 
//THE CONTAINER WITH THE CLASS OF "sec-container"
    
    
switch (dayHighlight) {
        
        
	case 1:
        
        //MONDAY
        $(".sec-container:eq(0)").addClass("highlights");
		break; 
        
	case 2:
        
        //TUESDAY
        $(".sec-container:eq(1)").addClass("highlights");
		break;
        
	case 3:
        
        //WEDNESDAY
        $(".sec-container:eq(2)").addClass("highlights");
		break;
        
	case 4:
        
        //THURSDAY
        $(".sec-container:eq(3)").addClass("highlights");
		break;

	case 5:
        
        //FRIDAY
        $(".sec-container:eq(4)").addClass("highlights");
		break;
    
    case 6:
        
        //SATURDAY
        $(".sec-container:eq(5)").addClass("highlights");
		break;
	
    case 0:
        
        //SUNDAY
        $(".sec-container:eq(5)").addClass("highlights");
		break; 
        
	
}// END OF SWITCH STATEMENT FOR HIGHLIGHTING THE CURRENT DAY
    
});// END OF .READY FUNCTION

