var seconds = 3;
var countdown = setInterval(function() 
{
    seconds--;
    if (seconds <= 0) 
    {
        document.getElementById("trimitere").innerHTML = "Mesajul nu s-a trimis. <br> Vă rugăm reîncercați.";
        document.getElementById("cssload-wrapper").style.display = "none";
        var x = document.getElementById("check");
        x.classList.add("wrong");
    }
}, 1000);