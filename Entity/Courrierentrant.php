<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Courrierentrant
 *
 * @ORM\Table(name="CourrierEntrant", indexes={@ORM\Index(name="IdProspect", columns={"IdProspect"}), @ORM\Index(name="IdTypeCourrierEntrant", columns={"IdTypeCourrierEntrant"})})
 * @ORM\Entity
 */
class Courrierentrant
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdCourrierEntrant", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcourrierentrant;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeCourrierEntrant", type="integer", nullable=false)
     */
    private $idtypecourrierentrant = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Expediteur", type="string", length=255, nullable=false)
     */
    private $expediteur = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateArriveeCourrier", type="date", nullable=false)
     */
    private $datearriveecourrier = '0000-00-00';

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdProspect", type="integer", nullable=false)
     */
    private $idprospect = '0';

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

