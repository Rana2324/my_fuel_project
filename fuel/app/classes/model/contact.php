<?php
class Model_Contact extends Orm\Model
{
    protected static $_table_name = 'contact';
    protected static $_properties = array('id', 'name', 'email', 'gender', 'phone', 'content');
}