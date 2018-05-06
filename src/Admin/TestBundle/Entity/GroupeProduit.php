<?php

namespace Admin\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupeProduit
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\TestBundle\Entity\GroupeProduitRepository")
 */
class GroupeProduit
{

    /**
     * @ORM\OneToMany(targetEntity="Admin\TestBundle\Entity\DetailCmd",mappedBy="$grpProduit")
     */
    private $GPdetail;

    /**
     * @ORM\ManyToOne(targetEntity="Admin\TestBundle\Entity\Produit",inversedBy="cmd")
     * @ORM\JoinColumn(nullable=true)
     */
    private $Produit;



    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="lib", type="string", length=50)
     */
    private $lib;

    /**
     * @var string
     *
     * @ORM\Column(name="oeifNational", type="decimal")
     */
    private $CoeifNational;

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean")
     */
    private $type;


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
     * Set lib
     *
     * @param string $lib
     *
     * @return GroupeProduit
     */
    public function setLib($lib)
    {
        $this->lib = $lib;

        return $this;
    }

    /**
     * Get lib
     *
     * @return string
     */
    public function getLib()
    {
        return $this->lib;
    }

    /**
     * Set oeifNational
     *
     * @param string $oeifNational
     *
     * @return GroupeProduit
     */
    public function setOeifNational($oeifNational)
    {
        $this->oeifNational = $oeifNational;

        return $this;
    }

    /**
     * Get oeifNational
     *
     * @return string
     */
    public function getOeifNational()
    {
        return $this->oeifNational;
    }

    /**
     * Set type
     *
     * @param boolean $type
     *
     * @return GroupeProduit
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cmddetail = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set coeifNational
     *
     * @param string $coeifNational
     *
     * @return GroupeProduit
     */
    public function setCoeifNational($coeifNational)
    {
        $this->CoeifNational = $coeifNational;

        return $this;
    }

    /**
     * Get coeifNational
     *
     * @return string
     */
    public function getCoeifNational()
    {
        return $this->CoeifNational;
    }

    /**
     * Add cmddetail
     *
     * @param \Admin\TestBundle\Entity\cmd $cmddetail
     *
     * @return GroupeProduit
     */
    public function addCmddetail(\Admin\TestBundle\Entity\cmd $cmddetail)
    {
        $this->cmddetail[] = $cmddetail;

        return $this;
    }

    /**
     * Remove cmddetail
     *
     * @param \Admin\TestBundle\Entity\cmd $cmddetail
     */
    public function removeCmddetail(\Admin\TestBundle\Entity\cmd $cmddetail)
    {
        $this->cmddetail->removeElement($cmddetail);
    }

    /**
     * Get cmddetail
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCmddetail()
    {
        return $this->cmddetail;
    }

    /**
     * Add gpProduit
     *
     * @param \Admin\TestBundle\Entity\DetailCmd $gpProduit
     *
     * @return GroupeProduit
     */
    public function addGpProduit(\Admin\TestBundle\Entity\DetailCmd $gpProduit)
    {
        $this->gpProduit[] = $gpProduit;

        return $this;
    }

    /**
     * Remove gpProduit
     *
     * @param \Admin\TestBundle\Entity\DetailCmd $gpProduit
     */
    public function removeGpProduit(\Admin\TestBundle\Entity\DetailCmd $gpProduit)
    {
        $this->gpProduit->removeElement($gpProduit);
    }

    /**
     * Get gpProduit
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGpProduit()
    {
        return $this->gpProduit;
    }

    /**
     * Set produit
     *
     * @param \Admin\TestBundle\Entity\GroupeProduit $produit
     *
     * @return GroupeProduit
     */
    public function setProduit(\Admin\TestBundle\Entity\GroupeProduit $produit = null)
    {
        $this->Produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return \Admin\TestBundle\Entity\GroupeProduit
     */
    public function getProduit()
    {
        return $this->Produit;
    }

    /**
     * Add gPdetail
     *
     * @param \Admin\TestBundle\Entity\DetailCmd $gPdetail
     *
     * @return GroupeProduit
     */
    public function addGPdetail(\Admin\TestBundle\Entity\DetailCmd $gPdetail)
    {
        $this->GPdetail[] = $gPdetail;

        return $this;
    }

    /**
     * Remove gPdetail
     *
     * @param \Admin\TestBundle\Entity\DetailCmd $gPdetail
     */
    public function removeGPdetail(\Admin\TestBundle\Entity\DetailCmd $gPdetail)
    {
        $this->GPdetail->removeElement($gPdetail);
    }

    /**
     * Get gPdetail
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGPdetail()
    {
        return $this->GPdetail;
    }

    public function __toString ()
    {
        return (string)$this->getId();
    }


}
