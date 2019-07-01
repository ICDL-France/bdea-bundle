<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questionsqcm
 *
 * @ORM\Table(name="QuestionsQCM", uniqueConstraints={@ORM\UniqueConstraint(name="IdQuestion", columns={"IdQuestion", "NumeroQCM"})}, indexes={@ORM\Index(name="NumeroQCM", columns={"NumeroQCM"})})
 * @ORM\Entity
 */
class Questionsqcm
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdQuestionsQCM", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idquestionsqcm;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdQuestion", type="integer", nullable=false)
     */
    private $idquestion = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TexteQCM", type="text", length=65535, nullable=false)
     */
    private $texteqcm;

    /**
     * @var boolean
     *
     * @ORM\Column(name="NumeroQCM", type="boolean", nullable=false)
     */
    private $numeroqcm = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="EstBonneReponse", type="boolean", nullable=false)
     */
    private $estbonnereponse = '0';

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

