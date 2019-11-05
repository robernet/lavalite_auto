<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">  {!! trans('automobile::automobile.names') !!} [{!! trans('automobile::automobile.text.preview') !!}]</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-primary btn-sm"  data-action='NEW' data-load-to='#automobile-automobile-entry' data-href='{!!guard_url('automobile/automobile/create')!!}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }} </button>
        </div>
    </div>
</div>