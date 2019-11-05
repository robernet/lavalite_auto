    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#accessory" data-toggle="tab">{!! trans('automobile::accessory.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#automobile-accessory-edit'  data-load-to='#automobile-accessory-entry' data-datatable='#automobile-accessory-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#automobile-accessory-entry' data-href='{{guard_url('automobile/accessory')}}/{{$accessory->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('automobile-accessory-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('automobile/accessory/'. $accessory->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="accessory">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('automobile::accessory.name') !!} [{!!$accessory->name!!}] </div>
                @include('automobile::admin.accessory.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>