
function switchOffOverlay(){
   document.getElementById("overlay").style.display = "none";
   document.getElementsByClassName("list")[0].style.display = "none";
}

function switchOnOverlay(name){
   //console.log(name);
   //document.getElementsByClassName('list')[0].innerHTML = "";
   console.log(document.getElementsByClassName('list')[0].innerHTML);

   $.ajax({
                type: "POST",
                url: "selection.php",
                //dataType:"json",
                data:({"category":name}),
                success: function(data) {
                   //console.log(data);
                    document.getElementsByClassName('list')[0].innerHTML= data;
                },
                error: function(xhr, status, error) {
                  alert(xhr.responseText);
               }

            });
   document.getElementById("overlay").style.display = "block";
   document.getElementsByClassName("list")[0].style.display = "inline-block";
}
function resultPage(name){
   console.log(name);


}
function parseURL(){


   //console.log(window.location.href.split("#")[1]);
   //console.log(window.location.href);
   var s = document.getElementsByClassName("dropbtn")[0].innerHTML;
   document.getElementsByClassName("dropbtn")[0].innerHTML = window.location.href.split("#")[1] + s;
   //alert(document.getElementsByClassName("dropbtn")[0].innerHTML);
}

function mapPage(){
   window.location.replace("/craiglist/index.php");
}
