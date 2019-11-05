            <table class="table" id="main-table" data-url="{!!guard_url('automobile/directory?withdata=Y')!!}">
                <thead>
                    <tr>
                        <th data-field="user_id">{!! trans('automobile::directory.label.user_id')!!}</th>
                    <th data-field="title">{!! trans('automobile::directory.label.title')!!}</th>
                    <th data-field="phone">{!! trans('automobile::directory.label.phone')!!}</th>
                    <th data-field="email">{!! trans('automobile::directory.label.email')!!}</th>
                    <th data-field="published">{!! trans('automobile::directory.label.published')!!}</th>
                        <th data-field="actions"  data-formatter="operateFormatter" class="text-right">Actions</th>
                    </tr>
                </thead>
            </table>