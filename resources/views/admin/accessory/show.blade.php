    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('automobile::accessory.name') !!}</a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#automobile-accessory-entry' data-href='{{guard_url('automobile/accessory/create')}}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                @if($accessory->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#automobile-accessory-entry' data-href='{{ guard_url('automobile/accessory') }}/{{$accessory->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#automobile-accessory-entry' data-datatable='#automobile-accessory-list' data-href='{{ guard_url('automobile/accessory') }}/{{$accessory->getRouteKey()}}' >
                <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                </button>
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('automobile-accessory-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('automobile/accessory'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('automobile::accessory.name') !!}  [{!! $accessory->name !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('automobile::admin.accessory.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>