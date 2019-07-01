<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Correspondancecontratate
 *
 * @ORM\Table(name="CorrespondanceContratATE")
 * @ORM\Entity
 */
class Correspondancecontratate
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdCorrespondanceContratATE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcorrespondancecontratate;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeContrat", type="integer", nullable=false)
     */
    private $idtypecontrat;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdATE", type="integer", nullable=false)
     */
    private $idate;


}

