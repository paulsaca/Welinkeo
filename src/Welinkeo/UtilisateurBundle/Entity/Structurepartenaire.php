<?php

namespace Welinkeo\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Structurepartenaire
 *
 * @ORM\Table(name="structurepartenaire", indexes={@ORM\Index(name="fk_pointLivraison_typePointLivraison1_idx", columns={"typePointLivraison_id"}), @ORM\Index(name="fk_pointLivraison_adresse1_idx", columns={"adresse_id"})})
 * @ORM\Entity
 */
class Structurepartenaire
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
     * @ORM\Column(name="Nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="AgenceTelephone", type="string", length=15, nullable=false)
     */
    private $agencetelephone;

    /**
     * @var string
     *
     * @ORM\Column(name="QuartierCommune", type="string", length=100, nullable=false)
     */
    private $quartiercommune;

    /**
     * @var string
     *
     * @ORM\Column(name="Autre", type="string", length=100, nullable=false)
     */
    private $autre;

    /**
     * @var \Typestructurepartenaire
     *
     * @ORM\ManyToOne(targetEntity="Typestructurepartenaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="typePointLivraison_id", referencedColumnName="id")
     * })
     */
    private $typepointlivraison;

    /**
     * @var \Adresse
     *
     * @ORM\ManyToOne(targetEntity="Adresse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="adresse_id", referencedColumnName="id")
     * })
     */
    private $adresse;



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
     * Set nom
     *
     * @param string $nom
     *
     * @return Structurepartenaire
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
     * Set agencetelephone
     *
     * @param string $agencetelephone
     *
     * @return Structurepartenaire
     */
    public function setAgencetelephone($agencetelephone)
    {
        $this->agencetelephone = $agencetelephone;

        return $this;
    }

    /**
     * Get agencetelephone
     *
     * @return string
     */
    public function getAgencetelephone()
    {
        return $this->agencetelephone;
    }

    /**
     * Set quartiercommune
     *
     * @param string $quartiercommune
     *
     * @return Structurepartenaire
     */
    public function setQuartiercommune($quartiercommune)
    {
        $this->quartiercommune = $quartiercommune;

        return $this;
    }

    /**
     * Get quartiercommune
     *
     * @return string
     */
    public function getQuartiercommune()
    {
        return $this->quartiercommune;
    }

    /**
     * Set autre
     *
     * @param string $autre
     *
     * @return Structurepartenaire
     */
    public function setAutre($autre)
    {
        $this->autre = $autre;

        return $this;
    }

    /**
     * Get autre
     *
     * @return string
     */
    public function getAutre()
    {
        return $this->autre;
    }

    /**
     * Set typepointlivraison
     *
     * @param \Welinkeo\UtilisateurBundle\Entity\Typestructurepartenaire $typepointlivraison
     *
     * @return Structurepartenaire
     */
    public function setTypepointlivraison(\Welinkeo\UtilisateurBundle\Entity\Typestructurepartenaire $typepointlivraison = null)
    {
        $this->typepointlivraison = $typepointlivraison;

        return $this;
    }

    /**
     * Get typepointlivraison
     *
     * @return \Welinkeo\UtilisateurBundle\Entity\Typestructurepartenaire
     */
    public function getTypepointlivraison()
    {
        return $this->typepointlivraison;
    }

    /**
     * Set adresse
     *
     * @param \Welinkeo\UtilisateurBundle\Entity\Adresse $adresse
     *
     * @return Structurepartenaire
     */
    public function setAdresse(\Welinkeo\UtilisateurBundle\Entity\Adresse $adresse = null)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return \Welinkeo\UtilisateurBundle\Entity\Adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
}
