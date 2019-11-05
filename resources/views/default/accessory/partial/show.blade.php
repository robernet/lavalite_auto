            <div class="content">
                <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="id">
                    {!! trans('automobile::accessory.label.id') !!}
                </label><br />
                    {!! $accessory['id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="user_id">
                    {!! trans('automobile::accessory.label.user_id') !!}
                </label><br />
                    {!! $accessory['user_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="title">
                    {!! trans('automobile::accessory.label.title') !!}
                </label><br />
                    {!! $accessory['title'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="category">
                    {!! trans('automobile::accessory.label.category') !!}
                </label><br />
                    {!! $accessory['category'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="company">
                    {!! trans('automobile::accessory.label.company') !!}
                </label><br />
                    {!! $accessory['company'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="model">
                    {!! trans('automobile::accessory.label.model') !!}
                </label><br />
                    {!! $accessory['model'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="price">
                    {!! trans('automobile::accessory.label.price') !!}
                </label><br />
                    {!! $accessory['price'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="images">
                    {!! trans('automobile::accessory.label.images') !!}
                </label><br />
                    {!! $accessory['images'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="status">
                    {!! trans('automobile::accessory.label.status') !!}
                </label><br />
                    {!! $accessory['status'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="slug">
                    {!! trans('automobile::accessory.label.slug') !!}
                </label><br />
                    {!! $accessory['slug'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="upload_folder">
                    {!! trans('automobile::accessory.label.upload_folder') !!}
                </label><br />
                    {!! $accessory['upload_folder'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="created_at">
                    {!! trans('automobile::accessory.label.created_at') !!}
                </label><br />
                    {!! $accessory['created_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="updated_at">
                    {!! trans('automobile::accessory.label.updated_at') !!}
                </label><br />
                    {!! $accessory['updated_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="deleted_at">
                    {!! trans('automobile::accessory.label.deleted_at') !!}
                </label><br />
                    {!! $accessory['deleted_at'] !!}
            </div>
        </div>
    </div>

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