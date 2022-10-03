// EVENT HEADING
// const close = document.querySelector(".close");
// const card = document.querySelector(".card");

// close.addEventListener("click", function () {
//   card.style.display = "none";
// });

// // Dom Traversal.js
// const close = document.querySelectorAll(".close");
// for (let i = 0; i < close.length; i++) {
//   close[i].addEventListener("click", function (e) {
//     e.target.parentElement.style.display = "none";
//     // close[i].parentElement.style.display = "none";
//     // alert("Tombol ke- " + i);
//   });
// }
// ======================================================
// const close = document.querySelectorAll(".close");
// close.forEach(function (co) {
//   co.addEventListener("click", function (c) {
//     c.target.parentElement.style.display = "none";
//     c.preventDefault();
//     c.stopPropagation();
//   });
// });

// const card = document.querySelectorAll(".card");
// card.forEach(function (card) {
//   card.addEventListener("click", function (c) {
//     alert("Ssst diem");
//   });
// });

// const nama = document.querySelector(".nama");
// console.log(nama.nextElementSibling.nextElementSibling);
// ==========================================================

const container = document.querySelector(".container");
container.addEventListener("click", function (c) {
  if (c.target.className == "close") {
    c.target.parentElement.style.display = "none";
    c.preventDefault();
  }
  //   console.log(c.target);
});
