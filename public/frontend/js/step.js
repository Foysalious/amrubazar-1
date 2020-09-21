const slidePage = document.querySelector(".slidepage");
const firtNextBtn = document.querySelector(".nextBtn");
const submitBtn = document.querySelector(".Submit");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");

const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step");
const activebullet = document.querySelectorAll(".step .bullet");

//validate
// const validate = document.querySelector(".validate");




let max = 3;
let current = 1;



nextBtnSec.addEventListener("click", function(){
	slidePage.style.marginLeft = "-25%";
	bullet[ current - 1 ].classList.add("active");
	progressCheck[ current - 1 ].classList.add("active");
	progressText[ current - 1 ].classList.add("active");
	current += 1; 
});
nextBtnThird.addEventListener("click", function(){
	slidePage.style.marginLeft = "-50%";
	bullet[ current - 1 ].classList.add("active");
	progressCheck[ current - 1 ].classList.add("active");
	progressText[ current - 1 ].classList.add("active");
	current += 1; 
});
submitBtn.addEventListener("click", function(){
	bullet[ current - 1 ].classList.add("active");
	progressCheck[ current - 1 ].classList.add("active");
	progressText[ current - 1 ].classList.add("active");
	current += 1; 
	setTimeout(function(){

	},800);
});
//next button

//prev button
prevBtnSec.addEventListener("click", function(){
	slidePage.style.marginLeft = "0%";
	bullet[ current - 2 ].classList.remove("active");
	progressCheck[ current - 2 ].classList.remove("active");
	progressText[ current - 2 ].classList.remove("active");
	current -= 1; 
});
prevBtnThird.addEventListener("click", function(){
	slidePage.style.marginLeft = "-25%";
	bullet[ current - 2 ].classList.remove("active");
	progressCheck[ current - 2 ].classList.remove("active");
	progressText[ current - 2 ].classList.remove("active");
	current -= 1; 
});
//prev button