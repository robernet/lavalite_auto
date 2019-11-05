            <table class="table" id="main-table" data-url="{!!guard_url('automobile/carmodel?withdata=Y')!!}">
                <thead>
                    <tr>
                        <th data-field="make_id">{!! trans('automobile::carmodel.label.make_id')!!}</th>
                    <th data-field="name">{!! trans('automobile::carmodel.label.name')!!}</th>
                        <th data-field="actions"  data-formatter="operateFormatter" class="text-right">Actions</th>
                    </tr>
                </thead>
            </table>