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
     * @ORM\OneToMany(targetEntity="Admin\TestBundle\Entity\DetailCmd",mappedBy="cmd")
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
     * Constructor
     */
    public function __construct()
    {
        $this->detail = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add detail
     *
     * @param \Admin\TestBundle\Entity\DetailCmd $detail
     *
     * @return cmd
     */
    public function addDetail(\Admin\TestBundle\Entity\DetailCmd $detail)
    {
        $this->detail[] = $detail;

        return $this;
    }

    /**
     * Remove detail
     *
     * @param \Admin\TestBundle\Entity\DetailCmd $detail
     */
    public function removeDetail(\Admin\TestBundle\Entity\DetailCmd $detail)
    {
        $this->detail->removeElement($detail);
    }

    /**
     * Get detail
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDetail()
    {
        return $this->detail;
    }

    public function __toString ()
    {
        return (string)$this->getId();
    }

}
