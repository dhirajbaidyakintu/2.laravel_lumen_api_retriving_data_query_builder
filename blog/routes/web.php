<?php

$router->get('/select', 'LaravelQueryBuilderController@retrivingAllRowsFromTable');
$router->get('/selectSingleRow', 'LaravelQueryBuilderController@retrivingSingleRowsFromTable');
$router->get('/selectSingleRowIdColumnValue', 'LaravelQueryBuilderController@retrivingSingleRowsIdColumnValue');
$router->get('/retrivingListOfColumnValue', 'LaravelQueryBuilderController@retrivingListOfColumnValue');
$router->get('/retrivingSpecificCustomKeyColumn', 'LaravelQueryBuilderController@retrivingSpecificCustomKeyColumn');
 
