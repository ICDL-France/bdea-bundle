<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Importmaster16
 *
 * @ORM\Table(name="ImportMaster16")
 * @ORM\Entity
 */
class Importmaster16
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdImportMaster", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idimportmaster;

    /**
     * @var integer
     *
     * @ORM\Column(name="TypeQuestion", type="integer", nullable=true)
     */
    private $typequestion;

    /**
     * @var string
     *
     * @ORM\Column(name="Image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="C1", type="string", length=1, nullable=true)
     */
    private $c1;

    /**
     * @var string
     *
     * @ORM\Column(name="Question", type="string", length=255, nullable=true)
     */
    private $question;

    /**
     * @var integer
     *
     * @ORM\Column(name="Niveau", type="integer", nullable=true)
     */
    private $niveau;

    /**
     * @var string
     *
     * @ORM\Column(name="TexteCat", type="string", length=255, nullable=true)
     */
    private $textecat;

    /**
     * @var string
     *
     * @ORM\Column(name="N1", type="string", length=255, nullable=true)
     */
    private $n1;

    /**
     * @var string
     *
     * @ORM\Column(name="N2", type="string", length=255, nullable=true)
     */
    private $n2;

    /**
     * @var string
     *
     * @ORM\Column(name="N3", type="string", length=255, nullable=true)
     */
    private $n3;

    /**
     * @var string
     *
     * @ORM\Column(name="N4", type="string", length=255, nullable=true)
     */
    private $n4;

    /**
     * @var string
     *
     * @ORM\Column(name="BonnesReponses", type="string", length=255, nullable=true)
     */
    private $bonnesreponses;

    /**
     * @var string
     *
     * @ORM\Column(name="TexteHotspot", type="string", length=255, nullable=true)
     */
    private $textehotspot;

    /**
     * @var string
     *
     * @ORM\Column(name="CoordHotspot", type="string", length=255, nullable=true)
     */
    private $coordhotspot;

    /**
     * @var string
     *
     * @ORM\Column(name="C2", type="string", length=255, nullable=true)
     */
    private $c2;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroQuestion", type="string", length=255, nullable=true)
     */
    private $numeroquestion;

    /**
     * @var string
     *
     * @ORM\Column(name="C3", type="string", length=1, nullable=true)
     */
    private $c3;

    /**
     * @var string
     *
     * @ORM\Column(name="C4", type="string", length=255, nullable=true)
     */
    private $c4;

    /**
     * @var string
     *
     * @ORM\Column(name="CatSyl", type="string", length=255, nullable=true)
     */
    private $catsyl;

    /**
     * @var string
     *
     * @ORM\Column(name="C5", type="string", length=1, nullable=true)
     */
    private $c5;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeQuestion", type="integer", nullable=true)
     */
    private $idtypequestion;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdSyllabusItem", type="integer", nullable=true)
     */
    private $idsyllabusitem;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdQuestionsNiveau", type="integer", nullable=true)
     */
    private $idquestionsniveau;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdQuestionnaireMaster", type="integer", nullable=true)
     */
    private $idquestionnairemaster;

    /**
     * @var string
     *
     * @ORM\Column(name="i1", type="string", length=1, nullable=true)
     */
    private $i1;

    /**
     * @var string
     *
     * @ORM\Column(name="i2", type="string", length=1, nullable=true)
     */
    private $i2;

    /**
     * @var string
     *
     * @ORM\Column(name="i3", type="string", length=1, nullable=true)
     */
    private $i3;

    /**
     * @var string
     *
     * @ORM\Column(name="i4", type="string", length=1, nullable=true)
     */
    private $i4;

    /**
     * @var string
     *
     * @ORM\Column(name="i5", type="string", length=1, nullable=true)
     */
    private $i5;

    /**
     * @var string
     *
     * @ORM\Column(name="i6", type="string", length=1, nullable=true)
     */
    private $i6;

    /**
     * @var string
     *
     * @ORM\Column(name="Createur", type="string", length=10, nullable=true)
     */
    private $createur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Creation", type="datetime", nullable=true)
     */
    private $creation;


}

