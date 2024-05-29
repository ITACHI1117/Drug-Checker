const profileInfo = document.getElementById("#profile");

// Select the button element using its ID
const profileButton = document.getElementById("profileButton");
const cancel_button = document.getElementById("cancel_button");
const contain_Item = document.getElementById("contain_Item");

// Define the function to be executed when the button is clicked
function handleClick() {
  gsap.to("#profile", {
    y: 0,
    x: -300,
    opacity: 1,
    duration: "0.9",
    delay: "0.1",
  });
  //   gsap.fromTo(
  //     "#profile",
  //     { y: 100, x: 100, opacity: 0 },
  //     { y: 0, x: 0, opacity: 1, duration: "0.9", delay: "0.5" }
  //   );
}

// Add the click event listener to the button
profileButton.addEventListener("click", handleClick);

function handleClose() {
  gsap.to("#profile", {
    y: 0,
    x: 300,
    opacity: 1,
    duration: "0.9",
    delay: "0.1",
  });
}
cancel_button.addEventListener("click", handleClose);

gsap.fromTo(
  contain_Item,
  {
    y: 10,
    x: -300,
    opacity: 1,
    duration: "0.9",
    delay: "0.1",
  },
  { y: 1000, x: 300, opacity: 1, duration: "0.9", delay: "0.1" }
);

gsap.registerPlugin(EasePack);
// gsap.fromTo(
//   "#profile",
//   { opacity: 0 },
//   { x: 0, scale: 1, opacity: 1, duration: 3, ease: "slow" }
// );
gsap.to("#image", { duration: 1, scale: 2, ease: "expoScale(1, 2)" });

// gsap.fromTo(
//   "#box2",
//   { y: 500, opacity: 0 },
//   { y: 0, opacity: 1, duration: "0.9", delay: "0.5" }
// );
// gsap.fromTo(
//   "#img1",
//   { x: 100, opacity: 0 },
//   { x: 0, opacity: 1, duration: "0.9", delay: "1", ease: "back.out" }
// );
