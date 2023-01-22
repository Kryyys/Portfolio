<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marine BECKER</title>
    <link rel="stylesheet" href="../sty">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<body>

    <?php
    include 'common/navbar.php';
    include 'common/bandeau.php';

    if (!isset($page)) {
        $page = "home";
    };
    switch ($page) {
        case 'home':
            include "content/home_content.php";
            break;
        case 'cv':
            include "content/cv_content.php";
            break;
        case 'realisations':
            include "content/real_content.php";
            break;
        case 'veilles':
            include "content/veille_content.php";
            break;
        case 'bootstrap':
            include "content/bootstrap.php";
            break;
            // default:
            //     header('Location: content/404.html');
            //     die();
            //     break;
    };

    include 'common/footer.php';
    ?>

</body>

</html>