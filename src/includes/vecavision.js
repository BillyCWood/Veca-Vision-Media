function mobileHamburgerBars(){
    var topNav = document.getElementById("responsive__container");
    if (topNav.className === "responsive__container") {
      topNav.className += " active";
    } else {topNav.className = "responsive__container";}

}