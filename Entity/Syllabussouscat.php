<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Syllabussouscat
 *
 * @ORM\Table(name="SyllabusSousCat", uniqueConstraints={@ORM\UniqueConstraint(name="SyllabusSousCat", columns={"Numero", "IdSyllabusCat"})}, indexes={@ORM\Index(name="IdSyllabusCat", columns={"IdSyllabusCat"})})
 * @ORM\Entity
 */
class Syllabussouscat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdSyllabusSousCat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsyllabussouscat;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdSyllabusCat", type="integer", nullable=false)
     */
    private $idsyllabuscat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SyllabusSousCat", type="string", length=255, nullable=true)
     */
    private $syllabussouscat;

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

