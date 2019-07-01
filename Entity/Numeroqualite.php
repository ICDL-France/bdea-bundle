<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Numeroqualite
 *
 * @ORM\Table(name="NumeroQualite")
 * @ORM\Entity
 */
class Numeroqualite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdNumeroQualite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idnumeroqualite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Annee", type="date", nullable=false)
     */
    private $annee;

    /**
     * @var string
     *
     * @ORM\Column(name="CodeCentre", type="string", length=6, nullable=false)
     */
    private $codecentre;

    /**
     * @var string
     *
     * @ORM\Column(name="Sigle", type="string", length=2, nullable=false)
     */
    private $sigle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateGenerationNumero", type="datetime", nullable=false)
     */
    private $dategenerationnumero;


}

