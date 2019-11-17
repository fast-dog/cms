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
@extends('public.000.layouts.error')

@section('css')

@stop

@section('content')
    <h1>Ошибка маршрутизации</h1>
    <strong class="h1">400</strong>
@endsection
