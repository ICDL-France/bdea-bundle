<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Syllabus
 *
 * @ORM\Table(name="Syllabus", uniqueConstraints={@ORM\UniqueConstraint(name="Syllabus", columns={"NumeroSyllabus", "IdLangue"})})
 * @ORM\Entity
 */
class Syllabus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdSyllabus", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsyllabus;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdLangue", type="integer", nullable=false)
     */
    private $idlangue = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="Syllabus", type="string", length=30, nullable=true)
     */
    private $syllabus;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroSyllabus", type="string", length=4, nullable=false)
     */
    private $numerosyllabus = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="CodePourExport", type="string", length=8, nullable=false)
     */
    private $codepourexport = '';

    /**
     * @var float
     *
     * @ORM\Column(name="BarreSucces", type="float", precision=10, scale=0, nullable=false)
     */
    private $barresucces = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="TempMaxAlloue", type="boolean", nullable=true)
     */
    private $tempmaxalloue = '30';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateMiseEnService", type="date", nullable=false)
     */
    private $datemiseenservice = '0000-00-00';

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

    /**
     * @var boolean
     *
     * @ORM\Column(name="Actif", type="boolean", nullable=false)
     */
    private $actif = '1';


}

