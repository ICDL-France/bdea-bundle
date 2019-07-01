<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Regionsparcommercial
 *
 * @ORM\Table(name="RegionsParCommercial", uniqueConstraints={@ORM\UniqueConstraint(name="ActeurRegion", columns={"IdRegion", "IdActeur"})})
 * @ORM\Entity
 */
class Regionsparcommercial
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdRegionsParCommercial", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idregionsparcommercial;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdRegion", type="integer", nullable=true)
     */
    private $idregion;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdActeur", type="integer", nullable=true)
     */
    private $idacteur;

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

