const body              = document.body;

// ----------------------------------------
// --------- AUTO HIDE HEADER -------------
// ----------------------------------------

const scrollUp          = "scroll-up";
const scrollDown        = "scroll-down";
const NotifButton       = document.getElementById("NotifButton");
let lastScroll          = 0;

if (document.body.contains(document.getElementById("RED_BG"))){
    window.addEventListener("scroll", () => {
            const currentScroll = window.pageYOffset;

            if (currentScroll <= 0 ) {
                body.classList.remove(scrollUp);
                // NotifButton.innerHTML= "<img src=\"media/icons/white_bell.png\" alt=\"\">";
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
                // NotifButton.innerHTML= "<img src=\"media/icons/grey_bell.png\" alt=\"\">";
            }
            lastScroll = currentScroll;
    });
    if (window.pageYOffset > 0){
        body.classList.add(scrollUp);
        NotifButton.innerHTML= "<img src=\"media/icons/grey_bell.png\" alt=\"\">";
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
function closeLoginModal(){
    document.getElementById("LoginModal").style.display = "none";
}
window.addEventListener("click", (e)=>{
    if (e.target == document.getElementById("LoginModal")) {
        return closeLoginModal();
    }
});

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

        Attachment_Image.setAttribute("src", Attachment_Data[i]);

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

function load_data(){
    let URL = "coba.blade.php";
    console.log(URL);
}
// function loadAllData(){
//     // let URL = "coba.blade.php";
//     // try{
//     //     let data = await fetch(URL);
//     //     return await data.text();
//     // }catch (error){
//         console.log(error);
//     // }
// }


// function loadInputForm(id){
    
//     fetch('inputform.php')
//     .then(data => data.text())
//     .then(html => OperationField.innerHTML = html);
// }

//Select token with getAttribute
// let token = document.querySelector(‘meta[name=”csrf-token”]’).getAttribute(‘content’);
// //Select input values with the data you want to send
// let name = document.querySelector(‘input[name=”name”]’).value;
// let number = document.querySelector(‘input[name=”number”]’).value;
// //Define your post url
// let url = '/admin/part/store';
// //Define redirect if needed
// let redirect = '/admin/part/list';
// //Select your form to clear data after sucessful post
// let form = document.querySelector('#addPart');



// let options={ 
//     method      : "POST", 
//     body        : JSON.stringify(data), 
//     headers     : {
//         'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value, 
//         'Content-Type': 'application/json'
//     }
// }

// fetch('url', options).
// then(res=>res.json())










































































// NotifButton.addEventListener("click", function(){
//     let Notifications = document.getElementById("Notifications");
//     Notifications.innerHTML = "<h1>HELLO WORLD</h1>";
// });
