<?php

namespace Model;

class User
{
    private $id;
    private $name;
    private $email;
    private $address;
    private $role;

    public function __construct($id, $name, $email, $address, $role)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
        $this->role = $role;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }


}