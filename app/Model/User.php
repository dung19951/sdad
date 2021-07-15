<?php


namespace App\Model;


class User
{
    private $id;
    private $username;
    private $pass;
    private $email;
    private $phone_number;

    /**
     * User constructor.
     * @param $id
     * @param $username
     * @param $pass
     * @param $email
     * @param $phone_number
     */
    public function __construct($id, $username, $pass, $email, $phone_number)
    {
        $this->id = $id;
        $this->username = $username;
        $this->pass = $pass;
        $this->email = $email;
        $this->phone_number = $phone_number;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param mixed $pass
     */
    public function setPass($pass): void
    {
        $this->pass = $pass;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * @param mixed $phone_number
     */
    public function setPhoneNumber($phone_number): void
    {
        $this->phone_number = $phone_number;
    }


}