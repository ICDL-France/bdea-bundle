<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 *
 * @ORM\Table(name="Pays", uniqueConstraints={@ORM\UniqueConstraint(name="PaysCode", columns={"PaysCode"})}, indexes={@ORM\Index(name="Intracommunautaire", columns={"Intracommunautaire"})})
 * @ORM\Entity
 */
class Pays
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdPays", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpays;

    /**
     * @var string
     *
     * @ORM\Column(name="PaysNom", type="string", length=255, nullable=true)
     */
    private $paysnom;

    /**
     * @var string
     *
     * @ORM\Column(name="PaysCode", type="string", length=2, nullable=false)
     */
    private $payscode = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Intracommunautaire", type="boolean", nullable=false)
     */
    private $intracommunautaire = '0';

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
     * @var \DateTime
     *
     * @ORM\Column(name="Modification", type="datetime", nullable=true)
     */
    private $modification;

    /**
     * @var string
     *
     * @ORM\Column(name="Modifieur", type="string", length=30, nullable=true)
     */
    private $modifieur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false)
     */
    private $timestamp = 'CURRENT_TIMESTAMP';


}

