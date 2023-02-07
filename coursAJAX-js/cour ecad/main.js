var demo = document.getElementById('demo');
var xhr = new XMLHttpRequest();

xhr.onreadystatechange = function(){
  console.log(this);
  if(this.readyState == 4 && this.status ==200){
    //demo.innerHTML = this.responseText;
    demo.innerHTML = this.response;
  }
}

xhr.open("GET", "http://localhost/coursAJAX-js/exemple1.php", true);
// xhr.open("GET", "exemple1.php", true); se chemin et valable
xhr.send("");
