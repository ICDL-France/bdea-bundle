<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typecourrier
 *
 * @ORM\Table(name="TypeCourrier")
 * @ORM\Entity
 */
class Typecourrier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeCourrier", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypecourrier;

    /**
     * @var string
     *
     * @ORM\Column(name="Texte", type="text", length=65535, nullable=true)
     */
    private $texte;


}

