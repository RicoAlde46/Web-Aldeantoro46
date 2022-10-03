alert("Selamat Datang di Website Aldeantoro46");

var i = 4;
function tes(i) {
  // console.log(i);
  alert(i);
}
tes(1);
tes(2);
tes(3);
alert(i); //tampilan muncul di depan

// FUNCTION DECLARATION
function tampilPesan(nama) {
  alert("Hallo " + nama);
}
tampilPesan("Carolus");

tampilPesan("Rico");
function tampilPesan(nama) {
  alert("Hallo " + nama);
}
// FUNCTION EXPRESSION
var tampilPesan = function (nama) {
  alert("Hallo " + nama);
};
tampilPesan("Aldeantoro");

const judul = document.getElementById("judul");
//document.getElementsByTagName()//HTML Collections
const p = document.getElementsByTagName("p");
// versi looping simpel
for (let i = 0; i < p.length; i++) {
  p[i].style.backgroundColor = "black";
  p[i].style.color = "YELLOW";
}
