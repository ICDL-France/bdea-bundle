<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GenApeCat
 *
 * @ORM\Table(name="Gen_ape_cat")
 * @ORM\Entity
 */
class GenApeCat
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
     * @ORM\Column(name="id_cat", type="integer", nullable=false)
     */
    private $idCat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="lbl_cat", type="string", length=150, nullable=true)
     */
    private $lblCat;


}

