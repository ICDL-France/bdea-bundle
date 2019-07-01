<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parametres
 *
 * @ORM\Table(name="Parametres", uniqueConstraints={@ORM\UniqueConstraint(name="NomParametre", columns={"NomParametre"})}, indexes={@ORM\Index(name="IdTypeParametre", columns={"IdTypeParametre"})})
 * @ORM\Entity
 */
class Parametres
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdParametre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idparametre;

    /**
     * @var string
     *
     * @ORM\Column(name="NomParametre", type="string", length=255, nullable=true)
     */
    private $nomparametre;

    /**
     * @var string
     *
     * @ORM\Column(name="ValeurParametre", type="string", length=255, nullable=true)
     */
    private $valeurparametre;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeParametre", type="integer", nullable=false)
     */
    private $idtypeparametre = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CommentaireParametre", type="string", length=255, nullable=true)
     */
    private $commentaireparametre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Actif", type="boolean", nullable=true)
     */
    private $actif = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Creation", type="datetime", nullable=true)
     */
    private $creation;

    /**
     * @var string
     *
     * @ORM\Column(name="Createur", type="string", length=30, nullable=true)
     */
    private $createur;

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

