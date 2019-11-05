@extends('resource.index')
@php
$links['create'] = guard_url('automobile/automobile/create');
$links['search'] = guard_url('automobile/automobile');
@endphp

@section('icon') 
<i class="pe-7s-display2"></i>
@stop

@section('title') 
{!! __('automobile::automobile.title.main') !!}
@stop

@section('sub.title') 
{!! __('automobile::automobile.title.list') !!}
@stop

@section('breadcrumb') 
  <li><a href="{!!guard_url('/')!!}">{{ __('app.home') }}</a></li>
  <li><a href="{!!guard_url('automobile/automobile')!!}">{!! __('automobile::automobile.name') !!}</a></li>
  <li>{{ __('app.list') }}</li>
@stop

@section('entry') 
<div id="entry-form">

</div>
@stop

@section('list')
    @include('automobile::automobile.partial.list.' . $view, ['mode' => 'list'])
@stop

@section('pagination') 
    {!!$automobiles->links()!!}
@stop

@section('script')

@stop

@section('style')

@stop 
