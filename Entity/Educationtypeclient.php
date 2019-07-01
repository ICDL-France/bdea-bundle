<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Educationtypeclient
 *
 * @ORM\Table(name="EducationTypeClient", uniqueConstraints={@ORM\UniqueConstraint(name="ClassifTypeClient", columns={"IdTypeClient"})}, indexes={@ORM\Index(name="IdEducation", columns={"IdEducation"})})
 * @ORM\Entity
 */
class Educationtypeclient
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdEducationTypeClient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ideducationtypeclient;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdEducation", type="integer", nullable=true)
     */
    private $ideducation;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeClient", type="integer", nullable=true)
     */
    private $idtypeclient;

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

