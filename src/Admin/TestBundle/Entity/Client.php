<?php

namespace Admin\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\TestBundle\Entity\ClientRepository")
 */
class Client
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
     * @ORM\OneToMany(targetEntity="Admin\TestBundle\Entity\cmd",mappedBy="Client")
     */
    private $commandes;


    /**
     * @var string
     *
     * @ORM\Column(name="PF_Phar_lib", type="string", length=50)
     */
    private $pFPharLib;

    /**
     * @var string
     *
     * @ORM\Column(name="PF_Phar_Adresse", type="string", length=265)
     */
    private $pFPharAdresse;

    /**
     * @var string
     *
     * @ORM\Column(name="PF_Phar_Nom", type="string", length=20)
     */
    private $pFPharNom;

    /**
     * @var string
     *
     * @ORM\Column(name="PF_Phar_Prenom", type="string", length=20)
     */
    private $pFPharPrenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PF_Phar_Date_Maj", type="date")
     */
    private $pFPharDateMaj;


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
     * Set pFPharLib
     *
     * @param string $pFPharLib
     *
     * @return Client
     */
    public function setPFPharLib($pFPharLib)
    {
        $this->pFPharLib = $pFPharLib;

        return $this;
    }

    /**
     * Get pFPharLib
     *
     * @return string
     */
    public function getPFPharLib()
    {
        return $this->pFPharLib;
    }

    /**
     * Set pFPharAdresse
     *
     * @param string $pFPharAdresse
     *
     * @return Client
     */
    public function setPFPharAdresse($pFPharAdresse)
    {
        $this->pFPharAdresse = $pFPharAdresse;

        return $this;
    }

    /**
     * Get pFPharAdresse
     *
     * @return string
     */
    public function getPFPharAdresse()
    {
        return $this->pFPharAdresse;
    }

    /**
     * Set pFPharNom
     *
     * @param string $pFPharNom
     *
     * @return Client
     */
    public function setPFPharNom($pFPharNom)
    {
        $this->pFPharNom = $pFPharNom;

        return $this;
    }

    /**
     * Get pFPharNom
     *
     * @return string
     */
    public function getPFPharNom()
    {
        return $this->pFPharNom;
    }

    /**
     * Set pFPharPrenom
     *
     * @param string $pFPharPrenom
     *
     * @return Client
     */
    public function setPFPharPrenom($pFPharPrenom)
    {
        $this->pFPharPrenom = $pFPharPrenom;

        return $this;
    }

    /**
     * Get pFPharPrenom
     *
     * @return string
     */
    public function getPFPharPrenom()
    {
        return $this->pFPharPrenom;
    }

    /**
     * Set pFPharDateMaj
     *
     * @param \DateTime $pFPharDateMaj
     *
     * @return Client
     */
    public function setPFPharDateMaj($pFPharDateMaj)
    {
        $this->pFPharDateMaj = $pFPharDateMaj;

        return $this;
    }

    /**
     * Get pFPharDateMaj
     *
     * @return \DateTime
     */
    public function getPFPharDateMaj()
    {
        return $this->pFPharDateMaj;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->commandes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add commande
     *
     * @param \Admin\TestBundle\Entity\cmd $commande
     *
     * @return Client
     */
    public function addCommande(\Admin\TestBundle\Entity\cmd $commande)
    {
        $this->commandes[] = $commande;

        return $this;
    }

    /**
     * Remove commande
     *
     * @param \Admin\TestBundle\Entity\cmd $commande
     */
    public function removeCommande(\Admin\TestBundle\Entity\cmd $commande)
    {
        $this->commandes->removeElement($commande);
    }

    /**
     * Get commandes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommandes()
    {
        return $this->commandes;
    }

    public function __toString ()
    {
        return $this->pFPharNom;
    }

}
