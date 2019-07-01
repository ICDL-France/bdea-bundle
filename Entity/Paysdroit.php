<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paysdroit
 *
 * @ORM\Table(name="PaysDroit", uniqueConstraints={@ORM\UniqueConstraint(name="IdPays", columns={"IdPays"})}, indexes={@ORM\Index(name="Inactif", columns={"Inactif"})})
 * @ORM\Entity
 */
class Paysdroit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdPaysDroit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpaysdroit;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdPays", type="integer", nullable=false)
     */
    private $idpays = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Inactif", type="boolean", nullable=false)
     */
    private $inactif = '0';

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

