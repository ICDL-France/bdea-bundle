<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GenApeRub
 *
 * @ORM\Table(name="Gen_ape_rub")
 * @ORM\Entity
 */
class GenApeRub
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_aut", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAut;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_rub", type="integer", nullable=false)
     */
    private $idRub = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="lbl_rub", type="string", length=150, nullable=true)
     */
    private $lblRub;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcat", type="integer", nullable=false)
     */
    private $idcat = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="idsscat", type="integer", nullable=false)
     */
    private $idsscat = '0';


}

