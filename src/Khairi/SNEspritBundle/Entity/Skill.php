<?php

namespace Khairi\SNEspritBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skill
 *
 * @ORM\Table(name="skill")
 * @ORM\Entity(repositoryClass="Khairi\SNEspritBundle\Repository\SkillRepository")
 */
class Skill
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
     * @var int
     * @ORM\OneToOne(targetEntity="BackendBundle\Entity\User")
     * @ORM\JoinColumn(nullable=true)
     */
    private $idUser;

    /**
     * @var bool
     *
     * @ORM\Column(name="symfony", type="boolean")
     */
    private $symfony;

    /**
     * @var bool
     *
     * @ORM\Column(name="java", type="boolean")
     */
    private $java;

    /**
     * @var bool
     *
     * @ORM\Column(name="angular", type="boolean")
     */
    private $angular;

    /**
     * @var bool
     *
     * @ORM\Column(name="PHP", type="boolean")
     */
    private $pHP;

    /**
     * @var bool
     *
     * @ORM\Column(name="html", type="boolean")
     */
    private $html;

    /**
     * @var bool
     *
     * @ORM\Column(name="c", type="boolean")
     */
    private $c;

    /**
     * @var bool
     *
     * @ORM\Column(name="ajax", type="boolean")
     */
    private $ajax;

    /**
     * @var bool
     *
     * @ORM\Column(name="css", type="boolean")
     */
    private $css;

    /**
     * @var bool
     *
     * @ORM\Column(name="linux", type="boolean")
     */
    private $linux;

    /**
     * @var bool
     *
     * @ORM\Column(name="j2EE", type="boolean")
     */
    private $j2EE;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Skill
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set symfony
     *
     * @param boolean $symfony
     *
     * @return Skill
     */
    public function setSymfony($symfony)
    {
        $this->symfony = $symfony;

        return $this;
    }

    /**
     * Get symfony
     *
     * @return bool
     */
    public function getSymfony()
    {
        return $this->symfony;
    }

    /**
     * Set java
     *
     * @param boolean $java
     *
     * @return Skill
     */
    public function setJava($java)
    {
        $this->java = $java;

        return $this;
    }

    /**
     * Get java
     *
     * @return bool
     */
    public function getJava()
    {
        return $this->java;
    }

    /**
     * Set angular
     *
     * @param boolean $angular
     *
     * @return Skill
     */
    public function setAngular($angular)
    {
        $this->angular = $angular;

        return $this;
    }

    /**
     * Get angular
     *
     * @return bool
     */
    public function getAngular()
    {
        return $this->angular;
    }

    /**
     * Set pHP
     *
     * @param boolean $pHP
     *
     * @return Skill
     */
    public function setPHP($pHP)
    {
        $this->pHP = $pHP;

        return $this;
    }

    /**
     * Get pHP
     *
     * @return bool
     */
    public function getPHP()
    {
        return $this->pHP;
    }

    /**
     * Set html
     *
     * @param boolean $html
     *
     * @return Skill
     */
    public function setHtml($html)
    {
        $this->html = $html;

        return $this;
    }

    /**
     * Get html
     *
     * @return bool
     */
    public function getHtml()
    {
        return $this->html;
    }

    /**
     * Set c
     *
     * @param boolean $c
     *
     * @return Skill
     */
    public function setC($c)
    {
        $this->c = $c;

        return $this;
    }

    /**
     * Get c
     *
     * @return bool
     */
    public function getC()
    {
        return $this->c;
    }

    /**
     * Set ajax
     *
     * @param boolean $ajax
     *
     * @return Skill
     */
    public function setAjax($ajax)
    {
        $this->ajax = $ajax;

        return $this;
    }

    /**
     * Get ajax
     *
     * @return bool
     */
    public function getAjax()
    {
        return $this->ajax;
    }

    /**
     * Set css
     *
     * @param boolean $css
     *
     * @return Skill
     */
    public function setCss($css)
    {
        $this->css = $css;

        return $this;
    }

    /**
     * Get css
     *
     * @return bool
     */
    public function getCss()
    {
        return $this->css;
    }

    /**
     * Set linux
     *
     * @param boolean $linux
     *
     * @return Skill
     */
    public function setLinux($linux)
    {
        $this->linux = $linux;

        return $this;
    }

    /**
     * Get linux
     *
     * @return bool
     */
    public function getLinux()
    {
        return $this->linux;
    }

    /**
     * Set j2EE
     *
     * @param boolean $j2EE
     *
     * @return Skill
     */
    public function setJ2EE($j2EE)
    {
        $this->j2EE = $j2EE;

        return $this;
    }

    /**
     * Get j2EE
     *
     * @return bool
     */
    public function getJ2EE()
    {
        return $this->j2EE;
    }
}

