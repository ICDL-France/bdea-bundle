<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacturesBck
 *
 * @ORM\Table(name="Factures_bck", uniqueConstraints={@ORM\UniqueConstraint(name="Numero", columns={"Numero"})}, indexes={@ORM\Index(name="IdProspect", columns={"IdProspect"}), @ORM\Index(name="IdDevis", columns={"IdDevis"}), @ORM\Index(name="IdTVA", columns={"IdTVA"}), @ORM\Index(name="IdActeur", columns={"IdActeur"}), @ORM\Index(name="IdPays", columns={"IdPays"}), @ORM\Index(name="Solde", columns={"Solde"}), @ORM\Index(name="IdModePaiement", columns={"IdModePaiement"}), @ORM\Index(name="IdTypeFacture", columns={"IdTypeFacture"}), @ORM\Index(name="IdFacturesOrigineAvoir", columns={"IdFacturesOrigineAvoir"})})
 * @ORM\Entity
 */
class FacturesBck
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdFactures", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfactures;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdProspect", type="integer", nullable=true)
     */
    private $idprospect;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeFacture", type="integer", nullable=false)
     */
    private $idtypefacture = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Avoir", type="boolean", nullable=true)
     */
    private $avoir;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdFacturesOrigineAvoir", type="integer", nullable=false)
     */
    private $idfacturesorigineavoir = '0';

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
     * @var string
     *
     * @ORM\Column(name="NRef", type="string", length=50, nullable=true)
     */
    private $nref;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdActeur", type="integer", nullable=true)
     */
    private $idacteur;

    /**
     * @var string
     *
     * @ORM\Column(name="VRef", type="string", length=50, nullable=true)
     */
    private $vref;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTVA", type="integer", nullable=true)
     */
    private $idtva;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdModePaiement", type="integer", nullable=true)
     */
    private $idmodepaiement;

    /**
     * @var float
     *
     * @ORM\Column(name="AcompteCondition", type="float", precision=10, scale=0, nullable=true)
     */
    private $acomptecondition;

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
     * @var boolean
     *
     * @ORM\Column(name="Solde", type="boolean", nullable=true)
     */
    private $solde;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateSolde", type="datetime", nullable=true)
     */
    private $datesolde;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateEcheance", type="date", nullable=false)
     */
    private $dateecheance = '0000-00-00';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdDevis", type="integer", nullable=true)
     */
    private $iddevis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Relance1", type="date", nullable=true)
     */
    private $relance1;

    /**
     * @var string
     *
     * @ORM\Column(name="TxtRelance1", type="string", length=150, nullable=false)
     */
    private $txtrelance1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Relance2", type="date", nullable=true)
     */
    private $relance2;

    /**
     * @var string
     *
     * @ORM\Column(name="TxtRelance2", type="string", length=150, nullable=false)
     */
    private $txtrelance2;

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

