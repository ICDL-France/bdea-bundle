<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questions
 *
 * @ORM\Table(name="Questions", indexes={@ORM\Index(name="IdSyllabusItem", columns={"IdSyllabusItem"}), @ORM\Index(name="IdTypeQuestion", columns={"IdTypeQuestion"}), @ORM\Index(name="IdQuestionnaire", columns={"IdQuestionnaireMaster"}), @ORM\Index(name="IdQuestionDansInca", columns={"IdQuestionEnProd"}), @ORM\Index(name="IdQuestionParent", columns={"IdQuestionParent"}), @ORM\Index(name="IdQuestionsNiveau", columns={"IdQuestionsNiveau"}), @ORM\Index(name="NomImageOK", columns={"NomImageOK"}), @ORM\Index(name="Numero", columns={"Numero", "IdQuestionnaireMaster"})})
 * @ORM\Entity
 */
class Questions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdQuestion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idquestion;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdQuestionEnProd", type="integer", nullable=false)
     */
    private $idquestionenprod = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdQuestionParent", type="integer", nullable=false)
     */
    private $idquestionparent = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdQuestionnaireMaster", type="integer", nullable=false)
     */
    private $idquestionnairemaster = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeQuestion", type="integer", nullable=false)
     */
    private $idtypequestion = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NomImage", type="string", length=255, nullable=false)
     */
    private $nomimage = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NomImageOK", type="string", length=255, nullable=false)
     */
    private $nomimageok = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdQuestionsNiveau", type="integer", nullable=false)
     */
    private $idquestionsniveau = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdSyllabusItem", type="integer", nullable=false)
     */
    private $idsyllabusitem = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Numero", type="smallint", nullable=false)
     */
    private $numero = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Enonce", type="text", length=65535, nullable=true)
     */
    private $enonce;

    /**
     * @var string
     *
     * @ORM\Column(name="Explication", type="text", length=65535, nullable=true)
     */
    private $explication;

    /**
     * @var boolean
     *
     * @ORM\Column(name="EnProduction", type="boolean", nullable=false)
     */
    private $enproduction = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateMiseEnService", type="date", nullable=false)
     */
    private $datemiseenservice = '0000-00-00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Creation", type="datetime", nullable=true)
     */
    private $creation;

    /**
     * @var string
     *
     * @ORM\Column(name="Createur", type="string", length=30, nullable=true)
     */
    private $createur;

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

