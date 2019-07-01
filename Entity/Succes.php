<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Succes
 *
 * @ORM\Table(name="Succes", uniqueConstraints={@ORM\UniqueConstraint(name="succesunique", columns={"NumModule", "IdCarte"})}, indexes={@ORM\Index(name="IdLogiciel", columns={"IdLogiciel"}), @ORM\Index(name="IdCarte", columns={"IdCarte"}), @ORM\Index(name="IdATE", columns={"IdATE"}), @ORM\Index(name="IdSuccesOracle", columns={"IdSuccesOracle"}), @ORM\Index(name="IdClient", columns={"IdClient"}), @ORM\Index(name="PourStart", columns={"PourStart"})})
 * @ORM\Entity
 */
class Succes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdSucces", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsucces;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumModule", type="smallint", nullable=true)
     */
    private $nummodule;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdLogiciel", type="integer", nullable=true)
     */
    private $idlogiciel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateSucces", type="date", nullable=true)
     */
    private $datesucces;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdClient", type="integer", nullable=false)
     */
    private $idclient = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdCarte", type="integer", nullable=true)
     */
    private $idcarte;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdATE", type="integer", nullable=true)
     */
    private $idate;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdSuccesOracle", type="integer", nullable=true)
     */
    private $idsuccesoracle;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PourStart", type="boolean", nullable=true)
     */
    private $pourstart = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdDemandeCertificat", type="integer", nullable=false)
     */
    private $iddemandecertificat = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="CarteBasculerINCA", type="boolean", nullable=false)
     */
    private $cartebasculerinca = '0';

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

