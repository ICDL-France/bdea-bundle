<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typeprepapcie
 *
 * @ORM\Table(name="TypePrepaPCIE", uniqueConstraints={@ORM\UniqueConstraint(name="IdArticle", columns={"IdArticle"})}, indexes={@ORM\Index(name="AvecElearning", columns={"AvecElearning"})})
 * @ORM\Entity
 */
class Typeprepapcie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypePrepaPCIE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypeprepapcie;

    /**
     * @var string
     *
     * @ORM\Column(name="TypePrepaPCIE", type="string", length=255, nullable=true)
     */
    private $typeprepapcie;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdArticle", type="integer", nullable=false)
     */
    private $idarticle = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="QuotaPrepa", type="boolean", nullable=false)
     */
    private $quotaprepa = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="AvecElearning", type="boolean", nullable=false)
     */
    private $avecelearning = '0';

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

