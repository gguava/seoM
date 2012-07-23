<?php

namespace models;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gguser
 *
 * @Table(name="GGuser")
 * @Entity
 */
class Gguser
{
    /**
     * @var integer $id
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $username
     *
     * @Column(name="username", type="string", length=32, nullable=false)
     */
    private $username;

    /**
     * @var string $password
     *
     * @Column(name="password", type="string", length=64, nullable=false)
     */
    private $password;

    /**
     * @var string $email
     *
     * @Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Gguser
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Gguser
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Gguser
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
}