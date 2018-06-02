<?php

namespace Admin\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Diplome
 *
 * @ORM\Table(name ="Diplome")
 * @ORM\Entity(repositoryClass="Admin\TestBundle\Entity\DiplomeRepository")
 */

class Diplome
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\OneToMany(targetEntity="Admin\TestBundle\Entity\Delegue",mappedBy="diplome")
     */
    private $delegues;

        /**
     * @var string
     *
     * @ORM\Column(name="PH_Diplome_Lib", type="string", length=50)
     */
    private $pHDiplomeLib;


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
     * Set pHDiplomeLib
     *
     * @param string $pHDiplomeLib
     *
     * @return Diplome
     */
    public function setPHDiplomeLib($pHDiplomeLib)
    {
        $this->pHDiplomeLib = $pHDiplomeLib;

        return $this;
    }

    /**
     * Get pHDiplomeLib
     *
     * @return string
     */
    public function getPHDiplomeLib()
    {
        return $this->pHDiplomeLib;
    }

    /**
     * Set delegues
     *
     * @param \Admin\TestBundle\Entity\Delegue $delegues
     *
     * @return Diplome
     */
    public function setDelegues(\Admin\TestBundle\Entity\Delegue $delegues)
    {
        $this->delegues = $delegues;

        return $this;
    }

    /**
     * Get delegues
     *
     * @return \Admin\TestBundle\Entity\Delegue
     */
    public function getDelegues()
    {
        return $this->delegues;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->delegues = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add delegue
     *
     * @param \Admin\TestBundle\Entity\Delegue $delegue
     *
     * @return Diplome
     */
    public function addDelegue(\Admin\TestBundle\Entity\Delegue $delegue)
    {
        $this->delegues[] = $delegue;

        return $this;
    }

    /**
     * Remove delegue
     *
     * @param \Admin\TestBundle\Entity\Delegue $delegue
     */
    public function removeDelegue(\Admin\TestBundle\Entity\Delegue $delegue)
    {
        $this->delegues->removeElement($delegue);
    }

    public function __toString ()
    {
        return (string)$this->getId();
    }

}
