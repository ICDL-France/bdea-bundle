<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nomlogiciel2
 *
 * @ORM\Table(name="NomLogiciel2", uniqueConstraints={@ORM\UniqueConstraint(name="LaSeule", columns={"Nom", "Version", "IdSyllabusModule"})}, indexes={@ORM\Index(name="IdSyllabusModule", columns={"IdSyllabusModule"})})
 * @ORM\Entity
 */
class Nomlogiciel2
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdNomLogiciel", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idnomlogiciel;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=32, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Version", type="string", length=32, nullable=true)
     */
    private $version;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdSyllabusModule", type="integer", nullable=false)
     */
    private $idsyllabusmodule = '0';

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

