function myFunction(divid) {
    
    var x = document.getElementById(divid);  
    
    if (x.style.display == "none") 
    {
      x.style.display = "block";
    } 
    else {
      x.style.display = "none";
    }  
  }