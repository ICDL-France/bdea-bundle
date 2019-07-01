<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devis
 *
 * @ORM\Table(name="Devis", uniqueConstraints={@ORM\UniqueConstraint(name="Numero", columns={"Numero"})}, indexes={@ORM\Index(name="IdProspect", columns={"IdProspect"}), @ORM\Index(name="IdTVA", columns={"IdTVA"}), @ORM\Index(name="IdActeur", columns={"IdActeur"}), @ORM\Index(name="IdPays", columns={"IdPays"}), @ORM\Index(name="IdCondition", columns={"IdCondition"}), @ORM\Index(name="IdTypeDevis", columns={"IdTypeDevis"}), @ORM\Index(name="IdFacturesOrigineAvoir", columns={"IdFacturesOrigineAvoir"}), @ORM\Index(name="Date", columns={"Date"}), @ORM\Index(name="Avoir", columns={"Avoir"})})
 * @ORM\Entity
 */
class Devis
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdProspect", type="integer", nullable=false)
     */
    private $idprospect = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Avoir", type="boolean", nullable=false)
     */
    private $avoir = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdFacturesOrigineAvoir", type="integer", nullable=false)
     */
    private $idfacturesorigineavoir = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdDevis", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddevis;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeDevis", type="integer", nullable=false)
     */
    private $idtypedevis = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Numero", type="string", length=64, nullable=true)
     */
    private $numero;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdCondition", type="integer", nullable=false)
     */
    private $idcondition = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="AcompteCondition", type="boolean", nullable=true)
     */
    private $acomptecondition;

    /**
     * @var string
     *
     * @ORM\Column(name="NRef", type="string", length=50, nullable=true)
     */
    private $nref;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdActeur", type="integer", nullable=false)
     */
    private $idacteur = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="VRef", type="string", length=50, nullable=true)
     */
    private $vref;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTVA", type="integer", nullable=false)
     */
    private $idtva = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateFinValidite", type="date", nullable=false)
     */
    private $datefinvalidite = '0000-00-00';

    /**
     * @var string
     *
     * @ORM\Column(name="Denomination", type="string", length=60, nullable=true)
     */
    private $denomination;

    /**
     * @var string
     *
     * @ORM\Column(name="Adr1", type="string", length=128, nullable=true)
     */
    private $adr1;

    /**
     * @var string
     *
     * @ORM\Column(name="Adr2", type="string", length=128, nullable=true)
     */
    private $adr2;

    /**
     * @var string
     *
     * @ORM\Column(name="CP", type="string", length=10, nullable=true)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="Ville", type="string", length=50, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="Cedex", type="string", length=10, nullable=true)
     */
    private $cedex;

    /**
     * @var string
     *
     * @ORM\Column(name="BP", type="string", length=50, nullable=false)
     */
    private $bp;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdPays", type="integer", nullable=false)
     */
    private $idpays = '78';

    /**
     * @var boolean
     *
     * @ORM\Column(name="MentionIntracom", type="boolean", nullable=false)
     */
    private $mentionintracom = '0';

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
     * @var boolean
     *
     * @ORM\Column(name="Visible", type="boolean", nullable=false)
     */
    private $visible = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="IdConditionAcompte", type="boolean", nullable=false)
     */
    private $idconditionacompte = '0';


}

