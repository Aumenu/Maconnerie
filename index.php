<?php
//On vérifie si le fichier 'source.xml' existe
if (file_exists('source.xml')) {
    //On convertit le fichier 'source.xml' en objet
    $xml = simplexml_load_file('source.xml');
} else {
    //sinon message d'erreur.
    exit('Echec lors de l\'ouverture du fichier source.xml.');
}
function getNavBar($file)
{ // fonction qui genere une navbar ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php
                //boucle foreach qui récupère les infos dans le xml, pour les boutons de la navbar, et les affiche.
                foreach ($file->page as $page) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $page['id'] ?>.html"><?php echo $page->menu ?></a>
                    </li><?php } 
                    
                    ?>
            </ul>
        </div>
        </div>
    </nav>
<?php
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Les fonctions exercice 1</title>
</head>
<body>
    <?php
    //appel de la fonction pour générer la navBar
    getNavBar($xml);
    //Vérification si la variable $_GET['menu'] est définie, 
        if(isset($_GET['menu'])) {
            //si oui afficher le contenue correspondant
            echo $xml->page[intval($_GET['menu'])-1]->content;
        } else {
            //sinon affiche l'accueil
           echo $xml->page[0]->content;
        }
    
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>




