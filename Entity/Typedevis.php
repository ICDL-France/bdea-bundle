<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typedevis
 *
 * @ORM\Table(name="TypeDevis", uniqueConstraints={@ORM\UniqueConstraint(name="TypeDevis", columns={"TypeDevis"})})
 * @ORM\Entity
 */
class Typedevis
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeDevis", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypedevis;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeDevis", type="string", length=255, nullable=true)
     */
    private $typedevis;

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

