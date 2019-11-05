            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('country_id')
                       -> label(trans('automobile::automobile.label.country_id'))
                       -> placeholder(trans('automobile::automobile.placeholder.country_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('state_id')
                       -> label(trans('automobile::automobile.label.state_id'))
                       -> placeholder(trans('automobile::automobile.placeholder.state_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('district_id')
                       -> label(trans('automobile::automobile.label.district_id'))
                       -> placeholder(trans('automobile::automobile.placeholder.district_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('city_id')
                       -> label(trans('automobile::automobile.label.city_id'))
                       -> placeholder(trans('automobile::automobile.placeholder.city_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('location_id')
                       -> label(trans('automobile::automobile.label.location_id'))
                       -> placeholder(trans('automobile::automobile.placeholder.location_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('make_id')
                       -> label(trans('automobile::automobile.label.make_id'))
                       -> placeholder(trans('automobile::automobile.placeholder.make_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('model_id')
                       -> label(trans('automobile::automobile.label.model_id'))
                       -> placeholder(trans('automobile::automobile.placeholder.model_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('name')
                       -> label(trans('automobile::automobile.label.name'))
                       -> placeholder(trans('automobile::automobile.placeholder.name'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   {!! Form::inline_radios('type')
                   -> radios(trans('automobile::automobile.options.type'))
                   -> label(trans('automobile::automobile.label.type'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   <div class='form-group'>
                     <label for='releaseyear' class='control-label'>{!!trans('automobile::automobile.label.releaseyear')!!}</label>
                     <div class='input-group pickdate'>
                        {!! Form::text('releaseyear')
                        -> placeholder(trans('automobile::automobile.placeholder.releaseyear'))
                        ->raw()!!}
                       <span class='input-group-addon'><i class='fa fa-calendar'></i></span>
                     </div>
                   </div>
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('color')
                       -> label(trans('automobile::automobile.label.color'))
                       -> placeholder(trans('automobile::automobile.placeholder.color'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('mileage')
                       -> label(trans('automobile::automobile.label.mileage'))
                       -> placeholder(trans('automobile::automobile.placeholder.mileage'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('price')
                       -> label(trans('automobile::automobile.label.price'))
                       -> placeholder(trans('automobile::automobile.placeholder.price'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   {!! Form::inline_radios('transmission')
                   -> radios(trans('automobile::automobile.options.transmission'))
                   -> label(trans('automobile::automobile.label.transmission'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   {!! Form::inline_radios('fuel_type')
                   -> radios(trans('automobile::automobile.options.fuel_type'))
                   -> label(trans('automobile::automobile.label.fuel_type'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::textarea ('description')
                    -> label(trans('automobile::automobile.label.description'))
                    -> placeholder(trans('automobile::automobile.placeholder.description'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   {!! Form::inline_radios('conditionn')
                   -> radios(trans('automobile::automobile.options.conditionn'))
                   -> label(trans('automobile::automobile.label.conditionn'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   {!! Form::inline_radios('engine')
                   -> radios(trans('automobile::automobile.options.engine'))
                   -> label(trans('automobile::automobile.label.engine'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   {!! Form::inline_checkboxes('features[]')
                   -> checkboxes(trans('automobile::automobile.options.features'))
                   -> label(trans('automobile::automobile.label.features'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('address')
                       -> label(trans('automobile::automobile.label.address'))
                       -> placeholder(trans('automobile::automobile.placeholder.address'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('neighborhood')
                       -> label(trans('automobile::automobile.label.neighborhood'))
                       -> placeholder(trans('automobile::automobile.placeholder.neighborhood'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('zip')
                       -> label(trans('automobile::automobile.label.zip'))
                       -> placeholder(trans('automobile::automobile.placeholder.zip'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('images')
                       -> label(trans('automobile::automobile.label.images'))
                       -> placeholder(trans('automobile::automobile.placeholder.images'))!!}
                </div>
            </div>