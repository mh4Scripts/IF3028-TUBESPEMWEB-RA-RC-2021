$(document).ready(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


const messageEle = document.getElementById('laporan');
const counterEle = document.getElementById('counter');

messageEle.addEventListener('input', function (e) {
    const target = e.target;

    // Get the `maxlength` attribute
    const maxLength = target.getAttribute('maxlength');

    // Count the current number of characters
    const currentLength = target.value.length;

    counterEle.innerHTML = `${currentLength}/${maxLength}`;
});



const actualBtn = document.getElementById('lampiran');

const fileChosen = document.getElementById('file-chosen');

actualBtn.addEventListener('change', function(){
  fileChosen.textContent = this.files[0].name
});

$(document).on('submit', '#form', function(e){
    e.preventDefault()
                const messageEle = document.getElementById('laporan');
                const actualBtn = document.getElementById('lampiran');
                const aspek = document.getElementById('aspek')
                var pesan = document.getElementsByClassName('pesan')
        
                var err = 0
        
                if (messageEle.value.length < 20) {
                    let error = "Pesan tidak boleh kosong! atau minimal 20 karakter"
                    pesan[0].innerText = error
                    err++
                }else{
                    pesan[0].innerText=''
                }
                
                if (aspek.value == ""){
                    let error = "Aspek harus dipilih!"
                    pesan[1].innerText = error
                    err++
                }else{
                    pesan[1].innerText=''
                }

                if (actualBtn.value == ""){
                    let error = "Harus terdapat bukti lampiran!"
                    pesan[2].innerText = error
                    err++
                }else{
                    pesan[2].innerText=''
                }
        
                if (err == 0){
                    if(confirm("Yakin ingin membuat laporan/komentar?") == true){
                    }
                    let formData = new FormData($('#form')[0])

                    $.ajax({
                        type: "POST",
                        url: "/create",
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response){
                            alert("Laporan Berhasil Ditambah!")
                            create()
                }
            })

        }
    })
});
