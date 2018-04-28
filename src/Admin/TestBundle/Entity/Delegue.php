<?php

namespace Admin\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Delegue
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Delegue
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
     * @ORM\OneToMany(targetEntity="Admin\TestBundle\Entity\cmd",mappedBy="delgues")
     */
    private $commandes;


    /**
     * @ORM\ManyToOne(targetEntity="Admin\TestBundle\Entity\Diplome",inversedBy="delegues")
     */
    private $diplome;

    /**
     * @var string
     *
     * @ORM\Column(name="PF_EMP_Nom", type="string", length=20)
     */
    private $pFNom;

    /**
     * @var string
     *
     * @ORM\Column(name="PF_EMP_Prenom", type="string", length=20)
     */
    private $pFPrenom;

    /**
     * @var \DateEmb
     *
     * @ORM\Column(name="PF_EMP_DateEmb", type="datetime")
     */
    private $pFDateEmb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PF_EMP_DateSortie", type="datetime")
     */
    private $pFDateSortie;

    /**
     * @var string
     *
     * @ORM\Column(name="PF_EMP_Tel", type="string", length=20)
     */
    private $pFTel;

    /**
     * @var string
     *
     * @ORM\Column(name="PF_EMP_Email", type="string", length=20)
     */
    private $pFEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="PF_EMP_Photo", type="string", length=256)
     */
    private $pFPhoto;

    /**
     * @var string
     *
     * @ORM\Column(name="PF_EMP_Commentaire", type="string", length=256)
     */
    private $pFCommentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="PF_EMP_Login", type="string", length=20)
     */
    private $pFLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="PF_EMP_HashPWD", type="text", length=256)
     */
    private $pFHashPWD;

    /**
     * @var string
     *
     * @ORM\Column(name="PF_EMP_Orant_Option", type="string", length=256)
     */
    private $pFOrantOption;

    /**
     * @var string
     *
     * @ORM\Column(name="PF_EMP_Etat", type="boolean", length=20)
     */
    private $pFEtat;




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
     * Set pFNom
     *
     * @param string $pFNom
     *
     * @return Delegue
     */
    public function setPFNom($pFNom)
    {
        $this->pFNom = $pFNom;

        return $this;
    }

    /**
     * Get pFNom
     *
     * @return string
     */
    public function getPFNom()
    {
        return $this->pFNom;
    }

    /**
     * Set pFPrenom
     *
     * @param string $pFPrenom
     *
     * @return Delegue
     */
    public function setPFPrenom($pFPrenom)
    {
        $this->pFPrenom = $pFPrenom;

        return $this;
    }

    /**
     * Get pFPrenom
     *
     * @return string
     */
    public function getPFPrenom()
    {
        return $this->pFPrenom;
    }

    /**
     * Set pFDateSortie
     *
     * @param \DateTime $pFDateSortie
     *
     * @return Delegue
     */
    public function setPFDateSortie($pFDateSortie)
    {
        $this->pFDateSortie = $pFDateSortie;

        return $this;
    }

    /**
     * Get pFDateSortie
     *
     * @return \DateTime
     */
    public function getPFDateSortie()
    {
        return $this->pFDateSortie;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->diplome = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set pFDateEmb
     *
     * @param \DateTime $pFDateEmb
     *
     * @return Delegue
     */
    public function setPFDateEmb($pFDateEmb)
    {
        $this->pFDateEmb = $pFDateEmb;

        return $this;
    }

    /**
     * Get pFDateEmb
     *
     * @return \DateTime
     */
    public function getPFDateEmb()
    {
        return $this->pFDateEmb;
    }

    /**
     * Set pFTel
     *
     * @param string $pFTel
     *
     * @return Delegue
     */
    public function setPFTel($pFTel)
    {
        $this->pFTel = $pFTel;

        return $this;
    }

    /**
     * Get pFTel
     *
     * @return string
     */
    public function getPFTel()
    {
        return $this->pFTel;
    }

    /**
     * Set pFEmail
     *
     * @param string $pFEmail
     *
     * @return Delegue
     */
    public function setPFEmail($pFEmail)
    {
        $this->pFEmail = $pFEmail;

        return $this;
    }

    /**
     * Get pFEmail
     *
     * @return string
     */
    public function getPFEmail()
    {
        return $this->pFEmail;
    }

    /**
     * Set pFPhoto
     *
     * @param string $pFPhoto
     *
     * @return Delegue
     */
    public function setPFPhoto($pFPhoto)
    {
        $this->pFPhoto = $pFPhoto;

        return $this;
    }

    /**
     * Get pFPhoto
     *
     * @return string
     */
    public function getPFPhoto()
    {
        return $this->pFPhoto;
    }

    /**
     * Set pFCommentaire
     *
     * @param string $pFCommentaire
     *
     * @return Delegue
     */
    public function setPFCommentaire($pFCommentaire)
    {
        $this->pFCommentaire = $pFCommentaire;

        return $this;
    }

    /**
     * Get pFCommentaire
     *
     * @return string
     */
    public function getPFCommentaire()
    {
        return $this->pFCommentaire;
    }

    /**
     * Set pFLogin
     *
     * @param string $pFLogin
     *
     * @return Delegue
     */
    public function setPFLogin($pFLogin)
    {
        $this->pFLogin = $pFLogin;

        return $this;
    }

    /**
     * Get pFLogin
     *
     * @return string
     */
    public function getPFLogin()
    {
        return $this->pFLogin;
    }

    /**
     * Set pFHashPWD
     *
     * @param string $pFHashPWD
     *
     * @return Delegue
     */
    public function setPFHashPWD($pFHashPWD)
    {
        $this->pFHashPWD = $pFHashPWD;

        return $this;
    }

    /**
     * Get pFHashPWD
     *
     * @return string
     */
    public function getPFHashPWD()
    {
        return $this->pFHashPWD;
    }

    /**
     * Set pFOrantOption
     *
     * @param string $pFOrantOption
     *
     * @return Delegue
     */
    public function setPFOrantOption($pFOrantOption)
    {
        $this->pFOrantOption = $pFOrantOption;

        return $this;
    }

    /**
     * Get pFOrantOption
     *
     * @return string
     */
    public function getPFOrantOption()
    {
        return $this->pFOrantOption;
    }

    /**
     * Set pFEtat
     *
     * @param boolean $pFEtat
     *
     * @return Delegue
     */
    public function setPFEtat($pFEtat)
    {
        $this->pFEtat = $pFEtat;

        return $this;
    }

    /**
     * Get pFEtat
     *
     * @return boolean
     */
    public function getPFEtat()
    {
        return $this->pFEtat;
    }

    /**
     * Add diplome
     *
     * @param \Admin\TestBundle\Entity\Diplome $diplome
     *
     * @return Delegue
     */
    public function addDiplome(\Admin\TestBundle\Entity\Diplome $diplome)
    {
        $this->diplome[] = $diplome;

        return $this;
    }

    /**
     * Remove diplome
     *
     * @param \Admin\TestBundle\Entity\Diplome $diplome
     */
    public function removeDiplome(\Admin\TestBundle\Entity\Diplome $diplome)
    {
        $this->diplome->removeElement($diplome);
    }

    /**
     * Get diplome
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDiplome()
    {
        return $this->diplome;
    }

    /**
     * Set diplome
     *
     * @param \Admin\TestBundle\Entity\Diplome $diplome
     *
     * @return Delegue
     */
    public function setDiplome(\Admin\TestBundle\Entity\Diplome $diplome)
    {
        $this->diplome = $diplome;

        return $this;
    }

    /**
     * Add commande
     *
     * @param \Admin\TestBundle\Entity\Commande_Pharmacie $commande
     *
     * @return Delegue
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

    public function __toString()
    {
        return $this->pFNom;
    }


}
