<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typeemail
 *
 * @ORM\Table(name="TypeEmail")
 * @ORM\Entity
 */
class Typeemail
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeEmail", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypeemail;

    /**
     * @var string
     *
     * @ORM\Column(name="SujetOffert", type="string", length=255, nullable=true)
     */
    private $sujetoffert;

    /**
     * @var string
     *
     * @ORM\Column(name="SujetVente", type="string", length=255, nullable=true)
     */
    private $sujetvente;

    /**
     * @var string
     *
     * @ORM\Column(name="TexteOffert", type="text", length=65535, nullable=true)
     */
    private $texteoffert;

    /**
     * @var string
     *
     * @ORM\Column(name="TexteVente", type="text", length=65535, nullable=true)
     */
    private $textevente;

    /**
     * @var string
     *
     * @ORM\Column(name="Signature", type="text", length=65535, nullable=true)
     */
    private $signature;


}

