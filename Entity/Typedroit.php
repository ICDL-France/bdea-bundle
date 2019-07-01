<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typedroit
 *
 * @ORM\Table(name="TypeDroit", uniqueConstraints={@ORM\UniqueConstraint(name="TypeDroit", columns={"TypeDroit"})})
 * @ORM\Entity
 */
class Typedroit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeDroit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypedroit;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeDroit", type="string", length=255, nullable=true)
     */
    private $typedroit;

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

