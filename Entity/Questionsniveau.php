<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questionsniveau
 *
 * @ORM\Table(name="QuestionsNiveau")
 * @ORM\Entity
 */
class Questionsniveau
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdQuestionsNiveau", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idquestionsniveau;

    /**
     * @var boolean
     *
     * @ORM\Column(name="QuestionsNiveau", type="boolean", nullable=true)
     */
    private $questionsniveau;

    /**
     * @var string
     *
     * @ORM\Column(name="TexteNiveau", type="string", length=24, nullable=false)
     */
    private $texteniveau = '';

    /**
     * @var string
     *
     * @ORM\Column(name="TexteNiveauEN", type="string", length=24, nullable=false)
     */
    private $texteniveauen = '';

    /**
     * @var float
     *
     * @ORM\Column(name="Ponderation", type="float", precision=10, scale=0, nullable=false)
     */
    private $ponderation = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="CibleNbQ", type="smallint", nullable=false)
     */
    private $ciblenbq = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="LimiteBasse", type="float", precision=10, scale=0, nullable=false)
     */
    private $limitebasse = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="LimiteHaute", type="float", precision=10, scale=0, nullable=false)
     */
    private $limitehaute = '0';

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

