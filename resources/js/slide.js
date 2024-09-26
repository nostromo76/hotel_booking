let slideIndex = 0;
showSlides();

function showSlides() {
    const slides = document.getElementsByClassName("mySlides");
    
    // Hide all slides
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    
    slideIndex++;
    
    // Loop back to first slide if at end
    if (slideIndex > slides.length) {
        slideIndex = 1; 
    }    
    
    // Show the current slide
    slides[slideIndex - 1].style.display = "block";  
    
    // Change image every 5 seconds
    setTimeout(showSlides, 5000); 
}
