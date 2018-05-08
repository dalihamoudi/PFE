<?php

namespace Admin\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etat
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\TestBundle\Entity\EtatRepository")
 */
class Etat
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
     * @ORM\OneToMany(targetEntity="Admin\TestBundle\Entity\DepenceBudget", mappedBy="Etats")
     * ORM\JoinColumn(nullable=true)
     */
    private $DepenceBudget;

    /**
     * @return mixed
     */
    public function getDepenceBudget()
    {
        return $this->DepenceBudget;
    }

    /**
     * @param mixed $DepenceBudget
     */
    public function setDepenceBudget($DepenceBudget)
    {
        $this->DepenceBudget = $DepenceBudget;
    }
    /**
     * @var string
     *
     * @ORM\Column(name="PF_ETAT_LIB", type="string", length=20)
     */
    private $pFETATLIB;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->DepenceBudget = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set pFETATLIB
     *
     * @param string $pFETATLIB
     *
     * @return Etat
     */
    public function setPFETATLIB($pFETATLIB)
    {
        $this->pFETATLIB = $pFETATLIB;

        return $this;
    }

    /**
     * Get pFETATLIB
     *
     * @return string
     */
    public function getPFETATLIB()
    {
        return $this->pFETATLIB;
    }

    /**
     * Add depenceBudget
     *
     * @param \Admin\TestBundle\Entity\DepenceBudget $depenceBudget
     *
     * @return Etat
     */
    public function addDepenceBudget(\Admin\TestBundle\Entity\DepenceBudget $depenceBudget)
    {
        $this->DepenceBudget[] = $depenceBudget;

        return $this;
    }

    /**
     * Remove depenceBudget
     *
     * @param \Admin\TestBundle\Entity\DepenceBudget $depenceBudget
     */
    public function removeDepenceBudget(\Admin\TestBundle\Entity\DepenceBudget $depenceBudget)
    {
        $this->DepenceBudget->removeElement($depenceBudget);
    }

    public function __toString ()
    {
     return $this->getPFETATLIB();
    }

}
