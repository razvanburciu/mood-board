<?php
/**
 *  @Entity @Table(name="board")
 **/
class Board
{

    /**
     * @var integer $id
     * @Id @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    /** @Column(type="string") */
    private $name;

    /**
     * @OneToMany(targetEntity="User", mappedBy="board")
     **/
    private $users;

    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    public function getUsers()
    {
        return $this->access_token;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setUsers($users)
    {
        $this->users = $users;
    }
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}