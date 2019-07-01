<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typeincamanager
 *
 * @ORM\Table(name="TypeIncaManager")
 * @ORM\Entity
 */
class Typeincamanager
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_TypeIncaManager", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTypeincamanager;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Version", type="string", length=255, nullable=false)
     */
    private $nomVersion;


}

