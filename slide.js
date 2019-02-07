var imgArray = [
    './sponimg/0.jpg',
    "./sponimg/alumni.jpg",
    "./sponimg/amravati.jpg",
    "./sponimg/bulk24sms.png",
    "./sponimg/cogni_as_title.png",
    "./sponimg/gateforum.jpg",
    "./sponimg/gauri.png",
    "./sponimg/ie.jpg",
    "./sponimg/makhija.jpg",
    "./sponimg/marasim.jpg",
    "./sponimg/rcn.jpg",
    "./sponimg/shikhar.jpg",
    "./sponimg/prize.jpg",
    "./sponimg/bulk24sms.png",
    "./sponimg/iste.jpg" ,
    "./sponimg/ie.jpg",
    "./sponimg/logo.png",
    "./sponimg/cogni_as_title.png"],
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