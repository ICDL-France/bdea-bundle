<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cartessuivi
 *
 * @ORM\Table(name="CartesSuivi")
 * @ORM\Entity
 */
class Cartessuivi
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idSuivi", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsuivi;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdCarte", type="integer", nullable=false)
     */
    private $idcarte;

    /**
     * @var string
     *
     * @ORM\Column(name="idCentreSource", type="string", length=10, nullable=false)
     */
    private $idcentresource;

    /**
     * @var string
     *
     * @ORM\Column(name="idCentreCible", type="string", length=10, nullable=false)
     */
    private $idcentrecible;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeOperationSuivi", type="integer", nullable=false)
     */
    private $idtypeoperationsuivi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateOperation", type="datetime", nullable=false)
     */
    private $dateoperation;

    /**
     * @var string
     *
     * @ORM\Column(name="Commentaire", type="text", length=65535, nullable=false)
     */
    private $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="Acteur", type="string", length=25, nullable=false)
     */
    private $acteur;


}

