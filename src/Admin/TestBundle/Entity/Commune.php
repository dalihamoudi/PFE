<?php

namespace Admin\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commune
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\TestBundle\Entity\CommuneRepository")
 */
class Commune
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
     * @ORM\Column(name="PF_COMMUNE_Lib", type="string", length=50)
     */
    private $pFCOMMUNELib;


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
     * Set pFCOMMUNELib
     *
     * @param string $pFCOMMUNELib
     *
     * @return Commune
     */
    public function setPFCOMMUNELib($pFCOMMUNELib)
    {
        $this->pFCOMMUNELib = $pFCOMMUNELib;

        return $this;
    }

    /**
     * Get pFCOMMUNELib
     *
     * @return string
     */
    public function getPFCOMMUNELib()
    {
        return $this->pFCOMMUNELib;
    }
}

