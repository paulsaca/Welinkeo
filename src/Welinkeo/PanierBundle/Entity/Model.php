<?php

namespace Welinkeo\PanierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Model
 *
 * @ORM\Table(name="model")
 * @ORM\Entity(repositoryClass="Welinkeo\PanierBundle\Repository\ModelRepository")
 */
class Model
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
     * @var integer
     *
     * @ORM\Column(name="referenceProduit", type="integer", nullable=false)
     */
    private $referenceproduit;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer", nullable=true)
     */
    private $quantite;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Souscategorie", inversedBy="model")
     * @ORM\JoinTable(name="modelsouscategorie",
     *   joinColumns={
     *     @ORM\JoinColumn(name="model_Id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="sousCategorie_Id", referencedColumnName="Id")
     *   }
     * )
     */
    private $souscategorie;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Depot", mappedBy="model")
     */
    private $depot;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->souscategorie = new \Doctrine\Common\Collections\ArrayCollection();
        $this->depot = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set referenceproduit
     *
     * @param integer $referenceproduit
     *
     * @return Model
     */
    public function setReferenceproduit($referenceproduit)
    {
        $this->referenceproduit = $referenceproduit;

        return $this;
    }

    /**
     * Get referenceproduit
     *
     * @return integer
     */
    public function getReferenceproduit()
    {
        return $this->referenceproduit;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Model
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Model
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return Model
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Add souscategorie
     *
     * @param \Welinkeo\PanierBundle\Entity\Souscategorie $souscategorie
     *
     * @return Model
     */
    public function addSouscategorie(\Welinkeo\PanierBundle\Entity\Souscategorie $souscategorie)
    {
        $this->souscategorie[] = $souscategorie;

        return $this;
    }

    /**
     * Remove souscategorie
     *
     * @param \Welinkeo\PanierBundle\Entity\Souscategorie $souscategorie
     */
    public function removeSouscategorie(\Welinkeo\PanierBundle\Entity\Souscategorie $souscategorie)
    {
        $this->souscategorie->removeElement($souscategorie);
    }

    /**
     * Get souscategorie
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSouscategorie()
    {
        return $this->souscategorie;
    }

    /**
     * Add depot
     *
     * @param \Welinkeo\PanierBundle\Entity\Depot $depot
     *
     * @return Model
     */
    public function addDepot(\Welinkeo\PanierBundle\Entity\Depot $depot)
    {
        $this->depot[] = $depot;

        return $this;
    }

    /**
     * Remove depot
     *
     * @param \Welinkeo\PanierBundle\Entity\Depot $depot
     */
    public function removeDepot(\Welinkeo\PanierBundle\Entity\Depot $depot)
    {
        $this->depot->removeElement($depot);
    }

    /**
     * Get depot
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDepot()
    {
        return $this->depot;
    }
}
