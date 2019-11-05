    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#make" data-toggle="tab">{!! trans('automobile::make.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#automobile-make-edit'  data-load-to='#automobile-make-entry' data-datatable='#automobile-make-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#automobile-make-entry' data-href='{{guard_url('automobile/make')}}/{{$make->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('automobile-make-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('automobile/make/'. $make->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="make">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('automobile::make.name') !!} [{!!$make->name!!}] </div>
                @include('automobile::admin.make.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>