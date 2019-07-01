<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Codecompta
 *
 * @ORM\Table(name="CodeCompta", uniqueConstraints={@ORM\UniqueConstraint(name="CodeCompta", columns={"CodeCompta"})})
 * @ORM\Entity
 */
class Codecompta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdCodeCompta", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcodecompta;

    /**
     * @var string
     *
     * @ORM\Column(name="CodeCompta", type="string", length=255, nullable=true)
     */
    private $codecompta;

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

