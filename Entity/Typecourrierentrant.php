<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typecourrierentrant
 *
 * @ORM\Table(name="TypeCourrierEntrant", uniqueConstraints={@ORM\UniqueConstraint(name="TypeCourrierEntrant", columns={"TypeCourrierEntrant"})})
 * @ORM\Entity
 */
class Typecourrierentrant
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeCourrierEntrant", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypecourrierentrant;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeCourrierEntrant", type="string", length=255, nullable=true)
     */
    private $typecourrierentrant;

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

