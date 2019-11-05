@extends('resource.index')
@php
$links['create'] = guard_url('automobile/carmodel/create');
$links['search'] = guard_url('automobile/carmodel');
@endphp

@section('icon') 
<i class="pe-7s-display2"></i>
@stop

@section('title') 
{!! __('automobile::carmodel.title.main') !!}
@stop

@section('sub.title') 
{!! __('automobile::carmodel.title.list') !!}
@stop

@section('breadcrumb') 
  <li><a href="{!!guard_url('/')!!}">{{ __('app.home') }}</a></li>
  <li><a href="{!!guard_url('automobile/carmodel')!!}">{!! __('automobile::carmodel.name') !!}</a></li>
  <li>{{ __('app.list') }}</li>
@stop

@section('entry') 
<div id="entry-form">

</div>
@stop

@section('list')
    @include('automobile::carmodel.partial.list.' . $view, ['mode' => 'list'])
@stop

@section('pagination') 
    {!!$carmodels->links()!!}
@stop

@section('script')

@stop

@section('style')

@stop 
