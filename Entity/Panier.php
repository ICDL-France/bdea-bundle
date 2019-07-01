<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panier
 *
 * @ORM\Table(name="Panier", uniqueConstraints={@ORM\UniqueConstraint(name="Numero", columns={"IdPanierNumero", "IdQuestionnaireMaster", "IdTypeQuestionnaire"})})
 * @ORM\Entity
 */
class Panier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdPanier", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpanier;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdPanierNumero", type="integer", nullable=true)
     */
    private $idpaniernumero;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdQuestionnaireMaster", type="integer", nullable=false)
     */
    private $idquestionnairemaster = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeQuestionnaire", type="integer", nullable=false)
     */
    private $idtypequestionnaire = '0';

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

