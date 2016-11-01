<?php

namespace Welinkeo\CatalogueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Imagecategorie
 *
 * @ORM\Table(name="imagecategorie", indexes={@ORM\Index(name="fk_ImageCategorie_Categorie1_idx", columns={"categorie_Id"})})
 * @ORM\Entity(repositoryClass="Welinkeo\CatalogueBundle\Repository\ImagecategorieRepository")
 */
class Imagecategorie
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
     * @ORM\Column(name="title", type="string", length=50, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=45, nullable=false)
     */
    private $url;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categorie_Id", referencedColumnName="Id")
     * })
     */
    private $categorie;



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
     * Set title
     *
     * @param string $title
     *
     * @return Imagecategorie
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Imagecategorie
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
     * Set categorie
     *
     * @param \Welinkeo\CatalogueBundle\Entity\Categorie $categorie
     *
     * @return Imagecategorie
     */
    public function setCategorie(\Welinkeo\CatalogueBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Welinkeo\CatalogueBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
}
