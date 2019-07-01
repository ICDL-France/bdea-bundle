<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typepersonne
 *
 * @ORM\Table(name="TypePersonne", uniqueConstraints={@ORM\UniqueConstraint(name="TypePersonne", columns={"TypePersonne"})}, indexes={@ORM\Index(name="UniqueParContact", columns={"UniqueParContact"})})
 * @ORM\Entity
 */
class Typepersonne
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypePersonne", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypepersonne;

    /**
     * @var string
     *
     * @ORM\Column(name="TypePersonne", type="string", length=255, nullable=true)
     */
    private $typepersonne;

    /**
     * @var boolean
     *
     * @ORM\Column(name="UniqueParContact", type="boolean", nullable=false)
     */
    private $uniqueparcontact = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Classement", type="integer", nullable=false)
     */
    private $classement;

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

