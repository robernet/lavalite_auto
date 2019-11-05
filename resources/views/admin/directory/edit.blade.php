    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#directory" data-toggle="tab">{!! trans('automobile::directory.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#automobile-directory-edit'  data-load-to='#automobile-directory-entry' data-datatable='#automobile-directory-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#automobile-directory-entry' data-href='{{guard_url('automobile/directory')}}/{{$directory->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('automobile-directory-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('automobile/directory/'. $directory->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="directory">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('automobile::directory.name') !!} [{!!$directory->name!!}] </div>
                @include('automobile::admin.directory.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>