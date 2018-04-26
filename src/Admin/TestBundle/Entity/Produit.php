<?php

namespace Admin\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\TestBundle\Entity\ProduitRepository")
 */
class Produit
{
    /**
     * @ORM\OneToMany(targetEntity="Admin\TestBundle\Entity\GroupeProduit",mappedBy="detail")
     */
    private $Produit;

    /**
     * @ORM\ManyToOne(targetEntity="Admin\TestBundle\Entity\DetailCmd",inversedBy="cmd")
     * @ORM\JoinColumn(nullable=true)
     */
    private $specialiteP;


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
     * @ORM\Column(name="libelle", type="string", length=50)
     */
    private $libelle;


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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Produit
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Produit = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add produit
     *
     * @param \Admin\TestBundle\Entity\GroupeProduit $produit
     *
     * @return Produit
     */
    public function addProduit(\Admin\TestBundle\Entity\GroupeProduit $produit)
    {
        $this->Produit[] = $produit;

        return $this;
    }

    /**
     * Remove produit
     *
     * @param \Admin\TestBundle\Entity\GroupeProduit $produit
     */
    public function removeProduit(\Admin\TestBundle\Entity\GroupeProduit $produit)
    {
        $this->Produit->removeElement($produit);
    }

    /**
     * Get produit
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProduit()
    {
        return $this->Produit;
    }

    /**
     * Set specialitesP
     *
     * @param \Admin\TestBundle\Entity\DetailCmd $specialitesP
     *
     * @return Produit
     */
    public function setSpecialitesP(\Admin\TestBundle\Entity\DetailCmd $specialitesP = null)
    {
        $this->specialitesP = $specialitesP;

        return $this;
    }

    /**
     * Get specialitesP
     *
     * @return \Admin\TestBundle\Entity\DetailCmd
     */
    public function getSpecialitesP()
    {
        return $this->specialitesP;
    }

    /**
     * Set specialiteP
     *
     * @param \Admin\TestBundle\Entity\DetailCmd $specialiteP
     *
     * @return Produit
     */
    public function setSpecialiteP(\Admin\TestBundle\Entity\DetailCmd $specialiteP = null)
    {
        $this->specialiteP = $specialiteP;

        return $this;
    }

    /**
     * Get specialiteP
     *
     * @return \Admin\TestBundle\Entity\DetailCmd
     */
    public function getSpecialiteP()
    {
        return $this->specialiteP;
    }
}
