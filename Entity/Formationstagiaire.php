<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formationstagiaire
 *
 * @ORM\Table(name="FormationStagiaire", uniqueConstraints={@ORM\UniqueConstraint(name="Stagiaire", columns={"IdPersonne", "IdFormation"})}, indexes={@ORM\Index(name="Confirme", columns={"Confirme"})})
 * @ORM\Entity
 */
class Formationstagiaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdFormationStagiaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idformationstagiaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdPersonne", type="integer", nullable=true)
     */
    private $idpersonne;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdFormation", type="integer", nullable=true)
     */
    private $idformation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Confirme", type="boolean", nullable=false)
     */
    private $confirme = '0';

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

