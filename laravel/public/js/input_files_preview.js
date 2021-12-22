// Markus Togi Fedrian Rivaldi Sinaga
// 11814037
// Kelas RB kuliahnya RA

// ----------------------------------------
// ------- AUTO GROWING TEXT ARE ----------
// ----------------------------------------

function inputReportContent(){
    let content = document.getElementById("content");
    let text = document.getElementById("Report_Content").innerText;
    content.value=text;
}

// ----------------------------------------
// --------- SHOW FILES PREVIEW -----------
// ----------------------------------------

const Attachments = new DataTransfer();
const attach_input = document.getElementById("attach");

attach_input.onchange = function(){

    const reader = new FileReader();

    for (let i=0; i<this.files.length; i++){
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
            let name = delete_button.nextSibling.childNodes[1].childNodes[0].innerText;
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
}