<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vseditionlivre
 *
 * @ORM\Table(name="VSEditionLivre", indexes={@ORM\Index(name="IDX_5966445C330B72B5", columns={"IdCategorie"})})
 * @ORM\Entity
 */
class Vseditionlivre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Avance", type="boolean", nullable=false)
     */
    private $avance = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Ordre", type="integer", nullable=true)
     */
    private $ordre;

    /**
     * @var string
     *
     * @ORM\Column(name="Icone", type="string", length=255, nullable=false)
     */
    private $icone = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Numerique", type="boolean", nullable=false)
     */
    private $numerique = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdCategorie", type="integer", nullable=false)
     */
    private $idcategorie;


}

