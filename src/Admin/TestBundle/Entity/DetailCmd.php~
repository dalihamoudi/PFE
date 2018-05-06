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
     * @ORM\ManyToOne(targetEntity="Admin\TestBundle\Entity\GroupeProduit",inversedBy="GPdetail")
     * @ORM\JoinColumn(nullable=true)
     */
    private $grpProduit;

    /**
     * @ORM\ManyToOne(targetEntity="Admin\TestBundle\Entity\Specialite",inversedBy="specialiteD")
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



    public function __toString ()
    {
      return $this->getCommentaire();
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
     * Set grpProduit
     *
     * @param \²dmin\TestBundle\Entity\DetailCmd $grpProduit
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
}
