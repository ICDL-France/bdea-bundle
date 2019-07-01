<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typeprime
 *
 * @ORM\Table(name="TypePrime", uniqueConstraints={@ORM\UniqueConstraint(name="TypePrime", columns={"TypePrime"})})
 * @ORM\Entity
 */
class Typeprime
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypePrime", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypeprime;

    /**
     * @var string
     *
     * @ORM\Column(name="TypePrime", type="string", length=255, nullable=true)
     */
    private $typeprime;

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

