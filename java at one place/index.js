var h = document.getElementById("head");

var email = prompt("please enter ID") 
var password = prompt("please entpassword") 
if(email=="ankit" && password=="1234"){
  var a = document.getElementById("ankit") ;
    var color = document.getElementById("input").value;
    a.style.backgroundColor = color;

function badal(color){
    var ba = document.getElementById("ankit") ;
    ba.style.backgroundColor = color;
}


function state(){
    var b = document.getElementById("display");
    var c = document.getElementById("take").value;
    
     if( c =="uttar pardesh"){
        b.innerHTML="Lucknow";
    }
    else if(c=="west bengal"){
        b.innerHTML="Kolkata";
    }
    else if(c=="andhra pradesh"){
        b.innerHTML="Amravati";
    }
    else if(c=="arunachal pradesh"){
        b.innerHTML="Itanagar";
    }
    else if(c=="assam"){
        b.innerHTML="Dispur";
    }
    else if(c=="chhattishgarh"){
        b.innerHTML="Atal Nagar(Naya raipur)";
    }
    else  if(c=="Goa"){
        b.innerHTML="Panaji";
    }
    else if(c=="Gujarat"){
        b.innerHTML="Gandhinagar";
    }
    else if(c=="Hayana"){
        b.innerHTML="Chandigarh";
    }
    else if(c=="Himachal Pradesh"){
        b.innerHTML="Shimla/Dharamshala";
    }
    else if(c=="Jammu and kashmir"){
        b.innerHTML="srinagar";
    }
    else if(c=="jharkhand"){
        b.innerHTML="Ranchi";
    }
    else if(c=="Karnataka"){
        b.innerHTML="Bengaluru";
    }
    else if(c=="kerala"){
        b.innerHTML="Thiruvananthapuram";
    }
    else if(c=="madhya pradesh"){
        b.innerHTML="Bhopal";
    }
    else if(c=="maharashtra"){
        b.innerHTML="mumbai";
    }
    else if(c=="manipur"){
        b.innerHTML="Imphal";
    }
    else if(c=="meghalaya"){
        b.innerHTML="Shillong";
    }
    else if(c=="mizoram"){
        b.innerHTML="Aizawl";
    }
    else if(c=="nagaland"){
        b.innerHTML="Kohima";
    }
    else if(c=="Karnataka"){
        b.innerHTML="Bengaluru";
    }
    else if(c=="odisha"){
        b.innerHTML="Bhubaneswar";
    }
    else if(c=="punjab"){
        b.innerHTML="Chandigarh";
    }
    else if(c=="rajasthan"){
        b.innerHTML="jaipur";
    }
    else if(c=="telangana"){
        b.innerHTML="Hyderabad";
    }
    else if(c=="Tripura"){
        b.innerHTML="Agartala";
    }
    else if(c=="uttrakhand"){
        b.innerHTML="dehradun";
    }
    else if(c=="delhi"){
        b.innerHTML="New Delhi";
    }
    else if(c=="up"){
        b.innerHTML="Lucknow";
    }
    else if(c=="mp"){
        b.innerHTML="Bhopal";
    }
    else if(c=="bihar"){
       b.innerHTML="Patna";
    }
    else if(c=="j&k"){
        b.innerHTML="Srinagar";
    }
    else{
        b.innerHTML="Not Found";
    }
}

function play_clock(){
                setInterval(show_clock,1000);
            }
            function show_clock(){
                var clock = document.getElementById("clock");
                var date = new Date();
                
                var h = date.getHours();
                var m = date.getMinutes();
                var s = date.getSeconds();
                
                clock.innerHTML = h +":"+ m +":"+ s ;
            }
}
else{
    alert("email and password incorrect")
}
    

