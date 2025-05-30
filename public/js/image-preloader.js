// Preload images for smoother transitions
document.addEventListener('DOMContentLoaded', function() {
    // Get all image containers
    const imageContainers = document.querySelectorAll('.projects__row-img-cont, .project-details__showcase-img-cont');
    
    imageContainers.forEach(container => {
        const images = container.querySelectorAll('img');
        
        // Don't proceed if there's only one image
        if (images.length <= 1) return;
        
        // Get all image URLs
        const imageUrls = [];
        images.forEach(img => {
            imageUrls.push(img.src);
        });
        
        // Create a loading overlay
        const loadingOverlay = document.createElement('div');
        loadingOverlay.className = 'image-loading-overlay';
        loadingOverlay.innerHTML = `
            <div class="loading-spinner"></div>
            <div class="loading-text">Loading images...</div>
        `;
        container.appendChild(loadingOverlay);
        
        // Preload all images
        let loadedCount = 0;
        imageUrls.forEach(url => {
            const img = new Image();
            img.onload = function() {
                loadedCount++;
                
                // Update loading progress
                const progress = Math.round((loadedCount / imageUrls.length) * 100);
                loadingOverlay.querySelector('.loading-text').innerText = `Loading images... ${progress}%`;
                
                // If all images are loaded, remove the overlay
                if (loadedCount === imageUrls.length) {
                    setTimeout(() => {
                        loadingOverlay.style.opacity = '0';
                        setTimeout(() => {
                            container.removeChild(loadingOverlay);
                        }, 500);
                    }, 500);
                }
            };
            img.src = url;
        });
    });
});
