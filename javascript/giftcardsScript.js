//HTTP 5103 - FINAL PROJECT RESTUARANT WEBSITE
//UNDERWATER RESTUARANT
//GIFT CARD FEATURE CODED BY ENRINA WILMS

window.onload = pageReady;

function pageReady() {
  
  var gc50 = document.getElementById("gc-50");
  var gc100 = document.getElementById("gc-100");
  var gcContainer = document.getElementById("giftcard-container");
  var gcForm = document.getElementById("gc-form");
  var amount = "";

  gc50.onclick = card50;
  gc100.onclick = card100;

 
  function card50() {
      gc100.style.display ="none";
      gcForm.style.display = "block";
      amount = "50";
  }
  function card100() {
      gc50.style.display ="none";
      gcForm.style.display = "block";
      amount = "100";
  }

// FORM HANDLE IN SUBMITTING THE FORM
  var formHandle = document.forms[0];
    
  formHandle.onsubmit = processForm;
  
  function processForm() {
    
      
      
// VARIABLE DECLARATION FOR GIFT CARD FORM USER INPUTS
      
    var form = document.getElementById("gc-form");
    var gcContainer = document.getElementById("giftcard-container");
    var gcName = document.getElementById("formName");
    var gcEmail = document.getElementById("formEmail");
    var gcRName = document.getElementById("formRName");
    var gcREmail = document.getElementById("formREmail");
    var gcMsg = document.getElementById("formMsg");
    var confirmation = document.getElementById("giftcard-confirmation");
      
//VARIABLE DECLARATION FOR DISPLAYING CUSTOMER INPUTS AFTER SUBMITTING THE FORM
    
    var disName = document.getElementById("custName");
    var disEmail = document.getElementById("custEmail");
    var disRName = document.getElementById("custRName");
    var disREmail = document.getElementById("custREmail");
    var disAmt = document.getElementById("custAmount");
    var disMsg = document.getElementById("custMsg");
      
      
    
//FORM VALIDATIONS
    
    // EMAIL PATTERN VALIDATION
    var emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      
    
    // CUSTOMER NAME VALIDATION
    if (gcName.value === "" || gcName.value === null ){
      gcName.placeholder = "*Please Enter Your Full Name";
      gcName.focus();
      return false;
    } else {
      gcName.placeholder = "Full Name*";
    }
    
    // RECEPIENT'S NAME VALIDATION
    if(gcRName.value === "" || gcRName.value === null ){
      gcRName.placeholder = "*Please Enter Recepient's Full Name";
      gcRName.focus();
      return false;
    } else {
      gcRName.placeholder = "Recepient's Full Name*";
    }
      
    // CUSTOMER EMAIL ADDRESS VALIDATION
    if (gcEmail.value === "" || !emailPattern.test(gcEmail.value)) {
    gcEmail.placeholder = "*Please enter a valid email address";
      gcEmail.focus();
      return false;
    } else {
      gcEmail.placeholder = "Your Email Address*";
    } 
    
    // RECEPIENT'S EMAIL ADDRESS VALIDATION
    if (gcREmail.value === "" || !emailPattern.test(gcREmail.value)) {
      gcREmail.placeholder = "*Please enter a valid email address";
      gcREmail.focus();
      return false;
    } else {
      gcREmail.placeholder = "Recepient's Email Address*";
    }

    // GIFT CARD AMOUNT SELECTION
    if (amount === "50") {
      disAmt.innerHTML = "$50.00";
    }
    if (amount === "100") {
      disAmt.innerHTML = "$100.00";
    }

//DISPLAY SUMMARY OF GIFT CARD INPUT AND CONFIRMATION
    disName.innerHTML = gcName.value; 
    disEmail.innerHTML = gcEmail.value;
    disRName.innerHTML = gcRName.value; 
    disREmail.innerHTML = gcREmail.value; 
    disMsg.innerHTML = gcMsg.value;
    
    gcContainer.style.display = "none"  ;
    form.style.display = "none";
    confirmation.style.display = "block";
      return false;
  }

} // END OF PAGEREADY FUNCTION