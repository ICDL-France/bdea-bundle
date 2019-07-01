<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prospects
 *
 * @ORM\Table(name="Prospects", indexes={@ORM\Index(name="IdEtat", columns={"IdEtatProspect"}), @ORM\Index(name="IdAdrFacturation", columns={"IdAdrFacturation"}), @ORM\Index(name="IdAdrLivraison", columns={"IdAdrLivraison"}), @ORM\Index(name="IdConditions", columns={"IdConditions"}), @ORM\Index(name="Client", columns={"Client"}), @ORM\Index(name="RespDossier", columns={"RespDossier"})})
 * @ORM\Entity
 */
class Prospects
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdProspect", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprospect;

    /**
     * @var string
     *
     * @ORM\Column(name="Societe", type="string", length=80, nullable=true)
     */
    private $societe;

    /**
     * @var string
     *
     * @ORM\Column(name="SIRET", type="string", length=255, nullable=false)
     */
    private $siret;

    /**
     * @var string
     *
     * @ORM\Column(name="RCS", type="text", length=65535, nullable=false)
     */
    private $rcs;

    /**
     * @var string
     *
     * @ORM\Column(name="APE", type="string", length=10, nullable=false)
     */
    private $ape;

    /**
     * @var string
     *
     * @ORM\Column(name="SIREN", type="string", length=20, nullable=false)
     */
    private $siren;

    /**
     * @var string
     *
     * @ORM\Column(name="NIC", type="string", length=5, nullable=false)
     */
    private $nic;

    /**
     * @var integer
     *
     * @ORM\Column(name="RespDossier", type="integer", nullable=false)
     */
    private $respdossier = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Client", type="boolean", nullable=true)
     */
    private $client;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdEtatProspect", type="integer", nullable=false)
     */
    private $idetatprospect = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_forme_juridique", type="integer", nullable=false)
     */
    private $idFormeJuridique;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PrevisionRetourContrat", type="date", nullable=true)
     */
    private $previsionretourcontrat;

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
     * @var integer
     *
     * @ORM\Column(name="IdAdrFacturation", type="integer", nullable=true)
     */
    private $idadrfacturation;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdAdrLivraison", type="integer", nullable=true)
     */
    private $idadrlivraison;

    /**
     * @var string
     *
     * @ORM\Column(name="Http", type="string", length=255, nullable=true)
     */
    private $http;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdConditions", type="integer", nullable=true)
     */
    private $idconditions;

    /**
     * @var string
     *
     * @ORM\Column(name="Informations", type="text", length=65535, nullable=false)
     */
    private $informations;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false)
     */
    private $timestamp = 'CURRENT_TIMESTAMP';


}

