<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="Formation", indexes={@ORM\Index(name="IdAdresse", columns={"IdAdresse"}), @ORM\Index(name="IdTypeFormation", columns={"IdTypeFormation"}), @ORM\Index(name="Faite", columns={"Faite"})})
 * @ORM\Entity
 */
class Formation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdFormation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idformation;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeFormation", type="integer", nullable=false)
     */
    private $idtypeformation = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateFormation", type="date", nullable=true)
     */
    private $dateformation;

    /**
     * @var float
     *
     * @ORM\Column(name="DureeHeure", type="float", precision=10, scale=0, nullable=false)
     */
    private $dureeheure = '7';

    /**
     * @var string
     *
     * @ORM\Column(name="Lieu", type="string", length=128, nullable=false)
     */
    private $lieu = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdAdresse", type="integer", nullable=false)
     */
    private $idadresse = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Ville", type="string", length=128, nullable=true)
     */
    private $ville;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Faite", type="boolean", nullable=false)
     */
    private $faite = '0';

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

