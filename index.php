<?php
//On vérifie si le fichier 'source.xml' existe
if (file_exists('source.xml')) {
    //On convertit le fichier 'source.xml' en objet
    $xml = simplexml_load_file('source.xml');
} else {
    exit('Echec lors de l\'ouverture du fichier source.xml.');
}
function getNavBar($file)
{ ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php
                foreach ($file->page as $page) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?menu=<?php echo $page['id'] ?>"><?php echo $page->menu ?></a>
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
    getNavBar($xml);
        if(isset($_GET['menu'])) {
            echo $xml->page[intval($_GET['menu'])-1]->content;
        } else {
           echo $xml->page[0]->content;
        }
    
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>




