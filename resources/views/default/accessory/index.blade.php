@extends('resource.index')
@php
$links['create'] = guard_url('automobile/accessory/create');
$links['search'] = guard_url('automobile/accessory');
@endphp

@section('icon') 
<i class="pe-7s-display2"></i>
@stop

@section('title') 
{!! __('automobile::accessory.title.main') !!}
@stop

@section('sub.title') 
{!! __('automobile::accessory.title.list') !!}
@stop

@section('breadcrumb') 
  <li><a href="{!!guard_url('/')!!}">{{ __('app.home') }}</a></li>
  <li><a href="{!!guard_url('automobile/accessory')!!}">{!! __('automobile::accessory.name') !!}</a></li>
  <li>{{ __('app.list') }}</li>
@stop

@section('entry') 
<div id="entry-form">

</div>
@stop

@section('list')
    @include('automobile::accessory.partial.list.' . $view, ['mode' => 'list'])
@stop

@section('pagination') 
    {!!$accessories->links()!!}
@stop

@section('script')

@stop

@section('style')

@stop 
