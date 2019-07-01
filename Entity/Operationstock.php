<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Operationstock
 *
 * @ORM\Table(name="OperationStock", uniqueConstraints={@ORM\UniqueConstraint(name="OperationStock", columns={"OperationStock"})})
 * @ORM\Entity
 */
class Operationstock
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdOperationStock", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idoperationstock;

    /**
     * @var string
     *
     * @ORM\Column(name="OperationStock", type="string", length=20, nullable=true)
     */
    private $operationstock;

    /**
     * @var string
     *
     * @ORM\Column(name="Operateur", type="string", length=1, nullable=false)
     */
    private $operateur = '';

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

