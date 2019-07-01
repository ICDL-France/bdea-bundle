<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typeformejuridique
 *
 * @ORM\Table(name="TypeFormeJuridique", uniqueConstraints={@ORM\UniqueConstraint(name="form_juri_id", columns={"form_juri_id"})})
 * @ORM\Entity
 */
class Typeformejuridique
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idaut", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idaut;

    /**
     * @var integer
     *
     * @ORM\Column(name="form_juri_id", type="smallint", nullable=false)
     */
    private $formJuriId;

    /**
     * @var string
     *
     * @ORM\Column(name="form_juri_abrev", type="string", length=15, nullable=true)
     */
    private $formJuriAbrev;

    /**
     * @var string
     *
     * @ORM\Column(name="form_juri_lbl", type="string", length=150, nullable=true)
     */
    private $formJuriLbl;

    /**
     * @var integer
     *
     * @ORM\Column(name="form_juri_pos", type="smallint", nullable=false)
     */
    private $formJuriPos = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="aff", type="boolean", nullable=false)
     */
    private $aff = '0';


}

