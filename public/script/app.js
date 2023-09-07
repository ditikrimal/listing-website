const navBtn = document.getElementById("navBtn");
const btn1 = document.getElementById("btn1");
const btn2 = document.getElementById("btn2");
const btn3 = document.getElementById("btn3");
const toggleNavbar = () => {
    btn1.classList.toggle("active");
    btn2.classList.toggle("active");
    btn3.classList.toggle("active");
};

navBtn.addEventListener("click", () => toggleNavbar());
