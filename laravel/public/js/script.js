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
        NotifButton.innerHTML= "<img src=\"media/icons/white_bell.png\" alt=\"\">";
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
        NotifButton.innerHTML= "<img src=\"media/icons/grey_bell.png\" alt=\"\">";
    }
    console.log(lastScroll);
    lastScroll = currentScroll;
});
if (window.pageYOffset > 0){
    body.classList.add(scrollUp);
    NotifButton.innerHTML= "<img src=\"media/icons/grey_bell.png\" alt=\"\">";
}
// ----------------------------------------
// ------------ LOGIN MODAL ---------------
// ----------------------------------------
const clickLoginButton  = document.getElementById("clickLogin");
const LoginModal        = document.getElementById("LoginModal");
const closeLoginModal   = document.getElementsByClassName("closeLoginModal")[0];

clickLoginButton.addEventListener("click", function(){
    LoginModal.style.display = "block";
});

closeLoginModal.addEventListener("click", function(){
    LoginModal.style.display = "none";
});

window.addEventListener("click", function(event){
    if (event.target == LoginModal) {
        LoginModal.style.display = "none";
    }
});


// ----------------------------------------
// ---------- SHOW ATTACHMENT -------------
// ----------------------------------------

const dataAtt           = document.getElementById("dataAtt");
const AttModal          = document.getElementById("AttModal");
const closeAttModal     = document.getElementsByClassName("closeAttModal")[0];

dataAtt.addEventListener("click", function(){
    AttModal.style.display = "block";
});

closeAttModal.addEventListener("click", function(){
    AttModal.style.display = "none";
});

window.addEventListener("click", function(event){
    if (event.target == AttModal) {
        AttModal.style.display = "none";
    }
});

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



NotifButton.addEventListener("click", function(){
    let Notifications = document.getElementById("Notifications");
    Notifications.innerHTML = "<h1>HELLO WORLD</h1>";
});
