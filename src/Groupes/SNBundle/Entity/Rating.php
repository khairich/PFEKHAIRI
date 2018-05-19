<?php

namespace Groupes\SNBundle\Entity;
use BackendBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Rating
 *
 * @ORM\Table(name="rating")
 * @ORM\Entity(repositoryClass="Groupes\SNBundle\Repository\RatingRepository")
 */
class Rating
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
     * @var int
     * @ORM\OneToOne(targetEntity="BackendBundle\Entity\User")
     * @ORM\JoinColumn(nullable=true)
     */
    private $ratedUser;

    /**
     * @var int
     *
     * @ORM\Column(name="vote", type="integer")
     */
    private $vote;


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
     * @param \BackendBundle\Entity\User $idUser
     *
     * @return Rating
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
      * @return \BackendBundle\Entity\User
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set ratedUser
     *
     * @param integer $ratedUser
     *
     * @return Rating
     */
    public function setRatedUser($ratedUser)
    {
        $this->ratedUser = $ratedUser;

        return $this;
    }

    /**
     * Get ratedUser
     *
     * @return int
     */
    public function getRatedUser()
    {
        return $this->ratedUser;
    }

    /**
     * Set vote
     *
     * @param integer $vote
     *
     * @return Rating
     */
    public function setVote($vote)
    {
        $this->vote = $vote;

        return $this;
    }

    /**
     * Get vote
     *
     * @return int
     */
    public function getVote()
    {
        return $this->vote;
    }
}

