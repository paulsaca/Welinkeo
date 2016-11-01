<?php

namespace Welinkeo\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Imagesouscategorie
 *
 * @ORM\Table(name="imagesouscategorie", indexes={@ORM\Index(name="fk_ImageSousCategorie_SousCategorie1_idx", columns={"sousCategorie_Id"})})
 * @ORM\Entity(repositoryClass="Welinkeo\BackOfficeBundle\Repository\ImagesouscategorieRepository")
 */
class Imagesouscategorie
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
     * @ORM\Column(name="titre", type="string", length=45, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=45, nullable=false)
     */
    private $url;

    /**
     * @var \Souscategorie
     *
     * @ORM\ManyToOne(targetEntity="Souscategorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sousCategorie_Id", referencedColumnName="Id")
     * })
     */
    private $souscategorie;



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
     * Set titre
     *
     * @param string $titre
     *
     * @return Imagesouscategorie
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Imagesouscategorie
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set souscategorie
     *
     * @param \Welinkeo\BackOfficeBundle\Entity\Souscategorie $souscategorie
     *
     * @return Imagesouscategorie
     */
    public function setSouscategorie(\Welinkeo\BackOfficeBundle\Entity\Souscategorie $souscategorie = null)
    {
        $this->souscategorie = $souscategorie;

        return $this;
    }

    /**
     * Get souscategorie
     *
     * @return \Welinkeo\BackOfficeBundle\Entity\Souscategorie
     */
    public function getSouscategorie()
    {
        return $this->souscategorie;
    }
}
