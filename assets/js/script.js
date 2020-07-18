
// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}

function echeck(str) {
    var at="@";
    var dot=".";
    var lat=str.indexOf(at);
    var lstr=str.length;
    var ldot=str.indexOf(dot);
    if (str.indexOf(at)==-1){
        alert("Invalid E-mail ID");
        return false;
    }

    if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
        alert("Invalid E-mail ID");
        return false;
    }

    if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
        alert("Invalid E-mail ID");
        return false;
    }

    if (str.indexOf(at,(lat+1))!=-1){
        alert("Invalid E-mail ID");
        return false;
    }

    if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
        alert("Invalid E-mail ID");
        return false;
    }

    if (str.indexOf(dot,(lat+2))==-1){
        alert("Invalid E-mail ID");
        return false;
    }

    if (str.indexOf(" ")!=-1){
        alert("Invalid E-mail ID");
        return false;
    }

    return true;					
}
		
function funval() {
    if(document.getElementById("name").value=="") {
        alert("Please Enter  Name!");
        document.getElementById("name").focus();
        return false;
    }
    
    if (echeck(document.getElementById("email").value)=="") {
        alert("Please Enter Your Email !");
        document.getElementById("email").focus();
        return false;
    }
    
    else
    alert("Thank you for reaching out to R&A Builders. You should hear from us within the next 24 hours. Call us at (+91)  98223 82898 if it is an emergency");
}