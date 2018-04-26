<?php

namespace Admin\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Depense_Budget
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\TestBundle\Entity\Depense_BudgetRepository")
 */
class Depense_Budget
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
     * @var string
     *
     * @ORM\Column(name="PF_Depense_Budget_Obj", type="string", length=100)
     */
    private $pFDepenseBudgetObj;

    /**
     * @var string
     *
     * @ORM\Column(name="PF_Depense_Budget_Desc", type="string", length=256)
     */
    private $pFDepenseBudgetDesc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PF_Depense_Budget_Date", type="date")
     */
    private $pFDepenseBudgetDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PF_Depense_Budget_Fac_Date", type="date")
     */
    private $pFDepenseBudgetFacDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="PF_Depense_Budget_Number", type="integer")
     */
    private $pFDepenseBudgetNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="PF_Depense_Budget_Fac_Number", type="text")
     */
    private $pFDepenseBudgetFacNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="PF_Depense_Budget_Prix_Ht", type="decimal")
     */
    private $pFDepenseBudgetPrixHt;

    /**
     * @var integer
     *
     * @ORM\Column(name="PF_Depense_Budget_Qte", type="integer")
     */
    private $pFDepenseBudgetQte;

    /**
     * @var string
     *
     * @ORM\Column(name="PF_Depense_Budget_Ttc", type="decimal")
     */
    private $pFDepenseBudgetTtc;


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
     * Set pFDepenseBudgetObj
     *
     * @param string $pFDepenseBudgetObj
     *
     * @return Depense_Budget
     */
    public function setPFDepenseBudgetObj($pFDepenseBudgetObj)
    {
        $this->pFDepenseBudgetObj = $pFDepenseBudgetObj;

        return $this;
    }

    /**
     * Get pFDepenseBudgetObj
     *
     * @return string
     */
    public function getPFDepenseBudgetObj()
    {
        return $this->pFDepenseBudgetObj;
    }

    /**
     * Set pFDepenseBudgetDesc
     *
     * @param string $pFDepenseBudgetDesc
     *
     * @return Depense_Budget
     */
    public function setPFDepenseBudgetDesc($pFDepenseBudgetDesc)
    {
        $this->pFDepenseBudgetDesc = $pFDepenseBudgetDesc;

        return $this;
    }

    /**
     * Get pFDepenseBudgetDesc
     *
     * @return string
     */
    public function getPFDepenseBudgetDesc()
    {
        return $this->pFDepenseBudgetDesc;
    }

    /**
     * Set pFDepenseBudgetDate
     *
     * @param \DateTime $pFDepenseBudgetDate
     *
     * @return Depense_Budget
     */
    public function setPFDepenseBudgetDate($pFDepenseBudgetDate)
    {
        $this->pFDepenseBudgetDate = $pFDepenseBudgetDate;

        return $this;
    }

    /**
     * Get pFDepenseBudgetDate
     *
     * @return \DateTime
     */
    public function getPFDepenseBudgetDate()
    {
        return $this->pFDepenseBudgetDate;
    }

    /**
     * Set pFDepenseBudgetFacDate
     *
     * @param \DateTime $pFDepenseBudgetFacDate
     *
     * @return Depense_Budget
     */
    public function setPFDepenseBudgetFacDate($pFDepenseBudgetFacDate)
    {
        $this->pFDepenseBudgetFacDate = $pFDepenseBudgetFacDate;

        return $this;
    }

    /**
     * Get pFDepenseBudgetFacDate
     *
     * @return \DateTime
     */
    public function getPFDepenseBudgetFacDate()
    {
        return $this->pFDepenseBudgetFacDate;
    }

    /**
     * Set pFDepenseBudgetNumber
     *
     * @param integer $pFDepenseBudgetNumber
     *
     * @return Depense_Budget
     */
    public function setPFDepenseBudgetNumber($pFDepenseBudgetNumber)
    {
        $this->pFDepenseBudgetNumber = $pFDepenseBudgetNumber;

        return $this;
    }

    /**
     * Get pFDepenseBudgetNumber
     *
     * @return integer
     */
    public function getPFDepenseBudgetNumber()
    {
        return $this->pFDepenseBudgetNumber;
    }

    /**
     * Set pFDepenseBudgetFacNumber
     *
     * @param string $pFDepenseBudgetFacNumber
     *
     * @return Depense_Budget
     */
    public function setPFDepenseBudgetFacNumber($pFDepenseBudgetFacNumber)
    {
        $this->pFDepenseBudgetFacNumber = $pFDepenseBudgetFacNumber;

        return $this;
    }

    /**
     * Get pFDepenseBudgetFacNumber
     *
     * @return string
     */
    public function getPFDepenseBudgetFacNumber()
    {
        return $this->pFDepenseBudgetFacNumber;
    }

    /**
     * Set pFDepenseBudgetPrixHt
     *
     * @param string $pFDepenseBudgetPrixHt
     *
     * @return Depense_Budget
     */
    public function setPFDepenseBudgetPrixHt($pFDepenseBudgetPrixHt)
    {
        $this->pFDepenseBudgetPrixHt = $pFDepenseBudgetPrixHt;

        return $this;
    }

    /**
     * Get pFDepenseBudgetPrixHt
     *
     * @return string
     */
    public function getPFDepenseBudgetPrixHt()
    {
        return $this->pFDepenseBudgetPrixHt;
    }

    /**
     * Set pFDepenseBudgetQte
     *
     * @param integer $pFDepenseBudgetQte
     *
     * @return Depense_Budget
     */
    public function setPFDepenseBudgetQte($pFDepenseBudgetQte)
    {
        $this->pFDepenseBudgetQte = $pFDepenseBudgetQte;

        return $this;
    }

    /**
     * Get pFDepenseBudgetQte
     *
     * @return integer
     */
    public function getPFDepenseBudgetQte()
    {
        return $this->pFDepenseBudgetQte;
    }

    /**
     * Set pFDepenseBudgetTtc
     *
     * @param string $pFDepenseBudgetTtc
     *
     * @return Depense_Budget
     */
    public function setPFDepenseBudgetTtc($pFDepenseBudgetTtc)
    {
        $this->pFDepenseBudgetTtc = $pFDepenseBudgetTtc;

        return $this;
    }

    /**
     * Get pFDepenseBudgetTtc
     *
     * @return string
     */
    public function getPFDepenseBudgetTtc()
    {
        return $this->pFDepenseBudgetTtc;
    }
}

