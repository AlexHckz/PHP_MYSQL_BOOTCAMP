<?php
require 'connect.php';
require 'include/head.php'; ?>

<div class="container-fluid" id="users">
    <h2>Exercice CRUD</h2>

    <div class="jumbotron">
        <h1 class="display-4">Salut !</h1>
        <p class="lead">Ceci est un exercice sur la BDD</p>
        <hr class="my-4">
        <p>Le but était d'implémenter un système CRUD simple , j'ai utilisé Bootstrap pour le Front-end et PHP/MYSQL pour le back</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="userList.php" role="button">Afficher la BDD</a>
        </p>
    </div>



</div>

<?php require 'include/footer.php'; ?>