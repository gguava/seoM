<?php


namespace models;
use Doctrine\ORM\Mapping as ORM;

/**
 * Ggformtemplate
 *
 * @Table(name="GGFormTemplate")
 * @Entity
 */
class Ggformtemplate
{
    /**
     * @var integer $id
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $ggfieldname
     *
     * @Column(name="GGfieldName", type="string", length=50, nullable=true)
     */
    private $ggfieldname;

    /**
     * @var string $ggactionto
     *
     * @Column(name="GGactionTo", type="string", length=50, nullable=true)
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