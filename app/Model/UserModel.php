<?php


namespace App\Model;


use PDO;

class UserModel
{
    private $conn;

    public function __construct()
    {
        $this->conn = new DBConnect();
    }

    public function logIn($request)
    {
        $sql = "SELECT * FROM `user` WHERE `username`=? AND `pass`=?";
        $stmt = $this->conn->connect()->prepare($sql);
        $stmt->bindParam(1, $request['un']);
        $stmt->bindParam(2, $request['pw']);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
}

    public function singup($request)
    {
        $sql="INSERT INTO `user` (`id`, `username`, `pass`, `email`, `phone_number`) VALUES (NULL, ?, ?, '', NULL);";
        $stmt=$this->conn->connect()->prepare($sql);
        $stmt->bindParam(1,$request['un']);
        $stmt->bindParam(2,$request['pw']);
        $stmt->execute();

}
}