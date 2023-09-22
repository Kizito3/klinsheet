const showMenu = (toggleId, navId) => {
  const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId);

  toggle.addEventListener("click", () => {
    nav.classList.toggle("show-menu");
    toggle.classList.toggle("show-icon");
  });
};

showMenu("mynav-toggle", "mynav-menu");


window.addEventListener("scroll", function () {
  const navbar = document.querySelector(".myheader");

  if (window.scrollY > 0) {
      navbar.style.backgroundColor = "#122736"; // Change to your desired background color
  } else {
      navbar.style.backgroundColor = "transparent";
  }
});


const faqs = document.querySelectorAll(".question");
const btn = document.querySelectorAll(".faqs button");

faqs.forEach((faq, index) => {
  faq.addEventListener("click", function (e) {
    const answer = e.target.nextElementSibling;
    answer.classList.toggle("active");

    btn[index].classList.toggle("active"); // Toggle the active class for the corresponding button
  });
});


const button = document.querySelector(".question")


document.addEventListener("DOMContentLoaded", function () {
  const scrollToTopButton = document.getElementById("scrollToTopButton");

  // Show/hide the button based on scroll position
  window.addEventListener("scroll", () => {
      if (window.scrollY > 100) {
          scrollToTopButton.style.display = "block";
      } else {
          scrollToTopButton.style.display = "none";
      }
  });

  // Scroll to the top when the button is clicked
  scrollToTopButton.addEventListener("click", () => {
      window.scrollTo({
          top: 0,
          behavior: "smooth" // Smooth scrolling animation
      });
  });
});




const loader = document.getElementById('preloader');

window.addEventListener("load", function(){
  loader.style.display = "none";
})
