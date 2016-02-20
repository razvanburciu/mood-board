<?php
/**
 *  @Entity @Table(name="user")
 **/
class User
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
     * @ManyToOne(targetEntity="Board", inversedBy="user")
     * @JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     */
    private $board;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    public function getBoard()
    {
        return $this->board;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function setBoard($board)
    {
        $this->board = $board;
    }
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}