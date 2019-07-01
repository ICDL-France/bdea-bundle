<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Televersement
 *
 * @ORM\Table(name="Televersement")
 * @ORM\Entity
 */
class Televersement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdTeleversement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idteleversement;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdProspect", type="integer", nullable=false)
     */
    private $idprospect;

    /**
     * @var string
     *
     * @ORM\Column(name="NomFichier", type="string", length=255, nullable=false)
     */
    private $nomfichier;

    /**
     * @var integer
     *
     * @ORM\Column(name="IterationFichier", type="integer", nullable=false)
     */
    private $iterationfichier;

    /**
     * @var string
     *
     * @ORM\Column(name="ExtensionFichier", type="string", length=3, nullable=false)
     */
    private $extensionfichier;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateTeleversement", type="datetime", nullable=false)
     */
    private $dateteleversement;

    /**
     * @var string
     *
     * @ORM\Column(name="CheminDuFichier", type="text", length=65535, nullable=false)
     */
    private $chemindufichier;

    /**
     * @var string
     *
     * @ORM\Column(name="NumFacture", type="string", length=20, nullable=true)
     */
    private $numfacture;


}

