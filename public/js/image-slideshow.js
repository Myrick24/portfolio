// Auto slideshow functionality for project details pages
document.addEventListener('DOMContentLoaded', function() {
    // Only target project detail showcase images
    const showcaseContainers = document.querySelectorAll('.project-details__showcase-img-cont');
    
    showcaseContainers.forEach(container => {
        // Don't add slideshow if there aren't multiple images
        if (container.querySelectorAll('img').length <= 1) return;
        
        // Create slideshow controls
        const controls = document.createElement('div');
        controls.className = 'slideshow-controls';
        
        const playBtn = document.createElement('button');
        playBtn.className = 'slideshow-control play-btn';
        playBtn.innerHTML = '▶';
        playBtn.title = 'Start Slideshow';
        
        const pauseBtn = document.createElement('button');
        pauseBtn.className = 'slideshow-control pause-btn';
        pauseBtn.innerHTML = '⏸';
        pauseBtn.title = 'Pause Slideshow';
        pauseBtn.style.display = 'none'; // Hide initially
        
        controls.appendChild(playBtn);
        controls.appendChild(pauseBtn);
        container.appendChild(controls);
        
        // Create progress bar
        const progressBar = document.createElement('div');
        progressBar.className = 'slideshow-progress';
        container.appendChild(progressBar);
        
        // Slideshow variables
        let slideshowInterval;
        const slideshowDuration = 3000; // 3 seconds per image
        let progressWidth = 0;
        let progressInterval;
        
        // Start slideshow function
        function startSlideshow() {
            container.classList.add('slideshow-active');
            playBtn.style.display = 'none';
            pauseBtn.style.display = 'flex';
            
            // Clear any existing intervals
            clearInterval(slideshowInterval);
            clearInterval(progressInterval);
            
            // Reset progress
            progressWidth = 0;
            progressBar.style.width = '0%';
            
            // Update progress bar
            progressInterval = setInterval(() => {
                progressWidth += 0.1;
                progressBar.style.width = (progressWidth / slideshowDuration * 100000) + '%';
            }, 10);
            
            // Change image every interval
            slideshowInterval = setInterval(() => {
                // Reset progress
                progressWidth = 0;
                progressBar.style.width = '0%';
                
                // Trigger click to change image
                container.click();
            }, slideshowDuration);
        }
        
        // Stop slideshow function
        function stopSlideshow() {
            container.classList.remove('slideshow-active');
            playBtn.style.display = 'flex';
            pauseBtn.style.display = 'none';
            
            // Clear intervals
            clearInterval(slideshowInterval);
            clearInterval(progressInterval);
            
            // Hide progress bar
            progressBar.style.width = '0%';
        }
        
        // Add event listeners
        playBtn.addEventListener('click', function(e) {
            e.stopPropagation(); // Prevent triggering container click
            startSlideshow();
        });
        
        pauseBtn.addEventListener('click', function(e) {
            e.stopPropagation(); // Prevent triggering container click
            stopSlideshow();
        });
        
        // Stop slideshow when manually clicking the image
        container.addEventListener('click', function() {
            if (container.classList.contains('slideshow-active')) {
                stopSlideshow();
            }
        });
    });
});
