function vaildate() {

 
    //name
    var name = document.getElementById("name1").value;

    if(name==null || name=="")
    {
        alert("Mandatory to enter Name");
        return false;
       
    }
    //phone no
    var ph=document.getElementById("pp").value;
    var mobile = /^[0-9]{10}$/;
if(ph==null || ph=="")
    {
        alert("Mandatory to enter Phone number ");
        return false;
       
    }

    if(mobile.test(ph))
      {

         
     }

      
      else
        {
        alert("Invaild Phone Number");
        alert("It must contain 10 numbers");
        return false;
        } 

    //email
var emailid = document.getElementById("email").value;
    atpos=emailid.indexOf("@");
    dotpos = emailid.lastIndexOf(".");

    if(emailid==null || emailid=="")
    {
        alert("Mandatory to enter Email id");
        return false;
       
    }
 
if(atpos<1 || (dotpos-atpos)<2){
        alert(" Enter vaild  Email Id");
        return false; 
}

  
    // address
    var addr = document.getElementById("adr1").value;
     if(addr==null || addr=="")
    {
        alert("Mandatory to enter Address");
        return false;
       
    }
     

    //zip
    var code = document.getElementById("zip").value;
    var pin = /^[0-9]{6}$/;
    if(code==null || code=="")
    {
        alert("Mandatory to enter Zipcode ");
        return false;
       
    }    
    
  
if(pin.test(code))
      {
}
else
        {
    alert("Invaild Zipcode");
    alert("It must contain six numbers");
        return false;
    }

    //state
     var n1 = document.getElementById("state").value;

    if(n1==null || n1=="")
    {
        alert("Mandatory to enter Name");
        return false;
       
    }

    //card name
     var n4 = document.getElementById("cname").value;

    if(n4==null || n4=="")
    {
        alert("Mandatory to enter Card Name");
        return false;
       
    }

    // card number
var c2 = document.getElementById("ccnum").value;
    var pin2 = /^[0-9]{16}$/;
    if(c2==null || c2=="")
    {
        alert("Mandatory to enter  Card number  ");
        return false;
       
    }    
    
    
if(pin2.test(c2))
      {
}
else
        {
    alert("Invaild Card number ");
    alert("It must contain sixteen numbers");
        return false;
    }




    //cvv
  var c1 = document.getElementById("cvv").value;
    var pin1 = /^[0-9]{3}$/;
    if(c1==null || c1=="")
    {
        alert("Mandatory to enter  CVV No. ");
        return false;
       
    }    
    
    
if(pin1.test(c1))
      {
}
else
        {
    alert("Invaild CVV");
    alert("It must contain Three numbers");
        return false;
    } 
      //month
    

//year
     var year = document.getElementById("expyear").value;
     
     if (year == null || year == "")
     {
         alert("Mandatory to enter  ExpYear");
         return false;
         }

    if (year.length != 4)
    {
        alert("Invalid year");
          return false;
    }
    else {
        if (year > 1990 && year<2099)
        {
            
        }
        else {

            alert(year + " year does not exist ");
            return false;
        }
    }

    if (confirm("Sure you want to proceed with Payment")) {
     } else {
       return false;
     }
}