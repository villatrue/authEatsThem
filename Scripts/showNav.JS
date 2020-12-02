function showNav() {
    var x = document.getElementById("myTopnav");
    var y = document.getElementById("fullscreenTitle");
    var z = document.getElementById('here')
  
    if (x.className === "navmenu") { 
        x.className += " responsive";
        z.setAttribute("d",
            "M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"
        )
    } else {
        x.className = "navmenu";
        z.setAttribute("d", "M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z")
        
    }
}