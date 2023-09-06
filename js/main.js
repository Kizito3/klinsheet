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
