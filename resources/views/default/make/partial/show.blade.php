            <div class="content">
                <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="id">
                    {!! trans('automobile::make.label.id') !!}
                </label><br />
                    {!! $make['id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="name">
                    {!! trans('automobile::make.label.name') !!}
                </label><br />
                    {!! $make['name'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="description">
                    {!! trans('automobile::make.label.description') !!}
                </label><br />
                    {!! $make['description'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="image">
                    {!! trans('automobile::make.label.image') !!}
                </label><br />
                    {!! $make['image'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="slug">
                    {!! trans('automobile::make.label.slug') !!}
                </label><br />
                    {!! $make['slug'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="status">
                    {!! trans('automobile::make.label.status') !!}
                </label><br />
                    {!! $make['status'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="upload_folder">
                    {!! trans('automobile::make.label.upload_folder') !!}
                </label><br />
                    {!! $make['upload_folder'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="deleted_at">
                    {!! trans('automobile::make.label.deleted_at') !!}
                </label><br />
                    {!! $make['deleted_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="updated_at">
                    {!! trans('automobile::make.label.updated_at') !!}
                </label><br />
                    {!! $make['updated_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="created_at">
                    {!! trans('automobile::make.label.created_at') !!}
                </label><br />
                    {!! $make['created_at'] !!}
            </div>
        </div>
    </div>

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