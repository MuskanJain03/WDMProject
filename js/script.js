
function letters()
  {
   var letters = /^[A-Za-z]+$/;
   if(document.forms["form1"]["fname"].value.match(letters))
     {
      return true;
     }
   else
     {
     alert("FirstName should contain letters only");
     document.forms["form1"]["fname"].value = "";
     return false;
     }
    if(document.forms["form1"]["lname"].value.match(letters))
     {
      return true;
     }
   else
     {
     alert("LastName should contain letters only");
     document.forms["form1"]["lname"].value = "";
     return false;
     }
  }
function checkPsw(){
	var psw = document.forms["form1"]["psw"].value;
	 if(psw.length < 6) {
        alert("Error: Password must contain at least six characters!");
        document.forms["form1"]["psw"].value = "";
        return false;
      }
      re = /[0-9]/;
      if(!re.test(psw)) {
        alert("Error: password must contain at least one number (0-9)!");
        document.forms["form1"]["psw"].value = "";
        return false;
      }
      re = /[a-z]/;
      if(!re.test(psw)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        document.forms["form1"]["psw"].value = "";
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(psw)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        document.forms["form1"]["psw"].value = "";
        return false;
      }
}

function confirmPsw(){
	var psw = document.forms["form1"]["psw"].value;
	var psw2 = document.forms["form1"]["psw2"].value;

   if(psw != psw2)
    {
       alert("Paswword mismatch");
       document.forms["form1"]["psw2"].value = "";
       }
}
function newSet() {
            document.getElementById("form1").reset();
         }



function openDiv() {
  document.getElementById("l_change").style.filter= "brightness(30%)";
  document.getElementById("l_popup").style.display = "block";
  // document.getElementById("l_change").style.filter= "brightness(30%)";
}

function closeDiv() {
  document.getElementById("l_popup").style.display = "none";
  document.getElementById("l_change").style.filter= "brightness(100%)";
}


// function closeDiv() {

//   var x = document.getElementById("l_popup");
//   // var j = document.getElementById("l_bgfade");
//   if (x.style.display === "none") {
//     x.style.display = "block";
//   } else {
//     x.style.display = "none"; 
// //    j.style.background-color = "rgb(0,0,0)";

//     }
// }