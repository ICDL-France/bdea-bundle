<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actions
 *
 * @ORM\Table(name="Actions", indexes={@ORM\Index(name="IdContenu", columns={"IdContenu"}), @ORM\Index(name="IdOrigine", columns={"IdOrigine"}), @ORM\Index(name="IdProspect", columns={"IdProspect"}), @ORM\Index(name="IdPersonne", columns={"IdPersonne"}), @ORM\Index(name="TODO", columns={"TODO"}), @ORM\Index(name="IdActeur", columns={"IdActeur"}), @ORM\Index(name="IdTODOQui", columns={"IdTODOQui"}), @ORM\Index(name="Fait", columns={"Fait"})})
 * @ORM\Entity
 */
class Actions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdAction", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idaction;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdProspect", type="integer", nullable=true)
     */
    private $idprospect;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdPersonne", type="integer", nullable=true)
     */
    private $idpersonne;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdOrigine", type="integer", nullable=false)
     */
    private $idorigine = '10';

    /**
     * @var string
     *
     * @ORM\Column(name="Initiative", type="string", length=8, nullable=true)
     */
    private $initiative;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdContenu", type="integer", nullable=false)
     */
    private $idcontenu = '15';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdActeur", type="integer", nullable=false)
     */
    private $idacteur = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Commentaire", type="text", length=16777215, nullable=true)
     */
    private $commentaire;

    /**
     * @var boolean
     *
     * @ORM\Column(name="TODO", type="boolean", nullable=true)
     */
    private $todo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TODODate", type="datetime", nullable=false)
     */
    private $tododate = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTODOQui", type="integer", nullable=false)
     */
    private $idtodoqui = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Fait", type="boolean", nullable=false)
     */
    private $fait = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Priorite", type="boolean", nullable=false)
     */
    private $priorite;

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

