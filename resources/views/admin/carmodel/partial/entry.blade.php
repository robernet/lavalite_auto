            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('make_id')
                       -> label(trans('automobile::carmodel.label.make_id'))
                       -> placeholder(trans('automobile::carmodel.placeholder.make_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('name')
                       -> label(trans('automobile::carmodel.label.name'))
                       -> placeholder(trans('automobile::carmodel.placeholder.name'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('description')
                       -> label(trans('automobile::carmodel.label.description'))
                       -> placeholder(trans('automobile::carmodel.placeholder.description'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('image')
                       -> label(trans('automobile::carmodel.label.image'))
                       -> placeholder(trans('automobile::carmodel.placeholder.image'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   {!! Form::inline_radios('status')
                   -> radios(trans('automobile::carmodel.options.status'))
                   -> label(trans('automobile::carmodel.label.status'))!!}
                </div>
            </div>