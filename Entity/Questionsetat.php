<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questionsetat
 *
 * @ORM\Table(name="QuestionsEtat", uniqueConstraints={@ORM\UniqueConstraint(name="IdQuestion", columns={"IdQuestion"})}, indexes={@ORM\Index(name="EtatImage", columns={"EtatImage"})})
 * @ORM\Entity
 */
class Questionsetat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdQuestionsEtat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idquestionsetat;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdQuestion", type="integer", nullable=false)
     */
    private $idquestion = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="EtatImage", type="boolean", nullable=false)
     */
    private $etatimage = '0';

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

