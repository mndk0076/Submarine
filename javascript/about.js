//alert("connected");
window.onload = pageLoaded;
function pageLoaded() {

    var secondImage = document.getElementById("resPhoto");

    secondImage.style.display = "none";

    var firstImage = document.getElementById("chefPhoto");

    firstImage.style.display = "none";

    var allPara = document.getElementsByTagName("h2")[0];
    allPara.onmouseover = achange;
    allPara.onmouseout = secchange;

    function achange() {
        secondImage.style.display = "block";
    }
    function secchange() {
        secondImage.style.display = "none";
    }

    var againPara = document.getElementsByTagName("h2")[1];
    againPara.onmouseover = thirdChange;
    againPara.onmouseout = fourthChange;

    function thirdChange(){
        firstImage.style.display = "block";
    }
    function fourthChange(){
        firstImage.style.display = "none";
    }
}