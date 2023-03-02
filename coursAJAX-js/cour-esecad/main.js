//detection soumition formulaire
document.getElementById('inscription').addEventListener("submit", function(e) {
  e.preventDefault();

  var xhr = new XMLHttpRequest();

  //diferent tretement
  xhr.onreadystatechange = function() {
    console.log(this);
  };

  //initiation de la XMLHttpRequet
  xhr.open("GET","exemple1.php", true);
  //anvoi de la requette
  xhr.send();

  return false;
});
//----------------------------------------------------------------------
var demo = document.getElementById('demo');
 document.querySelector('button').addEventListener("click", function(e) {
  e.preventDefault();

  var xhr = new XMLHttpRequest();

  //diferent tretement
  xhr.onreadystatechange = function() {
    console.log(this);
    demo.innerHTML = this.responseText;
  };

  //initiation de la XMLHttpRequet
  xhr.open("GET","exemple1.php", true);
  //anvoi de la requette
  xhr.send();

  return false;
});
