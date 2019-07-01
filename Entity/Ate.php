<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ate
 *
 * @ORM\Table(name="ATE", uniqueConstraints={@ORM\UniqueConstraint(name="EditeurEtVersion", columns={"Editeur", "Version"})})
 * @ORM\Entity
 */
class Ate
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdATE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idate;

    /**
     * @var string
     *
     * @ORM\Column(name="Editeur", type="string", length=255, nullable=true)
     */
    private $editeur;

    /**
     * @var string
     *
     * @ORM\Column(name="Version", type="string", length=20, nullable=true)
     */
    private $version;

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

