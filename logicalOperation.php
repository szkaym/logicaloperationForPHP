<?php

/**
 * logical operation 
 */
class logicalOperation {


    public function __construct() {}
    
    /**
     * logical operation of AND
     * 
     * @param $condition Array list of evaluate values
     */
    static function AND_($condition) {
        $result = true;
        foreach($condition as $eval) {
            if(!$eval) {
                $result = false;
            }
        }
        return $result;
    }
    
    /**
     * logical operation of OR
     * 
     * @param $condition Array list of evaluate values
     */
    static function OR_($condition) {
        $result = false;
        foreach($condition as $eval) {
            if($eval) {
                $result = true;
            }
        }
        return $result;
    }
    
    /**
     * logical operation of NAND
     * 
     * @param $condition Array list of evaluate values
     */
    static function NAND_($condition) {
        return !self::AND_($condition);
    }
    
    /**
     * logical operation of NOR
     * 
     * @param $condition Array list of evaluate values
     */
    static function NOR_($condition) {
        return !self::OR_($condition);
    }
    
    /**
     * logical operation of XOR
     * 
     * @param $condition Array list of evaluate values
     */
    static function XOR_($condition) {
        if (self::AND_($condition) || self::NOR_($condition)) {
            return false;
        }
        return true;
    }
    
    /**
     * logical operation of XNOR
     * 
     * @param $condition Array list of evaluate values
     */
    static function XNOR_($condition) {
        return !self::XOR_($condition);
    }

    /**
     * logical operation of XNOR
     * 
     * @param $condition Array list of evaluate values
     */
    static function XAND_($condition) {
        return self::XNOR_($condition);
    }

}