<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acteursdroits
 *
 * @ORM\Table(name="ActeursDroits", uniqueConstraints={@ORM\UniqueConstraint(name="ActeurDroit", columns={"IdTypeDroit", "IdActeur"})}, indexes={@ORM\Index(name="IdActeur", columns={"IdActeur"})})
 * @ORM\Entity
 */
class Acteursdroits
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdActeursDroits", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idacteursdroits;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeDroit", type="integer", nullable=false)
     */
    private $idtypedroit = '0';

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

