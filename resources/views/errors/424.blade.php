<?php
/**
 * Created by PhpStorm.
 * User: dg
 * Date: 17.12.2016
 * Time: 22:13
 */


if (\Request::ajax()) {
    echo json_encode(['success' => false, '404' => true]);
    die;
}

?>
@extends('layouts.error')

@section('css')

@stop

@section('content')
    <h1>Невыполненная зависимость</h1>
    <strong class="h1">424</strong>
    @if(isset($user))
        {{dump(view()->shared(null))}}
    @endif
@endsection
