<?php

namespace Welinkeo\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Partenaire
 *
 * @ORM\Table(name="partenaire")
 * @ORM\Entity
 */
class Partenaire
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=45, nullable=false)
     */
    private $id;

    /**
     * @var \Utilisateur
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="utilisateur_personne_id", referencedColumnName="personne_id")
     * })
     */
    private $utilisateurPersonne;



    /**
     * Set id
     *
     * @param string $id
     *
     * @return Partenaire
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set utilisateurPersonne
     *
     * @param \Welinkeo\UtilisateurBundle\Entity\Utilisateur $utilisateurPersonne
     *
     * @return Partenaire
     */
    public function setUtilisateurPersonne(\Welinkeo\UtilisateurBundle\Entity\Utilisateur $utilisateurPersonne)
    {
        $this->utilisateurPersonne = $utilisateurPersonne;

        return $this;
    }

    /**
     * Get utilisateurPersonne
     *
     * @return \Welinkeo\UtilisateurBundle\Entity\Utilisateur
     */
    public function getUtilisateurPersonne()
    {
        return $this->utilisateurPersonne;
    }
}
