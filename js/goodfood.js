$(window).on("scroll", function () {
  if ($(window).scrollTop() > 50) {
    $(".header").addClass("active");
  } else {
    //remove the background property so it comes transparent again (defined in your css)
    $(".header").removeClass("active");
  }
});

function myFunction(x) {
  x.classList.toggle("fa-reply");
}
/*Product Slider*/

/*Select the container and cards elements and store them in their respective variables:*/
const slider = document.querySelector(".parent");
const cards = document.querySelector(".child");

/*Create a variable to keep track of the user’s mouse event:*/
let mouseDown = false;
/*Declare a variable to store the cursor’s horizontal distance from the inner container:*/
let startX;
let scrollLeft;

const startDragging = (e) => {
  mouseDown = true;

  startX = e.pageX - slider.offsetLeft;
  scrollLeft = slider.scrollLeft;
  console.log(e.pageX);
};

const stopDragging = (e) => {
  mouseDown = false;
};

const move = (e) => {
  e.preventDefault();
  if (!mouseDown) {
    return;
  }
  const x = e.pageX - slider.offsetLeft;
  const scroll = x - startX; // to know how far we have scrolled from initial point
  slider.scrollLeft = scrollLeft - scroll;
};

// Add the event listeners
slider.addEventListener("mousemove", move, false);
slider.addEventListener("mousedown", startDragging, false);
slider.addEventListener("mouseup", stopDragging, false);
slider.addEventListener("mouseleave", stopDragging, false);
