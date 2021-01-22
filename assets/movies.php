<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/movies.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand"><img src="../assets/img/inscription.png" alt="abyss2" class="abyss" style="margin-left: 10%;"></a>
            <form class="d-flex">
                <div class="menu">
                    <ul>
                        <li><a href="">Inscription</a></li>
                        <li><a href="">Connexion</a></li>
                    </ul>
                </div>
            </form>
            <input class="mef outline-danger" type="search" placeholder="Cherche dans les Abyss" aria-label="Search">
            <button class="btn btn-danger" type="submit">Recherche</button>
        </nav>
    </header>
    

    <section class="films">
        <div class="my-5 text-center container">
            <h3 style="margin-bottom: 5%;">Les plus grand succès</h3>
            <div class="row d-flex align-items-center">
                <div class="col-1 d-flex">
                    <a href="#carouselExampleIndicators" role="button" data-slide="prev" style="height: 50%; width: 50%;">
                        <div class="carousel-nav-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path d="m88.6,121.3c0.8,0.8 1.8,1.2 2.9,1.2s2.1-0.4 2.9-1.2c1.6-1.6 1.6-4.2 0-5.8l-51-51 51-51c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-54,53.9c-1.6,1.6-1.6,4.2 0,5.8l54,53.9z">
                                </path>
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="col-10">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-12 col-md d-flex align-items-center justify-content-center">
                                        <img src="../assets/img/monde.jpg" class="d-block w-100" alt="l1">
                                    </div>
                                    <div class="col-12 col-md d-flex align-items-center justify-content-center">
                                        <img src="../assets/img/nemo.jpg" class="d-block w-100" alt="l10">
                                    </div>
                                    <div class="col-12 col-md d-flex align-items-center justify-content-center">
                                        <img src="../assets/img/oceans.jpg" class="d-block w-100" alt="l12">
                                    </div>
                                    <div class="col-12 col-md d-flex align-items-center justify-content-center">
                                        <img src="../assets/img/pirates.jpg" class="d-block w-100" alt="l111">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-12 col-md d-flex align-items-center justify-content-center">
                                        <img src="../assets/img/pirates.jpg" class="d-block w-100" alt="l2">
                                    </div>
                                    <div class="col-12 col-md d-flex align-items-center justify-content-center">
                                        <img src="../assets/img/aquaman.jpg" class="d-block w-100" alt="l4">
                                    </div>
                                    <div class="col-12 col-md d-flex align-items-center justify-content-center">
                                        <img src="../assets/img/gang_de_requins.jpg" class="d-block w-100" alt="l17">
                                    </div>
                                    <div class="col-12 col-md d-flex align-items-center justify-content-center">
                                        <img src="../assets/img/sea.jpg" class="d-block w-100" alt="l14">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-12 col-md d-flex align-items-center justify-content-center">
                                        <img src="../assets/img/titanic.jpg" class="d-block w-100" alt="l15">
                                    </div>
                                    <div class="col-12 col-md d-flex align-items-center justify-content-center">
                                        <img src="../assets/img/trouble.jpg" class="d-block w-100" alt="l6">
                                    </div>
                                    <div class="col-12 col-md d-flex align-items-center justify-content-center">
                                        <img src="../assets/img/moby.jpg" class="d-block w-100" alt="g2">
                                    </div>
                                    <div class="col-12 col-md d-flex align-items-center justify-content-center">
                                        <img src="../assets/img/grand.jpg" class="d-block w-100" alt="g3">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-12 col-md d-flex align-items-center justify-content-center">
                                        <img src="../assets/img/sirene.jpg" class="d-block w-100" alt="g5">
                                    </div>
                                    <div class="col-12 col-md d-flex align-items-center justify-content-center">
                                        <img src="../assets/img/vaiana.jpg" class="d-block w-100" alt="l7">
                                    </div>
                                    <div class="col-12 col-md d-flex align-items-center justify-content-center">
                                        <img src="../assets/img/waterworld.jpg" class="d-block w-100" alt="l19">
                                    </div>
                                    <div class="col-12 col-md d-flex align-items-center justify-content-center">
                                        <img src="../assets/img/mer.jpg" class="d-block w-100" alt="l16">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-12 col-md d-flex align-items-center justify-content-center">
                                        <img src="../assets/img/pi.jpg" class="d-block w-100" alt="l13">
                                    </div>
                                    <div class="col-12 col-md d-flex align-items-center justify-content-center">
                                        <img src="../assets/img/abyss.jpg" class="d-block w-100" alt="l18">
                                    </div>
                                    <div class="col-12 col-md d-flex align-items-center justify-content-center">
                                        <img src="../assets/img/forme.jpg" class="d-block w-100" alt="l11">
                                    </div>
                                    <div class="col-12 col-md d-flex align-items-center justify-content-center">
                                        <img src="../assets/img/grand.jpg" class="d-block w-100" alt="l116">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1 d-flex"><a href="#carouselExampleIndicators" data-slide="next" style="height: 50%; width: 50%;">
                        <div class="carousel-nav-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path d="m40.4,121.3c-0.8,0.8-1.8,1.2-2.9,1.2s-2.1-0.4-2.9-1.2c-1.6-1.6-1.6-4.2 0-5.8l51-51-51-51c-1.6-1.6-1.6-4.2 0-5.8 1.6-1.6 4.2-1.6 5.8,0l53.9,53.9c1.6,1.6 1.6,4.2 0,5.8l-53.9,53.9z">
                                </path>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

</body>

</html>