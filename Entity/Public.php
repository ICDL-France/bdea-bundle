<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Public
 *
 * @ORM\Table(name="Public", uniqueConstraints={@ORM\UniqueConstraint(name="Public", columns={"Public"})}, indexes={@ORM\Index(name="IdTypePublic", columns={"IdTypePublic"})})
 * @ORM\Entity
 */
class Public
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdPublic", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpublic;

    /**
     * @var string
     *
     * @ORM\Column(name="Public", type="string", length=255, nullable=true)
     */
    private $public;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypePublic", type="integer", nullable=false)
     */
    private $idtypepublic = '0';

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

