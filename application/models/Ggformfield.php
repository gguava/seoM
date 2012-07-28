<?php


namespace models;
use Doctrine\ORM\Mapping as ORM;

/**
 * Ggformfield
 *
 * @Table(name="GGFormField")
 * @Entity
 */
class Ggformfield
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
     * @var integer $ggformtemplateid
     *
     * @Column(name="GGformTemplateID", type="integer", nullable=false)
     */
    private $ggformtemplateid;

    /**
     * @var string $ggfieldname
     *
     * @Column(name="GGfieldName", type="string", length=50, nullable=false)
     */
    private $ggfieldname;

    /**
     * @var string $gglabel
     *
     * @Column(name="GGlabel", type="string", length=50, nullable=false)
     */
    private $gglabel;

    /**
     * @var string $gginputtype
     *
     * @Column(name="GGinputType", type="string", length=50, nullable=false)
     */
    private $gginputtype;


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
     * Set ggformtemplateid
     *
     * @param integer $ggformtemplateid
     * @return Ggformfield
     */
    public function setGgformtemplateid($ggformtemplateid)
    {
        $this->ggformtemplateid = $ggformtemplateid;
        return $this;
    }

    /**
     * Get ggformtemplateid
     *
     * @return integer 
     */
    public function getGgformtemplateid()
    {
        return $this->ggformtemplateid;
    }

    /**
     * Set ggfieldname
     *
     * @param string $ggfieldname
     * @return Ggformfield
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
     * Set gglabel
     *
     * @param string $gglabel
     * @return Ggformfield
     */
    public function setGglabel($gglabel)
    {
        $this->gglabel = $gglabel;
        return $this;
    }

    /**
     * Get gglabel
     *
     * @return string 
     */
    public function getGglabel()
    {
        return $this->gglabel;
    }

    /**
     * Set gginputtype
     *
     * @param string $gginputtype
     * @return Ggformfield
     */
    public function setGginputtype($gginputtype)
    {
        $this->gginputtype = $gginputtype;
        return $this;
    }

    /**
     * Get gginputtype
     *
     * @return string 
     */
    public function getGginputtype()
    {
        return $this->gginputtype;
    }
}