<?php

namespace Welinkeo\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Beneficiaire
 *
 * @ORM\Table(name="beneficiaire")
 * @ORM\Entity(repositoryClass="Welinkeo\GeneralBundle\Repository\BeneficiaireRepository")
 */
class Beneficiaire
{
    /**
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=30, nullable=false)
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse", type="string", length=30, nullable=false)
     */
    private $reponse;

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
     * Set question
     *
     * @param string $question
     *
     * @return Beneficiaire
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set reponse
     *
     * @param string $reponse
     *
     * @return Beneficiaire
     */
    public function setReponse($reponse)
    {
        $this->reponse = $reponse;

        return $this;
    }

    /**
     * Get reponse
     *
     * @return string
     */
    public function getReponse()
    {
        return $this->reponse;
    }

    /**
     * Set personne
     *
     * @param \Welinkeo\GeneralBundle\Entity\Personne $personne
     *
     * @return Beneficiaire
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
