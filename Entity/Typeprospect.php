<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typeprospect
 *
 * @ORM\Table(name="TypeProspect", uniqueConstraints={@ORM\UniqueConstraint(name="TypeProspect", columns={"TypeProspect"})})
 * @ORM\Entity
 */
class Typeprospect
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeProspect", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypeprospect;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeProspect", type="string", length=255, nullable=true)
     */
    private $typeprospect;

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

