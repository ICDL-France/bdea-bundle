<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typeeducation
 *
 * @ORM\Table(name="TypeEducation", uniqueConstraints={@ORM\UniqueConstraint(name="TypeEducation", columns={"TypeEducation"})})
 * @ORM\Entity
 */
class Typeeducation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeEducation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypeeducation;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeEducation", type="string", length=255, nullable=true)
     */
    private $typeeducation;

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

