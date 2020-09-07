<?php
 session_start();
    $allowed_lang= array('en','fr');
    $_SESSION['language'] = 'en';
    if(isset($_GET['language']) && in_array($_GET['language'], $allowed_lang)){
        $_SESSION['language'] = $_GET['language'];
    }
  $lang = array(
    'fr' => array(
        'nav1' => 'Accueil',
        'nav2' => 'A propos',
        'nav3' => 'Expériences',
        'nav4' => 'Projets',
        'nav5' => 'Contact',
        'nav12' => 'login',
        'greeting' => 'DEVELOPPEUSE WEB',
        'download' => 'TELECHARGER CV',
        'service' => 'Connaissez-Moi',
        'aboutme' => 'Oumaima, une jeune fille d el jadida, agée de 23 ans. Passionée par la Rondonnée.',
        'aboutme2' => 'Actuellement je suis en 1ère année autant qu\'une développeuse apprenante à Youcode, et j\'espère bien devenir une collaboratrice dans ce domaine.',
        'formt' => 'Expériences et Formations',
        'date' => 'Octobre 2019 - Present',
        'formt1' => '1ére année en Developpement Web',
        'date2' => 'Septembre 2018 - Juin 2019',
        'formt2' => 'Diplome en agent technique de vente..',
        'date3' => 'Septembre 2015 - Juin 2016',
        'formt3' => 'QODS PRIVE,Niveau Baccalureat "SVT".',
        'formt4' => 'Baccalauréat Sciences Mathématique A',
        'projet' => 'Les Projets Réalisés',
        'nav6' => 'Tous',
        'nav7' => 'Projet CV',
        'nav8' => 'Projet SITE',
        'nav9' => 'Ateliers CSS',
        'nav10' => 'Ateliers JS',
        'nav11' => 'Projet CAPGEMINI',
        'contact' => 'Contactez-Moi',
        'phone' => 'Numéro de Téléphone',
        'media' => 'Réseaux Sociaux',
        'send' => 'Envoyer',
        
        




    ),
'en' => array(
        'nav1' => 'Accueil',
        'nav2' => 'A propos',
        'nav3' => 'Experiences',
        'nav4' => 'Projets',
        'nav5' => 'Contact',
        'nav12' => 'login',
        'greeting' => 'WEB DEVELOPER ',
        'download' => 'DOWNLOAD CV',
        'service' => 'Connaissez-Moi',
        'aboutme' => 'Oumaima, une jeune fille d el jadida, agée de 23 ans. Passionée par la Rondonnée.',
        'aboutme2' => 'Actuellement je suis en 1ère année autant qu\'une développeuse apprenante à Youcode, et j\'espère bien devenir une collaboratrice dans ce domaine.',
        'formt' => 'Experiences et Formations',
        'date' => 'Octobre 2020 - Present',
        'formt1' => '1ére année en Developpement Web',
        'date2' => 'Septembre 2018 - Juin 2019',
        'formt2' => 'Diplome En Agent Technique De Vente',
        'date3' => 'Septembre 2016 - June 2017',
        'formt3' => 'QODS PRIVE, Niveau Baccalaureat SVT',
        'formt4' => 'QODS PRIVE,Niveau Baccalauréat "SVT".',
        'projet' => 'Les Projets Réalisés ',
        'nav6' => 'Tous',
        'nav7' => 'Project CV',
        'nav8' => 'Projet SITE',
        'nav9' => 'Ateliers CSS',
        'nav10' => 'Ateliers JS',
        'nav11' => 'Projet M2M SERVICES',
        'contact' => 'Contactez-Moi',
        'phone' => 'Numéro de Téléphone',
        'media' => 'Réseaux Sociaux',
        'send' => 'Envoyer',


    ),
)

?>
