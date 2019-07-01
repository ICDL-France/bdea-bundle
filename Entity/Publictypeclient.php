<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Publictypeclient
 *
 * @ORM\Table(name="PublicTypeClient", uniqueConstraints={@ORM\UniqueConstraint(name="ClassifTypeClient", columns={"IdTypeClient"})}, indexes={@ORM\Index(name="IdPublic", columns={"IdPublic"})})
 * @ORM\Entity
 */
class Publictypeclient
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdPublicTypeClient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpublictypeclient;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdPublic", type="integer", nullable=true)
     */
    private $idpublic;

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

