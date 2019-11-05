            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('country_id')
                       -> label(trans('automobile::directory.label.country_id'))
                       -> placeholder(trans('automobile::directory.placeholder.country_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('state_id')
                       -> label(trans('automobile::directory.label.state_id'))
                       -> placeholder(trans('automobile::directory.placeholder.state_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('district_id')
                       -> label(trans('automobile::directory.label.district_id'))
                       -> placeholder(trans('automobile::directory.placeholder.district_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('city_id')
                       -> label(trans('automobile::directory.label.city_id'))
                       -> placeholder(trans('automobile::directory.placeholder.city_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('location_id')
                       -> label(trans('automobile::directory.label.location_id'))
                       -> placeholder(trans('automobile::directory.placeholder.location_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('title')
                       -> label(trans('automobile::directory.label.title'))
                       -> placeholder(trans('automobile::directory.placeholder.title'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::tel('phone')
                       -> label(trans('automobile::directory.label.phone'))
                       -> placeholder(trans('automobile::directory.placeholder.phone'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::url('website')
                       -> label(trans('automobile::directory.label.website'))
                       -> placeholder(trans('automobile::directory.placeholder.website'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::email('email')
                       -> label(trans('automobile::directory.label.email'))
                       -> placeholder(trans('automobile::directory.placeholder.email'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('address')
                       -> label(trans('automobile::directory.label.address'))
                       -> placeholder(trans('automobile::directory.placeholder.address'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('zipcode')
                       -> label(trans('automobile::directory.label.zipcode'))
                       -> placeholder(trans('automobile::directory.placeholder.zipcode'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('latitude')
                       -> label(trans('automobile::directory.label.latitude'))
                       -> placeholder(trans('automobile::directory.placeholder.latitude'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('longitude')
                       -> label(trans('automobile::directory.label.longitude'))
                       -> placeholder(trans('automobile::directory.placeholder.longitude'))!!}
                </div>

                <div class='col-md-12'>
                    {!! Form::textarea('description')
                    -> label(trans('automobile::directory.label.description'))
                    -> dataUpload(trans_url($directory->getUploadURL('description')))
                    -> addClass('html-editor')
                    -> placeholder(trans('automobile::directory.placeholder.description'))!!}
                </div>
                <div class='col-md-12'>
                    {!! Form::textarea('details')
                    -> label(trans('automobile::directory.label.details'))
                    -> dataUpload(trans_url($directory->getUploadURL('details')))
                    -> addClass('html-editor')
                    -> placeholder(trans('automobile::directory.placeholder.details'))!!}
                </div>
                <div class='col-md-12 col-sm-12'>
                    <div class="form-group">
                        <label for="images" class="control-label col-lg-12 col-sm-12 text-left">
                         {{trans('automobile::directory.label.images') }}
                         </label>
                        <div class='col-lg-3 col-sm-12'>
                            {!! $directory->files('images', 10)
                            ->mime(config('filer.image_extensions'))
                            ->url($directory->getUploadUrl('images'))
                            ->dropzone()!!}
                        </div>
                        <div class='col-lg-7 col-sm-12'>
                            {!! $directory->files('images')
                             ->editor()!!}
                        </div>
                    </div>
                </div>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('viewcount')
                       -> label(trans('automobile::directory.label.viewcount'))
                       -> placeholder(trans('automobile::directory.placeholder.viewcount'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('uploaded_folder')
                       -> label(trans('automobile::directory.label.uploaded_folder'))
                       -> placeholder(trans('automobile::directory.placeholder.uploaded_folder'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   {!! Form::inline_radios('published')
                   -> radios(trans('automobile::directory.options.published'))
                   -> label(trans('automobile::directory.label.published'))!!}
                </div>
            </div>