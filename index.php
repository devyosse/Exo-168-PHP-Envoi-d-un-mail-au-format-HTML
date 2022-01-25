<?php
/**
 * 1. Complétez la variable $html, elle devra contenir un texte court de newsletter.
 * 2. Ajoutez au moins une adresse mail ( la vôtre ? ) au tableau $to.
 * 3. Envoyez ce mail au format HTML à toutes les personnes de $ to qui ont souscrit à votre newsletter.
 * Bonus, pour chaque adresse mail indiquer si le mail a bien été envoyer, ou faire un tableau contenant les succès / erreurs et l'afficher après envoi
 *    ex: ['j.conan@fondationface.org' => true, 'toto@fondationface.org' => false] => à vous de trouver la suite !
 */

$to = [
    'j.conan@fondationface.org',
    'problème.prob@gmail.com',
];

$html = '
    <html lang="fr">
        <head>
            <title>Mes actualités</title>
        </head>
        <body>
            <div>
                <!-- Vos actualités ici -->
                <p>
                Concrètement, une newsletter a pour but d’envoyer régulièrement des informations par email 
                à une liste de destinataires, de maintenir leur intérêt avec des messages ciblés 
                et de les pousser vers votre objectif de conversion.
                </p>
            </div>
        </body>
    </html>
';

mail($to, $html);