<?php

namespace Tutorial\Entities;

/**
 * Tutorial\Entities\Project
 */
class Project
{
    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string $dueDate
     */
    private $dueDate;

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var Project
     */
    private $employee;

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
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set dueDate
     *
     * @param string $dueDate
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;
    }

    /**
     * Get dueDate
     *
     * @return string $dueDate
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set employee
     *
     * @param Project $employee
     */
    public function setEmployee(\Project $employee)
    {
        $this->employee = $employee;
    }

    /**
     * Get employee
     *
     * @return Project $employee
     */
    public function getEmployee()
    {
        return $this->employee;
    }
}