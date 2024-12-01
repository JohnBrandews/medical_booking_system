// function openModal(modalId) {
//     document.getElementById(modalId).style.display = "block";
//   }
  
//   function closeModal(modalId) {
//     document.getElementById(modalId).style.display = "none";
//   }
  
//   // Close modal if clicked outside
//   window.onclick = function (event) {
//     if (event.target.classList.contains("modal")) {
//       event.target.style.display = "none";
//     }
//   };
//   // In your js/index.js file
// Smooth scrolling for navigation links
document.addEventListener('DOMContentLoaded', function() {
  // Select all links with hashes that point to sections on the same page
  const navLinks = document.querySelectorAll('a[href^="#"]');
  
  navLinks.forEach(link => {
      link.addEventListener('click', function(e) {
          e.preventDefault(); // Prevent default anchor behavior
          
          // Get the target section
          const targetId = this.getAttribute('href').substring(1);
          const targetSection = document.getElementById(targetId);
          
          if (targetSection) {
              // Smooth scroll to the section
              targetSection.scrollIntoView({
                  behavior: 'smooth'
              });
          }
      });
  });
});

// Modal functionality
function openModal(modalId) {
  const modal = document.getElementById(modalId);
  if (modal) {
      modal.style.display = "block";
  }
}

function closeModal(modalId) {
  const modal = document.getElementById(modalId);
  if (modal) {
      modal.style.display = "none";
  }
}

// Close modal if clicked outside
window.onclick = function (event) {
  if (event.target.classList.contains("modal")) {
      event.target.style.display = "none";
  }
};
//for active links
document.addEventListener('DOMContentLoaded', () => {
  // Select all navigation links
  const navLinks = document.querySelectorAll('.nav-menu a');
  
  // Add click event listener to each navigation link
  navLinks.forEach(link => {
      link.addEventListener('click', function(e) {
          // Remove 'active' class from all links
          navLinks.forEach(navLink => {
              navLink.classList.remove('active');
          });
          
          // Add 'active' class to the clicked link
          this.classList.add('active');
      });
  });
});