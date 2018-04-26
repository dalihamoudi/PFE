<?php

namespace Admin\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fonction
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\TestBundle\Entity\FonctionRepository")
 */
class Fonction
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
     * @ORM\Column(name="PF_Fonction_Lib", type="string", length=50)
     */
    private $pFFonctionLib;


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
     * Set pFFonctionLib
     *
     * @param string $pFFonctionLib
     *
     * @return Fonction
     */
    public function setPFFonctionLib($pFFonctionLib)
    {
        $this->pFFonctionLib = $pFFonctionLib;

        return $this;
    }

    /**
     * Get pFFonctionLib
     *
     * @return string
     */
    public function getPFFonctionLib()
    {
        return $this->pFFonctionLib;
    }
}

