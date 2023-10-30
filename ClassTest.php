<?php
ini_set('display_errors', 'On');
require_once("DataBase.php");
class Test extends DataBase
{
    private $email;
    private $password;
    private $nom;
    private $prenom;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }
// Fonction pour vérifier si un utilisateur existe et si le mot de passe correspond
    public function userExist($email, $password)
    {
        $sql = "SELECT password FROM users WHERE email = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);
        $storedPassword = $stmt->fetchColumn(); // Le fetch column permet de retourner une colonne
        if ($storedPassword !== false && md5($password) === $storedPassword) 
        {
            return true; // L'utilisateur existe et le mot de passe correspond
        } else {
            return false; // L'utilisateur n'existe pas ou le mot de passe ne correspond pas
        }
    }

}

//------------------------------------Instaciation de l'objet------------------------------------------------------
 // Objet pour verifier si l'utilisateur existe dans la base de donnée  et que si les champs ne sont pas vides

if (!empty($_POST["email"]) && !empty($_POST["password"])) 
{
    if (isset($_POST["email"]) && isset($_POST["password"])) 
    {
        $emailToCheck = $_POST["email"];
        $passwordToCheck = $_POST["password"];
// Instanciation de l'objet avec la classe
        $user = new Test($_POST["email"], $_POST["password"]);
// Vérifier maintenant si l'email et le password verifier sont correct grace à la fonction UserExist
        if ($user->userExist($emailToCheck, $passwordToCheck)) 
        {
            echo 'Consulter la liste des Utilisateurs de Taxi_Bokko.';
            header('location: affichageUser.php');
        } else 
        {
            echo "L'utilisateur n'existe pas dans la base de données ou le mot de passe ne correspond pas.";
        }
    }
} else {
    echo "Email et mot de passe obligatoire pour se connecter";
}
?>
