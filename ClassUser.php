<?php 
ini_set('display_errors', 'On');
require_once("DataBase.php");
//CLASSE USER 
// On aura comme information Nom, Prenom, Telephone, Email, Password
// On va récuperer les parametre (c'est à dire les données depuis le formulaire)

class User extends DataBase{
    private $nom;
    private $prenom;
    private $phone;
    private $email;
    private $password;

    // FONCTION CONSTRUCT
    public function __construct($nom, $prenom, $email, $password, $phone) {
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setEmail($email);
        $this->setPassword($password);
        $this->setPhone($phone);
    }
//Get the value of nom----------------------------------------------------------------------------- 
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        // if (is_string($nom) && strlen($nom) > 0 && strlen($nom) < 20) {
            $this->nom = $nom;
            return $this;
        // } else {
        //     throw new Exception("Le nom que vous avez saisi est incorrect");
        // }
    }
//Get the value of prenom-------------------------------------------------------
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        // if (is_string($prenom) && strlen($prenom) > 0 && strlen($prenom) < 20) {
            $this->prenom = $prenom;
            return $this;
        // } else {
        //     throw new Exception("Le nom que vous avez saisie est incorrect");
        // }
    }
// Get the value of telephone--------------------------------------------------------------------------------
    public function getPhone()
    {
        return $this->phone;
    }
    public function setPhone($phone)
    {
        // if (is_string($phone) && strlen($phone) == 9){
            $this->phone = $phone;
            return $this;
        // } else {
        //     throw new Exception("Le numéro que vous avez saisi semble être incorrect");
        // }
    }
//Get the value of email------------------------------------------------------------------------------------------
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        // if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $this->email = $email;
            return $this;
        // } else {
        //     throw new Exception("L'email que vous avez entrer est invalid");
        // }
    }
//Get the value of password---------------------------------------------------------------------------------------------
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        // if(is_string($password) && strlen($password) > 7){
            $this->password = md5($password);
            return $this;
        // } else{
        //     throw new Exception("Le mot que vous avez saisie n'est pas bon");
        // }
    }
    public function Insert(){
        $sql = "INSERT INTO users (prenom, nom,email, password, phone) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute
        ([
            $this->prenom,
            $this->nom,
            $this->email,
            $this->password,
            $this->phone,
        ]);
        echo "Inscription réussit";
    }
}
// Objet User 
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$phone = $_POST["telephone"];
$email = $_POST["email"];
$password = $_POST["password"];
$user = new User($prenom, $nom, $email, $password, $phone);
$user->Insert();


?>
