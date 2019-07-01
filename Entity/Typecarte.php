<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typecarte
 *
 * @ORM\Table(name="TypeCarte", uniqueConstraints={@ORM\UniqueConstraint(name="TypeClient", columns={"TypeCarte"})})
 * @ORM\Entity
 */
class Typecarte
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeCarte", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypecarte;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeCarte", type="string", length=255, nullable=true)
     */
    private $typecarte;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeCarteAutreNom", type="string", length=255, nullable=true)
     */
    private $typecarteautrenom;

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

