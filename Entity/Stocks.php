<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stocks
 *
 * @ORM\Table(name="Stocks", indexes={@ORM\Index(name="IdOperationStock", columns={"IdOperationStock"}), @ORM\Index(name="IdArticle", columns={"IdArticle"})})
 * @ORM\Entity
 */
class Stocks
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdStock", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idstock;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdOperationStock", type="integer", nullable=false)
     */
    private $idoperationstock = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="NumFacture", type="string", length=20, nullable=true)
     */
    private $numfacture;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdArticle", type="integer", nullable=true)
     */
    private $idarticle;

    /**
     * @var integer
     *
     * @ORM\Column(name="Quantite", type="integer", nullable=true)
     */
    private $quantite;

    /**
     * @var float
     *
     * @ORM\Column(name="PUHT", type="float", precision=10, scale=0, nullable=false)
     */
    private $puht = '0';

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

