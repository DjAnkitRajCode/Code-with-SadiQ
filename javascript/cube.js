function cube(ankit){
    var a =document.getElementById("display_cube");
    var b =document.getElementById("display_square");
    
    var cube_value= ankit * ankit * ankit;
    var square_value= ankit * ankit;
    
    a.innerHTML="The Cube Value is" + cube_value;
    b.innerHTML="The square Value is" + square_value;
}