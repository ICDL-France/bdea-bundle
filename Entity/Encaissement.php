<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Encaissement
 *
 * @ORM\Table(name="Encaissement", indexes={@ORM\Index(name="IdTypeEncaissement", columns={"IdTypeEncaissement"}), @ORM\Index(name="IdBanque", columns={"IdBanque"}), @ORM\Index(name="IdFactures", columns={"IdFactures"}), @ORM\Index(name="IdProspect", columns={"IdProspect"})})
 * @ORM\Entity
 */
class Encaissement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdEncaissement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idencaissement;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeEncaissement", type="integer", nullable=false)
     */
    private $idtypeencaissement = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdBanque", type="integer", nullable=false)
     */
    private $idbanque = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdFactures", type="integer", nullable=false)
     */
    private $idfactures = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdProspect", type="integer", nullable=false)
     */
    private $idprospect = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateReception", type="date", nullable=true)
     */
    private $datereception;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateEcheance", type="date", nullable=true)
     */
    private $dateecheance;

    /**
     * @var float
     *
     * @ORM\Column(name="MontantTTCEuro", type="float", precision=10, scale=0, nullable=true)
     */
    private $montantttceuro;

    /**
     * @var boolean
     *
     * @ORM\Column(name="EnPortefeuille", type="boolean", nullable=false)
     */
    private $enportefeuille = '0';

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

