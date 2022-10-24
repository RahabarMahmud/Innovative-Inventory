//carousel.js

function carousel()
{
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var labels = document.getElementsByClassName("myLabels");
  for (i = 0; i < slides.length; i++)
  {
    // @ts-ignore
    slides[i].style.display = "none";  
    // @ts-ignore
    labels[i].style.display = "none";  
  }
  index++;
  if (index > slides.length) {index = 1}    
  // @ts-ignore
  slides[index-1].style.display = "block";  
  // @ts-ignore
  labels[index-1].style.display = "block";  
  setTimeout(carousel, 3000);
}
var index = 0;
