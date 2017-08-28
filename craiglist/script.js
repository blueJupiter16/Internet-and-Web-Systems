
function switchOffOverlay(){
   document.getElementById("overlay").style.display = "none";
   document.getElementsByClassName("list")[0].style.display = "none";
}

function switchOnOverlay(){
   document.getElementById("overlay").style.display = "block";
   document.getElementsByClassName("list")[0].style.display = "inline-block";
}
