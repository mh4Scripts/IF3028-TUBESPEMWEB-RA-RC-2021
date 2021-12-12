

    var form = document.getElementById('form')

    var error = []
    
    form.addEventListener('submit', function(e){
        e.preventDefault()
    
        var laporan = document.getElementById('laporan')
        var aspek = document.getElementsByClassName('aspek')
        var lampiran = document.getElementById('lampiran')
    
        if (laporan.value.length < 20 ){
            error.push("Tolong isi filed laporan ") 
        }
    
        if (aspek.value == ""){
            error.push("Tolong isi filed aspek ") 
        }
    
        if (lampiran.value = ""){
            error.push("Tolong isi filed lampiran ") 
        }
    
    
        var pesan = document.getElementById('pesan')
        pesan.innerText = error
    
        if (laporan.value.length > 19 && aspek.value != "" && lampiran.value != "" ){
            form.submit();
            alert("Berhasil Submit");
            
        }
    
    })


