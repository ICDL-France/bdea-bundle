<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Syllabusmodule
 *
 * @ORM\Table(name="SyllabusModule", uniqueConstraints={@ORM\UniqueConstraint(name="SyllabusModule", columns={"IdSyllabus", "Numero"})})
 * @ORM\Entity
 */
class Syllabusmodule
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdSyllabusModule", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsyllabusmodule;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdSyllabus", type="integer", nullable=false)
     */
    private $idsyllabus = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SyllabusModule", type="string", length=255, nullable=true)
     */
    private $syllabusmodule;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Position", type="boolean", nullable=false)
     */
    private $position = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Numero", type="smallint", nullable=false)
     */
    private $numero = '0';

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

