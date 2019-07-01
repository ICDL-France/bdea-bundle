<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questionsstats
 *
 * @ORM\Table(name="QuestionsStats", uniqueConstraints={@ORM\UniqueConstraint(name="IdQuestion", columns={"IdQuestion"})}, indexes={@ORM\Index(name="IdTypeQuestionnaire", columns={"IdTypeQuestionnaire"}), @ORM\Index(name="IdQuestionEnProd", columns={"IdQuestionEnProd"}), @ORM\Index(name="IdQuestionnaireMaster", columns={"IdQuestionnaireMaster"})})
 * @ORM\Entity
 */
class Questionsstats
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdQuestionStat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idquestionstat;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdQuestion", type="integer", nullable=false)
     */
    private $idquestion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdQuestionEnProd", type="integer", nullable=false)
     */
    private $idquestionenprod = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeQuestionnaire", type="integer", nullable=false)
     */
    private $idtypequestionnaire = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdQuestionnaireMaster", type="integer", nullable=false)
     */
    private $idquestionnairemaster = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NbUtilisations", type="integer", nullable=false)
     */
    private $nbutilisations = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NbReussites", type="integer", nullable=false)
     */
    private $nbreussites = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="PourcentageSucces", type="float", precision=10, scale=0, nullable=false)
     */
    private $pourcentagesucces = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateStat", type="datetime", nullable=false)
     */
    private $datestat = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateModification", type="datetime", nullable=false)
     */
    private $datemodification = '0000-00-00 00:00:00';

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

