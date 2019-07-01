<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Elearning
 *
 * @ORM\Table(name="Elearning", uniqueConstraints={@ORM\UniqueConstraint(name="Elearning", columns={"Elearning"})})
 * @ORM\Entity
 */
class Elearning
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdElearning", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idelearning;

    /**
     * @var string
     *
     * @ORM\Column(name="Elearning", type="string", length=255, nullable=true)
     */
    private $elearning;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDebut", type="date", nullable=false)
     */
    private $datedebut = '0000-00-00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateFin", type="date", nullable=false)
     */
    private $datefin = '0000-00-00';

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

