<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GenApeCodes
 *
 * @ORM\Table(name="Gen_ape_codes", uniqueConstraints={@ORM\UniqueConstraint(name="ape_code", columns={"ape_code"})})
 * @ORM\Entity
 */
class GenApeCodes
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
     * @ORM\Column(name="id_code", type="integer", nullable=false)
     */
    private $idCode = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="lbl_code", type="string", length=150, nullable=true)
     */
    private $lblCode;

    /**
     * @var string
     *
     * @ORM\Column(name="ape_code", type="string", length=6, nullable=true)
     */
    private $apeCode;

    /**
     * @var string
     *
     * @ORM\Column(name="ape01", type="string", length=4, nullable=true)
     */
    private $ape01;

    /**
     * @var string
     *
     * @ORM\Column(name="ape02", type="string", length=4, nullable=true)
     */
    private $ape02;

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

    /**
     * @var integer
     *
     * @ORM\Column(name="idrub", type="integer", nullable=false)
     */
    private $idrub = '0';


}

