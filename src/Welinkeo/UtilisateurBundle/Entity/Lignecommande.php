<?php

namespace Welinkeo\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lignecommande
 *
 * @ORM\Table(name="lignecommande", indexes={@ORM\Index(name="fk_ligneCommande_commande1_idx", columns={"commande_numeroCommande"})})
 * @ORM\Entity(repositoryClass="Welinkeo\UtilisateurBundle\Repository\LignecommandeRepository")
 */
class Lignecommande
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
     * @ORM\Column(name="qauntiteCommandee", type="integer", nullable=false)
     */
    private $qauntitecommandee;

    /**
     * @var float
     *
     * @ORM\Column(name="montantTotal", type="float", precision=10, scale=0, nullable=false)
     */
    private $montanttotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="referenceProduit", type="integer", nullable=false)
     */
    private $referenceproduit;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionProduit", type="text", nullable=false)
     */
    private $descriptionproduit;

    /**
     * @var float
     *
     * @ORM\Column(name="PrixProduit", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixproduit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDisponiblite", type="date", nullable=true)
     */
    private $datedisponiblite;

    /**
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="commande_numeroCommande", referencedColumnName="numeroCommande")
     * })
     */
    private $commandeNumerocommande;



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
     * Set qauntitecommandee
     *
     * @param integer $qauntitecommandee
     *
     * @return Lignecommande
     */
    public function setQauntitecommandee($qauntitecommandee)
    {
        $this->qauntitecommandee = $qauntitecommandee;

        return $this;
    }

    /**
     * Get qauntitecommandee
     *
     * @return integer
     */
    public function getQauntitecommandee()
    {
        return $this->qauntitecommandee;
    }

    /**
     * Set montanttotal
     *
     * @param float $montanttotal
     *
     * @return Lignecommande
     */
    public function setMontanttotal($montanttotal)
    {
        $this->montanttotal = $montanttotal;

        return $this;
    }

    /**
     * Get montanttotal
     *
     * @return float
     */
    public function getMontanttotal()
    {
        return $this->montanttotal;
    }

    /**
     * Set referenceproduit
     *
     * @param integer $referenceproduit
     *
     * @return Lignecommande
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
     * Set descriptionproduit
     *
     * @param string $descriptionproduit
     *
     * @return Lignecommande
     */
    public function setDescriptionproduit($descriptionproduit)
    {
        $this->descriptionproduit = $descriptionproduit;

        return $this;
    }

    /**
     * Get descriptionproduit
     *
     * @return string
     */
    public function getDescriptionproduit()
    {
        return $this->descriptionproduit;
    }

    /**
     * Set prixproduit
     *
     * @param float $prixproduit
     *
     * @return Lignecommande
     */
    public function setPrixproduit($prixproduit)
    {
        $this->prixproduit = $prixproduit;

        return $this;
    }

    /**
     * Get prixproduit
     *
     * @return float
     */
    public function getPrixproduit()
    {
        return $this->prixproduit;
    }

    /**
     * Set datedisponiblite
     *
     * @param \DateTime $datedisponiblite
     *
     * @return Lignecommande
     */
    public function setDatedisponiblite($datedisponiblite)
    {
        $this->datedisponiblite = $datedisponiblite;

        return $this;
    }

    /**
     * Get datedisponiblite
     *
     * @return \DateTime
     */
    public function getDatedisponiblite()
    {
        return $this->datedisponiblite;
    }

    /**
     * Set commandeNumerocommande
     *
     * @param \Welinkeo\UtilisateurBundle\Entity\Commande $commandeNumerocommande
     *
     * @return Lignecommande
     */
    public function setCommandeNumerocommande(\Welinkeo\UtilisateurBundle\Entity\Commande $commandeNumerocommande = null)
    {
        $this->commandeNumerocommande = $commandeNumerocommande;

        return $this;
    }

    /**
     * Get commandeNumerocommande
     *
     * @return \Welinkeo\UtilisateurBundle\Entity\Commande
     */
    public function getCommandeNumerocommande()
    {
        return $this->commandeNumerocommande;
    }
}
