window.onload = function(){

    var formHandle = document.forms[0];
  
    formHandle.onsubmit = processForm;

    function processForm(){
        
        var successform = document.getElementById("formSuccess");
        var fnameValue = document.getElementById("firstname");
        var lnameValue = document.getElementById("lastname");
        var emailValue = document.getElementById("email");
        var phoneValue = document.getElementById("phone");
        var degValue = document.getElementById("highdeg");
        var instituValue = document.getElementById("institution");
        var experValue = document.getElementById("lastemploy");
        var myRegEx = /\d{10}/;
        var myEmailReg = /.+\@.+\..+/  //https://www.wired.com/2008/08/four-regular-expressions-to-check-email-addresses/
        var isValid = true;
        
        if(fnameValue.value === "" || fnameValue.value === null){
            fnameMsg = document.getElementById("fnameErr");
            fnameMsg.style.color = "red";
            fnameMsg.innerHTML = "Please Enter a First Name";
            fnameValue.focus();
            isValid = false;
            return false;
        }
        if(lnameValue.value === "" || lnameValue.value === null){
            lnameMsg = document.getElementById("lnameErr");
            lnameMsg.style.color = "red";
            lnameMsg.innerHTML = "Please Enter a Last Name";
            lnameValue.focus();
            isValid = false;
            return false;
        }
        if(emailValue.value === "" || emailValue.value === null || !myEmailReg.test(emailValue.value)){
            emailMsg = document.getElementById("emailErr");
            emailMsg.style.color = "red";
            emailMsg.innerHTML = "Please Enter an email";
            emailValue.focus();
            isValid = false;
            return false;
        }
        if(phoneValue.value === "" || phoneValue.value === null || !myRegEx.test(phoneValue.value)){
            phoneMsg = document.getElementById("phoneErr");
            phoneMsg.style.color = "red";
            phoneMsg.innerHTML = "Please Enter a Phone Number";
            phoneValue.focus();
            isValid = false;
            return false;
        }
        if(degValue.value === "" || degValue.value === null){
            degMsg = document.getElementById("degErr");
            degMsg.style.color = "red";
            degMsg.innerHTML = "Please Enter your Highest Degree";
            degValue.focus();
            isValid = false;
            return false;
        }
        if(instituValue.value === "" || instituValue.value === null){
            instituMsg = document.getElementById("instituErr");
            instituMsg.style.color = "red";
            instituMsg.innerHTML = "Please Enter your Previous University or Institution";
            instituValue.focus();
            isValid = false;
            return false;
        }
        if(experValue.value === "" || experValue.value === null){
            experMsg = document.getElementById("experErr");
            experMsg.style.color = "red";
            experMsg.innerHTML = "Please Enter Prior Experience";
            experValue.focus();
            isValid = false;
            return false;
        }
        if(isValid === true){
            successform.innerHTML = "Application Successfully Submitted!";
        }
    //return false;
    }
}

