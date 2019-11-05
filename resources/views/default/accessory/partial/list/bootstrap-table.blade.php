            <table class="table" id="main-table" data-url="{!!guard_url('automobile/accessory?withdata=Y')!!}">
                <thead>
                    <tr>
                        <th data-field="title">{!! trans('automobile::accessory.label.title')!!}</th>
                    <th data-field="category">{!! trans('automobile::accessory.label.category')!!}</th>
                    <th data-field="company">{!! trans('automobile::accessory.label.company')!!}</th>
                    <th data-field="model">{!! trans('automobile::accessory.label.model')!!}</th>
                    <th data-field="price">{!! trans('automobile::accessory.label.price')!!}</th>
                    <th data-field="images">{!! trans('automobile::accessory.label.images')!!}</th>
                    <th data-field="status">{!! trans('automobile::accessory.label.status')!!}</th>
                        <th data-field="actions"  data-formatter="operateFormatter" class="text-right">Actions</th>
                    </tr>
                </thead>
            </table>