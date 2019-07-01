<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Syllabusitem
 *
 * @ORM\Table(name="SyllabusItem", uniqueConstraints={@ORM\UniqueConstraint(name="SyllabusItem", columns={"Numero", "IdSyllabusSousCat"})}, indexes={@ORM\Index(name="IdSyllabusSousCat", columns={"IdSyllabusSousCat"})})
 * @ORM\Entity
 */
class Syllabusitem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdSyllabusItem", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsyllabusitem;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdSyllabusSousCat", type="integer", nullable=false)
     */
    private $idsyllabussouscat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SyllabusItem", type="string", length=500, nullable=true)
     */
    private $syllabusitem;

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
     * @var boolean
     *
     * @ORM\Column(name="Niveau", type="boolean", nullable=false)
     */
    private $niveau = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="MT1", type="boolean", nullable=false)
     */
    private $mt1 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="MT2", type="boolean", nullable=false)
     */
    private $mt2 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="MT3", type="boolean", nullable=false)
     */
    private $mt3 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="MT4", type="boolean", nullable=false)
     */
    private $mt4 = '0';

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

