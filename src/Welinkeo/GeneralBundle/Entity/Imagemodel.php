<?php

namespace Welinkeo\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Imagemodel
 *
 * @ORM\Entity(repositoryClass="Welinkeo\GeneralBundle\Repository\ImagemodelRepository")
 * @ORM\Entity
 */
class Imagemodel
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
     * @ORM\Column(name="url", type="string", length=45, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50, nullable=false)
     */
    private $title;

    /**
     * @var \Model
     *
     * @ORM\ManyToOne(targetEntity="Model")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="model_Id", referencedColumnName="id")
     * })
     */
    private $model;



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
     * Set url
     *
     * @param string $url
     *
     * @return Imagemodel
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
     * Set title
     *
     * @param string $title
     *
     * @return Imagemodel
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
     * Set model
     *
     * @param \Welinkeo\GeneralBundle\Entity\Model $model
     *
     * @return Imagemodel
     */
    public function setModel(\Welinkeo\GeneralBundle\Entity\Model $model = null)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return \Welinkeo\GeneralBundle\Entity\Model
     */
    public function getModel()
    {
        return $this->model;
    }
}
