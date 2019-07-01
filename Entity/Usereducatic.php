<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usereducatic
 *
 * @ORM\Table(name="UserEducatic")
 * @ORM\Entity
 */
class Usereducatic
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdUserEducatic", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idusereducatic;

    /**
     * @var string
     *
     * @ORM\Column(name="Login", type="string", length=255, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="Pass", type="string", length=255, nullable=false)
     */
    private $pass;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=255, nullable=false)
     */
    private $prenom;


}

