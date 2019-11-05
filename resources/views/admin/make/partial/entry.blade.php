            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('name')
                       -> label(trans('automobile::make.label.name'))
                       -> placeholder(trans('automobile::make.placeholder.name'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::textarea ('description')
                    -> label(trans('automobile::make.label.description'))
                    -> placeholder(trans('automobile::make.placeholder.description'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('image')
                       -> label(trans('automobile::make.label.image'))
                       -> placeholder(trans('automobile::make.placeholder.image'))!!}
                </div>
            </div>