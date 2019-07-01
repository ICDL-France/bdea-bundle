<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questionssuivi
 *
 * @ORM\Table(name="QuestionsSuivi", indexes={@ORM\Index(name="IdQuestion", columns={"IdQuestion"}), @ORM\Index(name="IdTypeQuestionSuivi", columns={"IdTypeQuestionSuivi"}), @ORM\Index(name="IdQuestionnaireMaster", columns={"IdQuestionnaireMaster"}), @ORM\Index(name="IdActeur", columns={"IdActeur"}), @ORM\Index(name="FaireSuivi", columns={"FaireSuivi"})})
 * @ORM\Entity
 */
class Questionssuivi
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdQuestionsSuivi", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idquestionssuivi;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdQuestionnaireMaster", type="integer", nullable=false)
     */
    private $idquestionnairemaster = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdActeur", type="integer", nullable=false)
     */
    private $idacteur = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateSuivi", type="datetime", nullable=true)
     */
    private $datesuivi;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdQuestion", type="integer", nullable=false)
     */
    private $idquestion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeQuestionSuivi", type="integer", nullable=false)
     */
    private $idtypequestionsuivi = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Commentaire", type="blob", length=16777215, nullable=true)
     */
    private $commentaire;

    /**
     * @var boolean
     *
     * @ORM\Column(name="FaireSuivi", type="boolean", nullable=false)
     */
    private $fairesuivi = '0';

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
     * @var string
     *
     * @ORM\Column(name="Modifieur", type="string", length=30, nullable=true)
     */
    private $modifieur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Modification", type="datetime", nullable=true)
     */
    private $modification;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false)
     */
    private $timestamp = 'CURRENT_TIMESTAMP';


}

