<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Starts2
 *
 * @ORM\Table(name="Starts2", uniqueConstraints={@ORM\UniqueConstraint(name="IdCarte", columns={"IdCarte"})}, indexes={@ORM\Index(name="idclient", columns={"IdClient"}), @ORM\Index(name="IdSuccesM1", columns={"IdSuccesM1"}), @ORM\Index(name="IdSuccesM2", columns={"IdSuccesM2"}), @ORM\Index(name="IdSuccesM3", columns={"IdSuccesM3"}), @ORM\Index(name="IdSuccesM4", columns={"IdSuccesM4"}), @ORM\Index(name="Invalide", columns={"Invalide"}), @ORM\Index(name="IdDemandeCertificat", columns={"IdDemandeCertificat"})})
 * @ORM\Entity
 */
class Starts2
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdStart2", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idstart2;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdCarte", type="integer", nullable=true)
     */
    private $idcarte;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdSuccesM1", type="integer", nullable=true)
     */
    private $idsuccesm1;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdSuccesM2", type="integer", nullable=true)
     */
    private $idsuccesm2;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdSuccesM3", type="integer", nullable=true)
     */
    private $idsuccesm3;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdSuccesM4", type="integer", nullable=true)
     */
    private $idsuccesm4;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Start2ImprimeLe", type="datetime", nullable=true)
     */
    private $start2imprimele;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdClient", type="integer", nullable=false)
     */
    private $idclient = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdDemandeCertificat", type="integer", nullable=false)
     */
    private $iddemandecertificat = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Invalide", type="boolean", nullable=true)
     */
    private $invalide = '0';

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


}

