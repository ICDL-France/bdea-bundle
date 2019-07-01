<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Raccourci
 *
 * @ORM\Table(name="Raccourci", uniqueConstraints={@ORM\UniqueConstraint(name="MonRaccourci", columns={"IdActeur", "IdMenu"})})
 * @ORM\Entity
 */
class Raccourci
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdRaccourci", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idraccourci;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdActeur", type="integer", nullable=true)
     */
    private $idacteur;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdMenu", type="integer", nullable=true)
     */
    private $idmenu;

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

