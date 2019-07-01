<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questionnairesmaster
 *
 * @ORM\Table(name="QuestionnairesMaster", uniqueConstraints={@ORM\UniqueConstraint(name="SyllabusNomVersion", columns={"IdNomLogiciel"})})
 * @ORM\Entity
 */
class Questionnairesmaster
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdQuestionnaireMaster", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idquestionnairemaster;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdNomLogiciel", type="integer", nullable=false)
     */
    private $idnomlogiciel = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255, nullable=false)
     */
    private $nom = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Repertoire", type="string", length=32, nullable=false)
     */
    private $repertoire = '';

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

    /**
     * @var string
     *
     * @ORM\Column(name="SuiviOnProd", type="string", length=255, nullable=false)
     */
    private $suivionprod;

    /**
     * @var string
     *
     * @ORM\Column(name="EtatMaster", type="string", length=255, nullable=false)
     */
    private $etatmaster;

    /**
     * @var string
     *
     * @ORM\Column(name="DateEtatMaster", type="string", length=255, nullable=false)
     */
    private $dateetatmaster;


}

