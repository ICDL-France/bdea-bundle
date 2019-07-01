<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devisdetail
 *
 * @ORM\Table(name="DevisDetail", indexes={@ORM\Index(name="IdDevis", columns={"IdDevis"}), @ORM\Index(name="IdArticle", columns={"IdArticle"}), @ORM\Index(name="IdTVA", columns={"IdTVA"}), @ORM\Index(name="IdDetailAvoir", columns={"IdDetailAvoir"})})
 * @ORM\Entity
 */
class Devisdetail
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdDevisDetail", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddevisdetail;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdDevis", type="integer", nullable=true)
     */
    private $iddevis;

    /**
     * @var integer
     *
     * @ORM\Column(name="Q", type="integer", nullable=true)
     */
    private $q;

    /**
     * @var float
     *
     * @ORM\Column(name="Remise", type="float", precision=10, scale=0, nullable=true)
     */
    private $remise = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Article", type="string", length=50, nullable=true)
     */
    private $article;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdArticle", type="integer", nullable=true)
     */
    private $idarticle;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTVA", type="integer", nullable=true)
     */
    private $idtva;

    /**
     * @var float
     *
     * @ORM\Column(name="PVEuro", type="float", precision=10, scale=0, nullable=true)
     */
    private $pveuro;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdDetailAvoir", type="integer", nullable=false)
     */
    private $iddetailavoir = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Createur", type="string", length=30, nullable=true)
     */
    private $createur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Creation", type="datetime", nullable=true)
     */
    private $creation;

    /**
     * @var string
     *
     * @ORM\Column(name="Modifieur", type="string", length=30, nullable=true)
     */
    private $modifieur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Modification", type="datetime", nullable=true)
     */
    private $modification;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false)
     */
    private $timestamp = 'CURRENT_TIMESTAMP';


}

