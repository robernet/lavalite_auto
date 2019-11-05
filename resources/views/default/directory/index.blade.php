@extends('resource.index')
@php
$links['create'] = guard_url('automobile/directory/create');
$links['search'] = guard_url('automobile/directory');
@endphp

@section('icon') 
<i class="pe-7s-display2"></i>
@stop

@section('title') 
{!! __('automobile::directory.title.main') !!}
@stop

@section('sub.title') 
{!! __('automobile::directory.title.list') !!}
@stop

@section('breadcrumb') 
  <li><a href="{!!guard_url('/')!!}">{{ __('app.home') }}</a></li>
  <li><a href="{!!guard_url('automobile/directory')!!}">{!! __('automobile::directory.name') !!}</a></li>
  <li>{{ __('app.list') }}</li>
@stop

@section('entry') 
<div id="entry-form">

</div>
@stop

@section('list')
    @include('automobile::directory.partial.list.' . $view, ['mode' => 'list'])
@stop

@section('pagination') 
    {!!$directories->links()!!}
@stop

@section('script')

@stop

@section('style')

@stop 
