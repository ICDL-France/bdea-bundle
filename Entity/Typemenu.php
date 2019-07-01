<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typemenu
 *
 * @ORM\Table(name="TypeMenu", uniqueConstraints={@ORM\UniqueConstraint(name="TypeMenu", columns={"TypeMenu"})}, indexes={@ORM\Index(name="EstMenu", columns={"EstMenu"})})
 * @ORM\Entity
 */
class Typemenu
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeMenu", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypemenu;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeMenu", type="string", length=255, nullable=true)
     */
    private $typemenu;

    /**
     * @var boolean
     *
     * @ORM\Column(name="EstMenu", type="boolean", nullable=false)
     */
    private $estmenu = '0';

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

