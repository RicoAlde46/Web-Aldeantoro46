// // Versi awal
// var a = 8;
// var b = 3;
// var volumeA;
// var volumeB;
// var total;

// var volumeA = a * a * a;
// var volumeB = b * b * b;

// total = volumeA + volumeB;

// console.log(total);

// // Versi kedua
// function jumlahVolumeDuaKubus(a, b) {
//   var volumeA;
//   var volumeB;
//   var total;

//   var volumeA = a * a * a;
//   var volumeB = b * b * b;

//   total = volumeA + volumeB;
//   return total;
// }
// console.log(jumlahVolumeDuaKubus(8, 3));
// alert(jumlahVolumeDuaKubus(8, 3));
// alert(jumlahVolumeDuaKubus(10, 15));

// // Versi Ketiga
// function jumlahVolumeDuaKubus(a, b) {
//   return a * a * a + b * b * b;
// }
// alert(jumlahVolumeDuaKubus(8, 3));
// -----------------------------------------------
// function tambah(a,b){
//     return a + b;
//     }
//     var a = parseInt(prompt ('Masukkan Nilai 1 : '));
//     var b= parseInt(prompt ('Masukkan Nilai 2 : '));
//     console.log(tambah (a*2,b*2));
// -------------------------------------------------------
// function tambah(a, b) {
//   return a + b;
// }
// function kali(a, b) {
//   return a * b;
// }
// var coba = kali(tambah(1, 2), tambah(3, 4));
// console.log(coba);
// ------------------------------------------------------------
// function tambah() {
//   var hasil = 0;
//   for (var i = 0; i < arguments.length; i++) {
//     hasil += arguments[i];
//   }
//   return hasil;
// }
// var coba = tambah(1, 2, 3, 4);
// console.log(coba);
// --------------------------------------------------------    <script src="script.js"></script>
// let text = "12345678";
// const myArr = Array.from(text);

// document.getElementById("demo").innerHTML = myArr;
// ------------------------------------------------------
// const fruits = ["RICO", "YUDHA", "AGUNG", "SAMUEL"];
// let text = fruits.join();

// document.getElementById("demo").innerHTML = text;
// --------------------------------------------------------
// Untuk HTML
// <p>Click the button to demonstrate the prompt box.</p>
// <button onclick="myFunction()">Try it</button>
//    <p align="center" id="demo"></p>
// <script src="script.js"></script>

// alert("Selamat Datang di Website Aldeantoro46");

// let person = prompt("Please enter your name", "Please enter your name");
// if (person != null) {
//   document.getElementById("demo").innerHTML = "Hello " + person + "! How are you today? Thank you for visiting our website";
// }
// ---------------------------------------------------------
// function tambah() {
//   return arguments;
// }
// var coba = tambah(5, 10, 20, "HALLO", "WORLD");
// console.log(coba);
// // -----------------------------------------------------------
// var i = 2;
// if (i % 2 == 0) {
//   var genap = true;
// }
// if (genap) {
//   console.log("genap");
// }

// var i = 2;
// function tes() {
//   var j = 4;
//   //   console.log(j);
//   console.log(window.i);
// }
// tes();

// var i = 4;
// function tes(i) {
//   // console.log(i);
//   alert(i);
// }
// tes(1);
// tes(2);
// tes(3);
// tes(4);
// console.log(i);//Tampilan di inspect
// alert(i); //tampilan muncul di depan
// ----------------------------------------------------------------

// // rekursif;
// function tampilAngka(n) {
//   console.log(n);
//   return tampilAngka(n - 1);
// }
// tampilAngka(10);

// base case
// function tampilAngka(n) {
//   if (n == 0) return;
//   console.log(n);
//   return tampilAngka(n - 1);
// }
// tampilAngka(20);
// -----------------------------------------------------
// FUNCTION DECLARATION
// function tampilPesan(nama) {
//   alert("Hallo " + nama);
// }
// tampilPesan("Carolus");

// tampilPesan("Rico");
// function tampilPesan(nama) {
//   alert("Hallo " + nama);
// }
// // FUNCTION EXPRESSION
// var tampilPesan = function (nama) {
//   alert("Hallo " + nama);
// };
// tampilPesan("Aldeantoro");
// -----------------------------------------
// var binatang = ["kucing", "kelinci", "monyet", "panda", "sapi"];
// console.log(binatang[4]);

// console.log(binatang.length);

// var hari = ["Senin", "Selasa", "Rabu", "Jumat", "Sabtu", "Minggu"];
// var mhs = ["Carolus", "Rico", "Alde", "Aldeantoro"];
// var angka = [20, 23, 344];
// var myArr = ["teks", 2, false];
// var myFunc = function () {
//   alert("Hallo World!!!");
// };
// var myArr2 = ["teks", 2, false, myFunc];
// var myArr3 = ["teks", 2, false, myFunc, [4, 7, 6]];
// console.log(myArr3[4][1]);

// var mhs = ["Carolus", "Rico", "Alde", "Aldeantoro"];
// arr[1] = undefined;
// console.log(arr);

// var mhs = ["Carolus", "Rico", "Alde", "Aldeantoro"];
// for (var i = 0; i < 3; i++) {
//   console.log(mhs[i]);
// }

// var arr = ["Carolus", "Rico", "Alde"];
// for (var i = 0; i < arr.length; i++) {
//   console.log("Mahasiswa ke-" + (i + 1) + " : " + arr[i]);
// }

// var arr = ["Carolus", "Rico", "Alde"];
// console.log(arr.join(" - "));

// var arr = ["Carolus", "Rico", "Alde"];
//join
// console.log(arr.join(" - "));

//push & pop
// arr.push("Antoro");
// // arr.pop();
// console.log(arr.join(" - "));

//unshift &shift
// // arr.unshift(Antoro);
// arr.shift();
// console.log(arr.join(" - "));

// //splice
// var arr = ["Carolus", "Rico", "Alde"];
// arr.splice(1, 2, "Antoro", "Toro");
// console.log(arr.join(" - "));

// //splice
// var arr = ["Carolus", "Rico", "Alde", "Antoro", "Toro"];
// var arr2 = arr.slice(1.3);
// console.log(arr2.join(" - "));

//----------------------------------------------
//Latihan
// function Bus(sopir, trayek, penumpang, kas) {
//   this.sopir = sopir;
//   this.trayek = trayek;
//   this.penumpang = penumpang;
//   this.kas = kas;

//   this.penumpangNaik = function (namaPenumpang) {
//     this.penumpang.push(namaPenumpang);
//     return this.penumpang;
//   };

//   this.penumpangTurun = function (namaPenumpang, bayar) {
//     if (this.penumpang.length === 0) {
//       alert("Bus masih Kosong! ");
//       return false;
//     }
//     for (var i = 0; i < this.penumpang.length; i++) {
//       if (this.penumpang[i] == namaPenumpang) {
//         this.penumpang[i] = undefined;
//         this.kas += bayar;
//         return this.penumpang;
//       }
//     }
//   };
// }
// var Bus1 = new Bus("Carolus", ["Rico", "Aldeantoro"], [], 0);
// var Bus2 = new Bus("Samuel", ["Richard", "Pae"], [], 0);
//---------------------------------------------------------------------
//ddocument.getElementByIde()//DOM Selection
// const judul = document.getElementById("judul");
// judul.style.color = "YELLOW";
// judul.style.backgroundColor = "black";
// judul.innerHTML = "RICO";

//document.getElementsByTagName()//HTML Collections
// const p = document.getElementsByTagName("p");
// //backgroundColor
// p[0].style.backgroundColor = "black";
// p[1].style.backgroundColor = "black";
// p[2].style.backgroundColor = "black";
// p[3].style.backgroundColor = "black";
// p[4].style.backgroundColor = "black";
// p[5].style.backgroundColor = "black";

// //fontColor
// p[0].style.color = "YELLOW";
// p[1].style.color = "YELLOW";
// p[2].style.color = "YELLOW";
// p[3].style.color = "YELLOW";
// p[4].style.color = "YELLOW";
// p[5].style.color = "YELLOW";

// versi looping simpel
// for (let i = 0; i < p.length; i++) {
//   p[i].style.backgroundColor = "black";
//   p[i].style.color = "YELLOW";
// }

// const h1 = document.getElementsByTagName("h1")[0];
// h1.style.fontSize = "50px";

// //document.getElementsByClassName()//HTML Collections
// const p1 = document.getElementsByClassName("p1")[0];
// p1.innerHTML = "ini diubah dari java script";

// //document.querySelect()//ELEMENT
// const p4 = document.querySelector("#b p");
// p4.style.color = "yellow";
// p4.style.fontSize = "30px";

// const li2 = document.querySelector("section ul li:nth-child(2)");
// li2.style.backgroundColor = "orange";

// const p = document.querySelector("p");
// p.innerHTML = "EMAIL SAYA";

// const p = document.querySelectorAll("p");
// versi looping simpel
// for (let i = 0; i < p.length; i++) {
//   p[i].style.backgroundColor = "black";
//   p[i].style.color = "YELLOW";
// }

// const sectionB = document.querySelector("section#b");
// const p4 = sectionB.getElementsByTagName("p")[0];
// p4.style.backgroundColor = "black";
// p4.style.color = "YELLOW";
// ==========================================
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

//BAGIAN JUDUL
const judul = document.getElementById("judul");
judul.style.color = "YELLOW";
judul.style.backgroundColor = "black";

const h1 = document.getElementsByTagName("h1")[0];
h1.style.fontSize = "50px";

// //BAGIAN PARAGRAF
const p = document.getElementsByTagName("p");
for (let i = 0; i < p.length; i++) {
  p[i].style.backgroundColor = "black";
  p[i].style.color = "YELLOW";
}

//Bagian dalam link
const a = document.getElementsByTagName("a");
for (let i = 0; i < a.length; i++) {
  a[i].style.backgroundColor = "black";
  // a[i].style.color = "YELLOW";
}

//BAGIAN LI
const li1 = document.querySelector("section ul li:nth-child(1)");
li1.style.backgroundColor = "BLACK";
const li2 = document.querySelector("section ul li:nth-child(2)");
li2.style.backgroundColor = "BLACK";
const li3 = document.querySelector("section ul li:nth-child(3)");
li3.style.backgroundColor = "BLACK";

// ===================================================== vIDEO 6
// buat Element baru paragraf
const pBaru = document.createElement("p");
const teksPBaru = document.createTextNode("Coba dulu Ya");

// simpan tulisan ke dalam paragraf
pBaru.appendChild(teksPBaru);

// simpan pBaru di akhir section A
const sectionA = document.getElementById("a");
sectionA.appendChild(pBaru);

const liBaru = document.createElement("li");
const teksLiBaru = document.createTextNode("hitam baru");
liBaru.appendChild(teksLiBaru);

const ul = document.querySelector("section#b ul");
const li4 = ul.querySelector("li:nth-child(4)");

ul.insertBefore(liBaru, li4);
// =================================================================
////UNTUK MEBMBUAT ITEM BARU
const p6 = document.querySelector("section#b p");
p6.addEventListener("click", function () {
  const ul = document.querySelector("section#b ul");
  const liBaru = document.createElement("li");
  const teksLiBaru = document.createTextNode("Item");
  liBaru.appendChild(teksLiBaru);
  ul.appendChild(liBaru);
});

//// UNTUK MENGAKTIFKAN ONCLICK BAGIAN PARAGRAF
// const p5 = document.querySelector(".p5");
// function ubahWarnaP4() {
//   p4.style.backgroundColor = "black";
//   p4.style.color = "yellow";
// }
// const p4 = document.querySelector(".p4");
// p4.onclick = ubahWarnaP4;

// p5.addEventListener("mouseenter", function () {
//   p5.style.backgroundColor = "black";
// });
// p5.addEventListener("mouseleave", function () {
//   p5.style.backgroundColor = "white";
// });
// p5.addEventListener("click", function () {
//   p5.style.color = "yellow";
// });
