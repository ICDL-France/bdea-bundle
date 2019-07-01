<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Droitclient
 *
 * @ORM\Table(name="DroitClient", uniqueConstraints={@ORM\UniqueConstraint(name="ActeurDroit", columns={"IdTypeDroitClient", "IdClient"})}, indexes={@ORM\Index(name="IdClient", columns={"IdClient"})})
 * @ORM\Entity
 */
class Droitclient
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdDroitClient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddroitclient;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeDroitClient", type="integer", nullable=true)
     */
    private $idtypedroitclient;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdClient", type="integer", nullable=true)
     */
    private $idclient;

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

