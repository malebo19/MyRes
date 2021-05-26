
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("Res");
  var bullet = document.getElementsByClassName("bullet");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < bullet.length; i++) {
    bullet[i].className = bullet[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  bullet[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
