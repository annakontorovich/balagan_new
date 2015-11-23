<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Application_Model_DbTable_Planing extends Zend_Db_Table_Abstract
{
    protected $_name = 'planing';

    public function getAll($plan_id){
        $sql = "
            SELECT p.*, g.name as game_name
            FROM `$this->_name` as p
            LEFT JOIN `game` as g
            ON(p.game_id = g.game_id)
            WHERE p.plan_id = $plan_id";
        
        return $this->_db->fetchAll($sql);
    }
}

