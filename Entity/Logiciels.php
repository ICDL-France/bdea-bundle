<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Logiciels
 *
 * @ORM\Table(name="Logiciels", uniqueConstraints={@ORM\UniqueConstraint(name="NomTST", columns={"NomTST"}), @ORM\UniqueConstraint(name="KeywordInca", columns={"KeywordInca"})}, indexes={@ORM\Index(name="IdTypeQuestionnaire", columns={"IdTypeQuestionnaire"}), @ORM\Index(name="EnProduction", columns={"EnProduction"}), @ORM\Index(name="IdATE", columns={"IdATE"}), @ORM\Index(name="PasserUnique", columns={"IdNomLogiciel", "IdTypeQuestionnaire", "IdATE"}), @ORM\Index(name="IdIncaClassKeyword", columns={"IdIncaClassKeyword"})})
 * @ORM\Entity
 */
class Logiciels
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdLogiciel", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlogiciel;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdNomLogiciel", type="integer", nullable=false)
     */
    private $idnomlogiciel = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdATE", type="integer", nullable=false)
     */
    private $idate = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NomTST", type="string", length=128, nullable=true)
     */
    private $nomtst;

    /**
     * @var string
     *
     * @ORM\Column(name="ConversionINCA", type="string", length=128, nullable=true)
     */
    private $conversioninca;

    /**
     * @var string
     *
     * @ORM\Column(name="KeywordInca", type="string", length=128, nullable=true)
     */
    private $keywordinca;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdIncaClassKeyword", type="integer", nullable=false)
     */
    private $idincaclasskeyword = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="EnProduction", type="boolean", nullable=false)
     */
    private $enproduction = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeQuestionnaire", type="integer", nullable=false)
     */
    private $idtypequestionnaire = '1';

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

