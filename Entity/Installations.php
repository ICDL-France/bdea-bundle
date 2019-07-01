<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Installations
 *
 * @ORM\Table(name="Installations", indexes={@ORM\Index(name="IdProspect", columns={"IdProspect"}), @ORM\Index(name="IdAdresse", columns={"IdAdresse"}), @ORM\Index(name="IdActeurInstall", columns={"IdActeurInstall"}), @ORM\Index(name="IdATE", columns={"IdATE"}), @ORM\Index(name="Active", columns={"Active"}), @ORM\Index(name="InstallOK", columns={"InstallOK"})})
 * @ORM\Entity
 */
class Installations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdInstall", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idinstall;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdProspect", type="integer", nullable=false)
     */
    private $idprospect = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdAdresse", type="integer", nullable=false)
     */
    private $idadresse = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DoneBy", type="string", length=6, nullable=true)
     */
    private $doneby;

    /**
     * @var string
     *
     * @ORM\Column(name="IdActeurInstall", type="string", length=10, nullable=false)
     */
    private $idacteurinstall = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdATE", type="integer", nullable=false)
     */
    private $idate = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="InstallOK", type="boolean", nullable=true)
     */
    private $installok;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Active", type="boolean", nullable=true)
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="NomCentre", type="string", length=60, nullable=true)
     */
    private $nomcentre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ListeWeb", type="boolean", nullable=true)
     */
    private $listeweb;

    /**
     * @var string
     *
     * @ORM\Column(name="Http", type="string", length=50, nullable=true)
     */
    private $http;

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

