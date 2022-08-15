<?php
require_once('Db.php');

class User
{

    public function __construct()
    {
        $this->db = new DB_connet();
        $this->db = $this->db->return_db();
    }

    public function checkUser()
    {
        $login = htmlspecialchars(trim($_POST['up_login']));

        $req = 'SELECT * from user WHERE login = ?';
        $stmt = $this->db->prepare($req);
        $stmt->execute(array(
            $login
        ));

        $row = $stmt->rowcount();

        if ($row == 0) {
            return true;
        } else {
            return false;
        }
    }

    public function confPassword()
    {
        $password = htmlspecialchars(trim($_POST['up_password']));
        $conf = htmlspecialchars(trim($_POST['up_conf']));

        if ($password == $conf) {
            return true;
        } else {
            return false;
        }
    }

    public function signUp($upLogin)
    {
        if (isset($upLogin)) {

            $login = htmlspecialchars(trim($_POST['up_login']));
            $password = htmlspecialchars(trim($_POST['up_password']));

            $hashed_password = password_hash($password, PASSWORD_BCRYPT);

            $req = 'INSERT INTO user (login, password) VALUES (?,?)';
            $stmt = $this->db->prepare($req);
            $stmt->execute(array(
                $login, $hashed_password
            ));
        }
    }

    public function confSignUp($upLogin)
    {

        if ($this->checkUser()) {

            if ($this->confPassword()) {

                $this->signUp($upLogin);
            }
        }
    }

    public function signIn($inLogin)
    {

        $password = $_POST['in_password'];

        $stmt = $this->db->prepare("SELECT * FROM user WHERE login = ?");
        $stmt->execute(array($inLogin));
        $row = $stmt->rowCount();



        if ($row == 1) {

            $userinfo = $stmt->fetch();


            if (password_verify($password, $userinfo['password'])) {

                $_SESSION['login'] = $userinfo['login'];
                $_SESSION['id'] = $userinfo['id'];
                $_SESSION['password'] = $userinfo['password'];

                return true;
            };
            return false;
        }
    }
}
