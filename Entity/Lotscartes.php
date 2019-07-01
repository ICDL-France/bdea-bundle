<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lotscartes
 *
 * @ORM\Table(name="LotsCartes", uniqueConstraints={@ORM\UniqueConstraint(name="NumDebut", columns={"NumDebut"}), @ORM\UniqueConstraint(name="NumFin", columns={"NumFin"})}, indexes={@ORM\Index(name="IdProspect", columns={"IdProspect"}), @ORM\Index(name="IdClient", columns={"IdClient"}), @ORM\Index(name="IdFacturesDetail", columns={"IdFacturesDetail"}), @ORM\Index(name="IdTypeLotCarte", columns={"IdTypeLotCarte"}), @ORM\Index(name="IdTypeCarte", columns={"IdTypeCarte"}), @ORM\Index(name="IdPays", columns={"IdPays"}), @ORM\Index(name="IdArticleLivre", columns={"IdArticleLivre"}), @ORM\Index(name="IdActeurDemande", columns={"IdActeurDemande"})})
 * @ORM\Entity
 */
class Lotscartes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdLotsCartes", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlotscartes;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeLotCarte", type="integer", nullable=false)
     */
    private $idtypelotcarte = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeCarte", type="integer", nullable=false)
     */
    private $idtypecarte = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="EstDansInca", type="boolean", nullable=false)
     */
    private $estdansinca = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdProspect", type="integer", nullable=false)
     */
    private $idprospect = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdClient", type="integer", nullable=false)
     */
    private $idclient = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdPays", type="integer", nullable=false)
     */
    private $idpays = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdFacturesDetail", type="integer", nullable=false)
     */
    private $idfacturesdetail = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdArticleLivre", type="integer", nullable=false)
     */
    private $idarticlelivre = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NumDebut", type="string", length=11, nullable=true)
     */
    private $numdebut;

    /**
     * @var string
     *
     * @ORM\Column(name="NumFin", type="string", length=11, nullable=true)
     */
    private $numfin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ActivationDemande", type="boolean", nullable=false)
     */
    private $activationdemande = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDemande", type="datetime", nullable=false)
     */
    private $datedemande = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdActeurDemande", type="integer", nullable=false)
     */
    private $idacteurdemande = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Transferer", type="integer", nullable=true)
     */
    private $transferer;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateTransfert", type="date", nullable=false)
     */
    private $datetransfert;

    /**
     * @var string
     *
     * @ORM\Column(name="CommentaireTransfert", type="text", length=65535, nullable=true)
     */
    private $commentairetransfert;

    /**
     * @var string
     *
     * @ORM\Column(name="ActeurTransfert", type="string", length=30, nullable=true)
     */
    private $acteurtransfert;

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

