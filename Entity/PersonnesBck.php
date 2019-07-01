<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersonnesBck
 *
 * @ORM\Table(name="Personnes_bck", uniqueConstraints={@ORM\UniqueConstraint(name="personneunique", columns={"Prenom", "Nom", "IdAdresse"})}, indexes={@ORM\Index(name="IdProspect", columns={"IdProspect"}), @ORM\Index(name="IdAdresse", columns={"IdAdresse"}), @ORM\Index(name="IdGenre", columns={"IdGenre"}), @ORM\Index(name="Inactive", columns={"Inactive"}), @ORM\Index(name="LettreInfo", columns={"LettreInfo"})})
 * @ORM\Entity
 */
class PersonnesBck
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdProspect", type="integer", nullable=false)
     */
    private $idprospect = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdPersonne", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpersonne;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdAdresse", type="integer", nullable=false)
     */
    private $idadresse = '0';

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
     * @var string
     *
     * @ORM\Column(name="Prononciation", type="string", length=50, nullable=true)
     */
    private $prononciation;

    /**
     * @var string
     *
     * @ORM\Column(name="Job", type="string", length=128, nullable=true)
     */
    private $job;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Examinateur", type="boolean", nullable=false)
     */
    private $examinateur = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumCarte", type="string", length=11, nullable=true)
     */
    private $numcarte;

    /**
     * @var string
     *
     * @ORM\Column(name="Tel", type="string", length=20, nullable=true)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="GSM", type="string", length=20, nullable=true)
     */
    private $gsm;

    /**
     * @var string
     *
     * @ORM\Column(name="Fax", type="string", length=20, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Email2", type="string", length=255, nullable=true)
     */
    private $email2;

    /**
     * @var string
     *
     * @ORM\Column(name="Joignable", type="string", length=55, nullable=true)
     */
    private $joignable;

    /**
     * @var string
     *
     * @ORM\Column(name="Commentaire", type="string", length=255, nullable=true)
     */
    private $commentaire;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LettreInfo", type="boolean", nullable=false)
     */
    private $lettreinfo = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Inactive", type="boolean", nullable=false)
     */
    private $inactive = '0';

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

