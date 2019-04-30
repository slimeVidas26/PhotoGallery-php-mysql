/****************************************************************************************************
 *                                 LOGIN                                                                              *
 ****************************************************************************************************/

var f = document.forms.theform;
f.elements.login.onclick = function() {
  if(validate()) {
    f.action = '/photogallerybis/login';
    f.submit();
  }
}

/****************************************************************************************************
 *                                 REGISTER                                                                               *
 ****************************************************************************************************/

f.elements.register.onclick = function() {
  if(validate()) {
    f.action = '/photogallerybis/register';
    f.submit();
  }
}

/****************************************************************************************************
 *                                 JS VALIDATION                                                                              *
 ****************************************************************************************************/

function validate() {
  if(f.elements.username.value.trim()=='' || f.elements.password.value.trim()=='') {
    document.getElementById("loginerr").className = '';
    document.getElementById("loginerr").innerHTML = "Both username + password required!";
    return false;
  }
  else {
    return true;
  }
}