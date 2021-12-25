<script>
    function lapor() {
        var http = new XMLHttpRequest()
        http.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("all").innerHTML = this.responseText;
            }
        }
        http.open("GET", "/lapor", true);
        http.send();
    }
</script>