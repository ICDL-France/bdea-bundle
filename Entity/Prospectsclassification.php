<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prospectsclassification
 *
 * @ORM\Table(name="ProspectsClassification", uniqueConstraints={@ORM\UniqueConstraint(name="ProspectClassif", columns={"IdTypeProspect", "IdProspect"})}, indexes={@ORM\Index(name="IdProspect", columns={"IdProspect"})})
 * @ORM\Entity
 */
class Prospectsclassification
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdProspectClassification", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprospectclassification;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeProspect", type="integer", nullable=true)
     */
    private $idtypeprospect;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdProspect", type="integer", nullable=true)
     */
    private $idprospect;

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

