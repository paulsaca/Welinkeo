<?php

namespace Welinkeo\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Souscategorie
 *
 * @ORM\Table(name="souscategorie", indexes={@ORM\Index(name="fk_SousCategorie_Categorie1_idx", columns={"categorie_Id"})})
 * @ORM\Entity(repositoryClass="Welinkeo\GeneralBundle\Repository\SouscategorieRepository")
 */
class Souscategorie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=false)
     */
    private $nom;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Model", mappedBy="souscategorie")
     */
    private $model;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->model = new \Doctrine\Common\Collections\ArrayCollection();
    }


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
     * @return Souscategorie
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
     * Set categorie
     *
     * @param \Welinkeo\GeneralBundle\Entity\Categorie $categorie
     *
     * @return Souscategorie
     */
    public function setCategorie(\Welinkeo\GeneralBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Welinkeo\GeneralBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Add model
     *
     * @param \Welinkeo\GeneralBundle\Entity\Model $model
     *
     * @return Souscategorie
     */
    public function addModel(\Welinkeo\GeneralBundle\Entity\Model $model)
    {
        $this->model[] = $model;

        return $this;
    }

    /**
     * Remove model
     *
     * @param \Welinkeo\GeneralBundle\Entity\Model $model
     */
    public function removeModel(\Welinkeo\GeneralBundle\Entity\Model $model)
    {
        $this->model->removeElement($model);
    }

    /**
     * Get model
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getModel()
    {
        return $this->model;
    }
}
