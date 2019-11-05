@extends('resource.edit')
@php
$links['back'] = guard_url('automobile/carmodel');
$links['form'] = guard_url('automobile/carmodel') . '/' . $carmodel->getRouteKey();
@endphp

@section('icon') 
<i class="pe-7s-display2"></i>
@stop

@section('title') 
{!! __('automobile::carmodel.title.main') !!}
@stop

@section('sub.title') 
{!! __('automobile::carmodel.title.edit') !!}
@stop

@section('breadcrumb') 
  <li><a href="{!!guard_url('/')!!}">{{ __('app.home') }}</a></li>
  <li><a href="{!!guard_url('automobile/carmodel')!!}">{!! __('automobile::carmodel.name') !!}</a></li>
  <li>{{ __('app.edit') }}</li>
@stop

@section('tabs') 
  <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item active">Example</li>
@stop

@section('tools') 
    <a href="{!!guard_url('automobile/carmodel')!!}" rel="tooltip" class="btn btn-white btn-round btn-simple btn-icon pull-right add-new" data-original-title="" title="">
            <i class="fa fa-chevron-left"></i>
    </a>
@stop

@section('content') 
    @include('automobile::carmodel.partial.entry', ['mode' => 'edit'])
@stop

@section('actions') 
<div>
    <input class="btn-large btn-primary btn" type="submit" data-action="UPDATE" data-form="form-edit" value="{{__('app.update')}}"> 
    <input class="btn-large btn-inverse btn" type="reset" value="{{__('app.reset')}}">
</div>
@stop