<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vseditiondetailcommande
 *
 * @ORM\Table(name="VSEditionDetailCommande", indexes={@ORM\Index(name="IDX_3C4658DF72148FF6", columns={"IdCommande"}), @ORM\Index(name="IDX_3C4658DF741A3518", columns={"IdLivre"})})
 * @ORM\Entity
 */
class Vseditiondetailcommande
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="Quantite", type="integer", nullable=true)
     */
    private $quantite;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdCommande", type="integer", nullable=false)
     */
    private $idcommande;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdLivre", type="integer", nullable=true)
     */
    private $idlivre;


}

