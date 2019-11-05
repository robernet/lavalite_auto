@extends('resource.index')
@php
$links['create'] = guard_url('automobile/make/create');
$links['search'] = guard_url('automobile/make');
@endphp

@section('icon') 
<i class="pe-7s-display2"></i>
@stop

@section('title') 
{!! __('automobile::make.title.main') !!}
@stop

@section('sub.title') 
{!! __('automobile::make.title.list') !!}
@stop

@section('breadcrumb') 
  <li><a href="{!!guard_url('/')!!}">{{ __('app.home') }}</a></li>
  <li><a href="{!!guard_url('automobile/make')!!}">{!! __('automobile::make.name') !!}</a></li>
  <li>{{ __('app.list') }}</li>
@stop

@section('entry') 
<div id="entry-form">

</div>
@stop

@section('list')
    @include('automobile::make.partial.list.' . $view, ['mode' => 'list'])
@stop

@section('pagination') 
    {!!$makes->links()!!}
@stop

@section('script')

@stop

@section('style')

@stop 
