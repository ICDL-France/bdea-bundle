<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typeencaissement
 *
 * @ORM\Table(name="TypeEncaissement", uniqueConstraints={@ORM\UniqueConstraint(name="TypeEncaissement", columns={"TypeEncaissement"})}, indexes={@ORM\Index(name="SoumisTVA", columns={"SoumisTVA"})})
 * @ORM\Entity
 */
class Typeencaissement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeEncaissement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypeencaissement;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeEncaissement", type="string", length=255, nullable=true)
     */
    private $typeencaissement;

    /**
     * @var boolean
     *
     * @ORM\Column(name="SoumisTVA", type="boolean", nullable=false)
     */
    private $soumistva = '1';

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

