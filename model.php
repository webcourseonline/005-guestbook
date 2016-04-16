<?php

use Pixie\QueryBuilder\QueryBuilderHandler;

function save(QueryBuilderHandler $qb, array $data)
{

    try {
        $result = $qb->table('posts')->insert($data);
    } catch (Exception $e) {
        return array('error' => $e->getMessage());
    }

    return true;
}

function load(QueryBuilderHandler $qb)
{
    $dataDb = $qb->table('posts')->get();

    $arrayOfArrays = array();

    foreach ($dataDb as $dataRaw) {
        $objectsIntoArray = get_object_vars($dataRaw);
        $arrayOfArrays[] = $objectsIntoArray;
    }

    $posts = array_reverse($arrayOfArrays);
    return $posts;
}