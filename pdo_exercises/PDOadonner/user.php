<?php
require 'connect.php';
require 'include/head.php'; ?>

<div class="container mt-5">

    <h1 class="mb-4">Inscription</h1>

    <form action="traitement/insert.php" method="post">
        <div class="form-group">
            <label for="mail_user" class="form-label mt-4">Email address</label>
            <input class="form-control mt-2" type="email" name="mail_user" id="mail_user" placeholder="mail">
        </div>
        <div class="form-group">
            <label for="password_user" class="form-label mt-4">Password</label>
            <input class="form-control mt-2" type="password" name="password_user" id="password_user" placeholder="password">
        </div>

        <div class="form-group">
            <label for="nom_user" class="form-label mt-4">Nom user</label>
            <input class="form-control mt-2" type="text" name="nom_user" id="nom_user" placeholder="nom">
        </div>

        <input class="btn btn-primary mt-5" type="submit" value="Valider">
    </form>

</div>


<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>

<?php require 'include/footer.php'; ?>