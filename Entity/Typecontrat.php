<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typecontrat
 *
 * @ORM\Table(name="TypeContrat", uniqueConstraints={@ORM\UniqueConstraint(name="Contrat", columns={"Contrat"})})
 * @ORM\Entity
 */
class Typecontrat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeContrat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypecontrat;

    /**
     * @var string
     *
     * @ORM\Column(name="Contrat", type="string", length=255, nullable=true)
     */
    private $contrat;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Actif", type="boolean", nullable=false)
     */
    private $actif = '0';

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

