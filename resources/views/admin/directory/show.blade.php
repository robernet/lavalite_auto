    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('automobile::directory.name') !!}</a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#automobile-directory-entry' data-href='{{guard_url('automobile/directory/create')}}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                @if($directory->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#automobile-directory-entry' data-href='{{ guard_url('automobile/directory') }}/{{$directory->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#automobile-directory-entry' data-datatable='#automobile-directory-list' data-href='{{ guard_url('automobile/directory') }}/{{$directory->getRouteKey()}}' >
                <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                </button>
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('automobile-directory-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('automobile/directory'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('automobile::directory.name') !!}  [{!! $directory->name !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('automobile::admin.directory.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>