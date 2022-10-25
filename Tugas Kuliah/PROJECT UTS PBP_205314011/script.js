alert("Selamat Datang di Website Aldeantoro46");

// //document.getElementsByTagName()//HTML Collections
const p1 = document.getElementsByTagName("p1");
// versi looping simpel
for (let i = 0; i < p1.length; i++) {
  p1[i].style.backgroundColor = "black";
  p1[i].style.color = "YELLOW";
}

function ubahMode() {
  const ubah = document.body;
  ubah.classList.toggle("dark");
}

const container = document.querySelector(".container");
const jumbo = document.querySelector(".jumbo");
const thumb = document.querySelectorAll(".thumb");

container.addEventListener("click", function (c) {
  //cek apakah sudah yang di klik adalah thumb
  if (c.target.className == "thumb") {
    jumbo.src = c.target.src;
    jumbo.classList.add("fade");
    setTimeout(function () {
      jumbo.classList.remove("fade");
    }, 500);
    thumb.forEach(function (thumb) {
      thumb.classList = "thumb";
    });
    c.target.classList.add("active");
  }
});
