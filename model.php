<?php

/**
 * save in db
 *
 * <code>
 * $data = array(
 *      'name'=>'1N',
 *      'email' =>'2N',
 *      'date'=> date("Y-m-d"),
 *      'message' => '3N'
 * );
 * $result = save($data);
 * </code>
 *
 * @param array $data name, email, message
 * @return bool
 */
function save(array $data){
    return true;
}

/**
 * loads data from db
 *
 * @return array
 */
function load(){
    return array(
        array(
        'name'=>'1',
        'email' =>'2',
        'date'=> date("Y-m-d"),
        'message' => '3'
        ),
        array(
            'name'=>'1N',
            'email' =>'2N',
            'date'=> date("Y-m-d"),
            'message' => '3N'
        ),
        array(
            'name'=>'1M',
            'email' =>'2M',
            'date'=> date("Y-m-d"),
            'message' => '3M'
        )
    );
}