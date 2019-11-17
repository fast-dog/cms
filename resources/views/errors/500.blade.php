<?php
/**
 * Created by PhpStorm.
 * User: dg
 * Date: 15.03.2017
 * Time: 16:28
 */

if (\Request::ajax()) {
    echo json_encode(['success' => false, '404' => true]);
    die;
}
$theme = \App\Modules\Config\Entity\DomainManager::getAssetPath();
?>
@extends('public.000.layouts.error')

@section('css')
    <link rel="stylesheet" href="<?=url($theme . 'css/pages/page_404_error.css')?>">
@stop

@section('content')
    <h1>Критическая ошибка!</h1>
    <strong class="h1">500</strong>
    @unless(empty($sentryID))
        <!-- Sentry JS SDK 2.1.+ required -->
            <script src="https://cdn.ravenjs.com/3.3.0/raven.min.js"></script>

            <script>
                Raven.showReportDialog({
                    eventId: '{{ $sentryID }}',

                    // use the public DSN (dont include your secret!)
                    dsn: 'https://b6aa2a8c1548478cbe0425b8d4a8b920@sentry.io/148176'
                });
            </script>
        @endunless
@stop
