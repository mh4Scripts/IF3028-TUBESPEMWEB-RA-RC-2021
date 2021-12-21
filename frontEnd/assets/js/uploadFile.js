const uploadBtn = document.getElementById("upload-btn");

const fileChoosen = document.getElementById("file-choosen");

uploadBtn.addEventListener("change", function () {
  fileChoosen.textContent = this.files[0].name;
});
