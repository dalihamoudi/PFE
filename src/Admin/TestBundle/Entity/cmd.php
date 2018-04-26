<?php

namespace Admin\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * cmd
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\TestBundle\Entity\cmdRepository")
 */
class cmd
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
     * @ORM\ManyToOne(targetEntity="Admin\TestBundle\Entity\Client",inversedBy="commandes")
     * @ORM\JoinColumn(nullable=true)
     */
    private $client;

    /**
     * @ORM\ManyToOne(targetEntity="Admin\TestBundle\Entity\Delegue",inversedBy="commandes")
     * @ORM\JoinColumn(nullable=true)
     */
    private $delgues;

    /**
     * @ORM\ManyToOne(targetEntity="Admin\TestBundle\Entity\DetailCmd",inversedBy="cmd")
     * @ORM\JoinColumn(nullable=true)
     */
    private $detail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PF_CMDPH_Date", type="date")
     */
    private $pFCMDPHDate;


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
     * Set pFCMDPHDate
     *
     * @param \DateTime $pFCMDPHDate
     *
     * @return cmd
     */
    public function setPFCMDPHDate($pFCMDPHDate)
    {
        $this->pFCMDPHDate = $pFCMDPHDate;

        return $this;
    }

    /**
     * Get pFCMDPHDate
     *
     * @return \DateTime
     */
    public function getPFCMDPHDate()
    {
        return $this->pFCMDPHDate;
    }

    /**
     * Set client
     *
     * @param \Admin\TestBundle\Entity\Client $client
     *
     * @return cmd
     */
    public function setClient(\Admin\TestBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \Admin\TestBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set delgues
     *
     * @param \Admin\TestBundle\Entity\Delegue $delgues
     *
     * @return cmd
     */
    public function setDelgues(\Admin\TestBundle\Entity\Delegue $delgues = null)
    {
        $this->delgues = $delgues;

        return $this;
    }

    /**
     * Get delgues
     *
     * @return \Admin\TestBundle\Entity\Delegue
     */
    public function getDelgues()
    {
        return $this->delgues;
    }

    /**
     * Set delgue
     *
     * @param \Admin\TestBundle\Entity\Delegue $delgue
     *
     * @return cmd
     */
    public function setDelgue(\Admin\TestBundle\Entity\Delegue $delgue = null)
    {
        $this->delgue = $delgue;

        return $this;
    }

    /**
     * Get delgue
     *
     * @return \Admin\TestBundle\Entity\Delegue
     */
    public function getDelgue()
    {
        return $this->delgue;
    }

    /**
     * Set detail
     *
     * @param \Admin\TestBundle\Entity\DetailCmd $detail
     *
     * @return cmd
     */
    public function setDetail(\Admin\TestBundle\Entity\DetailCmd $detail = null)
    {
        $this->detail = $detail;

        return $this;
    }

    /**
     * Get detail
     *
     * @return \Admin\TestBundle\Entity\DetailCmd
     */
    public function getDetail()
    {
        return $this->detail;
    }
}
