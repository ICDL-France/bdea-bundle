<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typepublic
 *
 * @ORM\Table(name="TypePublic", uniqueConstraints={@ORM\UniqueConstraint(name="TypePublic", columns={"TypePublic"})})
 * @ORM\Entity
 */
class Typepublic
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypePublic", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypepublic;

    /**
     * @var string
     *
     * @ORM\Column(name="TypePublic", type="string", length=255, nullable=true)
     */
    private $typepublic;

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

