    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#carmodel" data-toggle="tab">{!! trans('automobile::carmodel.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#automobile-carmodel-edit'  data-load-to='#automobile-carmodel-entry' data-datatable='#automobile-carmodel-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#automobile-carmodel-entry' data-href='{{guard_url('automobile/carmodel')}}/{{$carmodel->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('automobile-carmodel-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('automobile/carmodel/'. $carmodel->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="carmodel">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('automobile::carmodel.name') !!} [{!!$carmodel->name!!}] </div>
                @include('automobile::admin.carmodel.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>