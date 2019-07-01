<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="Departement", uniqueConstraints={@ORM\UniqueConstraint(name="Departement", columns={"Departement"})}, indexes={@ORM\Index(name="IdRegion", columns={"IdRegion"}), @ORM\Index(name="IdTVA", columns={"IdTVA"})})
 * @ORM\Entity
 */
class Departement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdDepartement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddepartement;

    /**
     * @var string
     *
     * @ORM\Column(name="CodePostal", type="string", length=3, nullable=false)
     */
    private $codepostal = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Departement", type="string", length=255, nullable=true)
     */
    private $departement;

    /**
     * @var string
     *
     * @ORM\Column(name="ChefLieu", type="string", length=255, nullable=false)
     */
    private $cheflieu = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdRegion", type="integer", nullable=false)
     */
    private $idregion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTVA", type="integer", nullable=false)
     */
    private $idtva = '0';

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

