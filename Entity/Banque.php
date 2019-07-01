<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Banque
 *
 * @ORM\Table(name="Banque", uniqueConstraints={@ORM\UniqueConstraint(name="Domiciliation", columns={"Domiciliation"})})
 * @ORM\Entity
 */
class Banque
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdBanque", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbanque;

    /**
     * @var string
     *
     * @ORM\Column(name="TitulaireCompte", type="string", length=255, nullable=false)
     */
    private $titulairecompte = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Domiciliation", type="string", length=255, nullable=false)
     */
    private $domiciliation = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Adr1", type="string", length=128, nullable=false)
     */
    private $adr1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Adr2", type="string", length=128, nullable=false)
     */
    private $adr2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CP", type="string", length=10, nullable=false)
     */
    private $cp = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Ville", type="string", length=50, nullable=false)
     */
    private $ville = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Cedex", type="string", length=10, nullable=false)
     */
    private $cedex = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CodeBanque", type="string", length=5, nullable=false)
     */
    private $codebanque = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CodeGuichet", type="string", length=5, nullable=false)
     */
    private $codeguichet = '';

    /**
     * @var string
     *
     * @ORM\Column(name="NumCompte", type="string", length=11, nullable=false)
     */
    private $numcompte = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CleRib", type="string", length=2, nullable=false)
     */
    private $clerib = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Iban", type="string", length=34, nullable=false)
     */
    private $iban = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Swift", type="string", length=20, nullable=false)
     */
    private $swift = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Tel", type="string", length=20, nullable=true)
     */
    private $tel;

    /**
     * @var integer
     *
     * @ORM\Column(name="BanqueDefaut", type="integer", nullable=false)
     */
    private $banquedefaut = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="BanqueInactive", type="boolean", nullable=false)
     */
    private $banqueinactive = '0';

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

