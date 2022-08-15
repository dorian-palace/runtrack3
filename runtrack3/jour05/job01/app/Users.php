<?php
require_once('setting/db.php');

class Users
{

    public $nom;
    public $prenom;
    public $email;
    public $password;
    public $confpassword;
    public $db;

    public function __construct($nom, $prenom, $email)
    {
        $this->db = new DB_connet();
        $this->db = $this->db->return_db();
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
    }

    public function Inscription()
    {

        $insert = $this->db->prepare('INSERT INTO utilisateurs(nom, prenom, email, password)VALUES(?,?,?,?)');

        $hashed_password = password_hash($this->password, PASSWORD_BCRYPT);

        if ($insert->execute(array(
            $this->nom, $this->prenom, $this->email, $hashed_password
        ))) {
            return $insert;
        }
    }

    public function validPassword()
    {

        if ($this->password == $this->confpassword) {
            return true;
        } else {
            return false;
        }
    }



    public function userExist()
    {

        $req = $this->db->prepare('SELECT * FROM utilisateurs WHERE nom = ? ');
        $req->execute(array(
            $this->nom
        ));

        $count = $req->rowcount();

        if ($count == 0) {
            return true;
        } else {
            return false;
        }
    }

    public function connect()
    {

        $stmt = $this->db->prepare("SELECT * FROM Utilisateurs WHERE nom = ?");
        $stmt->execute(array($this->nom));
        $row = $stmt->rowCount();

        if ($row == 1) {

            $userinfo = $stmt->fetch();


            if (password_verify($this->password, $userinfo['password'])) {

                $_SESSION['nom'] = $userinfo['nom'];
                $_SESSION['prenom'] = $userinfo['prenom'];
                $_SESSION['email'] = $userinfo['email'];
                $_SESSION['password'] = $userinfo['password'];

                return true;
            };
            return false;
        }
    }

    public function validInscription()
    {
        if ($this->validPassword()) {

            if ($this->userExist()) {

                $this->Inscription();
            }
        }
    }
}
