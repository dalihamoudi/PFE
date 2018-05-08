<?php

namespace Admin\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DepenceBudget
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\TestBundle\Entity\DepenceBudgetRepository")
 */
class DepenceBudget
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="PF_DEPENCE_BUDGET_OBJ", type="string", length=100)
     */
    private $pFDEPENCEBUDGETOBJ;

    /**
     * @var string
     *
     * @ORM\Column(name="PF_DEPENCE_BUDGET_DESC", type="string", length=255)
     */
    private $pFDEPENCEBUDGETDESC;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PF_DEPENCE_BUDGET_date", type="date")
     */
    private $pFDEPENCEBUDGETDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PF_DEPENCE_BUDGET_fac_date", type="date")
     */
    private $pFDEPENCEBUDGETFacDate;

    /**
     * @var string
     *
     * @ORM\Column(name="PF_DEPENCE_BUDGET_Number", type="string", length=255)
     */
    private $pFDEPENCEBUDGETNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="PF_DEPENCE_BUDGET_Fac_Number", type="string", length=255)
     */
    private $pFDEPENCEBUDGETFacNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="PF_DEPENCE_BUDGET_PRIX_HT", type="decimal", precision=3, scale=0)
     */
    private $pFDEPENCEBUDGETPRIXHT;

    /**
     * @var int
     *
     * @ORM\Column(name="PF_DEPENCE_BUDGET_QTE", type="integer")
     */
    private $pFDEPENCEBUDGETQTE;

    /**
     * @var string
     *
     * @ORM\Column(name="PF_DEPENCE_BUDGET_TTC", type="decimal", precision=3, scale=0)
     */
    private $pFDEPENCEBUDGETTTC;

    /**
     * @ORM\ManyToOne(targetEntity="Admin\TestBundle\Entity\Etat", inversedBy="DepenceBudget")
     */
    private $Etats;
    /**
     * @ORM\ManyToOne(targetEntity="Admin\TestBundle\Entity\GroupeProduit", inversedBy="DepenceBudget")
     */
    private $GroupeProduits;

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
     * Set pFDEPENCEBUDGETOBJ
     *
     * @param string $pFDEPENCEBUDGETOBJ
     *
     * @return DepenceBudget
     */
    public function setPFDEPENCEBUDGETOBJ($pFDEPENCEBUDGETOBJ)
    {
        $this->pFDEPENCEBUDGETOBJ = $pFDEPENCEBUDGETOBJ;

        return $this;
    }

    /**
     * Get pFDEPENCEBUDGETOBJ
     *
     * @return string
     */
    public function getPFDEPENCEBUDGETOBJ()
    {
        return $this->pFDEPENCEBUDGETOBJ;
    }

    /**
     * Set pFDEPENCEBUDGETDESC
     *
     * @param string $pFDEPENCEBUDGETDESC
     *
     * @return DepenceBudget
     */
    public function setPFDEPENCEBUDGETDESC($pFDEPENCEBUDGETDESC)
    {
        $this->pFDEPENCEBUDGETDESC = $pFDEPENCEBUDGETDESC;

        return $this;
    }

    /**
     * Get pFDEPENCEBUDGETDESC
     *
     * @return string
     */
    public function getPFDEPENCEBUDGETDESC()
    {
        return $this->pFDEPENCEBUDGETDESC;
    }

    /**
     * Set pFDEPENCEBUDGETDate
     *
     * @param \DateTime $pFDEPENCEBUDGETDate
     *
     * @return DepenceBudget
     */
    public function setPFDEPENCEBUDGETDate($pFDEPENCEBUDGETDate)
    {
        $this->pFDEPENCEBUDGETDate = $pFDEPENCEBUDGETDate;

        return $this;
    }

    /**
     * Get pFDEPENCEBUDGETDate
     *
     * @return \DateTime
     */
    public function getPFDEPENCEBUDGETDate()
    {
        return $this->pFDEPENCEBUDGETDate;
    }

    /**
     * Set pFDEPENCEBUDGETFacDate
     *
     * @param \DateTime $pFDEPENCEBUDGETFacDate
     *
     * @return DepenceBudget
     */
    public function setPFDEPENCEBUDGETFacDate($pFDEPENCEBUDGETFacDate)
    {
        $this->pFDEPENCEBUDGETFacDate = $pFDEPENCEBUDGETFacDate;

        return $this;
    }

    /**
     * Get pFDEPENCEBUDGETFacDate
     *
     * @return \DateTime
     */
    public function getPFDEPENCEBUDGETFacDate()
    {
        return $this->pFDEPENCEBUDGETFacDate;
    }

    /**
     * Set pFDEPENCEBUDGETNumber
     *
     * @param string $pFDEPENCEBUDGETNumber
     *
     * @return DepenceBudget
     */
    public function setPFDEPENCEBUDGETNumber($pFDEPENCEBUDGETNumber)
    {
        $this->pFDEPENCEBUDGETNumber = $pFDEPENCEBUDGETNumber;

        return $this;
    }

    /**
     * Get pFDEPENCEBUDGETNumber
     *
     * @return string
     */
    public function getPFDEPENCEBUDGETNumber()
    {
        return $this->pFDEPENCEBUDGETNumber;
    }

    /**
     * Set pFDEPENCEBUDGETFacNumber
     *
     * @param string $pFDEPENCEBUDGETFacNumber
     *
     * @return DepenceBudget
     */
    public function setPFDEPENCEBUDGETFacNumber($pFDEPENCEBUDGETFacNumber)
    {
        $this->pFDEPENCEBUDGETFacNumber = $pFDEPENCEBUDGETFacNumber;

        return $this;
    }

    /**
     * Get pFDEPENCEBUDGETFacNumber
     *
     * @return string
     */
    public function getPFDEPENCEBUDGETFacNumber()
    {
        return $this->pFDEPENCEBUDGETFacNumber;
    }

    /**
     * Set pFDEPENCEBUDGETPRIXHT
     *
     * @param string $pFDEPENCEBUDGETPRIXHT
     *
     * @return DepenceBudget
b     */
    public function setPFDEPENCEBUDGETPRIXHT($pFDEPENCEBUDGETPRIXHT)
    {
        $this->pFDEPENCEBUDGETPRIXHT = $pFDEPENCEBUDGETPRIXHT;

        return $this;
    }

    /**
     * Get pFDEPENCEBUDGETPRIXHT
     *
     * @return string
     */
    public function getPFDEPENCEBUDGETPRIXHT()
    {
        return $this->pFDEPENCEBUDGETPRIXHT;
    }

    /**
     * Set pFDEPENCEBUDGETQTE
     *
     * @param integer $pFDEPENCEBUDGETQTE
     *
     * @return DepenceBudget
     */
    public function setPFDEPENCEBUDGETQTE($pFDEPENCEBUDGETQTE)
    {
        $this->pFDEPENCEBUDGETQTE = $pFDEPENCEBUDGETQTE;

        return $this;
    }

    /**
     * Get pFDEPENCEBUDGETQTE
     *
     * @return integer
     */
    public function getPFDEPENCEBUDGETQTE()
    {
        return $this->pFDEPENCEBUDGETQTE;
    }

    /**
     * Set pFDEPENCEBUDGETTTC
     *
     * @param string $pFDEPENCEBUDGETTTC
     *
     * @return DepenceBudget
     */
    public function setPFDEPENCEBUDGETTTC($pFDEPENCEBUDGETTTC)
    {
        $this->pFDEPENCEBUDGETTTC = $pFDEPENCEBUDGETTTC;

        return $this;
    }

    /**
     * Get pFDEPENCEBUDGETTTC
     *
     * @return string
     */
    public function getPFDEPENCEBUDGETTTC()
    {
        return $this->pFDEPENCEBUDGETTTC;
    }

    /**
     * Set Etats
     *
     * @param \Admin\TestBundle\Entity\Etat $Etats
     *
     * @return DepenceBudget
     */
    public function setEtats(\Admin\TestBundle\Entity\Etat $Etats = null)
    {
        $this->Etats = $Etats;

        return $this;
    }

    /**
     * Get Etats
     *
     * @return \Admin\TestBundle\Entity\Etat
     */
    public function getEtats()
    {
        return $this->Etats;
    }

    /**
     * Set groupeDeProduits
     *
     * @param \Admin\TestBundle\Entity\GroupeProduit $groupeProduits
     *
     * @return DepenceBudget
     */
    public function setGroupeProduits(\Admin\TestBundle\Entity\GroupeProduit $groupeProduits = null)
    {
        $this->GroupeProduits = $groupeProduits;

        return $this;
    }

    /**
     * Get groupeDeProduits
     *
     * @return \Admin\TestBundle\Entity\GroupeProduit
     */
    public function getGroupeProduits()
    {
        return $this->GroupeProduits;
    }



}
