<?php

namespace Welinkeo\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur", indexes={@ORM\Index(name="fk_utilisateur_role1_idx", columns={"role_id"})})
 * @ORM\Entity
 */
class Utilisateur
{
    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=30, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=30, nullable=false)
     */
    private $mdp;

    /**
     * @var integer
     *
     * @ORM\Column(name="pointFidelite", type="integer", nullable=true)
     */
    private $pointfidelite;

    /**
     * @var string
     *
     * @ORM\Column(name="idPartenaire", type="string", length=100, nullable=true)
     */
    private $idpartenaire;

    /**
     * @var \Role
     *
     * @ORM\ManyToOne(targetEntity="Role")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="role_id", referencedColumnName="id")
     * })
     */
    private $role;

    /**
     * @var \Personne
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="personne_id", referencedColumnName="id")
     * })
     */
    private $personne;



    /**
     * Set login
     *
     * @param string $login
     *
     * @return Utilisateur
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set mdp
     *
     * @param string $mdp
     *
     * @return Utilisateur
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get mdp
     *
     * @return string
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set pointfidelite
     *
     * @param integer $pointfidelite
     *
     * @return Utilisateur
     */
    public function setPointfidelite($pointfidelite)
    {
        $this->pointfidelite = $pointfidelite;

        return $this;
    }

    /**
     * Get pointfidelite
     *
     * @return integer
     */
    public function getPointfidelite()
    {
        return $this->pointfidelite;
    }

    /**
     * Set idpartenaire
     *
     * @param string $idpartenaire
     *
     * @return Utilisateur
     */
    public function setIdpartenaire($idpartenaire)
    {
        $this->idpartenaire = $idpartenaire;

        return $this;
    }

    /**
     * Get idpartenaire
     *
     * @return string
     */
    public function getIdpartenaire()
    {
        return $this->idpartenaire;
    }

    /**
     * Set role
     *
     * @param \Welinkeo\UtilisateurBundle\Entity\Role $role
     *
     * @return Utilisateur
     */
    public function setRole(\Welinkeo\UtilisateurBundle\Entity\Role $role = null)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return \Welinkeo\UtilisateurBundle\Entity\Role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set personne
     *
     * @param \Welinkeo\UtilisateurBundle\Entity\Personne $personne
     *
     * @return Utilisateur
     */
    public function setPersonne(\Welinkeo\UtilisateurBundle\Entity\Personne $personne)
    {
        $this->personne = $personne;

        return $this;
    }

    /**
     * Get personne
     *
     * @return \Welinkeo\UtilisateurBundle\Entity\Personne
     */
    public function getPersonne()
    {
        return $this->personne;
    }
}
