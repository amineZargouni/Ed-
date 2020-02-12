<?php

namespace UtilisateursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * classe
 *
 * @ORM\Table(name="classe")
 * @ORM\Entity(repositoryClass="UtilisateursBundle\Repository\classeRepository")
 */
class classe
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
     *
     * @ORM\Column(name="num", type="integer")
     */
    private $num;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrEtudiant", type="integer")
     */
    private $nbrEtudiant;


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
     * Set num
     *
     * @param integer $num
     *
     * @return classe
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return int
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Set nbrEtudiant
     *
     * @param integer $nbrEtudiant
     *
     * @return classe
     */
    public function setNbrEtudiant($nbrEtudiant)
    {
        $this->nbrEtudiant = $nbrEtudiant;

        return $this;
    }

    /**
     * Get nbrEtudiant
     *
     * @return int
     */
    public function getNbrEtudiant()
    {
        return $this->nbrEtudiant;
    }
}

