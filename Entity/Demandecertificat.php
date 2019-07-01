<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demandecertificat
 *
 * @ORM\Table(name="DemandeCertificat", indexes={@ORM\Index(name="IdPersonneDemandeur", columns={"IdPersonneDemandeur"}), @ORM\Index(name="Faite", columns={"Faite"}), @ORM\Index(name="CodeCentre", columns={"CodeCentre"})})
 * @ORM\Entity
 */
class Demandecertificat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdDemandeCertificat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddemandecertificat;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdPersonneDemandeur", type="integer", nullable=false)
     */
    private $idpersonnedemandeur = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDemande", type="datetime", nullable=true)
     */
    private $datedemande;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateRealisation", type="datetime", nullable=true)
     */
    private $daterealisation;

    /**
     * @var string
     *
     * @ORM\Column(name="CodeCentre", type="string", length=6, nullable=false)
     */
    private $codecentre = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="NbPcie", type="integer", nullable=false)
     */
    private $nbpcie = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NbStart", type="integer", nullable=false)
     */
    private $nbstart = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Verrou", type="boolean", nullable=false)
     */
    private $verrou = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Faite", type="boolean", nullable=false)
     */
    private $faite = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Creation", type="datetime", nullable=true)
     */
    private $creation;

    /**
     * @var string
     *
     * @ORM\Column(name="Createur", type="string", length=30, nullable=true)
     */
    private $createur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Modification", type="datetime", nullable=true)
     */
    private $modification;

    /**
     * @var string
     *
     * @ORM\Column(name="Modifieur", type="string", length=30, nullable=true)
     */
    private $modifieur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false)
     */
    private $timestamp = 'CURRENT_TIMESTAMP';


}

