<?php
ini_set('display_errors', 'On');
// $servername = "localhost";
// $username = "ben221";
// $password = "B@sse@bdou221";
// $dbname = "taxi_bokko";

// try 
// {
//     $conn = new PDO("mysql:host=$servername;dbname=taxi_bokko", $username, $password);
// // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully";
// } catch(PDOException $e) 
// {
//     echo "Connection failed: " . $e->getMessage();
// }
// La classe database Pour faire la connexion, l'insertion et récupération des données
class DataBase 
{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    public function connect()
    {
        $this->servername = "localhost";
        $this->username = "ben221";
        $this->password = "B@sse@bdou221";
        $this->dbname = "nom_de_la_base";
        
        try 
        {
            $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname;
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) 
        {
            echo "Connexion failed". $e->getMessage();
        }
    }

}
// $sername = "mysql:host:localhost;dbname=nom_de_la_base";
// $username = "ben221";
// $password = "B@sse@bdou221";
// $conn = new DataBase($sername, $username, $password);
    // public function Insert(User $user, $conn){
    //     $sql = $conn->prepare( "INSERT INTO users (prenom, nom, telephone, email) VALUES (?, ?, ?, ?)");
    //     $sql->execute([
    //         $user->getPrenom(),
    //         $user->getNom(),
    //         $user->getTelephone(),
    //         $user->getEmail()
    //     ]);
    // }
?>


<!-- base->conn -->