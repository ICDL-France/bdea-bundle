<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateurs
 *
 * @ORM\Table(name="Utilisateurs", uniqueConstraints={@ORM\UniqueConstraint(name="IdLogin", columns={"IdLogin"})})
 * @ORM\Entity
 */
class Utilisateurs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdUtilisateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idutilisateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdOrganisation", type="integer", nullable=false)
     */
    private $idorganisation = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdLogin", type="integer", nullable=true)
     */
    private $idlogin;

    /**
     * @var string
     *
     * @ORM\Column(name="Login", type="string", length=30, nullable=false)
     */
    private $login = '';

    /**
     * @var string
     *
     * @ORM\Column(name="TypeUtilisateur", type="string", length=1, nullable=false)
     */
    private $typeutilisateur = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ATraiter", type="boolean", nullable=false)
     */
    private $atraiter = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ASupprimer", type="boolean", nullable=false)
     */
    private $asupprimer = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DernierLogin", type="datetime", nullable=true)
     */
    private $dernierlogin;

    /**
     * @var string
     *
     * @ORM\Column(name="DernierLoginIP", type="string", length=39, nullable=true)
     */
    private $dernierloginip;

    /**
     * @var string
     *
     * @ORM\Column(name="MD5", type="string", length=32, nullable=true)
     */
    private $md5;

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

