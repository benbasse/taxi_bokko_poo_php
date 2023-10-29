<?php
ini_set('display_errors', 'On');
// Inclure le fichier de la classe DataBase
require_once("DataBase.php");
// Classe AffichageUser étendue pour récupérer les utilisateurs
class AffichageUser extends DataBase
{
    public function getAllUsers()
    {
        $pdo = $this->connect();
        $sql = "SELECT * FROM users";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
// Instanciation de l'objet
$test = new AffichageUser();
$users = $test->getAllUsers();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des utilisateurs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Liste des utilisateurs</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Téléphone</th>
        </tr>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['nom'] ?></td>
                <td><?= $user['prenom'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['phone'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
