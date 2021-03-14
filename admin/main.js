
var modal = document.getElementById("myModal");
// Get the button that opens the modal
var btn = document.getElementById("NhapFile");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function openCity(evt, Name) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" activeone", "");
    }
    document.getElementById(Name).style.display = "block";
    evt.currentTarget.className += " activeone";
  }

  function openCitynhe() {
    console.log('Hello');
  }

function openPage(pageName, elmt){
    var i, tab, tablink;
    tab = document.querySelectorAll('.tab');
    for(i=0; i< tab.length; i++){
        tab[i].style.display = "none";
    }

    tablink = document.querySelectorAll('.tablink');
    for(i=0; i< tablink.length; i++){
        tablink[i].className =  tablink[i].className.replace(" activeone", "");
    }
    document.getElementById(pageName).style.display ="block";
    elmt.currentTarget.className += "activeone";

}

window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("stick");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
