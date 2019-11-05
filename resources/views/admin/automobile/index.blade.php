<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file-text-o"></i> {!! trans('automobile::automobile.name') !!} <small> {!! trans('app.manage') !!} {!! trans('automobile::automobile.names') !!}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('automobile::automobile.names') !!}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div id='automobile-automobile-entry'>
    </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                    <li class="{!!(request('status') == '')?'active':'';!!}"><a href="{!!guard_url('automobile/automobile')!!}">{!! trans('automobile::automobile.names') !!}</a></li>
                    <li class="{!!(request('status') == 'archive')?'active':'';!!}"><a href="{!!guard_url('automobile/automobile?status=archive')!!}">Archived</a></li>
                    <li class="{!!(request('status') == 'deleted')?'active':'';!!}"><a href="{!!guard_url('automobile/automobile?status=deleted')!!}">Trashed</a></li>
                    <li class="pull-right">
                    <span class="actions">
                    <!--   
                    <a  class="btn btn-xs btn-purple"  href="{!!guard_url('automobile/automobile/reports')!!}"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-sm hidden-xs"> Reports</span></a>
                    @include('automobile::admin.automobile.partial.actions')
                    -->
                    @include('automobile::admin.automobile.partial.filter')
                    @include('automobile::admin.automobile.partial.column')
                    </span> 
                </li>
            </ul>
            <div class="tab-content">
                <table id="automobile-automobile-list" class="table table-striped data-table">
                    <thead class="list_head">
                        <th style="text-align: right;" width="1%"><a class="btn-reset-filter" href="#Reset" style="display:none; color:#fff;"><i class="fa fa-filter"></i></a> <input type="checkbox" id="automobile-automobile-check-all"></th>
                        <th data-field="country_id">{!! trans('automobile::automobile.label.country_id')!!}</th>
                    <th data-field="state_id">{!! trans('automobile::automobile.label.state_id')!!}</th>
                    <th data-field="district_id">{!! trans('automobile::automobile.label.district_id')!!}</th>
                    <th data-field="city_id">{!! trans('automobile::automobile.label.city_id')!!}</th>
                    <th data-field="location_id">{!! trans('automobile::automobile.label.location_id')!!}</th>
                    <th data-field="make_id">{!! trans('automobile::automobile.label.make_id')!!}</th>
                    <th data-field="model_id">{!! trans('automobile::automobile.label.model_id')!!}</th>
                    <th data-field="name">{!! trans('automobile::automobile.label.name')!!}</th>
                    <th data-field="type">{!! trans('automobile::automobile.label.type')!!}</th>
                    <th data-field="releaseyear">{!! trans('automobile::automobile.label.releaseyear')!!}</th>
                    <th data-field="color">{!! trans('automobile::automobile.label.color')!!}</th>
                    <th data-field="mileage">{!! trans('automobile::automobile.label.mileage')!!}</th>
                    <th data-field="price">{!! trans('automobile::automobile.label.price')!!}</th>
                    <th data-field="transmission">{!! trans('automobile::automobile.label.transmission')!!}</th>
                    <th data-field="fuel_type">{!! trans('automobile::automobile.label.fuel_type')!!}</th>
                    <th data-field="description">{!! trans('automobile::automobile.label.description')!!}</th>
                    <th data-field="conditionn">{!! trans('automobile::automobile.label.conditionn')!!}</th>
                    <th data-field="engine">{!! trans('automobile::automobile.label.engine')!!}</th>
                    <th data-field="zip">{!! trans('automobile::automobile.label.zip')!!}</th>
                    <th data-field="viewcount">{!! trans('automobile::automobile.label.viewcount')!!}</th>
                    </thead>
                </table>
            </div>
        </div>
    </section>
</div>

<script type="text/javascript">

var oTable;
var oSearch;
$(document).ready(function(){
    app.load('#automobile-automobile-entry', '{!!guard_url('automobile/automobile/0')!!}');
    oTable = $('#automobile-automobile-list').dataTable( {
        'columnDefs': [{
            'targets': 0,
            'searchable': false,
            'orderable': false,
            'className': 'dt-body-center',
            'render': function (data, type, full, meta){
                return '<input type="checkbox" name="id[]" value="' + data.id + '">';
            }
        }], 
        
        "responsive" : true,
        "order": [[1, 'asc']],
        "bProcessing": true,
        "sDom": 'R<>rt<ilp><"clear">',
        "bServerSide": true,
        "sAjaxSource": '{!! guard_url('automobile/automobile') !!}',
        "fnServerData" : function ( sSource, aoData, fnCallback ) {

            $.each(oSearch, function(key, val){
                aoData.push( { 'name' : key, 'value' : val } );
            });
            app.dataTable(aoData);
            $.ajax({
                'dataType'  : 'json',
                'data'      : aoData,
                'type'      : 'GET',
                'url'       : sSource,
                'success'   : fnCallback
            });
        },

        "columns": [
            {data :'id'},
            {data :'country_id'},
            {data :'state_id'},
            {data :'district_id'},
            {data :'city_id'},
            {data :'location_id'},
            {data :'make_id'},
            {data :'model_id'},
            {data :'name'},
            {data :'type'},
            {data :'releaseyear'},
            {data :'color'},
            {data :'mileage'},
            {data :'price'},
            {data :'transmission'},
            {data :'fuel_type'},
            {data :'description'},
            {data :'conditionn'},
            {data :'engine'},
            {data :'zip'},
            {data :'viewcount'},
        ],
        "pageLength": 25
    });

    $('#automobile-automobile-list tbody').on( 'click', 'tr td:not(:first-child)', function (e) {
        e.preventDefault();

        oTable.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        var d = $('#automobile-automobile-list').DataTable().row( this ).data();
        $('#automobile-automobile-entry').load('{!!guard_url('automobile/automobile')!!}' + '/' + d.id);
    });

    $('#automobile-automobile-list tbody').on( 'change', "input[name^='id[]']", function (e) {
        e.preventDefault();

        aIds = [];
        $(".child").remove();
        $(this).parent().parent().removeClass('parent'); 
        $("input[name^='id[]']:checked").each(function(){
            aIds.push($(this).val());
        });
    });

    $("#automobile-automobile-check-all").on( 'change', function (e) {
        e.preventDefault();
        aIds = [];
        if ($(this).prop('checked')) {
            $("input[name^='id[]']").each(function(){
                $(this).prop('checked',true);
                aIds.push($(this).val());
            });

            return;
        }else{
            $("input[name^='id[]']").prop('checked',false);
        }
        
    });


    $(".reset_filter").click(function (e) {
        e.preventDefault();
        $("#form-search")[ 0 ].reset();
        $('#form-search input,#form-search select').each( function () {
          oTable.search( this.value ).draw();
        });
        $('#automobile-automobile-list .reset_filter').css('display', 'none');

    });


    // Add event listener for opening and closing details
    $('#automobile-automobile-list tbody').on('click', 'td.details-control', function (e) {
        e.preventDefault();
        var tr = $(this).closest('tr');
        var row = table.row( tr );
 
        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        } else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    });

});
</script>