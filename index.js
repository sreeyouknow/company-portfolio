let currentSlide = 0;
const slides = document.querySelectorAll('.slide');
const slider = document.getElementById('slider');

function animateSlide(slide, animationType) {
  const paragraphs = slide.querySelectorAll('p'); // Select all <p> elements
  const button = slide.querySelector('button');
  const links = slide.querySelectorAll('a'); // Select all <a> elements
  const images = slide.querySelectorAll('img'); // Select all <img> elements
  const content = slide.querySelector('.content') || slide.querySelector('.main-content');

  // Animate paragraphs (fade-in and slide-up effect)
  paragraphs.forEach(para => {
    para.style.transition = 'transform 1s ease, opacity 1s ease';
    para.style.opacity = 1; // Fade in
    para.style.transform = 'translateY(0)'; // Slide up
  });

  // Animate button (fade-in and scale-up effect)
  if (button) {
    button.style.transition = 'transform 1s ease, opacity 1s ease';
    button.style.opacity = 1; // Fade in
    button.style.transform = 'translateY(0) scale(1.05)'; // Scale up
  }

  // Animate links (fade-in and slide-in from left)
  if (links.length > 0) {
    links.forEach(link => {
      link.style.transition = 'transform 1s ease, opacity 1s ease';
      link.style.opacity = 1; // Fade in
      link.style.transform = 'translateX(0px)'; // Slide-in from left
    });
  }

  // Animate images (fade-in and zoom effect)
  if (images.length > 0) {
    images.forEach(image => {
      image.style.transition = 'transform 1.5s ease, opacity 1.5s ease';
      image.style.opacity = 1; // Fade in
      image.style.transform = 'scale(1.1)'; // Zoom in
    });
  }

  // Animate content (fade-in and slide-in from left)
  if (content) {
    content.style.transition = 'transform 1s ease, opacity 1s ease';
    content.style.opacity = 1; // Fade in
    content.style.transform = 'translateX(0px)'; // Slide-in from left
  }

  // Slide transition type (scale or rotate)
  slide.style.transition = 'transform 1s ease, opacity 1s ease';
  slide.style.opacity = 1; // Fade in the slide itself
  slide.style.transform = animationType === 'scale' ? 'scale(1.1)' : 'rotateY(10deg) scale(1.05)';
}

function resetSlide(slide) {
  const paragraphs = slide.querySelectorAll('p'); // Reset all <p> elements
  const button = slide.querySelector('button');
  const links = slide.querySelectorAll('a'); // Reset all <a> elements
  const images = slide.querySelectorAll('img'); // Reset all <img> elements
  const content = slide.querySelector('.content') || slide.querySelector('.main-content');

  // Reset paragraphs (move down and fade-out)
  paragraphs.forEach(para => {
    para.style.opacity = 0; // Fade out
    para.style.transform = 'translateY(50px)'; // Move down
  });

  if (button) {
    button.style.opacity = 0; // Fade out
    button.style.transform = 'translateY(50px) scale(0.95)'; // Move down and scale down
  }

  // Reset links (move to the left off-screen and fade-out)
  if (links.length > 0) {
    links.forEach(link => {
      link.style.opacity = 0; // Fade out
      link.style.transform = 'translateX(-500px)'; // Move links to the left off-screen
    });
  }

  // Reset images (scale down and fade-out)
  if (images.length > 0) {
    images.forEach(image => {
      image.style.opacity = 0; // Fade out
      image.style.transform = 'scale(0.9)'; // Scale down
    });
  }

  if (content) {
    content.style.opacity = 0; // Fade out
    content.style.transform = 'translateX(50px)'; // Move content to the right off-screen
  }

  slide.style.opacity = 0; // Fade out the slide itself
  slide.style.transform = 'scale(1)';
}


function observeSlide(slide, animationType) {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        slide.classList.add('active');
        animateSlide(slide, animationType);

        // Trigger animation for specific sections when they come into view
        const statsSection = slide.querySelector('.stats-section');
        const imageContainer = slide.querySelector('.image-container');

        if (statsSection) {
          statsSection.classList.add('animated');
        }
        if (imageContainer) {
          imageContainer.classList.add('animated');
        }
      } else {
        slide.classList.remove('active');
        resetSlide(slide);
      }
    });
  }, { threshold: 0.5 });

  observer.observe(slide);
}

// Initialize observers for all slides
slides.forEach((slide, index) => {
  const animationType = index === 0 ? 'scale' : 'rotate'; // Example: first slide uses scale, others use rotate
  observeSlide(slide, animationType);
});

// Navigation Functions
function goToSlide(index) {
  currentSlide = (index + slides.length) % slides.length; // Wrap around
  slider.style.transform = `translateX(-${currentSlide * 100}vw)`;
}

// Navigation Buttons
document.getElementById('prevBtn').addEventListener('click', () => goToSlide(currentSlide - 1));
document.getElementById('nextBtn').addEventListener('click', () => goToSlide(currentSlide + 1));

// Mouse scroll functionality
window.addEventListener('wheel', (e) => {
  goToSlide(currentSlide + (e.deltaY > 0 ? 1 : -1));
});

// Mobile touch drag functionality
let startX, currentX, isDragging = false;
let isMoved = false; // To track if the slide has already moved

slider.addEventListener('mousedown', (e) => {
  startX = e.clientX;
  isDragging = true;
  isMoved = false; // Reset the move flag when drag starts
});

slider.addEventListener('mousemove', (e) => {
  if (!isDragging) return;
  currentX = e.clientX;
  
  const deltaX = currentX - startX;

  if (!isMoved) {
    if (deltaX > 50) {
      // Dragged right, go to previous slide
      goToSlide(currentSlide - 1);
      isMoved = true; // Mark that the slide has moved
      startX = currentX; // Reset the starting point after a move
    } else if (deltaX < -50) {
      // Dragged left, go to next slide
      goToSlide(currentSlide + 1);
      isMoved = true; // Mark that the slide has moved
      startX = currentX; // Reset the starting point after a move
    }
  }
});

slider.addEventListener('mouseup', () => {
  isDragging = false;
});

// For touch events as well
slider.addEventListener('touchstart', (e) => {
  startX = e.touches[0].clientX;
  isDragging = true;
  isMoved = false; // Reset the move flag when drag starts
});

slider.addEventListener('touchmove', (e) => {
  if (!isDragging) return;
  currentX = e.touches[0].clientX;
  
  const deltaX = currentX - startX;

  if (!isMoved) {
    if (deltaX > 50) {
      // Dragged right, go to previous slide
      goToSlide(currentSlide - 1);
      isMoved = true; // Mark that the slide has moved
      startX = currentX; // Reset the starting point after a move
    } else if (deltaX < -50) {
      // Dragged left, go to next slide
      goToSlide(currentSlide + 1);
      isMoved = true; // Mark that the slide has moved
      startX = currentX; // Reset the starting point after a move
    }
  }
});

slider.addEventListener('touchend', () => {
  isDragging = false;
});

// Initial slide setup
goToSlide(currentSlide);



//provide page
document.addEventListener("DOMContentLoaded", () => {
  // Wait for the DOM to load before running animations

  const slides = document.querySelectorAll('.provide');

  slides.forEach(slide => {
    const content01 = slide.querySelector('.content-01');
    const paragraphs = slide.querySelectorAll('.paragraphs p');
    const button = slide.querySelector('.button');
    const h1 = slide.querySelector('h1');
    const h2 = slide.querySelector('h2');

    // Function to trigger animation when the element is in view
    function isInView(element) {
      const rect = element.getBoundingClientRect();
      return rect.top >= 0 && rect.bottom <= window.innerHeight;
    }

    // Trigger animations when the elements come into view
    function animateSlide() {
      if (isInView(content01)) {
        content01.classList.add('animated');
      }
      paragraphs.forEach(p => {
        if (isInView(p)) {
          p.classList.add('animated');
        }
      });
      if (isInView(button)) {
        button.classList.add('animated');
      }
      if (isInView(h1)) {
        h1.classList.add('animated');
      }
      if (isInView(h2)) {
        h2.classList.add('animated');
      }
    }

    // Listen for scroll and call the animation function
    window.addEventListener('scroll', animateSlide);

    // Initial check for elements in view
    animateSlide();
  });
});

//choose page
document.addEventListener('DOMContentLoaded', function () {
  // Check if the 'animation-completed' class is already added
  if (!document.body.classList.contains('animation-completed')) {
    
    const featureCircles = document.querySelectorAll('.feature-circle');
    const features = document.querySelectorAll('.feature');

    // Trigger the feature circle animations
    featureCircles.forEach((featureCircles, index) => {
      setTimeout(() => {
        featureCircles.classList.add('show');
      }, (index + features.length)); // Delay each feature circle by 500ms
    });

    // Trigger the feature animations
    features.forEach((feature, index) => {
      setTimeout(() => {
        feature.classList.add('show');
      }, (index + featureCircles.length) * 100); // Delay each feature after circles
    });
    function animateSlide() {
      if (isInView(featureCircles)) {
        featureCircles.classList.add('animated');
      }
      if (isInView(features)) {
        features.classList.add('animated');
      }}}
      });

    

    // Listen for scroll and call the animation function
    window.addEventListener('scroll', animateSlide);

    // Initial check for elements in view
    animateSlide();
    // Add 'animation-completed' class to stop re-running animations
    setTimeout(() => {
      document.body.classList.add('animation-completed');
    }, (featureCircles.length + features.length) * 100); // Delay the class addition after all animations



//circles
document.addEventListener('DOMContentLoaded', () => {
  const circles = document.querySelectorAll('.circle-main');

  // Apply animations based on index of each circle
  circles.forEach((circle, index) => {
    // Add specific animations depending on the index
    if (index === 0) {
      // First Circle - Move left to right
      circle.style.animation = 'moveLeftToRight 2s ease-out forwards';
    } else if (index === 1) {
      // Second Circle - Move right to left
      circle.style.animation = 'moveRightToLeft 2s ease-out forwards';
    } else if (index === 2) {
      // Third Circle - Move bottom to top
      circle.style.animation = 'moveBottomToTop 2s ease-out forwards';
    }
  });
  
});

//icon slide 1
function goToFirstSlide() {
  currentSlide = 0; // Set the slide index to the first slide
  slider.style.transform = `translateX(-${currentSlide * 100}vw)`; // Update the slider position
}


//client page
document.addEventListener('DOMContentLoaded', () => {
  const images = document.querySelectorAll('.right-container img, .left-container img, .red-color');

  images.forEach(image => {
    image.style.opacity = 1; // Set opacity to 1 to make visible
    image.style.transition = 'opacity 0.5s ease-in-out'; // Smooth effect
  });
});
