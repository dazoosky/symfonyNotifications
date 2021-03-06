<?php

namespace dazoosky\NotifyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="dazoosky\NotifyBundle\Repository\UserRepository")
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=100)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="phoneNo", type="string", length=11)
     */
    private $phoneNo;

    /**
     * @var array
     *
     * @ORM\Column(name="notifications", type="json_array")
     */
    private $notifications;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname.
     *
     * @param string $surname
     *
     * @return User
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname.
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set mail.
     *
     * @param string $mail
     *
     * @return User
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail.
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set phoneNo.
     *
     * @param string $phoneNo
     *
     * @return User
     */
    public function setPhoneNo($phoneNo)
    {
        $this->phoneNo = $phoneNo;

        return $this;
    }

    /**
     * Get phoneNo.
     *
     * @return string
     */
    public function getPhoneNo()
    {
        return $this->phoneNo;
    }

    /**
     * Set notifications.
     *
     * @param array $notifications
     *
     * @return User
     */
    public function setNotifications($notifications)
    {
        $this->notifications = $notifications;

        return $this;
    }

    /**
     * Get notifications.
     *
     * @return array
     */
    public function getNotifications()
    {
        return $this->notifications;
    }
}
