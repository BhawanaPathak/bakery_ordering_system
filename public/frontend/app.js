let togglemenu=document.getElementById("nav-links");
let navbars=document.getElementById("open");

    navbars.addEventListener("click",function(){
        togglemenu.classList.toggle('opens');
    });

   // Function to toggle the bar 
   function menu() { 
    var x = document.getElementById("nav-links"); 
    if (x.style.display === "block") { 
        x.style.display = "none"; 
    } else { 
        x.style.display = "block"; 
    } 
}

 window.addEventListener("scroll",function(){
            var navscroll=document.querySelector('nav');
            navscroll.classList.toggle("sticky",window.scrollY > 0);
        });