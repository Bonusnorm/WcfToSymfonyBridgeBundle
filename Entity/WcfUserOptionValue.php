<?php

namespace stepotronic\WcfToSymfonyBridgeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WcfUserOptionValue
 *
 * @ORM\Table(name="user_option_value")
 * @ORM\Entity
 */
class WcfUserOptionValue
{
    /**
     * @var string
     *
     * @ORM\Column(name="userOption1", type="text", length=65535, nullable=true)
     */
    private $useroption1;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption2", type="string", length=10, nullable=false)
     */
    private $useroption2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="userOption3", type="boolean", nullable=false)
     */
    private $useroption3;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption4", type="text", length=65535, nullable=true)
     */
    private $useroption4;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption5", type="text", length=65535, nullable=true)
     */
    private $useroption5;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption6", type="text", length=65535, nullable=true)
     */
    private $useroption6;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption7", type="text", length=65535, nullable=true)
     */
    private $useroption7;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption8", type="text", length=16777215, nullable=true)
     */
    private $useroption8;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption9", type="text", length=65535, nullable=true)
     */
    private $useroption9;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption10", type="text", length=65535, nullable=true)
     */
    private $useroption10;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption11", type="text", length=65535, nullable=true)
     */
    private $useroption11;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption12", type="text", length=65535, nullable=true)
     */
    private $useroption12;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption13", type="text", length=65535, nullable=true)
     */
    private $useroption13;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption14", type="text", length=65535, nullable=true)
     */
    private $useroption14;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption15", type="text", length=65535, nullable=true)
     */
    private $useroption15;

    /**
     * @var boolean
     *
     * @ORM\Column(name="userOption16", type="boolean", nullable=false)
     */
    private $useroption16;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption17", type="text", length=65535, nullable=true)
     */
    private $useroption17;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption18", type="text", length=65535, nullable=true)
     */
    private $useroption18;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption19", type="text", length=65535, nullable=true)
     */
    private $useroption19;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption20", type="text", length=65535, nullable=true)
     */
    private $useroption20;

    /**
     * @var boolean
     *
     * @ORM\Column(name="userOption21", type="boolean", nullable=false)
     */
    private $useroption21;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption22", type="text", length=65535, nullable=true)
     */
    private $useroption22;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption23", type="text", length=65535, nullable=true)
     */
    private $useroption23;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption24", type="text", length=65535, nullable=true)
     */
    private $useroption24;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption25", type="text", length=65535, nullable=true)
     */
    private $useroption25;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption27", type="text", length=65535, nullable=true)
     */
    private $useroption27;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption28", type="text", length=65535, nullable=true)
     */
    private $useroption28;

    /**
     * @var boolean
     *
     * @ORM\Column(name="userOption29", type="boolean", nullable=false)
     */
    private $useroption29;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption31", type="text", length=65535, nullable=true)
     */
    private $useroption31;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption32", type="text", length=65535, nullable=true)
     */
    private $useroption32;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption33", type="text", length=65535, nullable=true)
     */
    private $useroption33;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption34", type="text", length=65535, nullable=true)
     */
    private $useroption34;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption35", type="text", length=65535, nullable=true)
     */
    private $useroption35;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption36", type="text", length=65535, nullable=true)
     */
    private $useroption36;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption37", type="text", length=65535, nullable=true)
     */
    private $useroption37;

    /**
     * @var string
     *
     * @ORM\Column(name="userOption38", type="text", length=65535, nullable=true)
     */
    private $useroption38;

    /**
     * @var integer
     *
     * @ORM\Column(name="userID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userid;



    /**
     * Set useroption1
     *
     * @param string $useroption1
     * @return WcfUserOptionValue
     */
    public function setUseroption1($useroption1)
    {
        $this->useroption1 = $useroption1;

        return $this;
    }

    /**
     * Get useroption1
     *
     * @return string 
     */
    public function getUseroption1()
    {
        return $this->useroption1;
    }

    /**
     * Set useroption2
     *
     * @param string $useroption2
     * @return WcfUserOptionValue
     */
    public function setUseroption2($useroption2)
    {
        $this->useroption2 = $useroption2;

        return $this;
    }

    /**
     * Get useroption2
     *
     * @return string 
     */
    public function getUseroption2()
    {
        return $this->useroption2;
    }

    /**
     * Set useroption3
     *
     * @param boolean $useroption3
     * @return WcfUserOptionValue
     */
    public function setUseroption3($useroption3)
    {
        $this->useroption3 = $useroption3;

        return $this;
    }

    /**
     * Get useroption3
     *
     * @return boolean 
     */
    public function getUseroption3()
    {
        return $this->useroption3;
    }

    /**
     * Set useroption4
     *
     * @param string $useroption4
     * @return WcfUserOptionValue
     */
    public function setUseroption4($useroption4)
    {
        $this->useroption4 = $useroption4;

        return $this;
    }

    /**
     * Get useroption4
     *
     * @return string 
     */
    public function getUseroption4()
    {
        return $this->useroption4;
    }

    /**
     * Set useroption5
     *
     * @param string $useroption5
     * @return WcfUserOptionValue
     */
    public function setUseroption5($useroption5)
    {
        $this->useroption5 = $useroption5;

        return $this;
    }

    /**
     * Get useroption5
     *
     * @return string 
     */
    public function getUseroption5()
    {
        return $this->useroption5;
    }

    /**
     * Set useroption6
     *
     * @param string $useroption6
     * @return WcfUserOptionValue
     */
    public function setUseroption6($useroption6)
    {
        $this->useroption6 = $useroption6;

        return $this;
    }

    /**
     * Get useroption6
     *
     * @return string 
     */
    public function getUseroption6()
    {
        return $this->useroption6;
    }

    /**
     * Set useroption7
     *
     * @param string $useroption7
     * @return WcfUserOptionValue
     */
    public function setUseroption7($useroption7)
    {
        $this->useroption7 = $useroption7;

        return $this;
    }

    /**
     * Get useroption7
     *
     * @return string 
     */
    public function getUseroption7()
    {
        return $this->useroption7;
    }

    /**
     * Set useroption8
     *
     * @param string $useroption8
     * @return WcfUserOptionValue
     */
    public function setUseroption8($useroption8)
    {
        $this->useroption8 = $useroption8;

        return $this;
    }

    /**
     * Get useroption8
     *
     * @return string 
     */
    public function getUseroption8()
    {
        return $this->useroption8;
    }

    /**
     * Set useroption9
     *
     * @param string $useroption9
     * @return WcfUserOptionValue
     */
    public function setUseroption9($useroption9)
    {
        $this->useroption9 = $useroption9;

        return $this;
    }

    /**
     * Get useroption9
     *
     * @return string 
     */
    public function getUseroption9()
    {
        return $this->useroption9;
    }

    /**
     * Set useroption10
     *
     * @param string $useroption10
     * @return WcfUserOptionValue
     */
    public function setUseroption10($useroption10)
    {
        $this->useroption10 = $useroption10;

        return $this;
    }

    /**
     * Get useroption10
     *
     * @return string 
     */
    public function getUseroption10()
    {
        return $this->useroption10;
    }

    /**
     * Set useroption11
     *
     * @param string $useroption11
     * @return WcfUserOptionValue
     */
    public function setUseroption11($useroption11)
    {
        $this->useroption11 = $useroption11;

        return $this;
    }

    /**
     * Get useroption11
     *
     * @return string 
     */
    public function getUseroption11()
    {
        return $this->useroption11;
    }

    /**
     * Set useroption12
     *
     * @param string $useroption12
     * @return WcfUserOptionValue
     */
    public function setUseroption12($useroption12)
    {
        $this->useroption12 = $useroption12;

        return $this;
    }

    /**
     * Get useroption12
     *
     * @return string 
     */
    public function getUseroption12()
    {
        return $this->useroption12;
    }

    /**
     * Set useroption13
     *
     * @param string $useroption13
     * @return WcfUserOptionValue
     */
    public function setUseroption13($useroption13)
    {
        $this->useroption13 = $useroption13;

        return $this;
    }

    /**
     * Get useroption13
     *
     * @return string 
     */
    public function getUseroption13()
    {
        return $this->useroption13;
    }

    /**
     * Set useroption14
     *
     * @param string $useroption14
     * @return WcfUserOptionValue
     */
    public function setUseroption14($useroption14)
    {
        $this->useroption14 = $useroption14;

        return $this;
    }

    /**
     * Get useroption14
     *
     * @return string 
     */
    public function getUseroption14()
    {
        return $this->useroption14;
    }

    /**
     * Set useroption15
     *
     * @param string $useroption15
     * @return WcfUserOptionValue
     */
    public function setUseroption15($useroption15)
    {
        $this->useroption15 = $useroption15;

        return $this;
    }

    /**
     * Get useroption15
     *
     * @return string 
     */
    public function getUseroption15()
    {
        return $this->useroption15;
    }

    /**
     * Set useroption16
     *
     * @param boolean $useroption16
     * @return WcfUserOptionValue
     */
    public function setUseroption16($useroption16)
    {
        $this->useroption16 = $useroption16;

        return $this;
    }

    /**
     * Get useroption16
     *
     * @return boolean 
     */
    public function getUseroption16()
    {
        return $this->useroption16;
    }

    /**
     * Set useroption17
     *
     * @param string $useroption17
     * @return WcfUserOptionValue
     */
    public function setUseroption17($useroption17)
    {
        $this->useroption17 = $useroption17;

        return $this;
    }

    /**
     * Get useroption17
     *
     * @return string 
     */
    public function getUseroption17()
    {
        return $this->useroption17;
    }

    /**
     * Set useroption18
     *
     * @param string $useroption18
     * @return WcfUserOptionValue
     */
    public function setUseroption18($useroption18)
    {
        $this->useroption18 = $useroption18;

        return $this;
    }

    /**
     * Get useroption18
     *
     * @return string 
     */
    public function getUseroption18()
    {
        return $this->useroption18;
    }

    /**
     * Set useroption19
     *
     * @param string $useroption19
     * @return WcfUserOptionValue
     */
    public function setUseroption19($useroption19)
    {
        $this->useroption19 = $useroption19;

        return $this;
    }

    /**
     * Get useroption19
     *
     * @return string 
     */
    public function getUseroption19()
    {
        return $this->useroption19;
    }

    /**
     * Set useroption20
     *
     * @param string $useroption20
     * @return WcfUserOptionValue
     */
    public function setUseroption20($useroption20)
    {
        $this->useroption20 = $useroption20;

        return $this;
    }

    /**
     * Get useroption20
     *
     * @return string 
     */
    public function getUseroption20()
    {
        return $this->useroption20;
    }

    /**
     * Set useroption21
     *
     * @param boolean $useroption21
     * @return WcfUserOptionValue
     */
    public function setUseroption21($useroption21)
    {
        $this->useroption21 = $useroption21;

        return $this;
    }

    /**
     * Get useroption21
     *
     * @return boolean 
     */
    public function getUseroption21()
    {
        return $this->useroption21;
    }

    /**
     * Set useroption22
     *
     * @param string $useroption22
     * @return WcfUserOptionValue
     */
    public function setUseroption22($useroption22)
    {
        $this->useroption22 = $useroption22;

        return $this;
    }

    /**
     * Get useroption22
     *
     * @return string 
     */
    public function getUseroption22()
    {
        return $this->useroption22;
    }

    /**
     * Set useroption23
     *
     * @param string $useroption23
     * @return WcfUserOptionValue
     */
    public function setUseroption23($useroption23)
    {
        $this->useroption23 = $useroption23;

        return $this;
    }

    /**
     * Get useroption23
     *
     * @return string 
     */
    public function getUseroption23()
    {
        return $this->useroption23;
    }

    /**
     * Set useroption24
     *
     * @param string $useroption24
     * @return WcfUserOptionValue
     */
    public function setUseroption24($useroption24)
    {
        $this->useroption24 = $useroption24;

        return $this;
    }

    /**
     * Get useroption24
     *
     * @return string 
     */
    public function getUseroption24()
    {
        return $this->useroption24;
    }

    /**
     * Set useroption25
     *
     * @param string $useroption25
     * @return WcfUserOptionValue
     */
    public function setUseroption25($useroption25)
    {
        $this->useroption25 = $useroption25;

        return $this;
    }

    /**
     * Get useroption25
     *
     * @return string 
     */
    public function getUseroption25()
    {
        return $this->useroption25;
    }

    /**
     * Set useroption27
     *
     * @param string $useroption27
     * @return WcfUserOptionValue
     */
    public function setUseroption27($useroption27)
    {
        $this->useroption27 = $useroption27;

        return $this;
    }

    /**
     * Get useroption27
     *
     * @return string 
     */
    public function getUseroption27()
    {
        return $this->useroption27;
    }

    /**
     * Set useroption28
     *
     * @param string $useroption28
     * @return WcfUserOptionValue
     */
    public function setUseroption28($useroption28)
    {
        $this->useroption28 = $useroption28;

        return $this;
    }

    /**
     * Get useroption28
     *
     * @return string 
     */
    public function getUseroption28()
    {
        return $this->useroption28;
    }

    /**
     * Set useroption29
     *
     * @param boolean $useroption29
     * @return WcfUserOptionValue
     */
    public function setUseroption29($useroption29)
    {
        $this->useroption29 = $useroption29;

        return $this;
    }

    /**
     * Get useroption29
     *
     * @return boolean 
     */
    public function getUseroption29()
    {
        return $this->useroption29;
    }

    /**
     * Set useroption31
     *
     * @param string $useroption31
     * @return WcfUserOptionValue
     */
    public function setUseroption31($useroption31)
    {
        $this->useroption31 = $useroption31;

        return $this;
    }

    /**
     * Get useroption31
     *
     * @return string 
     */
    public function getUseroption31()
    {
        return $this->useroption31;
    }

    /**
     * Set useroption32
     *
     * @param string $useroption32
     * @return WcfUserOptionValue
     */
    public function setUseroption32($useroption32)
    {
        $this->useroption32 = $useroption32;

        return $this;
    }

    /**
     * Get useroption32
     *
     * @return string 
     */
    public function getUseroption32()
    {
        return $this->useroption32;
    }

    /**
     * Set useroption33
     *
     * @param string $useroption33
     * @return WcfUserOptionValue
     */
    public function setUseroption33($useroption33)
    {
        $this->useroption33 = $useroption33;

        return $this;
    }

    /**
     * Get useroption33
     *
     * @return string 
     */
    public function getUseroption33()
    {
        return $this->useroption33;
    }

    /**
     * Set useroption34
     *
     * @param string $useroption34
     * @return WcfUserOptionValue
     */
    public function setUseroption34($useroption34)
    {
        $this->useroption34 = $useroption34;

        return $this;
    }

    /**
     * Get useroption34
     *
     * @return string 
     */
    public function getUseroption34()
    {
        return $this->useroption34;
    }

    /**
     * Set useroption35
     *
     * @param string $useroption35
     * @return WcfUserOptionValue
     */
    public function setUseroption35($useroption35)
    {
        $this->useroption35 = $useroption35;

        return $this;
    }

    /**
     * Get useroption35
     *
     * @return string 
     */
    public function getUseroption35()
    {
        return $this->useroption35;
    }

    /**
     * Set useroption36
     *
     * @param string $useroption36
     * @return WcfUserOptionValue
     */
    public function setUseroption36($useroption36)
    {
        $this->useroption36 = $useroption36;

        return $this;
    }

    /**
     * Get useroption36
     *
     * @return string 
     */
    public function getUseroption36()
    {
        return $this->useroption36;
    }

    /**
     * Set useroption37
     *
     * @param string $useroption37
     * @return WcfUserOptionValue
     */
    public function setUseroption37($useroption37)
    {
        $this->useroption37 = $useroption37;

        return $this;
    }

    /**
     * Get useroption37
     *
     * @return string 
     */
    public function getUseroption37()
    {
        return $this->useroption37;
    }

    /**
     * Set useroption38
     *
     * @param string $useroption38
     * @return WcfUserOptionValue
     */
    public function setUseroption38($useroption38)
    {
        $this->useroption38 = $useroption38;

        return $this;
    }

    /**
     * Get useroption38
     *
     * @return string 
     */
    public function getUseroption38()
    {
        return $this->useroption38;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }
}
