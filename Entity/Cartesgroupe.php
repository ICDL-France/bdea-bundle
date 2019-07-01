<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cartesgroupe
 *
 * @ORM\Table(name="CartesGroupe", uniqueConstraints={@ORM\UniqueConstraint(name="Tag", columns={"CartesGroupe"})}, indexes={@ORM\Index(name="IdActeur", columns={"IdActeur"})})
 * @ORM\Entity
 */
class Cartesgroupe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdCartesGroupe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcartesgroupe;

    /**
     * @var string
     *
     * @ORM\Column(name="CartesGroupe", type="string", length=255, nullable=true)
     */
    private $cartesgroupe;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdActeur", type="integer", nullable=false)
     */
    private $idacteur = '0';

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

