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
