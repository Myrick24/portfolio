// Touch swipe functionality for image galleries
document.addEventListener('DOMContentLoaded', function() {
    // Get all project image containers
    const projectImageContainers = document.querySelectorAll('.projects__row-img-cont, .project-details__showcase-img-cont');
    
    projectImageContainers.forEach(container => {
        // Don't add touch events if there aren't multiple images
        if (container.querySelectorAll('img').length <= 1) return;
        
        let touchStartX = 0;
        let touchEndX = 0;
        
        // Touch start event
        container.addEventListener('touchstart', function(e) {
            touchStartX = e.changedTouches[0].screenX;
        }, false);
        
        // Touch end event
        container.addEventListener('touchend', function(e) {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        }, false);
        
        // Handle the swipe
        function handleSwipe() {
            const minSwipeDistance = 50; // Minimum swipe distance in pixels
            
            // If the swipe was long enough
            if (Math.abs(touchEndX - touchStartX) > minSwipeDistance) {
                // Trigger click to change image
                container.click();
            }
        }
    });
});
