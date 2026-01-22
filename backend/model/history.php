<?php require_once __DIR__ . '/../config/database.php';
class history{
    private $db;
    public function start(){
        $this->db=database::connect();
    }
    public function add($userId,$hashtag)
    {
        $temp=$this->db->prepare("insert into search_history(user_id,hashtag) values(?,?)");
        $temp->execute([$userId,$hashtag]);
    }
    public function get($userId)
    {
        $temp=$this->db->prepare("select hashtag from search_history where user_id=? order by createdat desc");
        $temp->execute([$userId]);
        $result=$temp->fetchAll(PDO::FETCH_COLUMN);
        return $result;
    }
    public function deleteentire($userId)
    {
        $temp=$this->db->prepare("delete from search_history where user_id=?");
        $temp->execute([$userId]);
    }
    public function deletespecific($userId,$hashtag)
    {
        $temp=$this->db->prepare("delete from search_history where user_id=? and hashtag=?");
        $temp->execute([$userId,$hashtag]);
    }
}
