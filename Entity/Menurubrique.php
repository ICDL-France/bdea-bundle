<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menurubrique
 *
 * @ORM\Table(name="MenuRubrique", uniqueConstraints={@ORM\UniqueConstraint(name="MenuRubrique", columns={"MenuRubrique"})})
 * @ORM\Entity
 */
class Menurubrique
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdMenuRubrique", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmenurubrique;

    /**
     * @var string
     *
     * @ORM\Column(name="MenuRubrique", type="string", length=30, nullable=true)
     */
    private $menurubrique;

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

