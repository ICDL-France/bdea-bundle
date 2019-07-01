<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Syllabuscat
 *
 * @ORM\Table(name="SyllabusCat", uniqueConstraints={@ORM\UniqueConstraint(name="SyllabusCat", columns={"Numero", "IdSyllabusModule"})}, indexes={@ORM\Index(name="IdSyllabusModule", columns={"IdSyllabusModule"})})
 * @ORM\Entity
 */
class Syllabuscat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdSyllabusCat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsyllabuscat;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdSyllabusModule", type="integer", nullable=false)
     */
    private $idsyllabusmodule = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SyllabusCat", type="string", length=255, nullable=true)
     */
    private $syllabuscat;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Position", type="boolean", nullable=false)
     */
    private $position = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Numero", type="string", length=10, nullable=false)
     */
    private $numero = '';

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

