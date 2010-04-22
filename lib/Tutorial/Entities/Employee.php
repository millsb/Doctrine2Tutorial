<?php

namespace Tutorial\Entities;

/**
 * Tutorial\Entities\Employee
 */
class Employee
{
    /**
     * @var string $lastName
     */
    private $lastName;

    /**
     * @var string $firstName
     */
    private $firstName;

    /**
     * @var string $jobTitle
     */
    private $jobTitle;

    /**
     * @var datetime $hireDate
     */
    private $hireDate;

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var Project
     */
    private $projects;

    /**
     * Set lastName
     *
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Get lastName
     *
     * @return string $lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * Get firstName
     *
     * @return string $firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set jobTitle
     *
     * @param string $jobTitle
     */
    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;
    }

    /**
     * Get jobTitle
     *
     * @return string $jobTitle
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * Set hireDate
     *
     * @param datetime $hireDate
     */
    public function setHireDate($hireDate)
    {
        $this->hireDate = $hireDate;
    }

    /**
     * Get hireDate
     *
     * @return datetime $hireDate
     */
    public function getHireDate()
    {
        return $this->hireDate;
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
     * Add projects
     *
     * @param Project $projects
     */
    public function addProjects(\Project $projects)
    {
        $this->projects[] = $projects;
    }

    /**
     * Get projects
     *
     * @return Doctrine\Common\Collections\Collection $projects
     */
    public function getProjects()
    {
        return $this->projects;
    }
}