var tab = [];
var i = 0;

while (i >= 0) {
  tab[i] = prompt("Saisir un nombre");
  tab[i] = parseInt(tab[i]);
  if (tab[i] > 0) {
    i++;
  } else {
    alert("Votre entier est inférieur à 0");
    break;
  }
}

// Convertir le tableau en une chaîne JSON
var jsonString = JSON.stringify(tab);
var encodedJsonString = encodeURIComponent(jsonString);

// Envoi du tableau au serveur avec la méthode GET
fetch("index.php?tab=" + encodedJsonString)
  .then(response => response.json())
  .then(sortedTab => {
    var myDiv = document.getElementById("myDiv");
    var virgule = sortedTab.join();
    myDiv.innerHTML = `Tableau trié : ${virgule}`;
    console.log(sortedTab);
  })
  .catch((error) => {
    console.error("Erreur lors de la requête fetch :", error);
  });