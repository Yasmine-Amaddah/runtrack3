<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Page</title>
</head>

<body class="container bg-body-secondary">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div class="navbar-brand">LPTF</div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="https://laplateforme.io/">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Units</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Skills</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main> <!-- Titre -->
        <h1 class="text-center">La Plateforme_</h1>

        <div class="d-flex justify-content-around">
            <!-- CARD A GAUCHE AVEC PAPILLION -->
            <div class="card" style="width: 18rem;">
                <img src="https://i.notretemps.com/1800x0/smart/2021/04/06/faites-une-fleur-aux-papillons.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Un Papillon</h5>
                    <p class="card-text">Un papillon, c'est un peu comme une chenille, mais avec des ailes.</br> Ne pas ingerer.</p>
                    <a href="#" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Commander votre propre papillon</a>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Confirmation</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Confirmez l'achat de votre propre papillon.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    <button type="button" class="btn btn-primary">Confirmer achat</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fin Modal -->
                </div>
            </div>

            <!-- Div au milieu avec bonjour monde -->
            <div class="bg-light p-3 border w-50">
                <div class="jumbotron">
                    <!-- la pagination -->
                    <div>
                        <h2>Bonjour, monde !</h2>
                        <p class="lead" id="principal">Il existe plusieurs visions du terme : </br>le monde est la matière, l'espace et les phénomènes qui nous sont accessibles par les sens, l'expérience ou la raison.</br>Le sens le plus courant désigne notre planète, la Terre, avec ses habitants, et son environnement plus ou moins naturel.</p>
                    </div>

                    <hr class="my-4">
                    <p id="citation">Le sens étendu désigne l'univers dans son ensemble</p>
                    <div class="d-flex">
                        <p class="lead">
                            <a class="btn btn-danger btn-lg" href="#" role="button" id="booter">Rebooter le Monde</a>
                        <!-- SPINNER -->
                        <div class="spinner-border" role="status" id="spinner" style="color:green">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        </p>
                    </div>
                    <!-- PASSER DE PAGES -->
                    <nav aria-label="Page navigation example mt-4">
                        <ul class="pagination justify-content-end">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous" id="flecheGauche" onclick="pagePrecedente()">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item" id="page1"><a class="page-link" href="#" onclick="changerPage(1)">1</a></li>
                            <li class="page-item" id="page2"><a class="page-link" href="#" onclick="changerPage(2)">2</a></li>
                            <li class="page-item" id="page3"><a class="page-link" href="#" onclick="changerPage(3)">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next" id="flecheDroite" onclick="pageSuivante()">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- LA LISTE -->
            <div class="list-group" id="myDIV">
                <a href="#" class="list-group-item list-group-item-action">Limbres</a>
                <a href="#" class="list-group-item list-group-item-action">Luxure</a>
                <a href="#" class="list-group-item list-group-item-action">Gourmandise</a>
                <a href="#" class="list-group-item list-group-item-action">Avarice</a>
                <a href="#" class="list-group-item list-group-item-action">Colere</a>
                <a href="#" class="list-group-item list-group-item-action">Heresie</a>
                <a href="#" class="list-group-item list-group-item-action">Violence</a>
                <a href="#" class="list-group-item list-group-item-action">Ruse et Tromperie</a>
                <a href="#" class="list-group-item list-group-item-action">Trahison</a>
                <a href="#" class="list-group-item list-group-item-action">Internet Explorer</a>
                <a href="#" class="list-group-item list-group-item-action">Colere</a>
            </div>

        </div>
        <!-- LA BARRE DE PROGRESSION -->
        <div class="container mt-5 mb-5 w-50">
            <h5 class="text-end">Installation de AI 9000</h5>
            <div>
                <button id="prev-button" class="btn">
                    <span aria-hidden="true">&lt;</span>
                </button>
                <div class="progress bg-secondary-subtle" role="progressbar" aria-label="Warning striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                    <div id="progress-bar" class="progress-bar progress-bar-striped bg-warning" style="width: 90%"></div>
                </div>
                <button id="next-button" class="btn">
                    <span aria-hidden="true">&gt;</span>
                </button>
            </div>
        </div>

        <!-- pour la modal qui s'affiche selon le truc du clavier -->

        <div id="myModal" class="modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Cheat code detected!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Hellooooo.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- LES FORMULAIRES -->

        <div class="d-flex justify-content-around">
            <div><!-- FORMULAIRE A GAUCHE -->
                <h5>Recevez votre copie gratuite d'internet 2!</h5>
                <div class="input-group mb-3">
                    <span class="input-group-text">@</span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
                        <label for="floatingInputGroup1">Login</label>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
                        <label for="floatingInputGroup1">Mot de passe</label>
                    </div>
                    <span class="input-group-text">@example.com</span>
                </div>
                <p>Url des Internet 2 et 2.1 Beta</p>
                <div class="input-group mb-3">
                    <span class="input-group-text">DogeCoin</span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
                        <label for="floatingInputGroup1"></label>
                    </div>
                    <span class="input-group-text">.00</span>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">https://l33t.lptf/dkwb/berlusconimkt/</span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
                        <label for="floatingInputGroup1"></label>
                    </div>
                </div>
            </div>

            <div><!-- FORMULAIRE A DROITE -->
                <form id="theForm">
                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">Email address</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <p>We'll never share your email with anyone else.</p>
                    <div class="mb-3">
                        <label for="password" class="form-label fw-bold">Password</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <div>
                        <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input"> Check me out
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
            </div>
        </div>
    </main>
</body>
<script src="script.js"></script>

</html>