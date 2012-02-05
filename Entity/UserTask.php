<?php

namespace Brickstorm\CollaborativeTaskManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brickstorm\CollaborativeTaskManagerBundle\Entity\UserTask
 */
class UserTask
{

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $rate
     */
    private $rate;

    /**
     * @var datetime $updated_at
     */
    private $updated_at;

    /**
     * @var date $created_at
     */
    private $created_at;

    /**
     * @var Brickstorm\CollaborativeTaskManagerBundle\Entity\Task
     */
    private $task;

    /**
     * @var Application\Sonata\UserBundle\Entity\User
     */
    private $user;


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
     * Set rate
     *
     * @param integer $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    /**
     * Get rate
     *
     * @return integer 
     */
    public function getRate()
    {
        return $this->rate;
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
     * Set task
     *
     * @param Brickstorm\CollaborativeTaskManagerBundle\Entity\Task $task
     */
    public function setTask(\Brickstorm\CollaborativeTaskManagerBundle\Entity\Task $task)
    {
        $this->task = $task;
    }

    /**
     * Get task
     *
     * @return Brickstorm\CollaborativeTaskManagerBundle\Entity\Task 
     */
    public function getTask()
    {
        return $this->task;
    }

    /**
     * Set user
     *
     * @param Application\Sonata\UserBundle\Entity\User $user
     */
    public function setUser(\Application\Sonata\UserBundle\Entity\User $user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return Application\Sonata\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}