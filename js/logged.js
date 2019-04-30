
/****************************************************************************************************
 *                                 CHECKUPLOAD                                                                               *
 ****************************************************************************************************/

var f = document.forms.theform;
f.elements.upload.onclick = function() {
  if(validateUpload()) {
    f.action = '/photogallerybis/checkUpload';
    f.submit();
  }
}

/****************************************************************************************************
 *                                 VALIDATE UPLOAD                                                                              *
 ****************************************************************************************************/
function validateUpload() {
  if(f.elements.img.value.trim()=='') {
    document.getElementById("loginerr").className = '';
    document.getElementById("loginerr").innerHTML = "Please choose file!";
    return false;
  }
  else {
  
    return true;
  }
}

