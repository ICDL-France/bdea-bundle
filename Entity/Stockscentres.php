<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stockscentres
 *
 * @ORM\Table(name="StocksCentres")
 * @ORM\Entity
 */
class Stockscentres
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdStocksCentres", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idstockscentres;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdProspect", type="integer", nullable=false)
     */
    private $idprospect;

    /**
     * @var string
     *
     * @ORM\Column(name="CodeCentre", type="string", length=6, nullable=false)
     */
    private $codecentre;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdArticle", type="integer", nullable=false)
     */
    private $idarticle;

    /**
     * @var integer
     *
     * @ORM\Column(name="Quantite", type="integer", nullable=false)
     */
    private $quantite;


}

