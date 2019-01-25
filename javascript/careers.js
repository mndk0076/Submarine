window.onload = function(){

    var formHandle = document.forms[0];
    
    
    
    formHandle.onsubmit = processForm;

    function processForm(){
        //alert("form sent");
    var successform = document.getElementById("formSuccess");
    successform.innerHTML = "Application Successfully Submitted!";
    
    var fnameValue = document.getElementById("firstname");
    var lnameValue = document.getElementById("lastname");
    var emailValue = document.getElementById("email");
    var phoneValue = document.getElementById("phone");
    var degValue = document.getElementById("highdeg");
    var instituValue = document.getElementById("institution");
    var experValue = document.getElementById("lastemploy");
    var myRegEx = /\d{10}/;

    
    if(fnameValue.value === "" || fnameValue.value === null){
        fnameMsg = document.getElementById("fnameErr");
        fnameMsg.innerHTML = "Please Enter a First Name";
        fnameValue.focus();
        return false;
    }
    if(lnameValue.value === "" || lnameValue.value === null){
        lnameMsg = document.getElementById("lnameErr");
        lnameMsg.innerHTML = "Please Enter a Last Name";
        lnameValue.focus();
        return false;
    }
    if(emailValueValue.value === "" || emailValue.value === null){
        emailMsg = document.getElementById("emailErr");
        emailMsg.innerHTML = "Please Enter an email";
        emailValue.focus();
        return false;
    }
    if(phoneValue.value === "" || phoneValue.value === null || !myRegEx.test(phoneValue.value)){
        phoneMsg = document.getElementById("phoneErr");
        phoneMsg.innerHTML = "Please Enter a Phone Number";
        phoneValue.focus();
        return false;
    }
    if(degValue.value === "" || degValue.value === null){
        degMsg = document.getElementById("degErr");
        degMsg.innerHTML = "Please Enter your Highest Degree";
        degValue.focus();
        return false;
    }
    if(instituValue.value === "" || instituValue.value === null){
        instituMsg = document.getElementById("instituErr");
        instituMsg.innerHTML = "Please Enter your Previous University or Institution";
        instituValue.focus();
        return false;
    }
    if(experValue.value === "" || experValue.value === null){
        experMsg = document.getElementById("experErr");
        experMsg.innerHTML = "Please Enter Prior Experience";
        experValue.focus();
        return false;
    }




    return false;
    }
    
    
    

    
    }

