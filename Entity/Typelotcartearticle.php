<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typelotcartearticle
 *
 * @ORM\Table(name="TypeLotCarteArticle", uniqueConstraints={@ORM\UniqueConstraint(name="IdArticle", columns={"IdArticle"})}, indexes={@ORM\Index(name="IdTypeLotCarte", columns={"IdTypeLotCarte"})})
 * @ORM\Entity
 */
class Typelotcartearticle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeLotCarteArticle", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypelotcartearticle;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdArticle", type="integer", nullable=true)
     */
    private $idarticle;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeLotCarte", type="integer", nullable=true)
     */
    private $idtypelotcarte;

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

