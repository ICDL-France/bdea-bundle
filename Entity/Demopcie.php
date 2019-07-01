<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demopcie
 *
 * @ORM\Table(name="DemoPCIE", uniqueConstraints={@ORM\UniqueConstraint(name="PasswordDemo", columns={"PasswordDemo", "LoginDemo"})}, indexes={@ORM\Index(name="IdTypePosi", columns={"IdTypeDemoPCIE"}), @ORM\Index(name="IdProspect", columns={"IdProspect"}), @ORM\Index(name="IdPersonne", columns={"IdPersonne"}), @ORM\Index(name="IdOperationStock", columns={"IdOperationStock"}), @ORM\Index(name="IdActeurEnvoiEmail", columns={"IdActeurEnvoiEmail"})})
 * @ORM\Entity
 */
class Demopcie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdDemoPCIE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddemopcie;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdOperationStock", type="integer", nullable=false)
     */
    private $idoperationstock = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeDemoPCIE", type="integer", nullable=false)
     */
    private $idtypedemopcie = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="QReelleDemandee", type="integer", nullable=false)
     */
    private $qreelledemandee = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ActivationLe", type="date", nullable=true)
     */
    private $activationle;

    /**
     * @var integer
     *
     * @ORM\Column(name="QReelleFaite", type="integer", nullable=false)
     */
    private $qreellefaite = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Fait", type="boolean", nullable=false)
     */
    private $fait = '0';

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
     */
    private $idpersonne = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="LoginDemo", type="string", length=11, nullable=false)
     */
    private $logindemo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PasswordDemo", type="string", length=10, nullable=false)
     */
    private $passworddemo = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDernierEnvoiMail", type="datetime", nullable=false)
     */
    private $datedernierenvoimail = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdActeurEnvoiEmail", type="integer", nullable=false)
     */
    private $idacteurenvoiemail = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DatePassage", type="date", nullable=true)
     */
    private $datepassage;

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

