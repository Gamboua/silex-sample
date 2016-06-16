<?php
namespace Api\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="User")
 */
class User
{

    /**
     * @ORM\Id @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @var integer
     */
    protected $id;

    /**
     * @ORM\Column(type="datetime")
     * @var datetime
     */
    protected $created;

    /**
     * @ORM\Column(type="datetime",nullable=true)
     * @var datetime
     */
    protected $updated;

    /**
     * @ORM\Column(type="string", length=150)
     *
     * @var string
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=20, unique=true)
     *
     * @var string
     */
    private $login;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     *
     * @var string
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     * @var string
     */
    private $avatar;

}
