<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fonts
 *
 * @ORM\Table(name="Fonts")
 * @ORM\Entity
 */
class Fonts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdFont", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfont;

    /**
     * @var string
     *
     * @ORM\Column(name="Font", type="string", length=20, nullable=true)
     */
    private $font;

    /**
     * @var string
     *
     * @ORM\Column(name="Path", type="string", length=50, nullable=true)
     */
    private $path;

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

