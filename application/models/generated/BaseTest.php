<?php

/**
 * BaseTest
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $testint
 * @property string $teststring
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5441 2009-01-30 22:58:43Z jwage $
 */
abstract class BaseTest extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('test');
        $this->hasColumn('testint', 'integer', 4, array('type' => 'integer', 'length' => '4'));
        $this->hasColumn('teststring', 'string', 50, array('type' => 'string', 'length' => '50'));
    }

}