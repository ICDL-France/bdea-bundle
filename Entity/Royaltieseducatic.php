<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Royaltieseducatic
 *
 * @ORM\Table(name="RoyaltiesEducatic", uniqueConstraints={@ORM\UniqueConstraint(name="PeriodeDebut", columns={"PeriodeDebut"}), @ORM\UniqueConstraint(name="PeriodeFin", columns={"PeriodeFin"})})
 * @ORM\Entity
 */
class Royaltieseducatic
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdRoyaltiesLivres", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idroyaltieslivres;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDeclaration", type="date", nullable=true)
     */
    private $datedeclaration;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PeriodeDebut", type="date", nullable=true)
     */
    private $periodedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PeriodeFin", type="date", nullable=true)
     */
    private $periodefin;

    /**
     * @var integer
     *
     * @ORM\Column(name="NbLivresMetropole", type="integer", nullable=true)
     */
    private $nblivresmetropole;

    /**
     * @var integer
     *
     * @ORM\Column(name="NbLivresDomTom", type="integer", nullable=true)
     */
    private $nblivresdomtom;

    /**
     * @var float
     *
     * @ORM\Column(name="MontantDeclareMetropole", type="float", precision=10, scale=0, nullable=true)
     */
    private $montantdeclaremetropole;

    /**
     * @var float
     *
     * @ORM\Column(name="MontantDeclareDomTom", type="float", precision=10, scale=0, nullable=true)
     */
    private $montantdeclaredomtom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateFacture", type="date", nullable=true)
     */
    private $datefacture;

    /**
     * @var float
     *
     * @ORM\Column(name="MontantFacture", type="float", precision=10, scale=0, nullable=true)
     */
    private $montantfacture;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroFacture", type="string", length=20, nullable=true)
     */
    private $numerofacture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DatePaiement", type="date", nullable=true)
     */
    private $datepaiement;

    /**
     * @var float
     *
     * @ORM\Column(name="MontantRegle", type="float", precision=10, scale=0, nullable=true)
     */
    private $montantregle;

    /**
     * @var string
     *
     * @ORM\Column(name="Comment", type="string", length=50, nullable=true)
     */
    private $comment;

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

