<?php require_once __DIR__ . '/../config/database.php';
class user {
    private $db;
    public function start(){
        $this->db=database::connect();
    }
    public function create($name, $email, $password) {
        $temp = $this->db->prepare("insert into user (name,email,password) VALUES (?,?,?)");
        $temp->execute([$name,$email,$password]);
    }
    public function login($email, $password) {
        $temp = $this->db->prepare("select * from user where email=?");
        $temp->execute([$email]);
        $user = $temp->fetch();
        if ($user && password_verify($password, $user['password'])) {
            return $user['id'];
        }
        return false;
    }
}
