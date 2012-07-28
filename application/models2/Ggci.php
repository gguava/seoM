<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Ggci
 *
 * @ORM\Table(name="GGci")
 * @ORM\Entity
 */
class Ggci
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $gKeyword
     *
     * @ORM\Column(name="G_keyword", type="string", length=50, nullable=true)
     */
    private $gKeyword;

    /**
     * @var text $gCi
     *
     * @ORM\Column(name="G_ci", type="text", nullable=true)
     */
    private $gCi;

    /**
     * @var string $gCiok
     *
     * @ORM\Column(name="G_ciok", type="string", length=50, nullable=true)
     */
    private $gCiok;

    /**
     * @var integer $gPositionid
     *
     * @ORM\Column(name="G_positionID", type="integer", nullable=true)
     */
    private $gPositionid;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set gKeyword
     *
     * @param string $gKeyword
     * @return Ggci
     */
    public function setGKeyword($gKeyword)
    {
        $this->gKeyword = $gKeyword;
        return $this;
    }

    /**
     * Get gKeyword
     *
     * @return string 
     */
    public function getGKeyword()
    {
        return $this->gKeyword;
    }

    /**
     * Set gCi
     *
     * @param text $gCi
     * @return Ggci
     */
    public function setGCi($gCi)
    {
        $this->gCi = $gCi;
        return $this;
    }

    /**
     * Get gCi
     *
     * @return text 
     */
    public function getGCi()
    {
        return $this->gCi;
    }

    /**
     * Set gCiok
     *
     * @param string $gCiok
     * @return Ggci
     */
    public function setGCiok($gCiok)
    {
        $this->gCiok = $gCiok;
        return $this;
    }

    /**
     * Get gCiok
     *
     * @return string 
     */
    public function getGCiok()
    {
        return $this->gCiok;
    }

    /**
     * Set gPositionid
     *
     * @param integer $gPositionid
     * @return Ggci
     */
    public function setGPositionid($gPositionid)
    {
        $this->gPositionid = $gPositionid;
        return $this;
    }

    /**
     * Get gPositionid
     *
     * @return integer 
     */
    public function getGPositionid()
    {
        return $this->gPositionid;
    }
}