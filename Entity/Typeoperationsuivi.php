<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typeoperationsuivi
 *
 * @ORM\Table(name="TypeOperationSuivi", uniqueConstraints={@ORM\UniqueConstraint(name="TypePersonne", columns={"TypeOperation"})})
 * @ORM\Entity
 */
class Typeoperationsuivi
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeOperationSuivi", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypeoperationsuivi;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeOperation", type="string", length=255, nullable=true)
     */
    private $typeoperation;

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

