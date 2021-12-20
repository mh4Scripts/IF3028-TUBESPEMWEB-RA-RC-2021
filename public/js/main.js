let id=(id) =>document.getElementById(id);

let classes = (classes) => document.getElementsByClassName(classes);

// let hapus = classes("hapus"),
// judul=id("judul"), nama=id("nama"), 
// form=id("form"), pesan=id("pesan"), 
// aspek=id("aspek"), file=id("file"), error=classes("error");

let error=classes("error");

function konfirmasi(){
    var txt;
    if (confirm("Hapus data?")){
        txt = "Data berhasil dihapus";
    }
    hapus.innerHTML=txt;
};

function tambah(){
    alert("Laporan/Komentar berhasil ditambahkan");
};

function coba(){
    error.innerHTML = "cek"
};

function validasi(){
    if (document.form.nama.value==""){
        alert("Nama tidak boleh kosong");
        document.form.nama.value.focus();
        return false;
    }
    if (document.form.judul.value==""){
        alert("Nama tidak boleh kosong");
        document.form.judul.value.focus();
        return false;
    }
}

// form.addEventListener("submit", (e)=>{
//     e.preventDefault();
//     engine(nama,0,"Nama tidak boleh kosong");
//     engine(judul,1,"Judul tidak boleh kosong");
//     // engine(pesan,2,"Komentar/Laporan minimal 20 kata");
//     // engine(file)
// });

// let engine=(id, serial, message)=>{
//     if (id.value.trim()===""){
//         error[serial].innerHTML=message;
//     }
//     else{
//         error[serial].innerHTML="";
//     }
// };