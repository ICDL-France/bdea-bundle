<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Netg
 *
 * @ORM\Table(name="NetG", indexes={@ORM\Index(name="IdFacturesDetail", columns={"IdFacturesDetail"}), @ORM\Index(name="IdTypeNetG", columns={"IdTypeNetG"}), @ORM\Index(name="IdClient", columns={"IdClient"}), @ORM\Index(name="IdProspect", columns={"IdProspect"}), @ORM\Index(name="IdElearning", columns={"IdElearning"})})
 * @ORM\Entity
 */
class Netg
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdNetG", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idnetg;

    /**
     * @var string
     *
     * @ORM\Column(name="Operation", type="string", length=50, nullable=true)
     */
    private $operation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="NumFacture", type="string", length=20, nullable=true)
     */
    private $numfacture;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdFacturesDetail", type="integer", nullable=true)
     */
    private $idfacturesdetail;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeNetG", type="integer", nullable=true)
     */
    private $idtypenetg;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdElearning", type="integer", nullable=false)
     */
    private $idelearning = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="Quantite", type="integer", nullable=true)
     */
    private $quantite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ActivationLe", type="datetime", nullable=true)
     */
    private $activationle;

    /**
     * @var integer
     *
     * @ORM\Column(name="Qactivee", type="integer", nullable=true)
     */
    private $qactivee;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Fait", type="boolean", nullable=false)
     */
    private $fait = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdClient", type="integer", nullable=true)
     */
    private $idclient;

    /**
     * @var string
     *
     * @ORM\Column(name="CodeCentre", type="string", length=6, nullable=false)
     */
    private $codecentre = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdProspect", type="integer", nullable=false)
     */
    private $idprospect = '0';

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
     * @var integer
     *
     * @ORM\Column(name="CompteurFait", type="integer", nullable=false)
     */
    private $compteurfait = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LotRempli", type="boolean", nullable=false)
     */
    private $lotrempli = '0';

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

