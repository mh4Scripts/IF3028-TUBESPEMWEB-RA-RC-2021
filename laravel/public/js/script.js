const body              = document.body;

// ----------------------------------------
// --------- AUTO HIDE HEADER -------------
// ----------------------------------------

const scrollUp          = "scroll-up";
const scrollDown        = "scroll-down";
const NotifButton       = document.getElementById("NotifButton");
let lastScroll          = 0;

window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset;
    if (currentScroll <= 0) {
        body.classList.remove(scrollUp);
        // NotifButton.innerHTML= "<img src=\"media/icons/white_bell.png\" alt=\"\">";
        return;
    }
    if (currentScroll > lastScroll && !body.classList.contains(scrollDown)) {
        // SCROLL DOWN
        body.classList.remove(scrollUp);
        body.classList.add(scrollDown);
    }else if (currentScroll < lastScroll && body.classList.contains(scrollDown)) {
        // SCROLL UP
        body.classList.remove(scrollDown);
        body.classList.add(scrollUp);
        // NotifButton.innerHTML= "<img src=\"media/icons/grey_bell.png\" alt=\"\">";
    }
    lastScroll = currentScroll;
});
if (window.pageYOffset > 0){
    body.classList.add(scrollUp);
    NotifButton.innerHTML= "<img src=\"media/icons/grey_bell.png\" alt=\"\">";
}

// ----------------------------------------
// ------------ LOGIN MODAL ---------------
// ----------------------------------------
function showLoginModal(){
    document.getElementById("LoginModal").style.display = "block";
}
function closeLoginModal(){
    document.getElementById("LoginModal").style.display = "none";
}
window.addEventListener("click", (e)=>{
    if (e.target == LoginModal) {
        return closeLoginModal();
    }
});

// ----------------------------------------
// ---------- SHOW ATTACHMENT -------------
// ----------------------------------------
var imageIndex = 0;
function showAttModal (){
    imageIndex = 1;
    showSlides(imageIndex);
    document.getElementById("AttModal").style.display = "block";
}
function closeAttModal (){
    document.getElementById("AttModal").style.display = "none";
}
window.addEventListener("click", function(e){
    if (e.target == AttModal) {
        return closeAttModal();
    }
});
// --------- IMAGES SLIDE SHOW ------------
function plusSlides(showNowIndex) {
    showSlides(imageIndex += showNowIndex);
}
function currentSlide(showNowIndex) {
    showSlides(imageIndex = showNowIndex);
}
function showSlides(showNowIndex) {
    var images      = document.getElementsByClassName("imagesContainer");
    var dots        = document.getElementsByClassName("imageDot");
    if (showNowIndex > images.length) {
        imageIndex = 1;
    }    
    if (showNowIndex < 1) {
        imageIndex = images.length;
    }
    for (let i=0; i<images.length; i++) {
        images[i].style.display = "none";  
    }
    for (let i=0; i<dots.length; i++) {
        dots[i].className = dots[i].className.replace(" activeDot", "");
    }
    images[imageIndex-1].style.display = "flex";
    dots[imageIndex-1].className += " activeDot";
}





















































































// let DataAttachments     = [];
// let DataAttachment      = document.getElementsByClassName("data-attachment");

// let Logo_Elements_ID = [];
// let A = document.getElementsByClassName("product-logo-box cf");
// let B = document.getElementsByClassName("product-preview");

// for (let i=0; i<A.length; i++){
//     Logo_Elements_ID.push(A[i].id);
//     document.getElementById(Logo_Elements_ID[i]).addEventListener("mouseenter", function(){
//         B[i].innerHTML = "Under construction";
//     });
//     document.getElementById(Logo_Elements_ID[i]).addEventListener("mouseleave", function(){
//         B[i].innerHTML = "";
//     });
// }



// NotifButton.addEventListener("click", function(){
//     let Notifications = document.getElementById("Notifications");
//     Notifications.innerHTML = "<h1>HELLO WORLD</h1>";
// });
