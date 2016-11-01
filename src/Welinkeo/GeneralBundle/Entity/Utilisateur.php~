<?php

namespace Welinkeo\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur", indexes={@ORM\Index(name="fk_utilisateur_role1_idx", columns={"role_id"})})
 * @ORM\Entity(repositoryClass="Welinkeo\GeneralBundle\Repository\UtilisateurRepository")
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
     * Set role
     *
     * @param \Welinkeo\GeneralBundle\Entity\Role $role
     *
     * @return Utilisateur
     */
    public function setRole(\Welinkeo\GeneralBundle\Entity\Role $role = null)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return \Welinkeo\GeneralBundle\Entity\Role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set personne
     *
     * @param \Welinkeo\GeneralBundle\Entity\Personne $personne
     *
     * @return Utilisateur
     */
    public function setPersonne(\Welinkeo\GeneralBundle\Entity\Personne $personne)
    {
        $this->personne = $personne;

        return $this;
    }

    /**
     * Get personne
     *
     * @return \Welinkeo\GeneralBundle\Entity\Personne
     */
    public function getPersonne()
    {
        return $this->personne;
    }
}
