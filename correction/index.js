var tab = [];
var i = 0;

while (true) {
  var userInput = prompt("Saisir un nombre");

  if (userInput === null) {
    // L'utilisateur a annulé la saisie
    break;
  }

  var parsedInput = parseInt(userInput);

  if (!isNaN(parsedInput) && parsedInput > 0) {
    tab[i] = parsedInput;
    i++;
  } else {
    alert("Veuillez saisir un nombre valide supérieur à 0.");
  }
}

// Envoi du tableau au fichier PHP pour le tri
fetch("index.php", {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json',
  },
  body: JSON.stringify({ data: tab }),
})
  .then(response => response.json())
  .then(sortedTab => {
    var myDiv = document.getElementById("myDiv");
    var virgule = sortedTab.join(', ');
    myDiv.innerHTML = `Tableau trié : ${virgule}`;
    console.log(sortedTab);
  })
  .catch((error) => {
    // Gérer les erreurs
    console.error("Erreur lors de la requête fetch :", error);
  });
