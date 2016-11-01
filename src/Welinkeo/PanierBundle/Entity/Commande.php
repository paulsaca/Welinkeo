<?php

namespace Welinkeo\PanierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", uniqueConstraints={@ORM\UniqueConstraint(name="numero_UNIQUE", columns={"numero"}), @ORM\UniqueConstraint(name="numeroCommande_UNIQUE", columns={"numeroCommande"})}, indexes={@ORM\Index(name="fk_Commande_CommandeStatut1_idx", columns={"commandeStatut_id"}), @ORM\Index(name="fk_Commande_ModePaiement1_idx", columns={"modePaiement_Id"}), @ORM\Index(name="fk_Commande_ModeLivraison1_idx", columns={"modeLivraison_id"}), @ORM\Index(name="fk_Commande_ordonnance1_idx", columns={"ordonnance_id"}), @ORM\Index(name="fk_commande_beneficiaire1_idx", columns={"beneficiaire_personne_id"}), @ORM\Index(name="fk_commande_utilisateur1_idx", columns={"utilisateur_personne_id"}), @ORM\Index(name="fk_commande_pointLivraison1_idx", columns={"pointLivraison_id"})})
 * @ORM\Entity(repositoryClass="Welinkeo\PanierBundle\Repository\CommandeRepository")
 */
class Commande
{
    /**
     * @var string
     *
     * @ORM\Column(name="numeroCommande", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numerocommande;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=45, nullable=false)
     */
    private $numero;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var float
     *
     * @ORM\Column(name="montantFinal", type="float", precision=10, scale=0, nullable=false)
     */
    private $montantfinal;

    /**
     * @var float
     *
     * @ORM\Column(name="fraisLivraison", type="float", precision=10, scale=0, nullable=false)
     */
    private $fraislivraison;

    /**
     * @var integer
     *
     * @ORM\Column(name="Beneficiaire_Id", type="integer", nullable=false)
     */
    private $beneficiaireId;

    /**
     * @var \Commandestatut
     *
     * @ORM\ManyToOne(targetEntity="Commandestatut")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="commandeStatut_id", referencedColumnName="id")
     * })
     */
    private $commandestatut;

    /**
     * @var \Modepaiement
     *
     * @ORM\ManyToOne(targetEntity="Modepaiement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="modePaiement_Id", referencedColumnName="id")
     * })
     */
    private $modepaiement;

    /**
     * @var \Modelivraison
     *
     * @ORM\ManyToOne(targetEntity="Modelivraison")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="modeLivraison_id", referencedColumnName="id")
     * })
     */
    private $modelivraison;

    /**
     * @var \Ordonnance
     *
     * @ORM\ManyToOne(targetEntity="Ordonnance")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ordonnance_id", referencedColumnName="id")
     * })
     */
    private $ordonnance;

    /**
     * @var \Beneficiaire
     *
     * @ORM\ManyToOne(targetEntity="Beneficiaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="beneficiaire_personne_id", referencedColumnName="personne_id")
     * })
     */
    private $beneficiairePersonne;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="utilisateur_personne_id", referencedColumnName="personne_id")
     * })
     */
    private $utilisateurPersonne;

    /**
     * @var \Pointlivraison
     *
     * @ORM\ManyToOne(targetEntity="Pointlivraison")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pointLivraison_id", referencedColumnName="id")
     * })
     */
    private $pointlivraison;



    /**
     * Get numerocommande
     *
     * @return string
     */
    public function getNumerocommande()
    {
        return $this->numerocommande;
    }

    /**
     * Set numero
     *
     * @param string $numero
     *
     * @return Commande
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Commande
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set montantfinal
     *
     * @param float $montantfinal
     *
     * @return Commande
     */
    public function setMontantfinal($montantfinal)
    {
        $this->montantfinal = $montantfinal;

        return $this;
    }

    /**
     * Get montantfinal
     *
     * @return float
     */
    public function getMontantfinal()
    {
        return $this->montantfinal;
    }

    /**
     * Set fraislivraison
     *
     * @param float $fraislivraison
     *
     * @return Commande
     */
    public function setFraislivraison($fraislivraison)
    {
        $this->fraislivraison = $fraislivraison;

        return $this;
    }

    /**
     * Get fraislivraison
     *
     * @return float
     */
    public function getFraislivraison()
    {
        return $this->fraislivraison;
    }

    /**
     * Set beneficiaireId
     *
     * @param integer $beneficiaireId
     *
     * @return Commande
     */
    public function setBeneficiaireId($beneficiaireId)
    {
        $this->beneficiaireId = $beneficiaireId;

        return $this;
    }

    /**
     * Get beneficiaireId
     *
     * @return integer
     */
    public function getBeneficiaireId()
    {
        return $this->beneficiaireId;
    }

    /**
     * Set commandestatut
     *
     * @param \Welinkeo\PanierBundle\Entity\Commandestatut $commandestatut
     *
     * @return Commande
     */
    public function setCommandestatut(\Welinkeo\PanierBundle\Entity\Commandestatut $commandestatut = null)
    {
        $this->commandestatut = $commandestatut;

        return $this;
    }

    /**
     * Get commandestatut
     *
     * @return \Welinkeo\PanierBundle\Entity\Commandestatut
     */
    public function getCommandestatut()
    {
        return $this->commandestatut;
    }

    /**
     * Set modepaiement
     *
     * @param \Welinkeo\PanierBundle\Entity\Modepaiement $modepaiement
     *
     * @return Commande
     */
    public function setModepaiement(\Welinkeo\PanierBundle\Entity\Modepaiement $modepaiement = null)
    {
        $this->modepaiement = $modepaiement;

        return $this;
    }

    /**
     * Get modepaiement
     *
     * @return \Welinkeo\PanierBundle\Entity\Modepaiement
     */
    public function getModepaiement()
    {
        return $this->modepaiement;
    }

    /**
     * Set modelivraison
     *
     * @param \Welinkeo\PanierBundle\Entity\Modelivraison $modelivraison
     *
     * @return Commande
     */
    public function setModelivraison(\Welinkeo\PanierBundle\Entity\Modelivraison $modelivraison = null)
    {
        $this->modelivraison = $modelivraison;

        return $this;
    }

    /**
     * Get modelivraison
     *
     * @return \Welinkeo\PanierBundle\Entity\Modelivraison
     */
    public function getModelivraison()
    {
        return $this->modelivraison;
    }

    /**
     * Set ordonnance
     *
     * @param \Welinkeo\PanierBundle\Entity\Ordonnance $ordonnance
     *
     * @return Commande
     */
    public function setOrdonnance(\Welinkeo\PanierBundle\Entity\Ordonnance $ordonnance = null)
    {
        $this->ordonnance = $ordonnance;

        return $this;
    }

    /**
     * Get ordonnance
     *
     * @return \Welinkeo\PanierBundle\Entity\Ordonnance
     */
    public function getOrdonnance()
    {
        return $this->ordonnance;
    }

    /**
     * Set beneficiairePersonne
     *
     * @param \Welinkeo\PanierBundle\Entity\Beneficiaire $beneficiairePersonne
     *
     * @return Commande
     */
    public function setBeneficiairePersonne(\Welinkeo\PanierBundle\Entity\Beneficiaire $beneficiairePersonne = null)
    {
        $this->beneficiairePersonne = $beneficiairePersonne;

        return $this;
    }

    /**
     * Get beneficiairePersonne
     *
     * @return \Welinkeo\PanierBundle\Entity\Beneficiaire
     */
    public function getBeneficiairePersonne()
    {
        return $this->beneficiairePersonne;
    }

    /**
     * Set utilisateurPersonne
     *
     * @param \Welinkeo\PanierBundle\Entity\Utilisateur $utilisateurPersonne
     *
     * @return Commande
     */
    public function setUtilisateurPersonne(\Welinkeo\PanierBundle\Entity\Utilisateur $utilisateurPersonne = null)
    {
        $this->utilisateurPersonne = $utilisateurPersonne;

        return $this;
    }

    /**
     * Get utilisateurPersonne
     *
     * @return \Welinkeo\PanierBundle\Entity\Utilisateur
     */
    public function getUtilisateurPersonne()
    {
        return $this->utilisateurPersonne;
    }

    /**
     * Set pointlivraison
     *
     * @param \Welinkeo\PanierBundle\Entity\Pointlivraison $pointlivraison
     *
     * @return Commande
     */
    public function setPointlivraison(\Welinkeo\PanierBundle\Entity\Pointlivraison $pointlivraison = null)
    {
        $this->pointlivraison = $pointlivraison;

        return $this;
    }

    /**
     * Get pointlivraison
     *
     * @return \Welinkeo\PanierBundle\Entity\Pointlivraison
     */
    public function getPointlivraison()
    {
        return $this->pointlivraison;
    }
}
