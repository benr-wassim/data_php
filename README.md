# revision
while (true) {
  tab[i] = prompt("Saisir un nombre");
  tab[i] = parseInt(tab[i]);
  if (tab[i] > 0) {
    i++;
  } else {
    alert("votre entier est inferieur à 0");
    break;
  }
}