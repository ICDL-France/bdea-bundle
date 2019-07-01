<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GenApeSscat
 *
 * @ORM\Table(name="Gen_ape_sscat")
 * @ORM\Entity
 */
class GenApeSscat
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
     * @ORM\Column(name="id_sscat", type="integer", nullable=false)
     */
    private $idSscat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="lbl_sscat", type="string", length=150, nullable=true)
     */
    private $lblSscat;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcat", type="integer", nullable=false)
     */
    private $idcat = '0';


}

