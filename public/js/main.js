// let id=(id) =>document.getElementById(id);

// let classes = (classes) => document.getElementsByClassName(classes);

function konfirmasi(x){
    if (confirm("Hapus data?")){
        var txt = "/utama/"+x+"/delete";
        location.href=txt;
    }
    
};

function tambah(){
    alert("Laporan/Komentar berhasil ditambahkan");
};

function validasi(){
    var nama = document.getElementById("nama").value;
    var judul = document.getElementById("judul").value;
    var error = 0;
    var asp = document.getElementById("aspek").value;

    // var arrInput = document.getElementId("file").value;
    // var valid = [".jpg", ".jpeg", ".png", ".doc", ".png",".xls", ".xlsx", ".ppt", ".pptx", ".pdf"]; 

    if (nama === ""){
        document.getElementById("info1").innerHTML="Nama tidak boleh kosong!";
        document.getElementById("nama").style.border = "2px solid red";
        return false;
    } if (judul === ""){
        document.getElementById("info2").innerHTML="Judul tidak boleh kosong!";
        document.getElementById("judul").style.border = "2px solid red";
        return false;
    }    
    if(document.getElementById("pesan").value.replace(/\s+/g, '').length <= 20){
            error++;
    }
    if(error > 0) {
        document.getElementById("info3").innerHTML="Minimal 20 kata!";
        document.getElementById("pesan").style.border = "2px solid red";
        return false;
    }
    if(asp === "0"){
        document.getElementById("info4").innerHTML="Pilih salah satu aspeks";
        return false;
    }
}

function cekExt(){
        var fileInput = document.getElementById('file');
          
        var filePath = fileInput.value;
      
        // Allowing file type
        var allowedExtensions = 
                /(\.jpg|\.jpeg|\.png|\.doc|\.xls|\.xlsx|\.ppt|\.pptx|\.pdf|\.docx|\.docs)$/i;
          
        if (!allowedExtensions.exec(filePath)) {
            document.getElementById("info5").innerHTML="Hanya dapat menerima dokumen, excel, ppt, pdf, dan gambar"
            return false;
        } 
    }