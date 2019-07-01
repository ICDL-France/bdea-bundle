<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facturesdetail2507
 *
 * @ORM\Table(name="FacturesDetail2507", indexes={@ORM\Index(name="IdFactures", columns={"IdFactures"}), @ORM\Index(name="IdArticle", columns={"IdArticle"}), @ORM\Index(name="IdTVA", columns={"IdTVA"}), @ORM\Index(name="IdDetailAvoir", columns={"IdDetailAvoir"})})
 * @ORM\Entity
 */
class Facturesdetail2507
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdFacturesDetail", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfacturesdetail;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdFactures", type="integer", nullable=false)
     */
    private $idfactures = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdArticle", type="integer", nullable=false)
     */
    private $idarticle = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTVA", type="integer", nullable=false)
     */
    private $idtva = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Q", type="integer", nullable=true)
     */
    private $q;

    /**
     * @var float
     *
     * @ORM\Column(name="PVEuro", type="float", precision=10, scale=0, nullable=true)
     */
    private $pveuro;

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

