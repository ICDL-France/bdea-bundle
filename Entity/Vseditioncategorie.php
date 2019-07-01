<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vseditioncategorie
 *
 * @ORM\Table(name="VSEditionCategorie")
 * @ORM\Entity
 */
class Vseditioncategorie
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
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ordre", type="integer", nullable=true)
     */
    private $ordre;


}

