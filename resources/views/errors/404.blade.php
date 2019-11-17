<?php
/**
 * Created by PhpStorm.
 * User: dg
 * Date: 17.12.2016
 * Time: 22:13
 */
use FastDog\Core\Models\DomainManager;

if (\Request::ajax()) {
    echo json_encode(['success' => false, '404' => true]);
    die;
}
$theme = DomainManager::getAssetPath();
?>
@extends('layouts.error')

@section('css')
    <link rel="stylesheet" href="<? // url($theme . 'css/pages/page_404_error6.css')?>">
@stop

@section('content')
    <h1>Страница не найдена</h1>
    <strong class="h1">404</strong>
@endsection
