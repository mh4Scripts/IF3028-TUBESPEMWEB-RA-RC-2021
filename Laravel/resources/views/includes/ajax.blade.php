<script>
    $(document).ready(function(){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $(document).on('submit', '#form', function(e){
            e.preventDefault()

            var judul = document.getElementById('judul')
            var laporan = document.getElementById('laporan')
            var aspek = document.getElementById('aspek')
            var lampiran = document.getElementById('lampiran')
            var pesan = document.getElementsByClassName('pesan')
    
            var err = 0
    
            if (judul.value == ""){
                let error = "Judul tidak boleh kosong!"
                pesan[0].innerText = error
                err++
            }else{
                pesan[0].innerText=''
            }
    
            if (laporan.value.length < 20 ){
                let error = "Tidak boleh kurang dari 20 kata!"
                pesan[1].innerText = error
                err++
            }else{
                pesan[1].innerText=''
            }
    
            if (aspek.value == ""){
                let error = "Aspek harus dipilih!"
                pesan[2].innerText = error
                err++
            }else{
                pesan[2].innerText=''
            }

            if (lampiran.value == ""){
                let error = "Harus terdapat bukti lampiran!"
                pesan[3].innerText = error
                err++
            }else{
                pesan[3].innerText=''
            }

            if (err == 0){
                if(confirm("Yakin ingin membuat laporan/komentar?") == true){
                    let formData = new FormData($('#form')[0])

                    $.ajax({
                        type: "POST",
                        url: "/lapor",
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response){
                            alert("Laporan Berhasil Ditambah!")
                            lapor()
                        }
                    })
                }
            }
        })
    })
</script>