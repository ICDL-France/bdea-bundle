<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prepapcie
 *
 * @ORM\Table(name="PrepaPCIE", indexes={@ORM\Index(name="IdFacturesDetail", columns={"IdFacturesDetail"}), @ORM\Index(name="IdTypePrepaPCIE", columns={"IdTypePrepaPCIE"}), @ORM\Index(name="IdClient", columns={"IdClient"}), @ORM\Index(name="CodeCentre", columns={"CodeCentre"}), @ORM\Index(name="IdActeurEnvoiEmail", columns={"IdActeurEnvoiEmail"})})
 * @ORM\Entity
 */
class Prepapcie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdPrepaPCIE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprepapcie;

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
     * @ORM\Column(name="IdTypePrepaPCIE", type="integer", nullable=false)
     */
    private $idtypeprepapcie = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="QReelleDemandee", type="integer", nullable=true)
     */
    private $qreelledemandee;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ActivationLe", type="datetime", nullable=true)
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
     * @ORM\Column(name="IdClient", type="integer", nullable=false)
     */
    private $idclient = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CodeCentre", type="string", length=6, nullable=false)
     */
    private $codecentre = '';

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

