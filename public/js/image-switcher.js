// Image switching functionality
document.addEventListener('DOMContentLoaded', function() {
    // Get all project image containers
    const projectImageContainers = document.querySelectorAll('.projects__row-img-cont, .project-details__showcase-img-cont');
    
    projectImageContainers.forEach(container => {
        // Track current image index
        let currentImageIndex = 0;
        
        // Get all images in this container
        const images = container.querySelectorAll('img');
        const imageUrls = [];
        
        // Store image URLs and hide all except the first one
        images.forEach((img, index) => {
            imageUrls.push(img.src);
            
            // Only show the first image
            if (index === 0) {
                img.style.display = 'block';
                img.classList.add('active-image');
            } else {
                img.style.display = 'none';
                img.classList.remove('active-image');
            }
        });
        
        // If we have more than one image, add click functionality
        if (images.length > 1) {
            // Keep only the first image in the DOM
            const firstImage = images[0];
            
            // Remove other images from DOM
            for (let i = 1; i < images.length; i++) {
                container.removeChild(images[i]);
            }
              // Add click event to the container
            container.addEventListener('click', function() {
                // Move to next image
                currentImageIndex = (currentImageIndex + 1) % imageUrls.length;
                
                // Create transition effect
                firstImage.classList.add('image-transition');
                
                // After a short delay, change the image source
                setTimeout(() => {
                    firstImage.src = imageUrls[currentImageIndex];
                    
                    // Add the enhanced animation class
                    firstImage.classList.add('image-switched');
                    
                    // Remove transition class after image has changed
                    setTimeout(() => {
                        firstImage.classList.remove('image-transition');
                        
                        // Remove the enhanced animation class after it completes
                        setTimeout(() => {
                            firstImage.classList.remove('image-switched');
                        }, 500);
                    }, 300);
                }, 150);
            });
            
            // Add cursor pointer to indicate it's clickable
            container.style.cursor = 'pointer';
              // Add indicator that image is clickable
            const indicator = document.createElement('div');
            indicator.className = 'image-click-indicator';
            
            // Different text depending on the container type
            if (container.classList.contains('project-details__showcase-img-cont')) {
                indicator.innerHTML = '<span>Click for more views</span>';
            } else {
                indicator.innerHTML = '<span>Click to view more</span>';
            }
            
            container.appendChild(indicator);
            
            // Add image counter/pagination indicator
            const pagination = document.createElement('div');
            pagination.className = 'image-pagination';
            
            for (let i = 0; i < imageUrls.length; i++) {
                const dot = document.createElement('span');
                dot.className = i === 0 ? 'pagination-dot active' : 'pagination-dot';
                pagination.appendChild(dot);
            }
              container.appendChild(pagination);
            
            // Add tooltip for better user guidance
            const tooltip = document.createElement('div');
            tooltip.className = 'image-click-tooltip';
            tooltip.innerHTML = `<strong>Click to browse images</strong><br>(${imageUrls.length} images available)`;
            container.appendChild(tooltip);
            
            // Update pagination dots when image changes
            container.addEventListener('click', function() {
                const dots = pagination.querySelectorAll('.pagination-dot');
                dots.forEach((dot, i) => {
                    if (i === currentImageIndex) {
                        dot.classList.add('active');
                    } else {
                        dot.classList.remove('active');
                    }
                });
            });
        }
    });
});
