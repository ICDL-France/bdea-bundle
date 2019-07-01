<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vseditioncommande
 *
 * @ORM\Table(name="VSEditionCommande", indexes={@ORM\Index(name="IDX_6A10DF676CCE8D41", columns={"IdFacture"})})
 * @ORM\Entity
 */
class Vseditioncommande
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateCommande", type="datetime", nullable=false)
     */
    private $datecommande;

    /**
     * @var integer
     *
     * @ORM\Column(name="QuantiteLivre", type="integer", nullable=true)
     */
    private $quantitelivre;

    /**
     * @var integer
     *
     * @ORM\Column(name="QuantiteCle", type="integer", nullable=true)
     */
    private $quantitecle;

    /**
     * @var string
     *
     * @ORM\Column(name="MailDestinataire", type="string", length=100, nullable=false)
     */
    private $maildestinataire;

    /**
     * @var string
     *
     * @ORM\Column(name="NomDestinataire", type="string", length=255, nullable=false)
     */
    private $nomdestinataire;

    /**
     * @var string
     *
     * @ORM\Column(name="PrenomDestinataire", type="string", length=255, nullable=false)
     */
    private $prenomdestinataire;

    /**
     * @var string
     *
     * @ORM\Column(name="AdresseDestinataire", type="string", length=255, nullable=false)
     */
    private $adressedestinataire;

    /**
     * @var string
     *
     * @ORM\Column(name="CPDestinataire", type="string", length=10, nullable=false)
     */
    private $cpdestinataire;

    /**
     * @var string
     *
     * @ORM\Column(name="VilleDestinataire", type="string", length=100, nullable=false)
     */
    private $villedestinataire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateEnvoi", type="datetime", nullable=true)
     */
    private $dateenvoi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateReception", type="datetime", nullable=true)
     */
    private $datereception;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroTracking", type="string", length=100, nullable=true)
     */
    private $numerotracking;

    /**
     * @var integer
     *
     * @ORM\Column(name="Statut", type="integer", nullable=false)
     */
    private $statut;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdFacture", type="integer", nullable=false)
     */
    private $idfacture;

    /**
     * @var string
     *
     * @ORM\Column(name="TelephoneDestinataire", type="string", length=100, nullable=false)
     */
    private $telephonedestinataire;

    /**
     * @var integer
     *
     * @ORM\Column(name="CiviliteDestinataire", type="integer", nullable=false)
     */
    private $civilitedestinataire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateTraitement", type="datetime", nullable=true)
     */
    private $datetraitement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateEnvoiCle", type="datetime", nullable=true)
     */
    private $dateenvoicle;

    /**
     * @var string
     *
     * @ORM\Column(name="ReferenceCommande", type="string", length=100, nullable=true)
     */
    private $referencecommande;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateAnnulation", type="datetime", nullable=true)
     */
    private $dateannulation;


}

