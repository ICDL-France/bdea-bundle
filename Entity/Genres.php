<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Genres
 *
 * @ORM\Table(name="Genres", uniqueConstraints={@ORM\UniqueConstraint(name="Genre", columns={"Genre"})})
 * @ORM\Entity
 */
class Genres
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdGenre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idgenre;

    /**
     * @var string
     *
     * @ORM\Column(name="Genre", type="string", length=20, nullable=true)
     */
    private $genre;

    /**
     * @var string
     *
     * @ORM\Column(name="GenreComplet", type="string", length=50, nullable=false)
     */
    private $genrecomplet = '';

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
