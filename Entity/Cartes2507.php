<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cartes2507
 *
 * @ORM\Table(name="Cartes2507", uniqueConstraints={@ORM\UniqueConstraint(name="NumCarte", columns={"NumCarte"})}, indexes={@ORM\Index(name="IdLotsCartes", columns={"IdLotsCartes"}), @ORM\Index(name="IdTypeCarte", columns={"IdTypeCarte"}), @ORM\Index(name="IdFont", columns={"IdFont"}), @ORM\Index(name="IdProspect", columns={"IdProspect"}), @ORM\Index(name="IdClientGestionnaire", columns={"IdClientGestionnaire"}), @ORM\Index(name="IdPersonneDemandeurDuplicata", columns={"IdPersonneDemandeurDuplicata"}), @ORM\Index(name="recherche", columns={"NumCarte", "Prenom", "Nom"})})
 * @ORM\Entity
 */
class Cartes2507
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdCarte", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
     * @ORM\Column(name="NumCarte", type="string", length=11, nullable=true)
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

    /**
     * @var integer
     *
     * @ORM\Column(name="AutorisationHandicap", type="integer", nullable=true)
     */
    private $autorisationhandicap;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Locked", type="boolean", nullable=false)
     */
    private $locked = '0';


}

