let liste = ["images-tableaux/Femme-asise.jpeg", "images-tableaux/Jeune-fille-devant-un-miroir.jpg", "images-tableaux/La-femme-fleur.jpeg", "images-tableaux/La-femme-qui-pleure.jpeg", "images-tableaux/Le-Baiser.jpg", "images-tableaux/Le-reve.jpg", "images-tableaux/Le-vieux-guitariste-aveugle.jpg", "images-tableaux/Les-Demoiselles-d-Avignon.jpg", "images-tableaux/Nude-in-red-armchair.jpg" ]
function shuffle(liste) {
    for (let i = liste.length - 1; i > 0; i--) {
      let j = Math.floor(Math.random() * (i + 1));

      [liste[i], liste[j]] = [liste[j], liste[i]];
    }
}

shuffle(liste);


for (let k = liste.length -1; k>=0; k--){
kk = "t"+k;
document.getElementById(kk).src = liste[k]

}