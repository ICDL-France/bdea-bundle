<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Certificatmodule
 *
 * @ORM\Table(name="CertificatModule", indexes={@ORM\Index(name="CodeCentre", columns={"CodeCentre"}), @ORM\Index(name="IdClient", columns={"IdClient"}), @ORM\Index(name="NumCarte", columns={"NumCarte"}), @ORM\Index(name="IdLogiciel", columns={"IdLogiciel"}), @ORM\Index(name="IdExamOracle", columns={"IdExamOracle"}), @ORM\Index(name="IdPersonneDemandeur", columns={"IdPersonneDemandeur"}), @ORM\Index(name="IdFacturesDetail", columns={"IdFacturesDetail"})})
 * @ORM\Entity
 */
class Certificatmodule
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdCertificatModule", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcertificatmodule;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdFacturesDetail", type="integer", nullable=false)
     */
    private $idfacturesdetail = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdExamOracle", type="integer", nullable=false)
     */
    private $idexamoracle = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdLogiciel", type="integer", nullable=false)
     */
    private $idlogiciel = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ValidationCommerciale", type="integer", nullable=false)
     */
    private $validationcommerciale = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateValidationCommerciale", type="datetime", nullable=true)
     */
    private $datevalidationcommerciale;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDemande", type="datetime", nullable=true)
     */
    private $datedemande;

    /**
     * @var string
     *
     * @ORM\Column(name="CodeCentre", type="string", length=16, nullable=true)
     */
    private $codecentre;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdPersonneDemandeur", type="integer", nullable=false)
     */
    private $idpersonnedemandeur = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdClient", type="integer", nullable=false)
     */
    private $idclient = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumCarte", type="string", length=11, nullable=true)
     */
    private $numcarte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateImpression", type="datetime", nullable=true)
     */
    private $dateimpression;

    /**
     * @var boolean
     *
     * @ORM\Column(name="DemandeDuplicata", type="boolean", nullable=false)
     */
    private $demandeduplicata = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Invalide", type="boolean", nullable=false)
     */
    private $invalide = '0';

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

