<?php

namespace Brickstorm\CollaborativeTaskManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brickstorm\CollaborativeTaskManagerBundle\Entity\Task
 */
class Task
{

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var text $description
     */
    private $description;

    /**
     * @var datetime $updated_at
     */
    private $updated_at;

    /**
     * @var date $created_at
     */
    private $created_at;

    /**
     * @var Application\Sonata\UserBundle\Entity\User
     */
    private $creator;

    /**
     * @var Brickstorm\CollaborativeTaskManagerBundle\Entity\Parliament
     */
    private $parliament;

    /**
     * @var Application\Sonata\UserBundle\Entity\User
     */
    private $users;

    /**
     * @var Brickstorm\CollaborativeTaskManagerBundle\Entity\Area
     */
    private $areas;

    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    $this->areas = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set updated_at
     *
     * @param datetime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;
    }

    /**
     * Get updated_at
     *
     * @return datetime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set created_at
     *
     * @param date $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    }

    /**
     * Get created_at
     *
     * @return date 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set creator
     *
     * @param Application\Sonata\UserBundle\Entity\User $creator
     */
    public function setCreator(\Application\Sonata\UserBundle\Entity\User $creator)
    {
        $this->creator = $creator;
    }

    /**
     * Get creator
     *
     * @return Application\Sonata\UserBundle\Entity\User 
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * Set parliament
     *
     * @param Brickstorm\CollaborativeTaskManagerBundle\Entity\Parliament $parliament
     */
    public function setParliament(\Brickstorm\CollaborativeTaskManagerBundle\Entity\Parliament $parliament)
    {
        $this->parliament = $parliament;
    }

    /**
     * Get parliament
     *
     * @return Brickstorm\CollaborativeTaskManagerBundle\Entity\Parliament 
     */
    public function getParliament()
    {
        return $this->parliament;
    }

    /**
     * Add users
     *
     * @param Application\Sonata\UserBundle\Entity\User $users
     */
    public function addUser(\Application\Sonata\UserBundle\Entity\User $users)
    {
        $this->users[] = $users;
    }

    /**
     * Get users
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Add areas
     *
     * @param Brickstorm\CollaborativeTaskManagerBundle\Entity\Area $areas
     */
    public function addArea(\Brickstorm\CollaborativeTaskManagerBundle\Entity\Area $areas)
    {
        $this->areas[] = $areas;
    }

    /**
     * Get areas
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getAreas()
    {
        return $this->areas;
    }

    /**
     * Set areas
     *
     * @param Brickstorm\ParliamentBundle\Entity\Area $areas
     */
    public function setAreas(\Brickstorm\ParliamentBundle\Entity\Area $areas)
    {
        $this->areas = $areas;
    }
}