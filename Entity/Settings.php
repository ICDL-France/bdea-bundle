<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Settings
 *
 * @ORM\Table(name="Settings", uniqueConstraints={@ORM\UniqueConstraint(name="DPrefix", columns={"DPrefix"}), @ORM\UniqueConstraint(name="Iprefix", columns={"Iprefix"}), @ORM\UniqueConstraint(name="Periode", columns={"DebutExercice", "FinExercice"})}, indexes={@ORM\Index(name="Actif", columns={"Actif"})})
 * @ORM\Entity
 */
class Settings
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdSettings", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsettings;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DebutExercice", type="date", nullable=true)
     */
    private $debutexercice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FinExercice", type="date", nullable=true)
     */
    private $finexercice;

    /**
     * @var string
     *
     * @ORM\Column(name="DPrefix", type="string", length=64, nullable=true)
     */
    private $dprefix;

    /**
     * @var string
     *
     * @ORM\Column(name="Iprefix", type="string", length=64, nullable=true)
     */
    private $iprefix;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeFacture", type="integer", nullable=false)
     */
    private $idtypefacture = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumeroDepartFacture", type="integer", nullable=false)
     */
    private $numerodepartfacture = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumeroDepartDevis", type="integer", nullable=false)
     */
    private $numerodepartdevis = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Actif", type="boolean", nullable=true)
     */
    private $actif;

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

