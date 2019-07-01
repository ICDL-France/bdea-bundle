<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tva
 *
 * @ORM\Table(name="TVA", uniqueConstraints={@ORM\UniqueConstraint(name="TxTVA", columns={"TxTVA"})}, indexes={@ORM\Index(name="Actif", columns={"Actif"})})
 * @ORM\Entity
 */
class Tva
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdTVA", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtva;

    /**
     * @var float
     *
     * @ORM\Column(name="TxTVA", type="float", precision=10, scale=0, nullable=true)
     */
    private $txtva;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Actif", type="boolean", nullable=false)
     */
    private $actif = '1';

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

