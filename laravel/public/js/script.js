const body              = document.body;

// ----------------------------------------
// --------- AUTO HIDE HEADER -------------
// ----------------------------------------

const scrollUp          = "scroll-up";
const scrollDown        = "scroll-down";
const NotifButton       = document.getElementById("NotifButton");
let lastScroll          = 0;

document.ge

if (document.body.contains(document.getElementById("RED_BG"))){
    window.addEventListener("scroll", () => {
        const currentScroll = window.pageYOffset;

        if (currentScroll <= 0 ) {
            body.classList.remove(scrollUp);
            return;
        }

        if (currentScroll > lastScroll && !body.classList.contains(scrollDown)) {
            // SCROLL DOWN
            body.classList.remove(scrollUp);
            body.classList.add(scrollDown);
        }
        
        else if (currentScroll < lastScroll && body.classList.contains(scrollDown)) {
            // SCROLL UP
            body.classList.remove(scrollDown);
            body.classList.add(scrollUp);
        }
        lastScroll = currentScroll;
    });
    if (window.pageYOffset > 0){
        body.classList.add(scrollUp);
    }
}else{
    body.style.backgroundColor = "#F0F0F0";
    body.classList.add(scrollUp);
    window.addEventListener("scroll", () => {
        const currentScroll = window.pageYOffset;
        if (currentScroll <= 0){
            body.classList.remove("hide");
        }
        if (currentScroll > lastScroll && !body.classList.contains("hide") ){
            body.classList.add("hide");
        }else if (currentScroll < lastScroll && body.classList.contains("hide")){
            body.classList.remove("hide");
        }
    });
}

// ----------------------------------------
// ------------ LOGIN MODAL ---------------
// ----------------------------------------
function showLoginModal(){
    document.getElementById("LoginModal").style.display = "block";
}
if (document.getElementsByClassName("login-error-message").length > 0){
    showLoginModal();
}
if (document.getElementsByClassName("AlertContainer Warning-Alert").length > 0){
    showLoginModal();
}
function closeLoginModal(){
    document.getElementById("LoginModal").style.display = "none";
}
window.addEventListener("click", (e)=>{
    if (e.target == document.getElementById("LoginModal")) {
        return closeLoginModal();
    }
});



// ----------------------------------------
// ------------ PROFILE MENU --------------
// ----------------------------------------
function ProfileFunction() {
    document.getElementById("profileMenu").classList.toggle("show");
}  
window.onclick = function(event) {
    if (!event.target.matches('.profile-menu-btn')) {
        var menus = document.getElementsByClassName("profile-menu-content");
        var i;
        for (i = 0; i < menus.length; i++) {
            var menu = menus[i];
            if (menu.classList.contains('show')) {
                menu.classList.remove('show');
            }
        }
    }
}

// ----------------------------------------
// ---------- SHOW ATTACHMENT -------------
// ----------------------------------------
var imageIndex = 0;
function showAttModal (indeks_tampil){
    imageIndex = indeks_tampil;
    showSlides(imageIndex);
    document.getElementById("AttModal").style.display = "block";
}
function closeAttModal (){
    document.getElementById("AttModal").style.display = "none";
}
window.addEventListener("click", function(e){
    if (e.target == document.getElementById("AttModal")) {
        return closeAttModal();
    }
});
// --------- IMAGES SLIDE SHOW ------------
function plusSlides(showNowIndex) {
    showSlides(imageIndex += showNowIndex);
}
function currentSlide(showNowIndex) {
    showAttModal(showNowIndex);
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

function Send_Att_Data(Att_Data){
    let Attachment_Data = [];

    for (let i=0; i<Att_Data.length; i++){
        Attachment_Data.push(Att_Data[i]['lcate']);
    }
    
    //Menangkap kontainer
    let AttModalContent = document.getElementById("AttModalContent");
    let imageDotContainer = document.getElementById("imageDotContainer");
    
    //Kosongkan terlebih dahulu elemen di dalam kontainer
    AttModalContent.innerHTML           = "";
    imageDotContainer.innerHTML         = "";

    for (let i=0; i<Attachment_Data.length; i++){
        
        //IMAGES CONTAINER

        let ImagesContainer         = document.createElement("div");
        ImagesContainer.className   = "imagesContainer fade";

        let imageNumber             = document.createElement("div");
        imageNumber.className       = "imageNumber";
        imageNumber.innerHTML       = String(i+1) + " / " + String(Attachment_Data.length);

        let Attachment_Image        = document.createElement("img");

        Attachment_Image.setAttribute("src", "storage/"+Attachment_Data[i]);

        ImagesContainer.appendChild(imageNumber);
        ImagesContainer.appendChild(Attachment_Image);

        AttModalContent.appendChild(ImagesContainer);

        //IMAGES DOT CONTAINER

        let Dot         = document.createElement("span");
        Dot.className   = "imageDot";
        Dot.onclick     = function () {
            currentSlide(i+1);
        };

        imageDotContainer.appendChild(Dot);

    }
    showAttModal(1);

}



// ----------------------------------------
// ----------- CLOSE ALERT ----------------
// ----------------------------------------

function closeAlert(){
    document.getElementById("Alert").style.display = "none";
}
window.addEventListener("click", function(e){
    if (e.target == document.getElementById("Alert")) {
        return closeAlert();
    }
});

function closeSizeAlert(){
    document.getElementById("SizeAlert").style.display = "none";
}
window.addEventListener("click", function(e){
    if (e.target == document.getElementById("SizeAlert")) {
        return closeSizeAlert();
    }
});

// ----------------------------------------
// ---------- SHOW ATTACHMENT -------------
// ----------------------------------------
function showDeleteModal(){
    document.getElementById("DeleteModal").style.display = "block";
}
function closeDeleteModal(){
    document.getElementById("DeleteModal").style.display = "none";
}



// ----------------------------------------
// ---------- SHOW CREW TEAM --------------
// ----------------------------------------

function ShowCrew(){
    let ShowCrewArea            = document.getElementById("show_crew");
    let ShowBtn                 = document.getElementById("show_crew_btn");
    let HideBtn                 = document.getElementById("hide_crew_btn");
    ShowBtn.style.display       = "none";
    HideBtn.style.display       = "block";
    ShowCrewArea.style.display  = "flex";
}
function HideCrew(){
    let ShowCrewArea            = document.getElementById("show_crew");
    let ShowBtn                 = document.getElementById("show_crew_btn");
    let HideBtn                 = document.getElementById("hide_crew_btn");
    ShowBtn.style.display       = "block";
    HideBtn.style.display       = "none";
    ShowCrewArea.style.display  = "none";
}

