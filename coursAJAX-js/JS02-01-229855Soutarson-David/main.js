var titre = document.createElement("H1");
titre.innerHTML = "Devoir. Se perfectionner en JavaScript";
document.body.append(titre);

var eleve = document.createElement("p");
eleve.id = "identiter";
eleve.innerHTML = "Nom: Soutarson.<br> Prenom: David.<br> Numero d'éléve: 229855.";
document.body.append(eleve);

var form = document.createElement("form");
document.body.append(form);

var select = document.createElement("select");
var select = form.appendChild(select);

var options = ["choise","do", "ré", "mi", "fa", "sol", "la", "si","do"];

var correspondance = {"choise":"selectioner une note dans la liste","do":"C", "ré":"D", "mi":"E", "fa":"F", "sol":"G", "la":"A", "si":"B","do":"C"};

 options.forEach(
   item =>
    {
      var noteC = item;
      var option = document.createElement("option");
      option.innerHTML = noteC;
      console.log(option);
      select.appendChild(option);
    }
  );

  var result = document.createElement("p");
  result.id = "result";
  form.appendChild(result);

  select.addEventListener("change", function(){
      var selectedValue = select.value;
      var notation = correspondance[selectedValue];
      document.getElementById("result").innerHTML = "La correspondance en notation américaine est : " + notation;
  }
);
