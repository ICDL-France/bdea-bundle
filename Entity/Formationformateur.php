<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formationformateur
 *
 * @ORM\Table(name="FormationFormateur", uniqueConstraints={@ORM\UniqueConstraint(name="Formateur", columns={"IdActeur", "IdFormation"})})
 * @ORM\Entity
 */
class Formationformateur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdFormationFormateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idformationformateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdActeur", type="integer", nullable=true)
     */
    private $idacteur;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdFormation", type="integer", nullable=true)
     */
    private $idformation;

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

