<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Region
 *
 * @ORM\Table(name="Region", uniqueConstraints={@ORM\UniqueConstraint(name="RegionPays", columns={"Region", "IdPays"})})
 * @ORM\Entity
 */
class Region
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdRegion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idregion;

    /**
     * @var string
     *
     * @ORM\Column(name="Region", type="string", length=255, nullable=true)
     */
    private $region;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdPays", type="integer", nullable=false)
     */
    private $idpays = '0';

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

