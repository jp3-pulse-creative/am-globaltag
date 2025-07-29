
function validate_required(field,alerttxt)
{
with (field)
  {
  if (value==null||value=="")
    {
    alert(alerttxt);return false;
    }
  else
    {
    return true;
    }
  }
}

function validate_form(thisform)
{
with (thisform)
  {
     if (validate_required(Name,"Name field must be filled out!")==false)
  {Name.focus();return false;}
   if (validate_required(Email,"Email field must be filled out!")==false)
  {Email.focus();return false;}
  if (validate_required(Comments,"Comments field must be filled out!")==false)
  {Comments.focus();return false;}
  }
}
