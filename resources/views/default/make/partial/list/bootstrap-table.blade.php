            <table class="table" id="main-table" data-url="{!!guard_url('automobile/make?withdata=Y')!!}">
                <thead>
                    <tr>
                        <th data-field="name">{!! trans('automobile::make.label.name')!!}</th>
                    <th data-field="description">{!! trans('automobile::make.label.description')!!}</th>
                    <th data-field="created_at">{!! trans('automobile::make.label.created_at')!!}</th>
                        <th data-field="actions"  data-formatter="operateFormatter" class="text-right">Actions</th>
                    </tr>
                </thead>
            </table>