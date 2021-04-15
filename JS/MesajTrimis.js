var seconds = 3;
var countdown = setInterval(function() 
{
    seconds--;
    if (seconds <= 0) 
    {
        document.getElementById("trimitere").innerHTML = "Mesaj trimis.";
        document.getElementById("cssload-wrapper").style.display = "none";
        var x = document.getElementById("check");
        x.classList.add("check");
    }
}, 1000);