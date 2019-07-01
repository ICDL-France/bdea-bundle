<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typedroitclient
 *
 * @ORM\Table(name="TypeDroitClient", uniqueConstraints={@ORM\UniqueConstraint(name="TypeDroit", columns={"TypeDroitClient"})})
 * @ORM\Entity
 */
class Typedroitclient
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeDroitClient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypedroitclient;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeDroitClient", type="string", length=255, nullable=true)
     */
    private $typedroitclient;

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

