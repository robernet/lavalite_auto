    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('automobile::automobile.name') !!}</a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#automobile-automobile-entry' data-href='{{guard_url('automobile/automobile/create')}}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                @if($automobile->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#automobile-automobile-entry' data-href='{{ guard_url('automobile/automobile') }}/{{$automobile->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#automobile-automobile-entry' data-datatable='#automobile-automobile-list' data-href='{{ guard_url('automobile/automobile') }}/{{$automobile->getRouteKey()}}' >
                <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                </button>
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('automobile-automobile-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('automobile/automobile'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('automobile::automobile.name') !!}  [{!! $automobile->name !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('automobile::admin.automobile.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>