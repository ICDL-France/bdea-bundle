<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panierctt
 *
 * @ORM\Table(name="PanierCTT", uniqueConstraints={@ORM\UniqueConstraint(name="Numero", columns={"IdPanier", "NumeroQuestion"})})
 * @ORM\Entity
 */
class Panierctt
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdPanierCTT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpanierctt;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdPanier", type="integer", nullable=true)
     */
    private $idpanier;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumeroQuestion", type="smallint", nullable=false)
     */
    private $numeroquestion = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Createur", type="string", length=30, nullable=true)
     */
    private $createur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Creation", type="datetime", nullable=true)
     */
    private $creation;

    /**
     * @var string
     *
     * @ORM\Column(name="Modifieur", type="string", length=30, nullable=true)
     */
    private $modifieur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Modification", type="datetime", nullable=true)
     */
    private $modification;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false)
     */
    private $timestamp = 'CURRENT_TIMESTAMP';


}

