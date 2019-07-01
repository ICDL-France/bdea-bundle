<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typeposi
 *
 * @ORM\Table(name="TypePosi", uniqueConstraints={@ORM\UniqueConstraint(name="IdArticle", columns={"IdArticle"})})
 * @ORM\Entity
 */
class Typeposi
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypePosi", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypeposi;

    /**
     * @var string
     *
     * @ORM\Column(name="TypePosi", type="string", length=255, nullable=true)
     */
    private $typeposi;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdArticle", type="integer", nullable=false)
     */
    private $idarticle = '0';

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

