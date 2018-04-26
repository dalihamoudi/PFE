<?php

namespace Admin\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Type_Client
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\TestBundle\Entity\Type_ClientRepository")
 */
class Type_Client
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
     * @ORM\Column(name="PF_TYPE_Client_Lib", type="string", length=20)
     */
    private $pFTYPEClientLib;


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
     * Set pFTYPEClientLib
     *
     * @param string $pFTYPEClientLib
     *
     * @return Type_Client
     */
    public function setPFTYPEClientLib($pFTYPEClientLib)
    {
        $this->pFTYPEClientLib = $pFTYPEClientLib;

        return $this;
    }

    /**
     * Get pFTYPEClientLib
     *
     * @return string
     */
    public function getPFTYPEClientLib()
    {
        return $this->pFTYPEClientLib;
    }
}

