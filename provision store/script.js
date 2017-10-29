


function addCategories(){
   var CategoryName = prompt("Enter Name of the category:");
   //console.log(document.getElementsByClassName("card"));
   var index = document.getElementsByClassName("card").length;
   var img="http://via.placeholder.com/350x150";
   var cat = document.getElementById("categories");
   console.log(index);

   if(index % 3 == 0){
     cat.innerHTML += "<div class=\"row category-grid\">             <div class=\"col-md-12\">";
   }
   cat.innerHTML += "<div class=\" col-md-4 col-sm-6 \">        <div class=\"card\" style=\"width:fit-content;\">           <img class=\"card-img-top img-responsive\" src=\" "+ img +" \" alt=\"Card image cap\">           <div class=\"card-block\">             <h3 class=\"card-title\">" + CategoryName + "</h3>             <a href=\"beverages.html\" class=\"btn btn-primary\">View Products</a>           </div>         </div>      </div>";
   if(index % 3 == 2){
     cat.innerHTML += "</div></div>";
   }

}

function displayCategories(){



}
