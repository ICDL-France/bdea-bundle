<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clients
 *
 * @ORM\Table(name="Clients", uniqueConstraints={@ORM\UniqueConstraint(name="IdProspect", columns={"IdProspect"}), @ORM\UniqueConstraint(name="CodeCentre", columns={"CodeCentre"}), @ORM\UniqueConstraint(name="Rangement", columns={"Rangement"})}, indexes={@ORM\Index(name="IdTypeClient", columns={"IdTypeClient"}), @ORM\Index(name="IdAdresse", columns={"IdAdresse"}), @ORM\Index(name="IdEtatClient", columns={"IdEtatClient"}), @ORM\Index(name="IdTypeContrat", columns={"IdTypeContrat"})})
 * @ORM\Entity
 */
class Clients
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdClient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idclient;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdProspect", type="integer", nullable=false)
     */
    private $idprospect = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeClient", type="integer", nullable=false)
     */
    private $idtypeclient = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdAdresse", type="integer", nullable=false)
     */
    private $idadresse = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="DroitsAnnuels", type="float", precision=10, scale=0, nullable=false)
     */
    private $droitsannuels = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdEtatClient", type="integer", nullable=false)
     */
    private $idetatclient = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateReceptionContrat", type="date", nullable=true)
     */
    private $datereceptioncontrat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateFinContrat", type="date", nullable=true)
     */
    private $datefincontrat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateRenouvellement", type="date", nullable=true)
     */
    private $daterenouvellement;

    /**
     * @var integer
     *
     * @ORM\Column(name="Rangement", type="integer", nullable=true)
     */
    private $rangement;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeContrat", type="integer", nullable=false)
     */
    private $idtypecontrat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ValidateurContrat", type="string", length=100, nullable=true)
     */
    private $validateurcontrat;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AttenteMAJContrat", type="boolean", nullable=false)
     */
    private $attentemajcontrat = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDemandeValidationContrat", type="date", nullable=true)
     */
    private $datedemandevalidationcontrat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateReceptionValidationContrat", type="date", nullable=true)
     */
    private $datereceptionvalidationcontrat;

    /**
     * @var string
     *
     * @ORM\Column(name="ActeurValidationContrat", type="string", length=100, nullable=true)
     */
    private $acteurvalidationcontrat;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ClientPostBascule", type="boolean", nullable=false)
     */
    private $clientpostbascule = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Public", type="boolean", nullable=false)
     */
    private $public = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="CodeCentre", type="string", length=6, nullable=true)
     */
    private $codecentre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Id_TypeIncaManager", type="boolean", nullable=false)
     */
    private $idTypeincamanager;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=8, nullable=true)
     */
    private $password;

    /**
     * @var boolean
     *
     * @ORM\Column(name="TestsAnglais", type="boolean", nullable=false)
     */
    private $testsanglais = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateRapport", type="date", nullable=true)
     */
    private $daterapport;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDernierTest", type="date", nullable=true)
     */
    private $datederniertest;

    /**
     * @var boolean
     *
     * @ORM\Column(name="INCATypePublic", type="boolean", nullable=false)
     */
    private $incatypepublic = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="TriParNom", type="boolean", nullable=false)
     */
    private $triparnom = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DernierLoginSitePro", type="datetime", nullable=false)
     */
    private $dernierloginsitepro = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="DernierLoginSiteProIP", type="string", length=39, nullable=false)
     */
    private $dernierloginsiteproip = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="NbIpAutorise", type="integer", nullable=false)
     */
    private $nbipautorise = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="TiersTemps", type="boolean", nullable=false)
     */
    private $tierstemps = '0';

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

    /**
     * @var boolean
     *
     * @ORM\Column(name="RetireClientSansFormation", type="boolean", nullable=false)
     */
    private $retireclientsansformation;


}

