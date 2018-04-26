<?php

namespace Admin\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sexe
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\TestBundle\Entity\SexeRepository")
 */
class Sexe
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
     * @ORM\Column(name="PF_Sexe_Lib", type="string", length=20)
     */
    private $pFSexeLib;


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
     * Set pFSexeLib
     *
     * @param string $pFSexeLib
     *
     * @return Sexe
     */
    public function setPFSexeLib($pFSexeLib)
    {
        $this->pFSexeLib = $pFSexeLib;

        return $this;
    }

    /**
     * Get pFSexeLib
     *
     * @return string
     */
    public function getPFSexeLib()
    {
        return $this->pFSexeLib;
    }
}

