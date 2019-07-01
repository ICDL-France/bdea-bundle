<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Remisearticlesprospects
 *
 * @ORM\Table(name="RemiseArticlesProspects")
 * @ORM\Entity
 */
class Remisearticlesprospects
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdRemiseArticlesProspects", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idremisearticlesprospects;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdArticle", type="integer", nullable=false)
     */
    private $idarticle;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdProspect", type="integer", nullable=false)
     */
    private $idprospect;

    /**
     * @var integer
     *
     * @ORM\Column(name="Checkbox", type="integer", nullable=false)
     */
    private $checkbox;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PrctRemise", type="boolean", nullable=false)
     */
    private $prctremise;


}

