const aboutButton = document.getElementById('aboutButton');
const formationButton = document.getElementById('formationButton');
const projetButton = document.getElementById('projetButton');
const contactButton = document.getElementById('contactButton');
const about = document.getElementById('apropos');
const formation = document.getElementById('formation');
const projet = document.getElementById('projet');
const contact = document.getElementById('contact');

// Fonction pour masquer tous les éléments sauf celui spécifié
function masquerTousSauf(element) {
    [about, formation, projet, contact].forEach(function(el) {
        if (el !== element) {
            el.style.display = 'none';
        }
    });
}

// Masquer tous les éléments sauf 'about' au chargement de la page
masquerTousSauf(about);

// Écouteurs d'événements pour chaque bouton
aboutButton.addEventListener('click', function() {
    about.style.display = 'block';
    masquerTousSauf(about);
});

formationButton.addEventListener('click', function() {
    formation.style.display = 'block';
    masquerTousSauf(formation);
});

projetButton.addEventListener('click', function() {
    projet.style.display = 'block';
    masquerTousSauf(projet);
});

contactButton.addEventListener('click', function() {
    contact.style.display = 'block';
    masquerTousSauf(contact);
});

