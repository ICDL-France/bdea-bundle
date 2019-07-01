<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Royaltiestraitementeducatic
 *
 * @ORM\Table(name="RoyaltiesTraitementEducatic")
 * @ORM\Entity
 */
class Royaltiestraitementeducatic
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdRoyaltiesTraitementEducatic", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idroyaltiestraitementeducatic;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateFacture", type="date", nullable=false)
     */
    private $datefacture;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdFacture", type="integer", nullable=false)
     */
    private $idfacture;

    /**
     * @var integer
     *
     * @ORM\Column(name="QuantiteLivre", type="integer", nullable=false)
     */
    private $quantitelivre;

    /**
     * @var integer
     *
     * @ORM\Column(name="QuantiteExpedie", type="integer", nullable=false)
     */
    private $quantiteexpedie;

    /**
     * @var integer
     *
     * @ORM\Column(name="QuantiteRestant", type="integer", nullable=false)
     */
    private $quantiterestant;

    /**
     * @var string
     *
     * @ORM\Column(name="NomDuCentre", type="string", length=250, nullable=false)
     */
    private $nomducentre;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdReferent", type="integer", nullable=false)
     */
    private $idreferent;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdProspect", type="integer", nullable=false)
     */
    private $idprospect;

    /**
     * @var integer
     *
     * @ORM\Column(name="TypeTraitement", type="integer", nullable=false)
     */
    private $typetraitement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateTraitement", type="date", nullable=false)
     */
    private $datetraitement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateAnnulation", type="datetime", nullable=true)
     */
    private $dateannulation;


}

