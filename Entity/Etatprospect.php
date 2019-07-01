<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etatprospect
 *
 * @ORM\Table(name="EtatProspect", uniqueConstraints={@ORM\UniqueConstraint(name="EtatProspect", columns={"EtatProspect"})})
 * @ORM\Entity
 */
class Etatprospect
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdEtatProspect", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idetatprospect;

    /**
     * @var string
     *
     * @ORM\Column(name="EtatProspect", type="string", length=255, nullable=true)
     */
    private $etatprospect;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255, nullable=true)
     */
    private $description;

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

