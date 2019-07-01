<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articles
 *
 * @ORM\Table(name="Articles", uniqueConstraints={@ORM\UniqueConstraint(name="Ref", columns={"Ref"})}, indexes={@ORM\Index(name="IdCodeStock", columns={"IdCodeStock"}), @ORM\Index(name="IdCodeStat", columns={"IdCodeStat"}), @ORM\Index(name="IdTVA", columns={"IdTVA"}), @ORM\Index(name="IdTypeDroitClient", columns={"IdTypeDroitClient"}), @ORM\Index(name="RefActive", columns={"RefActive"}), @ORM\Index(name="IdCodeCompta", columns={"IdCodeCompta"})})
 * @ORM\Entity
 */
class Articles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdArticle", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idarticle;

    /**
     * @var string
     *
     * @ORM\Column(name="Ref", type="string", length=20, nullable=true)
     */
    private $ref;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdCodeCompta", type="integer", nullable=false)
     */
    private $idcodecompta = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdCodeStock", type="integer", nullable=false)
     */
    private $idcodestock = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdCodeStat", type="integer", nullable=false)
     */
    private $idcodestat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Designation", type="string", length=50, nullable=true)
     */
    private $designation;

    /**
     * @var string
     *
     * @ORM\Column(name="Comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @var float
     *
     * @ORM\Column(name="PUEuro", type="float", precision=10, scale=0, nullable=true)
     */
    private $pueuro;

    /**
     * @var float
     *
     * @ORM\Column(name="QDefaut", type="float", precision=10, scale=0, nullable=false)
     */
    private $qdefaut = '1';

    /**
     * @var float
     *
     * @ORM\Column(name="QDuLot", type="float", precision=10, scale=0, nullable=false)
     */
    private $qdulot = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTVA", type="integer", nullable=false)
     */
    private $idtva = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="RefActive", type="boolean", nullable=false)
     */
    private $refactive = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="CalculStock", type="boolean", nullable=false)
     */
    private $calculstock = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeDroitClient", type="integer", nullable=false)
     */
    private $idtypedroitclient = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="EstCommentaire", type="boolean", nullable=false)
     */
    private $estcommentaire = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ArticleParDefaut", type="boolean", nullable=false)
     */
    private $articlepardefaut = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Creation", type="datetime", nullable=true)
     */
    private $creation;

    /**
     * @var string
     *
     * @ORM\Column(name="Createur", type="string", length=30, nullable=true)
     */
    private $createur;

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

