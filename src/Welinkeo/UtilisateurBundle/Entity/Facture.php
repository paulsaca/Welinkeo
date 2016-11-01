<?php

namespace Welinkeo\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="facture")
 * @ORM\Entity(repositoryClass="Welinkeo\UtilisateurBundle\Repository\FactureRepository")
 */
class Facture
{
    /**
     * @var string
     *
     * @ORM\Column(name="nomPostNomClient", type="string", length=45, nullable=false)
     */
    private $nompostnomclient;

    /**
     * @var string
     *
     * @ORM\Column(name="PrenomClient", type="string", length=30, nullable=false)
     */
    private $prenomclient;

    /**
     * @var string
     *
     * @ORM\Column(name="CiviliteClient", type="string", length=20, nullable=false)
     */
    private $civiliteclient;

    /**
     * @var string
     *
     * @ORM\Column(name="paysClient", type="string", length=50, nullable=false)
     */
    private $paysclient;

    /**
     * @var string
     *
     * @ORM\Column(name="emailClient", type="string", length=100, nullable=false)
     */
    private $emailclient;

    /**
     * @var string
     *
     * @ORM\Column(name="telephoneClient", type="string", length=15, nullable=false)
     */
    private $telephoneclient;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseClient", type="string", length=150, nullable=false)
     */
    private $adresseclient;

    /**
     * @var string
     *
     * @ORM\Column(name="codePostalClient", type="string", length=10, nullable=false)
     */
    private $codepostalclient;

    /**
     * @var string
     *
     * @ORM\Column(name="villeClient", type="string", length=30, nullable=false)
     */
    private $villeclient;

    /**
     * @var string
     *
     * @ORM\Column(name="communeCartierClient", type="string", length=100, nullable=true)
     */
    private $communecartierclient;

    /**
     * @var string
     *
     * @ORM\Column(name="autreInfoAdresseClient", type="string", length=300, nullable=true)
     */
    private $autreinfoadresseclient;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPostNomBeneficiaire", type="string", length=100, nullable=false)
     */
    private $nompostnombeneficiaire;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomBeneficiaire", type="string", length=30, nullable=false)
     */
    private $prenombeneficiaire;

    /**
     * @var string
     *
     * @ORM\Column(name="civiliteBeneficiaire", type="string", length=30, nullable=false)
     */
    private $civilitebeneficiaire;

    /**
     * @var string
     *
     * @ORM\Column(name="paysBeneficiaire", type="string", length=45, nullable=false)
     */
    private $paysbeneficiaire;

    /**
     * @var string
     *
     * @ORM\Column(name="telephoneBeneficiare", type="string", length=15, nullable=false)
     */
    private $telephonebeneficiare;

    /**
     * @var string
     *
     * @ORM\Column(name="emailBeneficiare", type="string", length=100, nullable=false)
     */
    private $emailbeneficiare;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseBeneficaire", type="string", length=150, nullable=false)
     */
    private $adressebeneficaire;

    /**
     * @var string
     *
     * @ORM\Column(name="codePostalBeneficiaire", type="string", length=10, nullable=false)
     */
    private $codepostalbeneficiaire;

    /**
     * @var string
     *
     * @ORM\Column(name="villeBeneficaire", type="string", length=30, nullable=false)
     */
    private $villebeneficaire;

    /**
     * @var string
     *
     * @ORM\Column(name="communeCartierBeneficiaire", type="string", length=100, nullable=false)
     */
    private $communecartierbeneficiaire;

    /**
     * @var string
     *
     * @ORM\Column(name="autreInfoAdresseBeneficiaire", type="string", length=300, nullable=false)
     */
    private $autreinfoadressebeneficiaire;

    /**
     * @var string
     *
     * @ORM\Column(name="modeLivraison", type="string", length=45, nullable=false)
     */
    private $modelivraison;

    /**
     * @var string
     *
     * @ORM\Column(name="modePaiement", type="string", length=45, nullable=false)
     */
    private $modepaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseAgence", type="string", length=150, nullable=false)
     */
    private $adresseagence;

    /**
     * @var string
     *
     * @ORM\Column(name="codePostalAgence", type="string", length=45, nullable=false)
     */
    private $codepostalagence;

    /**
     * @var string
     *
     * @ORM\Column(name="paysAgence", type="string", length=45, nullable=false)
     */
    private $paysagence;

    /**
     * @var string
     *
     * @ORM\Column(name="villeAgence", type="string", length=30, nullable=false)
     */
    private $villeagence;

    /**
     * @var string
     *
     * @ORM\Column(name="communeCartierAgence", type="string", length=100, nullable=false)
     */
    private $communecartieragence;

    /**
     * @var string
     *
     * @ORM\Column(name="autreInfoAdresseAgence", type="string", length=300, nullable=false)
     */
    private $autreinfoadresseagence;

    /**
     * @var integer
     *
     * @ORM\Column(name="pointFidelite", type="integer", nullable=false)
     */
    private $pointfidelite;

    /**
     * @var integer
     *
     * @ORM\Column(name="cumulTotalPointFidelite", type="integer", nullable=false)
     */
    private $cumultotalpointfidelite;

    /**
     * @var string
     *
     * @ORM\Column(name="questionTest", type="string", length=30, nullable=false)
     */
    private $questiontest;

    /**
     * @var string
     *
     * @ORM\Column(name="reponseTest", type="string", length=30, nullable=false)
     */
    private $reponsetest;

    /**
     * @var string
     *
     * @ORM\Column(name="elementIdentification", type="string", length=45, nullable=false)
     */
    private $elementidentification;

    /**
     * @var \Commande
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="commande_numeroCommande", referencedColumnName="numeroCommande")
     * })
     */
    private $commandeNumerocommande;



    /**
     * Set nompostnomclient
     *
     * @param string $nompostnomclient
     *
     * @return Facture
     */
    public function setNompostnomclient($nompostnomclient)
    {
        $this->nompostnomclient = $nompostnomclient;

        return $this;
    }

    /**
     * Get nompostnomclient
     *
     * @return string
     */
    public function getNompostnomclient()
    {
        return $this->nompostnomclient;
    }

    /**
     * Set prenomclient
     *
     * @param string $prenomclient
     *
     * @return Facture
     */
    public function setPrenomclient($prenomclient)
    {
        $this->prenomclient = $prenomclient;

        return $this;
    }

    /**
     * Get prenomclient
     *
     * @return string
     */
    public function getPrenomclient()
    {
        return $this->prenomclient;
    }

    /**
     * Set civiliteclient
     *
     * @param string $civiliteclient
     *
     * @return Facture
     */
    public function setCiviliteclient($civiliteclient)
    {
        $this->civiliteclient = $civiliteclient;

        return $this;
    }

    /**
     * Get civiliteclient
     *
     * @return string
     */
    public function getCiviliteclient()
    {
        return $this->civiliteclient;
    }

    /**
     * Set paysclient
     *
     * @param string $paysclient
     *
     * @return Facture
     */
    public function setPaysclient($paysclient)
    {
        $this->paysclient = $paysclient;

        return $this;
    }

    /**
     * Get paysclient
     *
     * @return string
     */
    public function getPaysclient()
    {
        return $this->paysclient;
    }

    /**
     * Set emailclient
     *
     * @param string $emailclient
     *
     * @return Facture
     */
    public function setEmailclient($emailclient)
    {
        $this->emailclient = $emailclient;

        return $this;
    }

    /**
     * Get emailclient
     *
     * @return string
     */
    public function getEmailclient()
    {
        return $this->emailclient;
    }

    /**
     * Set telephoneclient
     *
     * @param string $telephoneclient
     *
     * @return Facture
     */
    public function setTelephoneclient($telephoneclient)
    {
        $this->telephoneclient = $telephoneclient;

        return $this;
    }

    /**
     * Get telephoneclient
     *
     * @return string
     */
    public function getTelephoneclient()
    {
        return $this->telephoneclient;
    }

    /**
     * Set adresseclient
     *
     * @param string $adresseclient
     *
     * @return Facture
     */
    public function setAdresseclient($adresseclient)
    {
        $this->adresseclient = $adresseclient;

        return $this;
    }

    /**
     * Get adresseclient
     *
     * @return string
     */
    public function getAdresseclient()
    {
        return $this->adresseclient;
    }

    /**
     * Set codepostalclient
     *
     * @param string $codepostalclient
     *
     * @return Facture
     */
    public function setCodepostalclient($codepostalclient)
    {
        $this->codepostalclient = $codepostalclient;

        return $this;
    }

    /**
     * Get codepostalclient
     *
     * @return string
     */
    public function getCodepostalclient()
    {
        return $this->codepostalclient;
    }

    /**
     * Set villeclient
     *
     * @param string $villeclient
     *
     * @return Facture
     */
    public function setVilleclient($villeclient)
    {
        $this->villeclient = $villeclient;

        return $this;
    }

    /**
     * Get villeclient
     *
     * @return string
     */
    public function getVilleclient()
    {
        return $this->villeclient;
    }

    /**
     * Set communecartierclient
     *
     * @param string $communecartierclient
     *
     * @return Facture
     */
    public function setCommunecartierclient($communecartierclient)
    {
        $this->communecartierclient = $communecartierclient;

        return $this;
    }

    /**
     * Get communecartierclient
     *
     * @return string
     */
    public function getCommunecartierclient()
    {
        return $this->communecartierclient;
    }

    /**
     * Set autreinfoadresseclient
     *
     * @param string $autreinfoadresseclient
     *
     * @return Facture
     */
    public function setAutreinfoadresseclient($autreinfoadresseclient)
    {
        $this->autreinfoadresseclient = $autreinfoadresseclient;

        return $this;
    }

    /**
     * Get autreinfoadresseclient
     *
     * @return string
     */
    public function getAutreinfoadresseclient()
    {
        return $this->autreinfoadresseclient;
    }

    /**
     * Set nompostnombeneficiaire
     *
     * @param string $nompostnombeneficiaire
     *
     * @return Facture
     */
    public function setNompostnombeneficiaire($nompostnombeneficiaire)
    {
        $this->nompostnombeneficiaire = $nompostnombeneficiaire;

        return $this;
    }

    /**
     * Get nompostnombeneficiaire
     *
     * @return string
     */
    public function getNompostnombeneficiaire()
    {
        return $this->nompostnombeneficiaire;
    }

    /**
     * Set prenombeneficiaire
     *
     * @param string $prenombeneficiaire
     *
     * @return Facture
     */
    public function setPrenombeneficiaire($prenombeneficiaire)
    {
        $this->prenombeneficiaire = $prenombeneficiaire;

        return $this;
    }

    /**
     * Get prenombeneficiaire
     *
     * @return string
     */
    public function getPrenombeneficiaire()
    {
        return $this->prenombeneficiaire;
    }

    /**
     * Set civilitebeneficiaire
     *
     * @param string $civilitebeneficiaire
     *
     * @return Facture
     */
    public function setCivilitebeneficiaire($civilitebeneficiaire)
    {
        $this->civilitebeneficiaire = $civilitebeneficiaire;

        return $this;
    }

    /**
     * Get civilitebeneficiaire
     *
     * @return string
     */
    public function getCivilitebeneficiaire()
    {
        return $this->civilitebeneficiaire;
    }

    /**
     * Set paysbeneficiaire
     *
     * @param string $paysbeneficiaire
     *
     * @return Facture
     */
    public function setPaysbeneficiaire($paysbeneficiaire)
    {
        $this->paysbeneficiaire = $paysbeneficiaire;

        return $this;
    }

    /**
     * Get paysbeneficiaire
     *
     * @return string
     */
    public function getPaysbeneficiaire()
    {
        return $this->paysbeneficiaire;
    }

    /**
     * Set telephonebeneficiare
     *
     * @param string $telephonebeneficiare
     *
     * @return Facture
     */
    public function setTelephonebeneficiare($telephonebeneficiare)
    {
        $this->telephonebeneficiare = $telephonebeneficiare;

        return $this;
    }

    /**
     * Get telephonebeneficiare
     *
     * @return string
     */
    public function getTelephonebeneficiare()
    {
        return $this->telephonebeneficiare;
    }

    /**
     * Set emailbeneficiare
     *
     * @param string $emailbeneficiare
     *
     * @return Facture
     */
    public function setEmailbeneficiare($emailbeneficiare)
    {
        $this->emailbeneficiare = $emailbeneficiare;

        return $this;
    }

    /**
     * Get emailbeneficiare
     *
     * @return string
     */
    public function getEmailbeneficiare()
    {
        return $this->emailbeneficiare;
    }

    /**
     * Set adressebeneficaire
     *
     * @param string $adressebeneficaire
     *
     * @return Facture
     */
    public function setAdressebeneficaire($adressebeneficaire)
    {
        $this->adressebeneficaire = $adressebeneficaire;

        return $this;
    }

    /**
     * Get adressebeneficaire
     *
     * @return string
     */
    public function getAdressebeneficaire()
    {
        return $this->adressebeneficaire;
    }

    /**
     * Set codepostalbeneficiaire
     *
     * @param string $codepostalbeneficiaire
     *
     * @return Facture
     */
    public function setCodepostalbeneficiaire($codepostalbeneficiaire)
    {
        $this->codepostalbeneficiaire = $codepostalbeneficiaire;

        return $this;
    }

    /**
     * Get codepostalbeneficiaire
     *
     * @return string
     */
    public function getCodepostalbeneficiaire()
    {
        return $this->codepostalbeneficiaire;
    }

    /**
     * Set villebeneficaire
     *
     * @param string $villebeneficaire
     *
     * @return Facture
     */
    public function setVillebeneficaire($villebeneficaire)
    {
        $this->villebeneficaire = $villebeneficaire;

        return $this;
    }

    /**
     * Get villebeneficaire
     *
     * @return string
     */
    public function getVillebeneficaire()
    {
        return $this->villebeneficaire;
    }

    /**
     * Set communecartierbeneficiaire
     *
     * @param string $communecartierbeneficiaire
     *
     * @return Facture
     */
    public function setCommunecartierbeneficiaire($communecartierbeneficiaire)
    {
        $this->communecartierbeneficiaire = $communecartierbeneficiaire;

        return $this;
    }

    /**
     * Get communecartierbeneficiaire
     *
     * @return string
     */
    public function getCommunecartierbeneficiaire()
    {
        return $this->communecartierbeneficiaire;
    }

    /**
     * Set autreinfoadressebeneficiaire
     *
     * @param string $autreinfoadressebeneficiaire
     *
     * @return Facture
     */
    public function setAutreinfoadressebeneficiaire($autreinfoadressebeneficiaire)
    {
        $this->autreinfoadressebeneficiaire = $autreinfoadressebeneficiaire;

        return $this;
    }

    /**
     * Get autreinfoadressebeneficiaire
     *
     * @return string
     */
    public function getAutreinfoadressebeneficiaire()
    {
        return $this->autreinfoadressebeneficiaire;
    }

    /**
     * Set modelivraison
     *
     * @param string $modelivraison
     *
     * @return Facture
     */
    public function setModelivraison($modelivraison)
    {
        $this->modelivraison = $modelivraison;

        return $this;
    }

    /**
     * Get modelivraison
     *
     * @return string
     */
    public function getModelivraison()
    {
        return $this->modelivraison;
    }

    /**
     * Set modepaiement
     *
     * @param string $modepaiement
     *
     * @return Facture
     */
    public function setModepaiement($modepaiement)
    {
        $this->modepaiement = $modepaiement;

        return $this;
    }

    /**
     * Get modepaiement
     *
     * @return string
     */
    public function getModepaiement()
    {
        return $this->modepaiement;
    }

    /**
     * Set adresseagence
     *
     * @param string $adresseagence
     *
     * @return Facture
     */
    public function setAdresseagence($adresseagence)
    {
        $this->adresseagence = $adresseagence;

        return $this;
    }

    /**
     * Get adresseagence
     *
     * @return string
     */
    public function getAdresseagence()
    {
        return $this->adresseagence;
    }

    /**
     * Set codepostalagence
     *
     * @param string $codepostalagence
     *
     * @return Facture
     */
    public function setCodepostalagence($codepostalagence)
    {
        $this->codepostalagence = $codepostalagence;

        return $this;
    }

    /**
     * Get codepostalagence
     *
     * @return string
     */
    public function getCodepostalagence()
    {
        return $this->codepostalagence;
    }

    /**
     * Set paysagence
     *
     * @param string $paysagence
     *
     * @return Facture
     */
    public function setPaysagence($paysagence)
    {
        $this->paysagence = $paysagence;

        return $this;
    }

    /**
     * Get paysagence
     *
     * @return string
     */
    public function getPaysagence()
    {
        return $this->paysagence;
    }

    /**
     * Set villeagence
     *
     * @param string $villeagence
     *
     * @return Facture
     */
    public function setVilleagence($villeagence)
    {
        $this->villeagence = $villeagence;

        return $this;
    }

    /**
     * Get villeagence
     *
     * @return string
     */
    public function getVilleagence()
    {
        return $this->villeagence;
    }

    /**
     * Set communecartieragence
     *
     * @param string $communecartieragence
     *
     * @return Facture
     */
    public function setCommunecartieragence($communecartieragence)
    {
        $this->communecartieragence = $communecartieragence;

        return $this;
    }

    /**
     * Get communecartieragence
     *
     * @return string
     */
    public function getCommunecartieragence()
    {
        return $this->communecartieragence;
    }

    /**
     * Set autreinfoadresseagence
     *
     * @param string $autreinfoadresseagence
     *
     * @return Facture
     */
    public function setAutreinfoadresseagence($autreinfoadresseagence)
    {
        $this->autreinfoadresseagence = $autreinfoadresseagence;

        return $this;
    }

    /**
     * Get autreinfoadresseagence
     *
     * @return string
     */
    public function getAutreinfoadresseagence()
    {
        return $this->autreinfoadresseagence;
    }

    /**
     * Set pointfidelite
     *
     * @param integer $pointfidelite
     *
     * @return Facture
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
     * Set cumultotalpointfidelite
     *
     * @param integer $cumultotalpointfidelite
     *
     * @return Facture
     */
    public function setCumultotalpointfidelite($cumultotalpointfidelite)
    {
        $this->cumultotalpointfidelite = $cumultotalpointfidelite;

        return $this;
    }

    /**
     * Get cumultotalpointfidelite
     *
     * @return integer
     */
    public function getCumultotalpointfidelite()
    {
        return $this->cumultotalpointfidelite;
    }

    /**
     * Set questiontest
     *
     * @param string $questiontest
     *
     * @return Facture
     */
    public function setQuestiontest($questiontest)
    {
        $this->questiontest = $questiontest;

        return $this;
    }

    /**
     * Get questiontest
     *
     * @return string
     */
    public function getQuestiontest()
    {
        return $this->questiontest;
    }

    /**
     * Set reponsetest
     *
     * @param string $reponsetest
     *
     * @return Facture
     */
    public function setReponsetest($reponsetest)
    {
        $this->reponsetest = $reponsetest;

        return $this;
    }

    /**
     * Get reponsetest
     *
     * @return string
     */
    public function getReponsetest()
    {
        return $this->reponsetest;
    }

    /**
     * Set elementidentification
     *
     * @param string $elementidentification
     *
     * @return Facture
     */
    public function setElementidentification($elementidentification)
    {
        $this->elementidentification = $elementidentification;

        return $this;
    }

    /**
     * Get elementidentification
     *
     * @return string
     */
    public function getElementidentification()
    {
        return $this->elementidentification;
    }

    /**
     * Set commandeNumerocommande
     *
     * @param \Welinkeo\UtilisateurBundle\Entity\Commande $commandeNumerocommande
     *
     * @return Facture
     */
    public function setCommandeNumerocommande(\Welinkeo\UtilisateurBundle\Entity\Commande $commandeNumerocommande)
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
