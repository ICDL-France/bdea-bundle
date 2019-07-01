<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tagcartesgroupeclient
 *
 * @ORM\Table(name="TagCartesGroupeClient", uniqueConstraints={@ORM\UniqueConstraint(name="TagDocument", columns={"IdClient", "IdCartesGroupe"})}, indexes={@ORM\Index(name="IdClient", columns={"IdClient"})})
 * @ORM\Entity
 */
class Tagcartesgroupeclient
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdTagCartesGroupeClient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtagcartesgroupeclient;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdCartesGroupe", type="integer", nullable=true)
     */
    private $idcartesgroupe;

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

