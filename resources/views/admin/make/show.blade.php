    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('automobile::make.name') !!}</a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#automobile-make-entry' data-href='{{guard_url('automobile/make/create')}}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                @if($make->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#automobile-make-entry' data-href='{{ guard_url('automobile/make') }}/{{$make->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#automobile-make-entry' data-datatable='#automobile-make-list' data-href='{{ guard_url('automobile/make') }}/{{$make->getRouteKey()}}' >
                <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                </button>
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('automobile-make-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('automobile/make'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('automobile::make.name') !!}  [{!! $make->name !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('automobile::admin.make.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>