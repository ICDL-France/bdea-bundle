<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tempdataoracle2
 *
 * @ORM\Table(name="TempDataOracle2")
 * @ORM\Entity
 */
class Tempdataoracle2
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdTempDataOracle2", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtempdataoracle2;

    /**
     * @var string
     *
     * @ORM\Column(name="Code", type="string", length=16, nullable=true)
     */
    private $code;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nb", type="integer", nullable=true)
     */
    private $nb;

    /**
     * @var string
     *
     * @ORM\Column(name="MonIndex", type="string", length=16, nullable=true)
     */
    private $monindex;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="EndDate", type="datetime", nullable=true)
     */
    private $enddate;

    /**
     * @var string
     *
     * @ORM\Column(name="Createur", type="string", length=10, nullable=true)
     */
    private $createur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Creation", type="datetime", nullable=true)
     */
    private $creation;


}

