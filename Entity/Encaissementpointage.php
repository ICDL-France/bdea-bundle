<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Encaissementpointage
 *
 * @ORM\Table(name="EncaissementPointage")
 * @ORM\Entity
 */
class Encaissementpointage
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
     * @var \DateTime
     *
     * @ORM\Column(name="DateComptabilisation", type="date", nullable=true)
     */
    private $datecomptabilisation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateOperation", type="date", nullable=true)
     */
    private $dateoperation;

    /**
     * @var string
     *
     * @ORM\Column(name="Libelle", type="string", length=255, nullable=true)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="Reference", type="string", length=25, nullable=true)
     */
    private $reference;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateValeur", type="date", nullable=true)
     */
    private $datevaleur;

    /**
     * @var float
     *
     * @ORM\Column(name="Montant", type="float", precision=10, scale=0, nullable=true)
     */
    private $montant;

    /**
     * @var float
     *
     * @ORM\Column(name="MontantRestant", type="float", precision=10, scale=0, nullable=true)
     */
    private $montantrestant;

    /**
     * @var boolean
     *
     * @ORM\Column(name="EnAttente", type="boolean", nullable=false)
     */
    private $enattente = '1';


}

