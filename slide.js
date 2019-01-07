var imgArray = [
    './img/infi-zeal_.png',
    "./img/embed.jpg",
    "./img/shikhar.jpg",
    "./img/dcs.jpg",
    "./img/desi.jpg",
    "./img/knowfest.jpg",
    "./img/la.jpg",
    "./img/sellad.jpg",
    "./img/gauri.png",
    "./img/topcon.png",
    "./img/makhija.jpg",
    "./img/Deshonnati.jpg",
    "./img/rcn.jpg",
    "./img/domino.jpg",
    "./img/amigo.jpg",
    "./img/bulk24sms.png",
    "./img/snp.jpg",
    "./img/ebay.png",
    "./img/ola.png",
    "./img/hero.jpg",
    "./img/24_12_2013_13_05_42_de1h7kcvltp16p6er45ohek6g7_snaarjqq4.jpg",
    "./img/alumni.jpg",
    "./img/persi.jpg" ,
    "./img/hasan.png",
    "./img/iste.jpg" ,
    "./img/ie.jpg",
    "./img/logo.png",
    "./img/cogni_as_title.png"],
    curIndex = 0;
    imgDuration = 2000;

function slideShow() {
    document.getElementById('slider').className += "fadeOut";
    setTimeout(function() {
        document.getElementById('slider').src = imgArray[curIndex];
        document.getElementById('slider').className = "";
    },1000);
    curIndex++;
    if (curIndex == imgArray.length) { curIndex = 0; }
    setTimeout(slideShow, imgDuration);
}
slideShow();