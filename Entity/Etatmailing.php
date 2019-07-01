<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etatmailing
 *
 * @ORM\Table(name="EtatMailing", uniqueConstraints={@ORM\UniqueConstraint(name="EtatMailing_2", columns={"EtatMailing"})}, indexes={@ORM\Index(name="IdActeur", columns={"IdActeur"})})
 * @ORM\Entity
 */
class Etatmailing
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdEtatMailing", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idetatmailing;

    /**
     * @var string
     *
     * @ORM\Column(name="EtatMailing", type="string", length=255, nullable=true)
     */
    private $etatmailing;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdActeur", type="integer", nullable=false)
     */
    private $idacteur = '0';

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

