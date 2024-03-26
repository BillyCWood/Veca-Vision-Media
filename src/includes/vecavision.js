function responsiveNavBar(){
    var topNav = document.getElementbyId("top-nav-bar");
    if (topNav.className === "topNav") {
        topNav.className += " responsive";
    } else {topNav.className = "topnav"}

}