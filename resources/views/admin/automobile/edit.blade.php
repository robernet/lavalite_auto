    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#automobile" data-toggle="tab">{!! trans('automobile::automobile.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#automobile-automobile-edit'  data-load-to='#automobile-automobile-entry' data-datatable='#automobile-automobile-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#automobile-automobile-entry' data-href='{{guard_url('automobile/automobile')}}/{{$automobile->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('automobile-automobile-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('automobile/automobile/'. $automobile->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="automobile">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('automobile::automobile.name') !!} [{!!$automobile->name!!}] </div>
                @include('automobile::admin.automobile.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>