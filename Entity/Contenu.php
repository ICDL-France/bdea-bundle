<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contenu
 *
 * @ORM\Table(name="Contenu", uniqueConstraints={@ORM\UniqueConstraint(name="Contenu", columns={"Contenu"})})
 * @ORM\Entity
 */
class Contenu
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdContenu", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcontenu;

    /**
     * @var string
     *
     * @ORM\Column(name="Contenu", type="string", length=255, nullable=true)
     */
    private $contenu;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Actif", type="boolean", nullable=true)
     */
    private $actif;

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

