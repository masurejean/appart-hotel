const sliderImg = document.querySelector("#slider>img");
const sliderImgClient = document.querySelector("#sliderAvisClient>img");
const prev = document.getElementById("prev");
const next = document.getElementById("next");

const urlIlmg = [
    "./assets/img/cours_interieure.jpeg",
    "./assets/img/chambre.webp",
    "./assets/img/sdb.jpg"
];

const urlIlmgClient = [
    "./assets/img/avis client 1.png",
    "./assets/img/avis client 2.png",
    "./assets/img/avis client 3.png",
    "./assets/img/avis client 4.png",
    "./assets/img/avis client 5.png"
];

// 1er slider img hotel
let i = 0;
sliderImg.src = urlIlmg[i];
next.addEventListener(
    "click",
    function () {
        console.log(i);
        if (i === urlIlmg.length-1) {
            i = 0;
            sliderImg.src = urlIlmg[i];
        } else {
           
        i++; 
            sliderImg.src = urlIlmg[i];
        }
    }
)
prev.addEventListener(
    "click",
    function () {
        console.log(i);
        if (i === 0){
            i = urlIlmg.length-1; 
            sliderImg.src = urlIlmg[i];
        } else {
        i--;
        sliderImg.src = urlIlmg[i];
        }
    }
)
setInterval(
    function(){
        console.log(i);
        if (i === urlIlmg.length-1) {
            i = 0;
            sliderImg.src = urlIlmg[i];
        } else {
        i++; 
            sliderImg.src = urlIlmg[i];
        }
    },
    4000
)


// 2e slider commentaires clients
let j = 0;
sliderImgClient.src = urlIlmgClient[j];
next.addEventListener(
    "click",
    function () {
        console.log(j);
        if (j === urlIlmgClient.length-1) {
            j = 0;
            sliderImgClient.src = urlIlmgClient[j];
        } else {
        j++; 
            sliderImgClient.src = urlIlmgClient[j];
        }
    }
)
prev.addEventListener(
    "click",
    function () {
        console.log(j);
        if (j === 0){
            j = urlIlmgClient.length-1; 
            sliderImgClient.src = urlIlmgClient[j];
        } else {
        j--;
        sliderImgClient.src = urlIlmgClient[j];
        }
    }
)
setInterval(
    function(){
        console.log(j);
        if (j === urlIlmgClient.length-1) {
            j = 0;
            sliderImgClient.src = urlIlmgClient[j];
        } else {
        j++; 
        sliderImgClient.src = urlIlmgClient[j];
        }
    },
    4000
)