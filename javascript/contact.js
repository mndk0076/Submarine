window.onload = function(){

    var formHandle = document.forms[0];
    
    
    
    formHandle.onsubmit = processForm;

    function processForm(){
        //alert("form sent");
    var successform = document.getElementById("formSuccess");
    successform.innerHTML = "Your Comments Will Be Considered!";

    var nameValue = document.getElementById("name");
    var phoneValue = document.getElementById("phone");
    var emailValue = document.getElementById("email");
    var commentValue = document.getElementById("myComment");
    var myRegEx = /\d{10}/;
    var comRegEx = /^.{0,150}$/
    //Found the second regex on stackoverflow


    if(nameValue.value === "" || nameValue.value === null){
        nameMsg = document.getElementById("nameErr");
        nameMsg.innerHTML = "Please Enter your Name";
        nameValue.focus();
        return false;
    }
    if(phoneValue.value === "" || phoneValue.value === null || !myRegEx.test(phoneValue.value)){
        phoneMsg = document.getElementById("phoneErr");
        phoneMsg.innerHTML = "Please Enter your Phone Number, No Spaces or Dashes";
        phoneValue.focus();
        return false;
    }
    if(emailValue.value === "" || emailValue.value === null){
        emailMsg = document.getElementById("emailErr");
        emailMsg.innerHTML = "Please Enter your Email";
        emailValue.focus();
        return false;
    }
    if(commentValue.value === "" || commentValue.value === null || !comRegEx.test(commentValue.value)){
        commentMsg = document.getElementById("commentErr");
        commentMsg.innerHTML = "Please Enter a Question or Comment";
        commentValue.focus();
        return false;
    }


    return false;
    }
    
    }
