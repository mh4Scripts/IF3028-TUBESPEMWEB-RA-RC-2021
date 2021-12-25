<script>
    var form = document.getElementById('form')

    form.addEventListener('submit', function(e){
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

        if (err == 0){
            if(confirm("Yakin ingin mengubah laporan/komentar?") == true){
                form.submit();
            }
        }
    })
</script>