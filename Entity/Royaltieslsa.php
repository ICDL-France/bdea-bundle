<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Royaltieslsa
 *
 * @ORM\Table(name="RoyaltiesLSA", uniqueConstraints={@ORM\UniqueConstraint(name="IdFacturesDetail", columns={"IdFacturesDetail"})}, indexes={@ORM\Index(name="IdPays", columns={"IdPays"})})
 * @ORM\Entity
 */
class Royaltieslsa
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdRoyaltiesLSA", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idroyaltieslsa;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MoisDeclaration", type="date", nullable=true)
     */
    private $moisdeclaration;

    /**
     * @var integer
     *
     * @ORM\Column(name="NbLSA", type="integer", nullable=true)
     */
    private $nblsa;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdPays", type="integer", nullable=false)
     */
    private $idpays = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdFacturesDetail", type="integer", nullable=false)
     */
    private $idfacturesdetail = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="EuroAPayer", type="float", precision=10, scale=0, nullable=false)
     */
    private $euroapayer = '0';

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

