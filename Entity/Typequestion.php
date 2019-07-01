<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typequestion
 *
 * @ORM\Table(name="TypeQuestion", uniqueConstraints={@ORM\UniqueConstraint(name="TypeQuestion", columns={"TypeQuestion"})}, indexes={@ORM\Index(name="CodeTypeQ", columns={"CodeTypeQ"}), @ORM\Index(name="Actif", columns={"Actif"})})
 * @ORM\Entity
 */
class Typequestion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeQuestion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypequestion;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeQuestion", type="string", length=255, nullable=true)
     */
    private $typequestion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="CodeTypeQ", type="boolean", nullable=false)
     */
    private $codetypeq = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="CodeInca", type="boolean", nullable=false)
     */
    private $codeinca = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="AvecImage", type="boolean", nullable=false)
     */
    private $avecimage = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Hotspot", type="boolean", nullable=false)
     */
    private $hotspot = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="QCM", type="boolean", nullable=false)
     */
    private $qcm = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="NbChoix", type="boolean", nullable=false)
     */
    private $nbchoix = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Actif", type="boolean", nullable=false)
     */
    private $actif = '1';

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

