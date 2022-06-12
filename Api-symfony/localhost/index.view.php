<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.3.0/font-awesome-animation.min.css"
        integrity="sha512-Po8rrCwchD03Wo+2ibHFielZ8luDAVoCyE9i6iFMPyn9+V1tIhGk5wl8iKC9/JfDah5Oe9nV8QzE8HHgjgzp3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

    <title><?=(isset($titre))?$titre:"Racine du Local";?>
    </title>
</head>

<body>

    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="d-flex justify-content-center">
            <a class="navbar-brand" href="#">
                <h2>&nbsp;&nbsp;<i class="bi-globe"></i></h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Liste des projets
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php foreach ($directory as $key => $value) : ?>
                            <?php if (is_dir($value) && ($value != ".") && ($value != "..") && ($value != ".git") && ($value != "other") && ($value != "admin")&& ($value != "old")) : ?>
                            <li>
                                <a class="dropdown-item" href="<?= acces_path($value) ?>"><i class="bi bi-folder"></i>
                                    &nbsp;&nbsp;<?= nom($value) ?></a>
                            </li>
                            <?php endif ?>
                            <?php endforeach ?>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Outils
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="http://localhost:8000/team/organigramme/"><img
                                        height="70px" src="symfony.png"></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="phpmyadmin"><img height="80px" src="phpmyadmin.png"></a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="other/"><i class="bi bi-folder"></i> Autres</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="old/"><i class="bi bi-folder"></i> vieux</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="admin/ajout.php"><i class="bi bi-folder-plus"></i> New
                                    Projet</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="https://icons.getbootstrap.com/#install">
                                    <i class="bi bi-bootstrap"></i> Icons Boostrap</a>
                            </li>
                            <li>
                                <a class="dropdown-item"
                                    href="https://getbootstrap.com/docs/5.1/getting-started/introduction/">
                                    <i class="fa-solid fa-icons"></i> CSS/JS/JQuery</a>
                            </li>
                            <li>
                                <a class="dropdown-item"
                                    href="https://https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
                                    <i class="fa-solid fa-icons"></i> Link Awesome</a>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="https://icons.getbootstrap.com/">
                                    <i class="fa-solid fa-icons"></i> Icones Bootstrap</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="https://fontawesome.com/">
                                    <i class="fa-solid fa-icons"></i> Icones FontAwsome</a>
                            </li>
                        </ul>
                    </li>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <!--corps de mon application-->
    <div class=" container-fluid-dark">
        <div class="row">
            <?php
            $count = 0;
            foreach ($directory as $key => $value) : ?>
            <?php if (is_dir($value) && ($value != ".") && ($value != "..") && ($value != ".git") && ($value != "other") && ($value != "admin")&& ($value != "old")) : ?>
            <div class=" col">
                <div class="card" style="width:200px">
                    <a href="<?= acces_path($value) ?>">
                        <img class="card-img-top"
                            src="<?= (file_exists($value . "/first.png")) ? $value . "/first.png" : "file-empty-icon.png" ?>"
                            alt="Card image">
                        <div class="card-body">
                            <center>
                                <h5 class="card-title-dark">
                                    <i class="bi bi-folder"></i>&nbsp;&nbsp;<?= nom($value) ?>
                                </h5>
                            </center>
                        </div>
                    </a>
                </div>
            </div>
            <?php $count++; ?>
            <?php
                    if ($count < 5) {
                        echo '<!--fin du col-->';
                    } else {
                        $count = 0;
                        echo '<!--fin col--><div class="row">';
                    }
                    ?>
            <?php endif ?>
            <?php endforeach ?>
        </div>
    </div>
</body>
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html><?php ?>