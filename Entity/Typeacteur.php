<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typeacteur
 *
 * @ORM\Table(name="TypeActeur", uniqueConstraints={@ORM\UniqueConstraint(name="TypeActeur", columns={"TypeActeur"})})
 * @ORM\Entity
 */
class Typeacteur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeActeur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypeacteur;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeActeur", type="string", length=255, nullable=true)
     */
    private $typeacteur;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeUtilisateur", type="string", length=1, nullable=false)
     */
    private $typeutilisateur = '';

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

