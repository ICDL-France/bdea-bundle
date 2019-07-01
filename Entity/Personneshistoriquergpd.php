<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personneshistoriquergpd
 *
 * @ORM\Table(name="PersonnesHistoriqueRgpd")
 * @ORM\Entity
 */
class Personneshistoriquergpd
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
     * @ORM\Column(name="IdPersonne", type="integer", nullable=false)
     */
    private $idpersonne;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateConsentement", type="date", nullable=true)
     */
    private $dateconsentement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateRenvoieDemandeConsentement", type="date", nullable=true)
     */
    private $daterenvoiedemandeconsentement;


}

