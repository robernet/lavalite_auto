            <table class="table" id="main-table" data-url="{!!guard_url('automobile/automobile?withdata=Y')!!}">
                <thead>
                    <tr>
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
                        <th data-field="actions"  data-formatter="operateFormatter" class="text-right">Actions</th>
                    </tr>
                </thead>
            </table>