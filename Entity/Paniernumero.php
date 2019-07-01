<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paniernumero
 *
 * @ORM\Table(name="PanierNumero", uniqueConstraints={@ORM\UniqueConstraint(name="Numero", columns={"PanierNumero"})})
 * @ORM\Entity
 */
class Paniernumero
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdPanierNumero", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpaniernumero;

    /**
     * @var string
     *
     * @ORM\Column(name="PanierNumero", type="string", length=16, nullable=true)
     */
    private $paniernumero;

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

