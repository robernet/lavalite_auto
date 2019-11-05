            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('title')
                       -> label(trans('automobile::accessory.label.title'))
                       -> placeholder(trans('automobile::accessory.placeholder.title'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   {!! Form::inline_radios('category')
                   -> radios(trans('automobile::accessory.options.category'))
                   -> label(trans('automobile::accessory.label.category'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('company')
                       -> label(trans('automobile::accessory.label.company'))
                       -> placeholder(trans('automobile::accessory.placeholder.company'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('model')
                       -> label(trans('automobile::accessory.label.model'))
                       -> placeholder(trans('automobile::accessory.placeholder.model'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('price')
                       -> label(trans('automobile::accessory.label.price'))
                       -> placeholder(trans('automobile::accessory.placeholder.price'))!!}
                </div>

                <div class='col-md-12 col-sm-12'>
                    <div class="form-group">
                        <label for="images" class="control-label col-lg-12 col-sm-12 text-left">
                         {{trans('automobile::accessory.label.images') }}
                         </label>
                        <div class='col-lg-3 col-sm-12'>
                            {!! $accessory->files('images', 10)
                            ->mime(config('filer.image_extensions'))
                            ->url($accessory->getUploadUrl('images'))
                            ->dropzone()!!}
                        </div>
                        <div class='col-lg-7 col-sm-12'>
                            {!! $accessory->files('images')
                             ->editor()!!}
                        </div>
                    </div>
                </div>
            </div>