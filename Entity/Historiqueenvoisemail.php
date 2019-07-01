<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historiqueenvoisemail
 *
 * @ORM\Table(name="HistoriqueEnvoisEmail")
 * @ORM\Entity
 */
class Historiqueenvoisemail
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdHistoriqueEnvoisEmail", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idhistoriqueenvoisemail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateEnvoiEmail", type="datetime", nullable=true)
     */
    private $dateenvoiemail;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdActeur", type="integer", nullable=true)
     */
    private $idacteur;

    /**
     * @var string
     *
     * @ORM\Column(name="Action", type="string", length=250, nullable=true)
     */
    private $action;

    /**
     * @var integer
     *
     * @ORM\Column(name="Quantite", type="integer", nullable=true)
     */
    private $quantite;

    /**
     * @var string
     *
     * @ORM\Column(name="Produits", type="string", length=250, nullable=true)
     */
    private $produits;

    /**
     * @var string
     *
     * @ORM\Column(name="Factures", type="string", length=50, nullable=true)
     */
    private $factures;

    /**
     * @var string
     *
     * @ORM\Column(name="Devis", type="string", length=50, nullable=true)
     */
    private $devis;

    /**
     * @var string
     *
     * @ORM\Column(name="Message", type="text", length=65535, nullable=true)
     */
    private $message;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdPersonne", type="integer", nullable=true)
     */
    private $idpersonne;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdProspect", type="integer", nullable=true)
     */
    private $idprospect;


}

