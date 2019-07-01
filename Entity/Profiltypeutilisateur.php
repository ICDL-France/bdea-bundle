<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profiltypeutilisateur
 *
 * @ORM\Table(name="ProfilTypeUtilisateur", uniqueConstraints={@ORM\UniqueConstraint(name="TypeDroitActeur", columns={"IdTypeDroit", "IdTypeActeur"})}, indexes={@ORM\Index(name="IdTypeActeur", columns={"IdTypeActeur"})})
 * @ORM\Entity
 */
class Profiltypeutilisateur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdProfilTypeUtilisateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprofiltypeutilisateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeActeur", type="integer", nullable=true)
     */
    private $idtypeacteur;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeDroit", type="integer", nullable=true)
     */
    private $idtypedroit;

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

