<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fonctions
 *
 * @ORM\Table(name="Fonctions", uniqueConstraints={@ORM\UniqueConstraint(name="Fonction", columns={"Fonction"})})
 * @ORM\Entity
 */
class Fonctions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdFonction", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfonction;

    /**
     * @var string
     *
     * @ORM\Column(name="Fonction", type="string", length=255, nullable=true)
     */
    private $fonction;

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

