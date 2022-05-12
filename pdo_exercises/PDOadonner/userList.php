<?php
require 'connect.php';
require 'include/head.php'; ?>

<div class="container-fluid" id="users">
    <h2>Liste des utilisateurs</h2>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Nom user</th>
                <th scope="col">Mail user</th>
                <th scope="col">ID</th>
            </tr>
        </thead>

        <tbody>
            <?php
            try {
                $sql = "SELECT * FROM user";
                $query = $pdo->query($sql);

                $data = $query->fetchAll(PDO::FETCH_OBJ);
                foreach ($data as $result) { ?>
                    <tr class="table-primary">
                        <th scope="row"><a href="updateUser.php?id=<?= $result->id_user ?>"><?= $result->nom_user ?></a></th>
                        <td><?= $result->mail_user ?></td>
                        <td><?= $result->id_user ?></td>
                    </tr>


            <?php }
            } catch (PDOException $err) {
                die("Erreur : " . $err->getMessage());
            } ?>
        </tbody>
    </table>



</div>

<?php require 'include/footer.php'; ?>