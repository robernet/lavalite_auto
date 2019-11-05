            @include('automobile::public.directory.partial.header')

            <section class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            @include('automobile::public.directory.partial.aside')
                        </div>
                        <div class="col-md-9 ">
                            <div class="area">
                                <div class="item">
                                    <div class="feature">
                                        <img class="img-responsive center-block" src="{!!url($directory->defaultImage('images' , 'xl'))!!}" alt="{{$directory->title}}">
                                    </div>
                                    <div class="content">
                                        <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="id">
                    {!! trans('automobile::directory.label.id') !!}
                </label><br />
                    {!! $directory['id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="user_id">
                    {!! trans('automobile::directory.label.user_id') !!}
                </label><br />
                    {!! $directory['user_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="user_type">
                    {!! trans('automobile::directory.label.user_type') !!}
                </label><br />
                    {!! $directory['user_type'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="country_id">
                    {!! trans('automobile::directory.label.country_id') !!}
                </label><br />
                    {!! $directory['country_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="state_id">
                    {!! trans('automobile::directory.label.state_id') !!}
                </label><br />
                    {!! $directory['state_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="district_id">
                    {!! trans('automobile::directory.label.district_id') !!}
                </label><br />
                    {!! $directory['district_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="city_id">
                    {!! trans('automobile::directory.label.city_id') !!}
                </label><br />
                    {!! $directory['city_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="location_id">
                    {!! trans('automobile::directory.label.location_id') !!}
                </label><br />
                    {!! $directory['location_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="title">
                    {!! trans('automobile::directory.label.title') !!}
                </label><br />
                    {!! $directory['title'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="phone">
                    {!! trans('automobile::directory.label.phone') !!}
                </label><br />
                    {!! $directory['phone'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="website">
                    {!! trans('automobile::directory.label.website') !!}
                </label><br />
                    {!! $directory['website'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="email">
                    {!! trans('automobile::directory.label.email') !!}
                </label><br />
                    {!! $directory['email'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="address">
                    {!! trans('automobile::directory.label.address') !!}
                </label><br />
                    {!! $directory['address'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="zipcode">
                    {!! trans('automobile::directory.label.zipcode') !!}
                </label><br />
                    {!! $directory['zipcode'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="latitude">
                    {!! trans('automobile::directory.label.latitude') !!}
                </label><br />
                    {!! $directory['latitude'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="longitude">
                    {!! trans('automobile::directory.label.longitude') !!}
                </label><br />
                    {!! $directory['longitude'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="description">
                    {!! trans('automobile::directory.label.description') !!}
                </label><br />
                    {!! $directory['description'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="details">
                    {!! trans('automobile::directory.label.details') !!}
                </label><br />
                    {!! $directory['details'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="images">
                    {!! trans('automobile::directory.label.images') !!}
                </label><br />
                    {!! $directory['images'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="viewcount">
                    {!! trans('automobile::directory.label.viewcount') !!}
                </label><br />
                    {!! $directory['viewcount'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="uploaded_folder">
                    {!! trans('automobile::directory.label.uploaded_folder') !!}
                </label><br />
                    {!! $directory['uploaded_folder'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="slug">
                    {!! trans('automobile::directory.label.slug') !!}
                </label><br />
                    {!! $directory['slug'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="published">
                    {!! trans('automobile::directory.label.published') !!}
                </label><br />
                    {!! $directory['published'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="created_at">
                    {!! trans('automobile::directory.label.created_at') !!}
                </label><br />
                    {!! $directory['created_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="updated_at">
                    {!! trans('automobile::directory.label.updated_at') !!}
                </label><br />
                    {!! $directory['updated_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="deleted_at">
                    {!! trans('automobile::directory.label.deleted_at') !!}
                </label><br />
                    {!! $directory['deleted_at'] !!}
            </div>
        </div>
    </div>

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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



