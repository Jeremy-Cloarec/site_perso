
document.addEventListener('DOMContentLoaded', function() {


  

// Récupérer les éléments HTML
var texteCache = document.getElementById('texteCache');
var lienLireSuite = document.getElementById('lienLireSuite');
var lienRetracter = document.getElementById('lienRetracter');


if (texteCache.style.display = 'none' ){
    lienRetracter.style.display = 'none';
} 


// Fonction pour afficher le texte caché
function afficherTexte() {

    texteCache.style.display = 'flex';
    lienLireSuite.style.display = 'none';
    lienRetracter.style.display = 'flex';
}

// Fonction pour masquer le texte
function masquerTexte() {
    texteCache.style.display = 'none';
    lienLireSuite.style.display = 'flex';
    lienRetracter.style.display = 'none';
}

// Ajouter des gestionnaires d'événements aux liens
lienLireSuite.addEventListener('click', afficherTexte);
lienRetracter.addEventListener('click', masquerTexte);


function preventDefaultAndDoSomething(event) {
    event.preventDefault();

}

lienRetracter.addEventListener('click', preventDefaultAndDoSomething);

lienLireSuite.addEventListener('click', preventDefaultAndDoSomething);

});


