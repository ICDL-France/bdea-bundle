<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comptacegid
 *
 * @ORM\Table(name="ComptaCEGID")
 * @ORM\Entity
 */
class Comptacegid
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdArticle", type="integer", nullable=false)
     */
    private $idarticle;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTVA", type="integer", nullable=false)
     */
    private $idtva;

    /**
     * @var integer
     *
     * @ORM\Column(name="Type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="CodeCompta", type="string", length=6, nullable=false)
     */
    private $codecompta;

    /**
     * @var string
     *
     * @ORM\Column(name="CodeTVA", type="string", length=6, nullable=false)
     */
    private $codetva;


}

