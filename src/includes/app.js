const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    console.log(entry)
    if (entry.isIntersecting) {
      entry.target.classList.add('show');
    } else {
      entry.target.classList.remove('show');
    }
  });
});

const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el) => observer.observe(el));


function mobileHamburgerBars(){
    var topNav = document.getElementById("responsive__container");
    if (topNav.className === "responsive__container") {
      topNav.className += " active";
    } else {topNav.className = "responsive__container";}

}