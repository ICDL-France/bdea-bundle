<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questionshotspot
 *
 * @ORM\Table(name="QuestionsHotspot", indexes={@ORM\Index(name="IdQuestion", columns={"IdQuestion"}), @ORM\Index(name="NumeroHotspot", columns={"NumeroHotspot"})})
 * @ORM\Entity
 */
class Questionshotspot
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdQuestionsHotspot", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idquestionshotspot;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdQuestion", type="integer", nullable=false)
     */
    private $idquestion = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TexteHotspot", type="string", length=255, nullable=false)
     */
    private $textehotspot = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="NumeroHotspot", type="boolean", nullable=false)
     */
    private $numerohotspot = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="EstBonneReponse", type="boolean", nullable=false)
     */
    private $estbonnereponse = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="X1", type="smallint", nullable=false)
     */
    private $x1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Y1", type="smallint", nullable=false)
     */
    private $y1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="X2", type="smallint", nullable=false)
     */
    private $x2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Y2", type="smallint", nullable=false)
     */
    private $y2 = '0';

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

