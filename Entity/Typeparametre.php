<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typeparametre
 *
 * @ORM\Table(name="TypeParametre", uniqueConstraints={@ORM\UniqueConstraint(name="TypeParametre", columns={"TypeParametre"})})
 * @ORM\Entity
 */
class Typeparametre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeParametre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypeparametre;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeParametre", type="string", length=255, nullable=true)
     */
    private $typeparametre;

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

