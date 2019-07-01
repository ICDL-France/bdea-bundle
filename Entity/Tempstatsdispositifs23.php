<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tempstatsdispositifs23
 *
 * @ORM\Table(name="TempStatsDispositifs23")
 * @ORM\Entity
 */
class Tempstatsdispositifs23
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdTempStatsDispositifs23", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtempstatsdispositifs23;

    /**
     * @var string
     *
     * @ORM\Column(name="LOGIN", type="string", length=16, nullable=true)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="NAME", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="FIRSTNAME", type="string", length=50, nullable=true)
     */
    private $firstname;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_USER", type="integer", nullable=true)
     */
    private $idUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_TEST", type="integer", nullable=true)
     */
    private $idTest;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_GENRE", type="integer", nullable=true)
     */
    private $idGenre;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_NIVEAU_ETUDE", type="integer", nullable=true)
     */
    private $idNiveauEtude;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PROFESSION", type="integer", nullable=true)
     */
    private $idProfession;

    /**
     * @var string
     *
     * @ORM\Column(name="TESTNAME", type="string", length=255, nullable=true)
     */
    private $testname;

    /**
     * @var string
     *
     * @ORM\Column(name="MODULE", type="string", length=8, nullable=true)
     */
    private $module;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ENDDATE", type="datetime", nullable=true)
     */
    private $enddate;

    /**
     * @var integer
     *
     * @ORM\Column(name="SCORE", type="integer", nullable=true)
     */
    private $score;

    /**
     * @var integer
     *
     * @ORM\Column(name="REPONSE", type="integer", nullable=true)
     */
    private $reponse;

    /**
     * @var integer
     *
     * @ORM\Column(name="SCOREMAX", type="integer", nullable=true)
     */
    private $scoremax;

    /**
     * @var integer
     *
     * @ORM\Column(name="PROMOTION", type="integer", nullable=true)
     */
    private $promotion;

    /**
     * @var string
     *
     * @ORM\Column(name="SCOLARITY", type="string", length=255, nullable=true)
     */
    private $scolarity;

    /**
     * @var string
     *
     * @ORM\Column(name="OCCUPATION", type="string", length=255, nullable=true)
     */
    private $occupation;

    /**
     * @var string
     *
     * @ORM\Column(name="PROVENANCE", type="string", length=255, nullable=true)
     */
    private $provenance;

    /**
     * @var string
     *
     * @ORM\Column(name="TRI", type="string", length=1, nullable=true)
     */
    private $tri;

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


}

