<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etatclient
 *
 * @ORM\Table(name="EtatClient", uniqueConstraints={@ORM\UniqueConstraint(name="EtatClient", columns={"EtatClient"})})
 * @ORM\Entity
 */
class Etatclient
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdEtatClient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idetatclient;

    /**
     * @var string
     *
     * @ORM\Column(name="EtatClient", type="string", length=255, nullable=true)
     */
    private $etatclient;

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

