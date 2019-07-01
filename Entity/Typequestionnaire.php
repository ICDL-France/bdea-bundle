<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typequestionnaire
 *
 * @ORM\Table(name="TypeQuestionnaire", uniqueConstraints={@ORM\UniqueConstraint(name="TypeQuestionnaire", columns={"TypeQuestionnaire"})})
 * @ORM\Entity
 */
class Typequestionnaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeQuestionnaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypequestionnaire;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeQuestionnaire", type="string", length=255, nullable=true)
     */
    private $typequestionnaire;

    /**
     * @var boolean
     *
     * @ORM\Column(name="NbPanier", type="boolean", nullable=false)
     */
    private $nbpanier = '0';

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

