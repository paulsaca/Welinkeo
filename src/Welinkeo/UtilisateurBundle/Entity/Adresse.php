<?php

namespace Welinkeo\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Adresse
 *
 * @ORM\Table(name="adresse", indexes={@ORM\Index(name="fk_adresse_pays1_idx", columns={"pays_id"})})
 * @ORM\Entity
 */
class Adresse
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
     * @Assert\NotBlank(message = "Ce champ ne peut pas etre vide."
     *	)
     *
     * @Assert\Length(
     * 			min = 4,
     * 			max = 150,
     * 			minMessage = "minimum {{ limit }} caracteres.",			
     * 			maxMessage = "maximum {{ limit }} caracteres."
     * )
     *
     * @ORM\Column(name="adresse", type="string", length=150, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @Assert\NotBlank(message = "Ce champ ne peut pas etre vide."
     *	)
     *
     * @Assert\Length(
     * 			min = 2,
     * 			max = 30,
     * 			minMessage = "minimum {{ limit }} caracteres.",			
     * 			maxMessage = "maximum {{ limit }} caracteres."
     * )
     *
     * @ORM\Column(name="ville", type="string", length=30, nullable=false)
     */
    private $ville;

    /**
     * @var string
     *
     *
     * @Assert\Length(
     * 			max = 10,	
     * 			maxMessage = "maximum {{ limit }} caracteres."
     * )
     *
     * @ORM\Column(name="codePostal", type="string", length=10, nullable=true)
     */
    private $codepostal;

    /**
     * @var string
     *
     * @Assert\Length(
     * 			max = 100,			
     * 			maxMessage = "maximum {{ limit }} caracteres."
     * )
     *
     * @ORM\Column(name="communeCartier", type="string", length=100, nullable=true)
     */
    private $communecartier;

    /**
     * @var string
     *
     * @Assert\Length(
     * 			max = 300,			
     * 			maxMessage = "maximum {{ limit }} caracteres."
     * )
     *
     * @ORM\Column(name="autre", type="string", length=300, nullable=true)
     */
    private $autre;

    /**
     * @var \Pays
     *
     * @ORM\ManyToOne(targetEntity="Pays")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pays_id", referencedColumnName="id")
     * })
     */
    private $pays;



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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Adresse
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set codepostal
     *
     * @param string $codepostal
     *
     * @return Adresse
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get codepostal
     *
     * @return string
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Set communecartier
     *
     * @param string $communecartier
     *
     * @return Adresse
     */
    public function setCommunecartier($communecartier)
    {
        $this->communecartier = $communecartier;

        return $this;
    }

    /**
     * Get communecartier
     *
     * @return string
     */
    public function getCommunecartier()
    {
        return $this->communecartier;
    }

    /**
     * Set autre
     *
     * @param string $autre
     *
     * @return Adresse
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
     * Set pays
     *
     * @param \Welinkeo\UtilisateurBundle\Entity\Pays $pays
     *
     * @return Adresse
     */
    public function setPays(\Welinkeo\UtilisateurBundle\Entity\Pays $pays = null)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return \Welinkeo\UtilisateurBundle\Entity\Pays
     */
    public function getPays()
    {
        return $this->pays;
    }
}
