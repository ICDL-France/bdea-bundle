<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tempevolutioncentre40
 *
 * @ORM\Table(name="TempEvolutionCentre40")
 * @ORM\Entity
 */
class Tempevolutioncentre40
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdTempEvolutionCentre40", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtempevolutioncentre40;

    /**
     * @var string
     *
     * @ORM\Column(name="Code", type="string", length=16, nullable=true)
     */
    private $code;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nb", type="integer", nullable=true)
     */
    private $nb;

    /**
     * @var string
     *
     * @ORM\Column(name="MonIndex", type="string", length=16, nullable=true)
     */
    private $monindex;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="EndDate", type="datetime", nullable=true)
     */
    private $enddate;

    /**
     * @var string
     *
     * @ORM\Column(name="Createur", type="string", length=10, nullable=true)
     */
    private $createur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Creation", type="datetime", nullable=true)
     */
    private $creation;


}

