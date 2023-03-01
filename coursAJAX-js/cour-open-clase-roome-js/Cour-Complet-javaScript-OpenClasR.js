//declaration de varible
// nom tipe valeur
let numberOfCats = 2;
let numberOfDogs = 4;

//=================================
//partie pour un afichage htlm

let paragraph = document.querySelector('#info1');
paragraph.innerText = "nombre de chat: " +numberOfCats+ ". nombre de chien:"  +numberOfDogs+  ".";

/// exo 2
let numberOfSeasons = 6;
let numberOfEpisodes = 12;
let episodeTime = 45;
let commercialTime = 5;


// Calculate totalShowTime here
// =====================================
let totalShowTime = (episodeTime + commercialTime) * numberOfSeasons * numberOfEpisodes;

// =====================================

let paragraph2 = document.querySelector('#info');
paragraph2.innerText = `${numberOfSeasons} seasons, ${numberOfEpisodes} episodes per season
temps par episodes: ${episodeTime}minutes, temps de pub: ${commercialTime} minutes,
Total viewing time: ${totalShowTime} minutes`

// ======joure heure minute et seconds====================================

// Create constants here
// =====================================
const hoursPerDay = 24;
const minutesPerHour= 60;
const secondsPerMinute = 60;

// =====================================

const dayInput = document.querySelector('#day-input');//recuperer la valeur corepondan a lentre du formulaire
const calculateButton = document.querySelector('#calculate-button');//recuper la validation du formulaire

//===== afichage   <p id="hours"></p> <p id="minutes"></p> <p id="seconds"></p>

const hours = document.querySelector('#hours');//conserne lafichage
const minutes = document.querySelector('#minutes');//conserne lafichage
const seconds = document.querySelector('#seconds');//conserne lafichage

//====ecouter levenement sur le formulaire
calculateButton.addEventListener('click', () => {
  let days = dayInput.value;//creationet atribution de valeur a la varible days nombre de jour selection du formulaire

  let calcHours = days * hoursPerDay;//cacule nombres de joure * 24 heure par joure
  let calcMinutes = calcHours * minutesPerHour;
  let calcSeconds = calcMinutes * secondsPerMinute;

  hours.innerText = `${calcHours} hours`;//pour le P avec id hours ecrie le
  minutes.innerText = `${calcMinutes} minutes`;//pour le P avec id minute
  seconds.innerText = `${calcSeconds} seconds`;//pour le P avec id seconds

});

// les tipe de varible javaScript


//Découverte des objets

// creation d'un objet
episode = {
  title: 'Ces Nonoel',
  duration: 45,
  hasBeenWatched: false,
};
//---------------------------------------------------------------------------
//Afichage
document.querySelector('#episode-info').innerText = `Episode: ${episode.title}
Duration: ${episode.duration} min
${episode.hasBeenWatched ? 'Already watched' : 'Not yet watched'}`
//
// //======= Accédez aux données d'un objet.=======================================================

let film = {
  title: 'Dark Beginnings',
  duration: 45,
  hasBeenWatched: false
};

// Create variables here
// =====================================
let episodeTitle = film.title; //Metode DOT
let episodeDuration = film["duration"]; //Metode BRACKET
let episodeHasBeenWatched = film.hasBeenWatched;
// =====================================

document.querySelector('#info5').innerText = `Episode: ${episodeTitle}
Duration: ${episodeDuration} min
${episodeHasBeenWatched ? 'Already watched' : 'Not yet watched'}`;

// //##############################################################################
// //LES class
// //##############################################################################

class Book {

  constructor(title,author,pages){
    this.title = title;
    this.author = author;
    this.pages = pages;
  }

}
//créer des instances par le mot clé  new

let myBook = new Book ("histoire de code","Davd Soutarson", 200);
//Cette ligne crée l'objet suivant :
// {
//     title: "L'Histoire de Tao",
//     author: "Will Alexander",
//     pages: 250
// }

//Avec une classe Book , vous pouvez créer facilement  de nouveaux objets Book

let yourBook = new Book ("Les langage de programation tome1","Gike Super-Man", 400);

document.querySelector('#info6').innerText = `le titre de monlivre MyBook : ${myBook.title}
l'auter de mon livre : ${myBook.author} \n le nombres de page de mon livre : ${myBook.pages}`;

document.querySelector('#info7').innerText = `le titre de ton livre yourBook : ${yourBook.title}
l'auter de mon livre : ${yourBook.author} \n le nombres de pages de ton livre : ${yourBook.pages} pages.`;


//#############################################################################
//Les tableau
//#############################################################################

class Episode {
  constructor(title, duration, hasBeenWatched) {
    this.title = title;
    this.duration = duration;
    this.hasBeenWatched = hasBeenWatched;
  }
}

let firstEpisode = new Episode('Dark Beginnings', 45, true);
let secondEpisode = new Episode('The Mystery Continues', 45, false);
let thirdEpisode = new Episode('An Unexpected Climax', 60, false);

// Create your array here
// ====================================

let episodes = [];
episodes.push(firstEpisode, secondEpisode, thirdEpisode, thirdEpisode);

episodes.pop();

const nombresfilm = episodes.length;

// ====================================

const body = document.querySelector('#div8');

document.querySelector('#episodes').innerText = nombresfilm;

for(let episode of episodes) {
  let newDiv = document.createElement('div');
  newDiv.classList.add('series-frame');
  let newTitle = document.createElement('h2');
  newTitle.innerText = 'The Story of Tau';
  let newParagraph = document.createElement('p');
  newParagraph.innerText = `${episode.title}
${episode.duration} minutes
${episode.hasBeenWatched ? 'Already been watched' : 'Not yet watched'}`;
  newDiv.append(newTitle);
  newDiv.append(newParagraph);
  body.append(newDiv);
}

//-----------------------------------------------------------------------------
//ou =

let chageTire = 'Teste titre H3 ok'

const formEx1 = document.querySelector('#formEx1');//selction du fomunlaire


const titreH3 = document.createElement('h3');// creation d'un tire h3 pour le formulair
const select = document.createElement('select');// creation d'un select pour le formulair
const option = document.createElement('option');

const textTitre = titreH3.innerText = chageTire ;

const textOption = option.innerText = 'faite votre selection';


const inForm = formEx1.append(titreH3);
const creatSelect = formEx1.append(select);
const inSelectForm = select.append(option);


const tipes = ['Camion','Voiture','Quade','moto'];//declare le tablableaux

//console.log(tipes.length);

for (var i = 0; i < tipes.length; i++) {
  console.log(tipes[i]);

  //solution clasique fonctionel
  const option = document.createElement('option');
  let pourTipe = option.innerText = tipes[i];
  const inSelectForm = select.append(option);

  console.log(tipes.length);
  let b = i + 1;

if ( b == tipes.length ) {

  let chageTire = 'Teste  ok ses fait';

  const titre2 = document.createElement('h3');
  const textTitre2 = titre2.innerText = chageTire ;
  console.log(textTitre2);

  console.log(select);

  const inForm2 = formEx1.appendChild(titre2);
  console.log(inForm2);
}

}




// par la suite nous avon besoin de sucture conditionelle !!!!

let marques = ['renaul','peugeot','citroen','bmw','audi','volkswagen',
'fiat','ferari','alfa romeo','astone martine','jaguar',
'nisan','subaru','honda','yamaha','kawasaki','ford','chevrolet'];

//console.log(marques.length);

for (var i = 0; i < marques.length; i++) {
  //console.log(marques[i]);
}


//rajouter un niveaux
let model = [
  peugeot = ['405','205','605','106','306',],
  renaul = ['R5','R12','R21','R19','Megane','Clio',],
  citroen = ['TractionAvant','2 CV','DS-1955-1975','Meari','SM-Maseratie','GS','CX','BX','XM','DS-2015',],
];

//console.log(model);
for (var i = 0; i < model.length; i++) {

  resulta = model[i];

  //console.log(resulta);

  for (var x = 0; x < resulta.length; x++) {
    //console.log(resulta[x]);
  }

};


let motorisation =['esence','diesel','gpl','esence_Gpl','diesel_Gpl','ethanol',
'electique','hibride','hydrogène',];

//console.log(motorisation.length);

for (var i = 0; i < motorisation.length; i++) {
  //console.log(motorisation[i]);
}

class Veicule{
  constructor(tipes,marques,pays,model,motorisation,annerSortie,couleur,finDeProcution,) {
    this.tipes = tipes;
    this.marques = marques;
    this.model = model;
    this.pays =pays;
    this.motorisation = motorisation;
    this.annerSortie = annerSortie;
    this.couleur = couleur;
    this.finDeProcution = finDeProcution;
  }
}

//console.log(Veicule);

let maVoiture = new Veicule (tipes[1],'renaul','Clio','France','esence');

//console.log(maVoiture);
