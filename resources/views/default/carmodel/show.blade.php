@extends('resource.show')

@php
$links['back'] = guard_url('automobile/carmodel');
$links['edit'] = guard_url('automobile/carmodel') . '/' . $carmodel->getRouteKey() . '/edit';
@endphp

@section('icon') 
<i class="pe-7s-display2"></i>
@stop

@section('title') 
{!! __('automobile::carmodel.title.main') !!}
@stop

@section('sub.title') 
{!! __('automobile::carmodel.title.show') !!}
@stop

@section('breadcrumb') 
  <li><a href="{!!guard_url('/')!!}">{{ __('app.home') }}</a></li>
  <li><a href="{!!guard_url('$automobile/carmodel')!!}">{!! __('automobile::carmodel.name') !!}</a></li>
  <li>{{ __('app.show') }}</li>
@stop

@section('tabs') 
@stop

@section('tools') 
    <a href="{!!guard_url('$automobile/carmodel')!!}" rel="tooltip" class="btn btn-white btn-round btn-simple btn-icon pull-right add-new" data-original-title="" title="">
            <i class="fa fa-chevron-left"></i>
    </a>
@stop

@section('content') 
    @include('automobile::carmodel.partial.show', ['mode' => 'show'])
@stop
