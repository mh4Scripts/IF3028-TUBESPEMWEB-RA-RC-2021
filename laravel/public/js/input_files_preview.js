// Markus Togi Fedrian Rivaldi Sinaga
// 11814037
// Kelas RB kuliahnya RA

// ----------------------------------------
// ------- AUTO GROWING TEXT ARE ----------
// ----------------------------------------


        
function inputReportContent(){

    let content             = document.getElementById("cntnt");
    let text                = document.getElementById("Report_Content").innerText;
    let splitBySpaces       = text.split(" ");
    
    let ContentErrorMessage = document.getElementById("ContentErrorMessage");
    let wordsCount = 0;
    for (let i=0; i<splitBySpaces.length; i++){
        if(splitBySpaces[i].length > 1){
            wordsCount+=1;
        }
    }

    if (wordsCount < 20){
        ContentErrorMessage.innerHTML = "Isi laporan minimal terdiri dari 20 kata (tidak termasuk karakter tunggal)";
        ContentErrorMessage.style.visibility = "visible";
    }else{
        ContentErrorMessage.style.visibility = "hidden";
    }
    console.log(wordsCount);

    content.value=text;
}
// ----------------------------------------
// --------- SHOW FILES PREVIEW -----------
// ----------------------------------------

const Attachments = new DataTransfer();
const attach_input = document.getElementById("attach");

let total_files_size = 0;

attach_input.onchange = function(){

    const reader = new FileReader();

    for (let i=0; i<this.files.length; i++){

        //Penghitung total ukuran
        total_files_size += this.files[i].size;

        //Membuat blok untuk masing - masing lampiran
        let file_Block                  = document.createElement("div");
        file_Block.className            = "file-block";

        //Membuat "tombol hapus" untuk masing - masing blok lampiran
        let delete_File                 = document.createElement("span");
        delete_File.className           = "delete-file";
        delete_File.innerHTML           = "&times;";

        //Membuat elemen "preview" untuk masing - masing blok lampiran
        let file_Preview                = document.createElement("div");
        file_Preview.className          = "file-preview";

        //Membuat elemen "thumbnail container" untuk masing - masing blok lampiran
        let file_Thumbnail              = document.createElement("div");
        file_Thumbnail.className        = "file-thumbnail";

        //Membuat elemen thumbnail (gambar) untuk masing - masing blok lampiran
        let file_Thumbnail_Img          = document.createElement("img");

        //Menangkap lokasi thumbnail (gambar)
        reader.onload = function (e){
            file_Thumbnail_Img.setAttribute("src", e.target.result);
        };
        reader.readAsDataURL(this.files[i]);

        //Memasukkan thumbnail (gambar) ke thumbnail container
        file_Thumbnail.appendChild(file_Thumbnail_Img);

        //Membuat elemen "name container" untuk masing - masing lampiran
        let file_Name                   = document.createElement("div");
        file_Name.className             = "file-name";
        file_Name.innerHTML             = this.files[i].name;

        //Membuat elemen "size container" untuk masing - masing lampiran
        let file_Size                   = document.createElement("div");
        file_Size.className             = "file-size";

        //Mengambil informasi ukuran dan memberi satuan ukuran untuk masing - masing lampiran 
        let suffix                      = "bytes";
        let size                        = this.files[i].size;

        

        if (size >= 1024 && size < 1024000) {
            suffix = "KB";
            size = Math.round(size / 1024 * 100) / 100;
        } else if (size >= 1024000) {
            suffix = "MB";
            size = Math.round(size / 1024000 * 100) / 100;
        }
        file_Size.innerHTML             = size+" "+suffix;

        //Membuat elemen "name and size container" untuk masing - masing lampiran
        let file_Name_and_Size          = document.createElement("div");
        file_Name_and_Size.className    = "file-name-and-size";
        
        //Memasukkan "name container" dan "size container" ke elemen "name and size container"
        file_Name_and_Size.appendChild(file_Name);
        file_Name_and_Size.appendChild(file_Size);

        //Memasukkan "thumbnail container" dan "name and size container" ke dalam elemen "preview"
        file_Preview.appendChild(file_Thumbnail);
        file_Preview.appendChild(file_Name_and_Size);

        //Memasukkan elemen "preview" dan "tombol hapus" ke dalam blok lampiran
        file_Block.appendChild(delete_File);
        file_Block.appendChild(file_Preview);

        //Memasukkan blok lampiran ke dalam "area seluruh lampiran"
        document.getElementById("files_Area").appendChild(file_Block);
    }

    // Menambahkan file yang baru dipilih ke dalam penyimpanan "Attachments"
    for (let file of this.files) {
        Attachments.items.add(file);
    }

    this.files = Attachments.files;

    // EventListener untuk "delete button"
    let delete_buttons = document.getElementsByClassName("delete-file");
    
    for (let delete_button of delete_buttons){
        delete_button.onclick = function(){
            delete_button.parentElement.remove()
            let name        = delete_button.nextSibling.childNodes[1].childNodes[0].innerText;
            let text_size   = delete_button.nextSibling.childNodes[1].childNodes[1].innerText;

            let num_size    = text_size.split(' ')[0];
            let suf_size    = text_size.split(' ')[1];

            if (suf_size == "MB"){
                num_size = num_size * 1000000;
                total_files_size -= num_size;
            }else if(suf_size == "KB"){
                num_size = num_size * 1000;
                total_files_size -= num_size;
            }else{
                total_files_size -= num_size;
            }
            console.log(total_files_size);

            for (let i=0; i<Attachments.items.length; i++){
                if (name === Attachments.items[i].getAsFile().name){
                    //Menghapus dari penyimpanan terlebih dahulu
                    Attachments.items.remove(i);
                    continue;
                }
            }
            //Update File yang akan diinput dengan menyamakan file dengan yang tersimpan di penyimpanan "Attachments"
            document.getElementById("attach").files = Attachments.files;
            //Penghitung
            document.getElementById("attachments_counter").innerHTML = document.getElementById("attach").files.length;
        }
    }
    //Penghitung
    document.getElementById("attachments_counter").innerHTML = document.getElementById("attach").files.length;

    console.log(total_files_size);
}