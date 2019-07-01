<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Primepalier
 *
 * @ORM\Table(name="PrimePalier", uniqueConstraints={@ORM\UniqueConstraint(name="Ref", columns={"PrimePalier"})}, indexes={@ORM\Index(name="IdTypePrime", columns={"IdTypePrime"})})
 * @ORM\Entity
 */
class Primepalier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdPrimePalier", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprimepalier;

    /**
     * @var string
     *
     * @ORM\Column(name="PrimePalier", type="string", length=255, nullable=true)
     */
    private $primepalier;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypePrime", type="integer", nullable=false)
     */
    private $idtypeprime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Plancher", type="integer", nullable=false)
     */
    private $plancher = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Plafond", type="integer", nullable=false)
     */
    private $plafond = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Prime", type="integer", nullable=false)
     */
    private $prime = '0';

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

