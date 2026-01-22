<?php require_once __DIR__ . '/../config/database.php';
class passwordreset
{
    private $db;
    public function start(){
        $this->db=database::connect();
    }
    public function create($email, $token, $expiresat)
    {
        $temp = $this->db->prepare("insert into passwordreset (email, token, expiresat) VALUES (?, ?, ?)");
        $temp->execute([$email, $token, $expiresat]);
    }
    public function findbytoken($token)
    {
        $temp = $this->db->prepare("select * from passwordreset where token = ? and expiresat > now()");
        $temp->execute([$token]);
        return $temp->fetch(PDO::FETCH_ASSOC);
    }
    public function insertnewpassword($token,$newpassword)
    {
        $temp=$this->db->prepare("select email from passwordreset where token=?");
        $email=$temp->execute([$token]);
        $temp=$this->db->prepare("update user set password=? where email=?");
        $temp->execute([$newpassword,$token]);
        $temp = $this->db->prepare("delete from passwordreset where token = ?");
        $temp->execute([$token]);
    }
    public function deleteexpire()
    {
        $temp=$this->db->prepare("delete from passwordreset WHERE expiresat < now()");
        return $temp->execute();
    }
}


