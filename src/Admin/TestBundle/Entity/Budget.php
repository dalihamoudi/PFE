<?php

namespace Admin\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Budget
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\TestBundle\Entity\BudgetRepository")
 */
class Budget
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
     * @var decimal
     *
     * @ORM\Column(name="PF_Rub_group_annee_budget", type="decimal", precision=10, scale=3)
     */
    private $PF_Rub_group_annee_budget;


    /**
     * @ORM\ManyToOne(targetEntity="Annee", inversedBy="commande")
     * joinColumn(name=id_Annee, referencedColumnName="id")
     * @ORM\Column(nullable=false)
     */
    private $Annee;
    /**
     * @ORM\ManyToOne(targetEntity="Rubrique", inversedBy="commande")
     * joinColumn(name=id_Rubrique, referencedColumnName="id")
     * @ORM\Column(nullable=false)
     */
    private $Rubrique;
    /**
     * @ORM\ManyToOne(targetEntity="Groupe_De_Produit", inversedBy="commande")
     * joinColumn(name=id_Groupe_De_depence, referencedColumnName="id")
     * @ORM\Column(nullable=false)
     */
    private $G_P;


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
     * Set pFRubGroupAnneeBudget
     *
     * @param string $pFRubGroupAnneeBudget
     *
     * @return Budget
     */
    public function setPFRubGroupAnneeBudget($pFRubGroupAnneeBudget)
    {
        $this->PF_Rub_group_annee_budget = $pFRubGroupAnneeBudget;

        return $this;
    }

    /**
     * Get pFRubGroupAnneeBudget
     *
     * @return string
     */
    public function getPFRubGroupAnneeBudget()
    {
        return $this->PF_Rub_group_annee_budget;
    }

    /**
     * Set annee
     *
     * @param string $annee
     *
     * @return Budget
     */
    public function setAnnee($annee)
    {
        $this->Annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return string
     */
    public function getAnnee()
    {
        return $this->Annee;
    }

    /**
     * Set rubrique
     *
     * @param string $rubrique
     *
     * @return Budget
     */
    public function setRubrique($rubrique)
    {
        $this->Rubrique = $rubrique;

        return $this;
    }

    /**
     * Get rubrique
     *
     * @return string
     */
    public function getRubrique()
    {
        return $this->Rubrique;
    }

    /**
     * Set gP
     *
     * @param string $gP
     *
     * @return Budget
     */
    public function setGP($gP)
    {
        $this->G_P = $gP;

        return $this;
    }

    /**
     * Get gP
     *
     * @return string
     */
    public function getGP()
    {
        return $this->G_P;
    }

    public function __toString ()
    {
        return $this->getAnnee();
    }

}
