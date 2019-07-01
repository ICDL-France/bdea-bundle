<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devisconditionspaiement
 *
 * @ORM\Table(name="DevisConditionsPaiement", uniqueConstraints={@ORM\UniqueConstraint(name="ModePaiement", columns={"ModePaiement"})})
 * @ORM\Entity
 */
class Devisconditionspaiement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdModePaiement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmodepaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="ModePaiement", type="string", length=255, nullable=true)
     */
    private $modepaiement;

    /**
     * @var integer
     *
     * @ORM\Column(name="AjoutJours", type="integer", nullable=true)
     */
    private $ajoutjours;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Actif", type="boolean", nullable=false)
     */
    private $actif = '1';

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

