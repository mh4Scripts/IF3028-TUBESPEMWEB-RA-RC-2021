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
    var nama = document.getElementById("nama").value;
    var judul = document.getElementById("judul").value;
    var pesab = document.getElementById("pesan").value;
    if (nama === ""){
        document.getElementById("info1").innerHTML="Nama tidak boleh kosong";
        document.getElementById("info1").style.color="Red";
        document.getElementById("nama").style.border = "2px solid red";
        return false;
    } if (judul === ""){
        document.getElementById("info2").innerHTML="Judul tidak boleh kosong";
        document.getElementById("info2").style.color="Red";
        document.getElementById("judul").style.border = "2px solid red";
        return false;
    } if (pesan === ""){
        document.getElementById("info3").innerHTML="Pesan tidak boleh kosong";
        document.getElementById("info3").style.color="Red";
        document.getElementById("pesan").style.border = "2px solid red";
        return false;
    }
}
//     var minpesan = 20;
//     if (
//         document.form.nama.value == "" ||
//         document.form.judul.value == "" ||
//         document.form.pesan.value == "" ||
//         document.form.aspek.value == "" 
//     ){
//         alert("data tidak boleh kosong");
//         return false;
//     } 
//     if (document.form.pesan.value.length < minpesan){
//         alert("Laporan/Komentar minimal 20 kata");
//         return false;
//     }
// }

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