
function switchOffOverlay(){
   document.getElementById("overlay").style.display = "none";
   document.getElementsByClassName("list")[0].style.display = "none";
}

function switchOnOverlay(){
   document.getElementById("overlay").style.display = "block";
   document.getElementsByClassName("list")[0].style.display = "inline-block";
}

function parseURL(){


   //console.log(window.location.href.split("#")[1]);
   //console.log(window.location.href);
   var s = document.getElementsByClassName("dropbtn")[0].innerHTML;
   document.getElementsByClassName("dropbtn")[0].innerHTML = window.location.href.split("#")[1] + s;
   //alert(document.getElementsByClassName("dropbtn")[0].innerHTML);
}

function mapPage(){
   window.location.replace("file:///C:/SNU/Sem-7/Internet and Web Systems/Lab/craiglist/index.php");
}
