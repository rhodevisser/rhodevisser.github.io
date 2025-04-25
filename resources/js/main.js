/**
 * Interactive Flower Animation
 * 
 * This script creates a cute flower that follows your mouse cursor.
 * It demonstrates several key JavaScript concepts:
 * - DOM manipulation (creating and modifying HTML elements)
 * - Event handling (responding to mouse movements)
 * - Animation using requestAnimationFrame
 * - SVG creation via JavaScript
 */

// Wait for the DOM to be fully loaded before running our code
document.addEventListener('DOMContentLoaded', function() {
    // Get the container where our flower will live
    const flowerContainer = document.getElementById('flower-container');

    // Functie om te detecteren of het apparaat een touchscreen is
    function isTouchDevice() {
        return 'ontouchstart' in window || navigator.maxTouchPoints > 0;
    }

    // Als het een touchscreen is, verberg de bloem en stop de functionaliteit
    if (isTouchDevice()) {
        if (flowerContainer) {
            flowerContainer.style.display = 'none'; // Verberg de bloemcontainer
        }
        return; // Stop verdere uitvoering
    }
    
    
    // Create a Flower class to manage our flower's properties and behaviors
    class Flower {
        constructor(container) {
            // Store reference to the container
            this.container = container;
            
            // Set initial position (center of container)
            this.x = container.offsetWidth / 2;
            this.y = container.offsetHeight / 2;
            
            // Target position (where the flower wants to go)
            this.targetX = this.x;
            this.targetY = this.y;
            
            // Movement speed (lower = slower, higher = faster)
            this.speed = 0.1;
            
            // Create the flower element and add it to the DOM
            this.createFlower();
            
            // Start the animation loop
            this.animate();
            
            // Set up event listeners for mouse movement
            this.setupEventListeners();
        }
        
        // Create the flower's HTML elements using SVG for better quality
        createFlower() {
            // Create main flower container
            this.element = document.createElement('div');
            this.element.className = 'flower';
            
            // Create SVG element
            const svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
            svg.setAttribute("viewBox", "0 0 100 100");
            svg.setAttribute("class", "flower-svg");
            
            // Create flower petals (hibiscus style)
            const petals = document.createElementNS("http://www.w3.org/2000/svg", "path");
            petals.setAttribute("class", "petal");
            petals.setAttribute("d", "M50,10 C70,25 90,40 85,60 C80,80 65,85 50,90 C35,85 20,80 15,60 C10,40 30,25 50,10");
            
            // Create flower center
            const center = document.createElementNS("http://www.w3.org/2000/svg", "circle");
            center.setAttribute("class", "center");
            center.setAttribute("cx", "50");
            center.setAttribute("cy", "50");
            center.setAttribute("r", "15");
            
            // Create leaves
            const leaf1 = document.createElementNS("http://www.w3.org/2000/svg", "path");
            leaf1.setAttribute("class", "leaf");
            leaf1.setAttribute("d", "M60,85 C70,90 80,95 85,85 C90,75 80,70 70,75 C65,80 60,85 60,85");
            
            const leaf2 = document.createElementNS("http://www.w3.org/2000/svg", "path");
            leaf2.setAttribute("class", "leaf");
            leaf2.setAttribute("d", "M40,85 C30,90 20,95 15,85 C10,75 20,70 30,75 C35,80 40,85 40,85");
            
            // Add all parts to the SVG
            svg.appendChild(leaf1);
            svg.appendChild(leaf2);
            svg.appendChild(petals);
            svg.appendChild(center);
            
            // Add the SVG to the flower element
            this.element.appendChild(svg);
            
            // Add the flower to the container
            this.container.appendChild(this.element);
            
            // Set initial position
            this.updatePosition();
        }
        
        // Set up event listeners for mouse movement
        setupEventListeners() {
            // When mouse moves over the document, update target position
            document.addEventListener('mousemove', (e) => {
                // Get mouse position relative to the document
                this.targetX = e.clientX - this.element.offsetWidth / 2;
                this.targetY = e.clientY - this.element.offsetHeight / 2;
            });
        }
        
        // Update the flower's position on screen
        updatePosition() {
            this.element.style.left = `${this.x}px`;
            this.element.style.top = `${this.y}px`;
            
            // Add a gentle floating effect
            const floatY = Math.sin(Date.now() / 1000) * 3;
            this.element.style.transform = `translateY(${floatY}px)`;
        }
        
        // Move the flower toward the target position
        move() {
            // Calculate distance to target
            const dx = this.targetX - this.x;
            const dy = this.targetY - this.y;
            
            // Move flower a percentage of the way to the target (smooth following)
            this.x += dx * this.speed;
            this.y += dy * this.speed;
            
            // Update the visual position
            this.updatePosition();
        }
        
        // Animation loop
        animate() {
            // Move the flower
            this.move();
            
            // Request the next animation frame
            requestAnimationFrame(() => this.animate());
        }
    }
    
    // Create a new flower instance
    const flower = new Flower(flowerContainer);
});

/**
 * LEARNING NOTES:
 * 
 * This code demonstrates several important JavaScript concepts:
 * 
 * 1. Classes: The Flower class encapsulates all the flower's properties and behaviors
 * 
 * 2. SVG Creation: We create an SVG flower using JavaScript's DOM API
 * 
 * 3. Event Handling: We listen for mouse movements across the entire document
 * 
 * 4. Animation Loop: We use requestAnimationFrame for smooth animation
 * 
 * 5. Math Calculations: We use simple physics for natural movement and sine waves for floating effect
 * 
 * Try modifying these values to customize your flower:
 * - Change the speed value to make the flower move faster or slower
 * - Modify the colors in the CSS file
 * - Adjust the SVG paths to create different flower shapes
 */
