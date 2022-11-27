
// dateToday('date-today', 'bangla');
// *****************Accordiation*********************
function openProject(evt, projectName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(projectName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();


//********************* */ Back to Top Button ****************
// Selection the button by class name
const backToTop = document.querySelector(".back-to-top");
// Adding conditon and propertics using arrow function by the help of even listener 
window.addEventListener("scroll", () => {
    if(window.pageYOffset>100){
        backToTop.classList.add("active");
    }else{
        backToTop.classList.remove("active");
    }
});

//geting the copyright elements 
//showing current year , to the copyright area 
var currentYear = new Date().getFullYear();
var copyElmts = document.querySelector(".year");
copyElmts.innerHTML = currentYear;

