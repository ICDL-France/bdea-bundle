<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typelotcarte
 *
 * @ORM\Table(name="TypeLotCarte", uniqueConstraints={@ORM\UniqueConstraint(name="TypeClient", columns={"TypeLotCarte"})})
 * @ORM\Entity
 */
class Typelotcarte
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeLotCarte", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypelotcarte;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeLotCarte", type="string", length=255, nullable=true)
     */
    private $typelotcarte;

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

