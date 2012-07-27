<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Ggformtemplate
 *
 * @ORM\Table(name="GGFormTemplate")
 * @ORM\Entity
 */
class Ggformtemplate
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
     * @var string $ggfieldname
     *
     * @ORM\Column(name="GGfieldName", type="string", length=50, nullable=true)
     */
    private $ggfieldname;

    /**
     * @var string $ggactionto
     *
     * @ORM\Column(name="GGactionTo", type="string", length=50, nullable=true)
     */
    private $ggactionto;


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
     * Set ggfieldname
     *
     * @param string $ggfieldname
     * @return Ggformtemplate
     */
    public function setGgfieldname($ggfieldname)
    {
        $this->ggfieldname = $ggfieldname;
        return $this;
    }

    /**
     * Get ggfieldname
     *
     * @return string 
     */
    public function getGgfieldname()
    {
        return $this->ggfieldname;
    }

    /**
     * Set ggactionto
     *
     * @param string $ggactionto
     * @return Ggformtemplate
     */
    public function setGgactionto($ggactionto)
    {
        $this->ggactionto = $ggactionto;
        return $this;
    }

    /**
     * Get ggactionto
     *
     * @return string 
     */
    public function getGgactionto()
    {
        return $this->ggactionto;
    }
}