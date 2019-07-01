<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acteurs
 *
 * @ORM\Table(name="Acteurs", uniqueConstraints={@ORM\UniqueConstraint(name="Acteur", columns={"Acteur"})}, indexes={@ORM\Index(name="IdGenre", columns={"IdGenre"}), @ORM\Index(name="IdFonction", columns={"IdFonction"}), @ORM\Index(name="IdLangue", columns={"IdLangue"}), @ORM\Index(name="IdOrganisation", columns={"IdOrganisation"}), @ORM\Index(name="Email", columns={"Email"}), @ORM\Index(name="IdTypeActeur", columns={"IdTypeActeur"}), @ORM\Index(name="EstCommercial", columns={"EstCommercial"})})
 * @ORM\Entity
 */
class Acteurs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdActeur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idacteur;

    /**
     * @var string
     *
     * @ORM\Column(name="Acteur", type="string", length=30, nullable=true)
     */
    private $acteur;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeActeur", type="integer", nullable=false)
     */
    private $idtypeacteur = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdOrganisation", type="integer", nullable=false)
     */
    private $idorganisation = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Actif", type="boolean", nullable=false)
     */
    private $actif = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdGenre", type="integer", nullable=false)
     */
    private $idgenre = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=32, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=50, nullable=true)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdFonction", type="integer", nullable=false)
     */
    private $idfonction = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="IntitulePoste", type="string", length=255, nullable=true)
     */
    private $intituleposte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Entree", type="date", nullable=true)
     */
    private $entree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Sortie", type="date", nullable=true)
     */
    private $sortie;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="PosteTelephonique", type="string", length=20, nullable=false)
     */
    private $postetelephonique = '04 93 00 18 00';

    /**
     * @var string
     *
     * @ORM\Column(name="TelPerso", type="string", length=20, nullable=true)
     */
    private $telperso;

    /**
     * @var string
     *
     * @ORM\Column(name="Portable", type="string", length=20, nullable=true)
     */
    private $portable;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateAnniversaire", type="date", nullable=true)
     */
    private $dateanniversaire = '0000-00-00';

    /**
     * @var string
     *
     * @ORM\Column(name="Pwd", type="string", length=20, nullable=false)
     */
    private $pwd = 'secret';

    /**
     * @var string
     *
     * @ORM\Column(name="IPv4Autorisee", type="string", length=39, nullable=false)
     */
    private $ipv4autorisee = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="EstCommercial", type="boolean", nullable=false)
     */
    private $estcommercial = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ModeDebug", type="boolean", nullable=false)
     */
    private $modedebug = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="EnCopieEmailing", type="boolean", nullable=false)
     */
    private $encopieemailing = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdLangue", type="integer", nullable=false)
     */
    private $idlangue = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="AideActive", type="boolean", nullable=false)
     */
    private $aideactive = '0';

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

