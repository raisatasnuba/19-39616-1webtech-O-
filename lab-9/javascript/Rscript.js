<script type="text/javascript">
	function validation()
	{
		var name= document.getElementBYId("name");
		var email=document.getElementBYId("email");
		var usname=document.getElementBYId("usname");
		var pass2=document.getElementBYId("pass2");
		var pass3=document.getElementBYId("pass3");
		var phone=document.getElementBYId("phone");
		var address=document.getElementBYId("address");
		var gender=document.getElementBYId("gender");
		var date=document.getElementBYId("date");

		if(name.value.trim()=="")
		{
			document.getElementById("nameErr").innerHTML="Name is required";
			return false;
		}
		else
		{
			if(name.value.split(" ").length<2)
			{ 
				document.getElementById("nameErr").innerHTML="Name must contain at least two words";
				return false;

			}
			document.getElementById("nameErr").innerHTML="";
		}
	if(email.value.trim()=="")
  {
    document.getElementById("emailErr").innerHTML= "*email is requied";
    return false;
  }
  else {
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
   if(!email.value.match(mailformat))
    {
      document.getElementById("emailErr").innerHTML= "*Invalid email format";
      return false;
    }
    else {
      document.getElementById("emailErr").innerHTML= "";
    }
  }

  if (usname.value.trim()=="") {
    document.getElementById("usnameErr").innerHTML=  "* User Name is required";
    return false;
  }
  else {
    document.getElementById("usnameErr").innerHTML=  "";
  }


  if(pass2.value.trim()=="")
  {
    document.getElementById("pass2Err").innerHTML= "*Password is requied";
    return false;
  }
  else {
    if(pass2.value.length<8)
    {
    document.getElementById("pass2Err").innerHTML= "*Password must not be less than eight (8) characters";
      return false;
    }
    else {
      document.getElementById("pass2Err").innerHTML= "";
    }
}

 if(pass3.value.trim()=="")
 {
 document.getElementById("pass3Err").innerHTML= "*Confirm Password is required";
   return false;
 }
 else {
    if(!(pass2.value=pass3.value))
    {
      document.getElementById("pass3Err").innerHTML= "*Password and confirm password have to be same";
    return false;
    }
    else {
      document.getElementById("pass3Err").innerHTML= "";
    }

}

if(date.value=="")
{
  document.getElementById("dateErr").innerHTML= "*Birthday is requied";
 return false;
}
else {

var inputdate = new Date(date.value);
var today = new Date();
if (inputdate.getTime() > today.getTime()) {
   document.getElementById("dateErr").innerHTML= "Birth date cannot be grater than current date ";
}

  else {
      document.getElementById("dateErr").innerHTML= "";
  }
}



if(!(gender[0].checked || gender[1].checked || gender[2].checked))
{
document.getElementById("genderErr").innerHTML= "*Gender is requied";
return false;
}
else {
document.getElementById("genderErr").innerHTML= "";
}
if(phone.value.trim()=="")
		{
			document.getElementById("phoneErr").innerHTML="Phone number is required";
			return false;
		}
		else
		{
			 var format = /^\d{11}$/;
   if(!phone.value.match(format))
    {
      document.getElementById("phoneErr").innerHTML= "*Invalid phone number";
      return false;
    }
    else {
      document.getElementById("phoneErr").innerHTML= "";
    }
		}
		if(address.value.trim()=="")
		{
			document.getElementById("addressErr").innerHTML="Address is required";
			return false;
		}
		else
		{
			if(address.value.split(" ").length<2)
			{ 
				document.getElementById("addressErr").innerHTML="Address must contain at least two words";
				return false;

			}
			document.getElementById("addressErr").innerHTML="";
		}

return true;


}


function checkName()
{
  var name= document.getElementById("name");
  if(name.value.trim()=="" )
  {
     document.getElementById("nameErr").innerHTML= "*Name is requied";
     return false;
  }
  else {

  if(name.value.split(" ").length<2)
       {
        document.getElementById("nameErr").innerHTML= "*Name must contains at least two words ";
        return false;
       }
       document.getElementById("nameErr").innerHTML= "";

  }
}

function checkEmail()
{
  var email= document.getElementById("email");
  if(email.value.trim()=="")
  {
    document.getElementById("emailErr").innerHTML= "*email is requied";
    return false;
  }
  else {
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
   if(!email.value.match(mailformat))
    {
      document.getElementById("emailErr").innerHTML= "*Invalid email format";
      return false;
    }
    else {
      document.getElementById("emailErr").innerHTML= "";
    }
  }

}

function checkUsername(str)
{
    
  var xhttp;  
  if (str == "") {
    document.getElementById("usnameErr").innerHTML = "Username Cannot Be Empty";
    
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    //console.log(this.responseText);
    if (this.readyState == 4 && this.status == 200 && this.responseText!=0) {
       document.getElementById("usnameErr").innerHTML = "Username Already Exist";
       
    }
    else{
       document.getElementById("usnameErr").innerHTML = "\u2713";
      
    }
  };
  xhttp.open("GET", "../model/usernamecheck.php?q="+str, true);
  xhttp.send();
   
  

}

function checkPassword()
{
    var pass2= document.getElementById("pass2");
  if(pass2.value.trim()=="")
  {
    document.getElementById("pass2Err").innerHTML= "*Password is requied";
    return false;
  }
  else {
    if(pass2.value.length<8)
    {
    document.getElementById("pass2Err").innerHTML= "*Password must not be less than eight (8) characters";
      return false;
    }
    else {
      document.getElementById("pass2Err").innerHTML= "";
    }
}
}

function checkConfirmPassword()
{
  var pass3=document.getElementById("pass3");

  if(pass3.value.trim()=="")
  {
  document.getElementById("pass3Err").innerHTML= "*Confirm Password is required";
    return false;
  }
  else {
     if(!(pass2.value==pass3.value))
     {
       document.getElementById("pass3Err").innerHTML= "*Password and confirm password have to be same";
     return false;
     }
     else {
       document.getElementById("pass3Err").innerHTML= "";
     }

 }
}

function checkDate()
{
  var date=document.getElementById("date");

  if(date.value=="")
  {
    document.getElementById("dateErr").innerHTML= "*Birthday is requied";
  return false;
  }
  else {

    var inputdate = new Date(date.value);
  var today = new Date();
  if (inputdate.getTime() > today.getTime()) {
     document.getElementById("dateErr").innerHTML= "Birth date cannot be grater than current date ";
  }
  //   var today = new Date();
  //
  //   var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
  //
  // document.getElementById("birthErr").innerHTML= birth.value.getMonth();

    // if((date<birth.value)==1)
    // {
    //
    // }
    else {
        document.getElementById("dateErr").innerHTML= "";
    }

  }
}

function checkGender()
{
  var gender= document.getElementsByName("gender");

  if(!(gender[0].checked || gender[1].checked || gender[2].checked))
  {
    document.getElementById("genderErr").innerHTML= "*Gender is requied";
    return false;
  }
  else {
    document.getElementById("genderErr").innerHTML= "";
  }
}
function checkPhone()
{
  var phone= document.getElementById("phone");
  if(phone.value.trim()=="" )
  {
     document.getElementById("phoneErr").innerHTML= "*Phone number is requied";
     return false;
  }
  else {

   var format = /^\d{11}$/;
   if(!phone.value.match(format))
    {
      document.getElementById("phoneErr").innerHTML= "*Invalid phone number";
      return false;
    }
    else {
      document.getElementById("phoneErr").innerHTML= "";
    }

  }
}
function checkAddress()
{
  var address= document.getElementById("address");
  if(address.value.trim()=="" )
  {
     document.getElementById("addressErr").innerHTML= "*Address is requied";
     return false;
  }
  else {

  if(address.value.split(" ").length<2)
       {
        document.getElementById("addressErr").innerHTML= "*Address must contains at least two words ";
        return false;
       }
       document.getElementById("addressErr").innerHTML= "";

  }
}




</script>
