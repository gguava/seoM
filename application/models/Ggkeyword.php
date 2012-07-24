<?php

namespace models;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ggkeyword
 *
 * @Table(name="GGkeyword")
 * @Entity
 */
class Ggkeyword
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
     * @var string $gPosition
     *
     * @Column(name="G_position", type="string", length=45, nullable=true)
     */
    private $gPosition;

    /**
     * @var string $gUrl
     *
     * @Column(name="G_URL", type="string", length=45, nullable=true)
     */
    private $gUrl;

    /**
     * @var integer $gFatherid
     *
     * @Column(name="G_fatherID", type="integer", nullable=true)
     */
    private $gFatherid;


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
     * Set gPosition
     *
     * @param string $gPosition
     * @return Ggkeyword
     */
    public function setGPosition($gPosition)
    {
        $this->gPosition = $gPosition;
        return $this;
    }

    /**
     * Get gPosition
     *
     * @return string 
     */
    public function getGPosition()
    {
        return $this->gPosition;
    }

    /**
     * Set gUrl
     *
     * @param string $gUrl
     * @return Ggkeyword
     */
    public function setGUrl($gUrl)
    {
        $this->gUrl = $gUrl;
        return $this;
    }

    /**
     * Get gUrl
     *
     * @return string 
     */
    public function getGUrl()
    {
        return $this->gUrl;
    }

    /**
     * Set gFatherid
     *
     * @param integer $gFatherid
     * @return Ggkeyword
     */
    public function setGFatherid($gFatherid)
    {
        $this->gFatherid = $gFatherid;
        return $this;
    }

    /**
     * Get gFatherid
     *
     * @return integer 
     */
    public function getGFatherid()
    {
        return $this->gFatherid;
    }
}