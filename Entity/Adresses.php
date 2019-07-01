<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adresses
 *
 * @ORM\Table(name="Adresses", indexes={@ORM\Index(name="IdDepartement", columns={"IdDepartement"}), @ORM\Index(name="Denomination", columns={"Denomination"}), @ORM\Index(name="IdPays", columns={"IdPays"})})
 * @ORM\Entity
 */
class Adresses
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdAdresse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idadresse;

    /**
     * @var string
     *
     * @ORM\Column(name="Denomination", type="string", length=60, nullable=true)
     */
    private $denomination;

    /**
     * @var string
     *
     * @ORM\Column(name="Adr1", type="string", length=128, nullable=true)
     */
    private $adr1;

    /**
     * @var string
     *
     * @ORM\Column(name="Adr2", type="string", length=128, nullable=true)
     */
    private $adr2;

    /**
     * @var string
     *
     * @ORM\Column(name="CP", type="string", length=11, nullable=true)
     */
    private $cp;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdDepartement", type="integer", nullable=false)
     */
    private $iddepartement = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Ville", type="string", length=50, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="Cedex", type="string", length=10, nullable=true)
     */
    private $cedex;

    /**
     * @var string
     *
     * @ORM\Column(name="BP", type="string", length=50, nullable=false)
     */
    private $bp;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdPays", type="integer", nullable=false)
     */
    private $idpays = '78';

    /**
     * @var string
     *
     * @ORM\Column(name="Tel", type="string", length=20, nullable=true)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ListeWeb", type="boolean", nullable=true)
     */
    private $listeweb;

    /**
     * @var string
     *
     * @ORM\Column(name="Http", type="string", length=255, nullable=true)
     */
    private $http;

    /**
     * @var string
     *
     * @ORM\Column(name="Commentaires", type="text", length=65535, nullable=true)
     */
    private $commentaires;

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

