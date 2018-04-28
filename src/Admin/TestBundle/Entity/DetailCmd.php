<?php

namespace Admin\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetailCmd
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Admin\TestBundle\Entity\DetailCmdRepository")
 */
class DetailCmd
{
    /**
     * @ORM\ManyToOne(targetEntity="Admin\TestBundle\Entity\DetailCmd",inversedBy="cmd")
     * @ORM\JoinColumn(nullable=true)
     */
    private $grpProduit;

    /**
     * @ORM\ManyToOne(targetEntity="Admin\TestBundle\Entity\DetailCmd",inversedBy="cmd")
     * @ORM\JoinColumn(nullable=true)
     */
    private $specialitesD;



    /**
     * @ORM\ManyToOne(targetEntity="Admin\TestBundle\Entity\cmd",inversedBy="detail")
     */
    private $cmd;


    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="Quantite", type="integer")
     */
    private $quantite;

    /**
     * @var integer
     *
     * @ORM\Column(name="gadget_quantite", type="integer")
     */
    private $gadgetQuantite;

    /**
     * @var string
     *
     * @ORM\Column(name="PGHT_actuel", type="decimal")
     */
    private $pGHTActuel;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=255)
     */
    private $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="MatMemoPGHT_actuel", type="decimal")
     */
    private $matMemoPGHTActuel;


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
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return DetailCmd
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set gadgetQuantite
     *
     * @param integer $gadgetQuantite
     *
     * @return DetailCmd
     */
    public function setGadgetQuantite($gadgetQuantite)
    {
        $this->gadgetQuantite = $gadgetQuantite;

        return $this;
    }

    /**
     * Get gadgetQuantite
     *
     * @return integer
     */
    public function getGadgetQuantite()
    {
        return $this->gadgetQuantite;
    }

    /**
     * Set pGHTActuel
     *
     * @param string $pGHTActuel
     *
     * @return DetailCmd
     */
    public function setPGHTActuel($pGHTActuel)
    {
        $this->pGHTActuel = $pGHTActuel;

        return $this;
    }

    /**
     * Get pGHTActuel
     *
     * @return string
     */
    public function getPGHTActuel()
    {
        return $this->pGHTActuel;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return DetailCmd
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set matMemoPGHTActuel
     *
     * @param string $matMemoPGHTActuel
     *
     * @return DetailCmd
     */
    public function setMatMemoPGHTActuel($matMemoPGHTActuel)
    {
        $this->matMemoPGHTActuel = $matMemoPGHTActuel;

        return $this;
    }

    /**
     * Get matMemoPGHTActuel
     *
     * @return string
     */
    public function getMatMemoPGHTActuel()
    {
        return $this->matMemoPGHTActuel;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cmddetail = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add cmddetail
     *
     * @param \Admin\TestBundle\Entity\cmd $cmddetail
     *
     * @return DetailCmd
     */
    public function addCmddetail(\Admin\TestBundle\Entity\cmd $cmddetail)
    {
        $this->cmddetail[] = $cmddetail;

        return $this;
    }

    /**
     * Remove cmddetail
     *
     * @param \Admin\TestBundle\Entity\cmd $cmddetail
     */
    public function removeCmddetail(\Admin\TestBundle\Entity\cmd $cmddetail)
    {
        $this->cmddetail->removeElement($cmddetail);
    }

    /**
     * Get cmddetail
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCmddetail()
    {
        return $this->cmddetail;
    }

    /**
     * Set grpProduit
     *
     * @param \Admin\TestBundle\Entity\DetailCmd $grpProduit
     *
     * @return DetailCmd
     */
    public function setGrpProduit(\Admin\TestBundle\Entity\DetailCmd $grpProduit = null)
    {
        $this->grpProduit = $grpProduit;

        return $this;
    }

    /**
     * Get grpProduit
     *
     * @return \Admin\TestBundle\Entity\DetailCmd
     */
    public function getGrpProduit()
    {
        return $this->grpProduit;
    }

    /**
     * Set specialites
     *
     * @param \Admin\TestBundle\Entity\DetailCmd $specialites
     *
     * @return DetailCmd
     */
    public function setSpecialites(\Admin\TestBundle\Entity\DetailCmd $specialites = null)
    {
        $this->specialites = $specialites;

        return $this;
    }

    /**
     * Get specialites
     *
     * @return \Admin\TestBundle\Entity\DetailCmd
     */
    public function getSpecialites()
    {
        return $this->specialites;
    }

    /**
     * Set specialitesD
     *
     * @param \Admin\TestBundle\Entity\DetailCmd $specialitesD
     *
     * @return DetailCmd
     */
    public function setSpecialitesD(\Admin\TestBundle\Entity\DetailCmd $specialitesD = null)
    {
        $this->specialitesD = $specialitesD;

        return $this;
    }

    /**
     * Get specialitesD
     *
     * @return \Admin\TestBundle\Entity\DetailCmd
     */
    public function getSpecialitesD()
    {
        return $this->specialitesD;
    }

    /**
     * Set cmd
     *
     * @param \Admin\TestBundle\Entity\cmd $cmd
     *
     * @return DetailCmd
     */
    public function setCmd(\Admin\TestBundle\Entity\cmd $cmd = null)
    {
        $this->cmd = $cmd;

        return $this;
    }

    /**
     * Get cmd
     *
     * @return \Admin\TestBundle\Entity\cmd
     */
    public function getCmd()
    {
        return $this->cmd;
    }

    public function __toString ()
    {
      return $this->getCommentaire();
    }

}
