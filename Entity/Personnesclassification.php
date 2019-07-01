<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personnesclassification
 *
 * @ORM\Table(name="PersonnesClassification", uniqueConstraints={@ORM\UniqueConstraint(name="Contrat", columns={"IdTypePersonne", "IdPersonne"})})
 * @ORM\Entity
 */
class Personnesclassification
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdPersonnesClassification", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpersonnesclassification;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypePersonne", type="integer", nullable=true)
     */
    private $idtypepersonne;

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

