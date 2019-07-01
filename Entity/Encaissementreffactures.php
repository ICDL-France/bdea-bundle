<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Encaissementreffactures
 *
 * @ORM\Table(name="EncaissementRefFactures")
 * @ORM\Entity
 */
class Encaissementreffactures
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
     * @ORM\Column(name="IdFactures", type="integer", nullable=false)
     */
    private $idfactures;

    /**
     * @var string
     *
     * @ORM\Column(name="RefBancaire", type="string", length=255, nullable=false)
     */
    private $refbancaire;

    /**
     * @var float
     *
     * @ORM\Column(name="Montant", type="float", precision=10, scale=0, nullable=false)
     */
    private $montant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateCreation", type="date", nullable=false)
     */
    private $datecreation;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdEncaissement", type="integer", nullable=false)
     */
    private $idencaissement;


}

