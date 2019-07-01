<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Syllabusconversion
 *
 * @ORM\Table(name="SyllabusConversion", uniqueConstraints={@ORM\UniqueConstraint(name="Numero", columns={"ItemOrigine", "IdSyllabusOrigine"})}, indexes={@ORM\Index(name="IdSyllabusOrigine", columns={"IdSyllabusOrigine"}), @ORM\Index(name="IdSyllabusDestination", columns={"IdSyllabusDestination"}), @ORM\Index(name="IdModule", columns={"IdModule"})})
 * @ORM\Entity
 */
class Syllabusconversion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdSyllabusConversion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsyllabusconversion;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdSyllabusOrigine", type="integer", nullable=false)
     */
    private $idsyllabusorigine = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdSyllabusDestination", type="integer", nullable=false)
     */
    private $idsyllabusdestination = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ItemOrigine", type="string", length=10, nullable=false)
     */
    private $itemorigine = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ItemDestination", type="string", length=10, nullable=false)
     */
    private $itemdestination = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdModule", type="integer", nullable=false)
     */
    private $idmodule = '0';

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

