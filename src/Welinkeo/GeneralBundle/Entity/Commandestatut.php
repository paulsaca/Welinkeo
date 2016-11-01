<?php

namespace Welinkeo\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commandestatut
 *
 * @ORM\Table(name="commandestatut")
 * @ORM\Entity(repositoryClass="Welinkeo\GeneralBundle\Repository\CommandestatutRepository")
 */
class Commandestatut
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=45, nullable=false)
     */
    private $libelle;



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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Commandestatut
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
}
