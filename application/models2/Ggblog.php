<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Ggblog
 *
 * @ORM\Table(name="GGblog")
 * @ORM\Entity
 */
class Ggblog
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
     * @var string $gblogurl
     *
     * @ORM\Column(name="Gblogurl", type="string", length=50, nullable=true)
     */
    private $gblogurl;

    /**
     * @var string $gusername
     *
     * @ORM\Column(name="Gusername", type="string", length=50, nullable=true)
     */
    private $gusername;

    /**
     * @var string $gpassword
     *
     * @ORM\Column(name="Gpassword", type="string", length=50, nullable=true)
     */
    private $gpassword;

    /**
     * @var string $gblogkey
     *
     * @ORM\Column(name="Gblogkey", type="string", length=50, nullable=true)
     */
    private $gblogkey;

    /**
     * @var string $glinkto
     *
     * @ORM\Column(name="Glinkto", type="string", length=50, nullable=true)
     */
    private $glinkto;


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
     * Set gblogurl
     *
     * @param string $gblogurl
     * @return Ggblog
     */
    public function setGblogurl($gblogurl)
    {
        $this->gblogurl = $gblogurl;
        return $this;
    }

    /**
     * Get gblogurl
     *
     * @return string 
     */
    public function getGblogurl()
    {
        return $this->gblogurl;
    }

    /**
     * Set gusername
     *
     * @param string $gusername
     * @return Ggblog
     */
    public function setGusername($gusername)
    {
        $this->gusername = $gusername;
        return $this;
    }

    /**
     * Get gusername
     *
     * @return string 
     */
    public function getGusername()
    {
        return $this->gusername;
    }

    /**
     * Set gpassword
     *
     * @param string $gpassword
     * @return Ggblog
     */
    public function setGpassword($gpassword)
    {
        $this->gpassword = $gpassword;
        return $this;
    }

    /**
     * Get gpassword
     *
     * @return string 
     */
    public function getGpassword()
    {
        return $this->gpassword;
    }

    /**
     * Set gblogkey
     *
     * @param string $gblogkey
     * @return Ggblog
     */
    public function setGblogkey($gblogkey)
    {
        $this->gblogkey = $gblogkey;
        return $this;
    }

    /**
     * Get gblogkey
     *
     * @return string 
     */
    public function getGblogkey()
    {
        return $this->gblogkey;
    }

    /**
     * Set glinkto
     *
     * @param string $glinkto
     * @return Ggblog
     */
    public function setGlinkto($glinkto)
    {
        $this->glinkto = $glinkto;
        return $this;
    }

    /**
     * Get glinkto
     *
     * @return string 
     */
    public function getGlinkto()
    {
        return $this->glinkto;
    }
}