<?php

namespace UtilisateursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * niveau
 *
 * @ORM\Table(name="niveau")
 * @ORM\Entity(repositoryClass="UtilisateursBundle\Repository\niveauRepository")
 */
class niveau
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
     * @ORM\ManyToOne(targetEntity="User", inversedBy="Niveaux")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $User;

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->User;
    }

    /**
     * @param mixed $User
     */
    public function setUser($User)
    {
        $this->User = $User;
    }


    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="nivScolaire", type="integer")
     */
    private $nivScolaire;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return niveau
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set nivScolaire
     *
     * @param integer $nivScolaire
     *
     * @return niveau
     */
    public function setNivScolaire($nivScolaire)
    {
        $this->nivScolaire = $nivScolaire;

        return $this;
    }

    /**
     * Get nivScolaire
     *
     * @return int
     */
    public function getNivScolaire()
    {
        return $this->nivScolaire;
    }
}

