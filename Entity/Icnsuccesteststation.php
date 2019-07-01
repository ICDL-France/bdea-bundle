<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Icnsuccesteststation
 *
 * @ORM\Table(name="icnsuccesteststation", indexes={@ORM\Index(name="IdLotsCartes", columns={"IdLotsCartes"}), @ORM\Index(name="IdTypeCarte", columns={"IdTypeCarte"}), @ORM\Index(name="IdFont", columns={"IdFont"}), @ORM\Index(name="IdProspect", columns={"IdProspect"}), @ORM\Index(name="IdClientGestionnaire", columns={"IdClientGestionnaire"}), @ORM\Index(name="IdPersonneDemandeurDuplicata", columns={"IdPersonneDemandeurDuplicata"})})
 * @ORM\Entity
 */
class Icnsuccesteststation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdSucces", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsucces;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumModule", type="smallint", nullable=true)
     */
    private $nummodule;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdLogiciel", type="integer", nullable=true)
     */
    private $idlogiciel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateSucces", type="date", nullable=true)
     */
    private $datesucces;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdClient", type="integer", nullable=false)
     */
    private $idclient = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdCarteSucces", type="integer", nullable=true)
     */
    private $idcartesucces;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdATE", type="integer", nullable=true)
     */
    private $idate;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdSuccesOracle", type="integer", nullable=true)
     */
    private $idsuccesoracle;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PourStart", type="boolean", nullable=true)
     */
    private $pourstart = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdDemandeCertificat", type="integer", nullable=false)
     */
    private $iddemandecertificat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CreateurSucces", type="string", length=30, nullable=true)
     */
    private $createursucces;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CreationSucces", type="datetime", nullable=true)
     */
    private $creationsucces;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdCarte", type="integer", nullable=false)
     */
    private $idcarte;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdProspect", type="integer", nullable=true)
     */
    private $idprospect;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdLotsCartes", type="integer", nullable=true)
     */
    private $idlotscartes;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdClientGestionnaire", type="integer", nullable=false)
     */
    private $idclientgestionnaire = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeCarte", type="integer", nullable=false)
     */
    private $idtypecarte = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdFont", type="integer", nullable=false)
     */
    private $idfont = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumCarte", type="string", length=11, nullable=false)
     */
    private $numcarte;

    /**
     * @var string
     *
     * @ORM\Column(name="Genre", type="string", length=4, nullable=true)
     */
    private $genre;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ECDL", type="boolean", nullable=true)
     */
    private $ecdl = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="START2", type="boolean", nullable=true)
     */
    private $start2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Comments", type="string", length=128, nullable=true)
     */
    private $comments;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateNaissance", type="date", nullable=true)
     */
    private $datenaissance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateAssignation", type="datetime", nullable=true)
     */
    private $dateassignation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateModificationAssignation", type="datetime", nullable=true)
     */
    private $datemodificationassignation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Invalide", type="boolean", nullable=true)
     */
    private $invalide = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="EuroAPayer", type="float", precision=10, scale=0, nullable=false)
     */
    private $euroapayer = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MoisDeclaration", type="date", nullable=true)
     */
    private $moisdeclaration;

    /**
     * @var boolean
     *
     * @ORM\Column(name="DemandeECDL", type="boolean", nullable=false)
     */
    private $demandeecdl = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="DemandeSTART", type="boolean", nullable=false)
     */
    private $demandestart = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdPersonneDemandeurDuplicata", type="integer", nullable=false)
     */
    private $idpersonnedemandeurduplicata = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="CarteDemo", type="boolean", nullable=false)
     */
    private $cartedemo = '0';

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

