<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menu
 *
 * @ORM\Table(name="Menu", indexes={@ORM\Index(name="MenuUnique", columns={"IdTypeMenu", "Position", "IdMenuRubrique"}), @ORM\Index(name="IdTypeDroit", columns={"IdTypeDroit"}), @ORM\Index(name="IdMenuRubrique", columns={"IdMenuRubrique"}), @ORM\Index(name="Visible", columns={"Visible"}), @ORM\Index(name="IdParent", columns={"IdParent"})})
 * @ORM\Entity
 */
class Menu
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdMenu", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmenu;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdParent", type="integer", nullable=false)
     */
    private $idparent = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeMenu", type="integer", nullable=false)
     */
    private $idtypemenu = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Position", type="boolean", nullable=false)
     */
    private $position = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Lien", type="string", length=50, nullable=false)
     */
    private $lien = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LienURL", type="string", length=255, nullable=false)
     */
    private $lienurl = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdMenuRubrique", type="integer", nullable=false)
     */
    private $idmenurubrique = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeDroit", type="integer", nullable=false)
     */
    private $idtypedroit = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Visible", type="boolean", nullable=false)
     */
    private $visible = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="EstTitre", type="boolean", nullable=false)
     */
    private $esttitre = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="EstSeparateur", type="boolean", nullable=false)
     */
    private $estseparateur = '0';

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

