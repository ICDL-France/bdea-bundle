<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mailing
 *
 * @ORM\Table(name="Mailing", uniqueConstraints={@ORM\UniqueConstraint(name="PersonneDsMailing", columns={"IdEtatMailing", "IdPersonne"})}, indexes={@ORM\Index(name="IdPersonne", columns={"IdPersonne"})})
 * @ORM\Entity
 */
class Mailing
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdMailing", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmailing;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdEtatMailing", type="integer", nullable=true)
     */
    private $idetatmailing;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdPersonne", type="integer", nullable=true)
     */
    private $idpersonne;

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

