<?php

namespace App\Model;


use PDOException;

class BookModel
{
private $conn;

    public function __construct()
    {
        $this->conn =new DBConnect();
    }

    public function getAll()
    {
        try {
            $sql = "SELECT book.id,book.image,book.title,book.company,book.price,book.date,author.name AS author_id,category.category AS category_id FROM (`book` INNER JOIN `author` ON book.author_id = author.id) INNER JOIN `category` ON book.category_id=category.id";
            $stmt = $this->conn->connect()->query($sql);
            $stmt->execute();
            return $this->convertAllToObj($stmt->fetchAll());
        } catch (PDOException $exception) {
            die($exception->getMessage());
        }
}
    public function     searchData($result)
    {
        try {
        $sql="   SELECT book.id,book.image,book.title,book.company,book.price,book.date,author.name AS author_id,category.category AS category_id FROM (`book` INNER JOIN `author` ON book.author_id = author.id) INNER JOIN `category` ON book.category_id=category.id WHERE book.title LIKE '%$result%'OR author.name LIKE '%$result%'OR category.category LIKE '%$result%'";
            $stmt = $this->conn->connect()->prepare($sql);
            $stmt->execute();
            return $this->convertAllToObj($stmt->fetchAll());
        } catch (PDOException $exception) {
            die($exception->getMessage());
        }
    }
    public function convertToObject($data)
    {
        $book = new Books($data['title'], $data['company'], $data['price'], $data['date'],$data['img'],$data['author_id'],$data['category_id']);
        $book->setId($data['id']);
        if ($data['image'] == null) {
            $book->setImg('uploads/default/default-avatar.jpeg');
        } else {
            $book->setImg($data['image']);
        }
        return $book;
    }

    public function convertAllToObj($data)
    {
        $objs = [];
        foreach ($data as $item) {
            $objs[] = $this->convertToObject($item);
        }
        return $objs;
    }
    public function create($request)
    {
        $url = 'uploads/'.$_FILES['fileToUpload']['name'];

        try {
            $sql = "INSERT INTO `book`(`title`,`company`,`price`,`date`,`image`,`author_id`,`category_id`) VALUES (?,?,?,?,?,?,?)";
            $stmt = $this->conn->connect()->prepare($sql);
            $stmt->bindParam(1, $request['title']);
            $stmt->bindParam(2, $request['company']);
            $stmt->bindParam(3, $request['price']);
            $stmt->bindParam(4, $request['date']);
            $stmt->bindParam(5, $url);
            $stmt->bindParam(6, $request['author']);
            $stmt->bindParam(7, $request['category']);
            $stmt->execute();
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }

    }
    public function getById($id)
    {
        try {
            $sql = "SELECT * FROM `book` where `id`= $id";
            $stmt = $this->conn->connect()->query($sql);
            $stmt->execute();
            return $this->convertToObject($stmt->fetch());
        } catch (PDOException $exception) {
            die($exception->getMessage());
        }

    }
    public function update($request)
    {
        $book = $this->getById($_REQUEST['id']);
        if ($_FILES['fileToUpload']['name'] == '') {
            $url = $book->getImg();
        } else {
            $url = 'uploads/'.$_FILES['fileToUpload']['name'];
        }

        try {
            $sql = "UPDATE `book` SET `title`=?,`company`=?,`price`=?,`date`=?,`image`=?,`author_id`=? ,`category_id`=? WHERE `id`=" . $request['id'];
            $stmt = $this->conn->connect()->prepare($sql);
            $stmt->bindParam(1, $request['title']);
            $stmt->bindParam(2, $request['company']);
            $stmt->bindParam(3, $request['price']);
            $stmt->bindParam(4, $request['date']);
            $stmt->bindParam(5, $url);
            $stmt->bindParam(6, $request['author']);
            $stmt->bindParam(7, $request['category']);
            $stmt->execute();
        } catch (\PDOException $exception) {
            echo $exception->getMessage();
        }
    }
    public function delete($id)
    {
        $sql = "DELETE FROM `book` WHERE `id` = $id";
        $stmt = $this->conn->connect()->query($sql);
        $stmt->execute();
    }



}