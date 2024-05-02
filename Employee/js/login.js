function validateForm()
{
   
    if (validateEmail()==false) 
    {
       return false; 
    } 
    else if (validatePassword()==false) 
    {
       return false; 
    } 
    else
    {
        return true;
    }

}


function validateEmail()
{
    var email = document.getElementById("email").value;
    if(email=="")
    {
        document.getElementById("emailerror").innerHTML = "Please enter valid email";
        return false;
    }
    else
    {
        return true;
    }
}

function validatePassword()
{
    var pass = document.getElementById("pass").value;
    if(pass=="")
    {
        document.getElementById("passerror").innerHTML = "Please enter valid pass";
        return false;
    }
    else
    {
        return true;
    }
}




