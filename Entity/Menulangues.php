<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menulangues
 *
 * @ORM\Table(name="MenuLangues", uniqueConstraints={@ORM\UniqueConstraint(name="IdMenu", columns={"IdMenu", "IdLangue"})})
 * @ORM\Entity
 */
class Menulangues
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdMenuLangues", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmenulangues;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdMenu", type="integer", nullable=false)
     */
    private $idmenu = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdLangue", type="integer", nullable=false)
     */
    private $idlangue = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Menu", type="string", length=50, nullable=true)
     */
    private $menu;

    /**
     * @var string
     *
     * @ORM\Column(name="Aide", type="text", length=16777215, nullable=false)
     */
    private $aide;

    /**
     * @var string
     *
     * @ORM\Column(name="Commentaire", type="string", length=255, nullable=false)
     */
    private $commentaire = '';

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

