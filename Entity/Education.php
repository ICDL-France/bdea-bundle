<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Education
 *
 * @ORM\Table(name="Education", uniqueConstraints={@ORM\UniqueConstraint(name="Public", columns={"Education"})}, indexes={@ORM\Index(name="IdTypePublic", columns={"IdTypeEducation"})})
 * @ORM\Entity
 */
class Education
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdEducation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ideducation;

    /**
     * @var string
     *
     * @ORM\Column(name="Education", type="string", length=255, nullable=true)
     */
    private $education;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeEducation", type="integer", nullable=false)
     */
    private $idtypeeducation = '0';

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

