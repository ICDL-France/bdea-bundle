<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adressesdugroupe
 *
 * @ORM\Table(name="AdressesDuGroupe", uniqueConstraints={@ORM\UniqueConstraint(name="MesAdresses", columns={"IdAdresse", "IdProspect"})}, indexes={@ORM\Index(name="IdProspect", columns={"IdProspect"})})
 * @ORM\Entity
 */
class Adressesdugroupe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdAdressesDuGroupe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idadressesdugroupe;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdAdresse", type="integer", nullable=true)
     */
    private $idadresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdProspect", type="integer", nullable=true)
     */
    private $idprospect;

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

