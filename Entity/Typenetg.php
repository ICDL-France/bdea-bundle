<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typenetg
 *
 * @ORM\Table(name="TypeNetG", uniqueConstraints={@ORM\UniqueConstraint(name="IdArticle", columns={"IdArticle"})}, indexes={@ORM\Index(name="IdElearning", columns={"IdElearning"})})
 * @ORM\Entity
 */
class Typenetg
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeNetG", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypenetg;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeNetG", type="string", length=255, nullable=true)
     */
    private $typenetg;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdArticle", type="integer", nullable=false)
     */
    private $idarticle = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="PxAchat", type="float", precision=10, scale=0, nullable=true)
     */
    private $pxachat;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdElearning", type="integer", nullable=false)
     */
    private $idelearning = '0';

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

