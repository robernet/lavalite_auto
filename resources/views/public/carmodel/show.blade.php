            @include('automobile::public.carmodel.partial.header')

            <section class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            @include('automobile::public.carmodel.partial.aside')
                        </div>
                        <div class="col-md-9 ">
                            <div class="area">
                                <div class="item">
                                    <div class="feature">
                                        <img class="img-responsive center-block" src="{!!url($carmodel->defaultImage('images' , 'xl'))!!}" alt="{{$carmodel->title}}">
                                    </div>
                                    <div class="content">
                                        <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="id">
                    {!! trans('automobile::carmodel.label.id') !!}
                </label><br />
                    {!! $carmodel['id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="make_id">
                    {!! trans('automobile::carmodel.label.make_id') !!}
                </label><br />
                    {!! $carmodel['make_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="name">
                    {!! trans('automobile::carmodel.label.name') !!}
                </label><br />
                    {!! $carmodel['name'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="description">
                    {!! trans('automobile::carmodel.label.description') !!}
                </label><br />
                    {!! $carmodel['description'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="image">
                    {!! trans('automobile::carmodel.label.image') !!}
                </label><br />
                    {!! $carmodel['image'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="slug">
                    {!! trans('automobile::carmodel.label.slug') !!}
                </label><br />
                    {!! $carmodel['slug'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="status">
                    {!! trans('automobile::carmodel.label.status') !!}
                </label><br />
                    {!! $carmodel['status'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="upload_folder">
                    {!! trans('automobile::carmodel.label.upload_folder') !!}
                </label><br />
                    {!! $carmodel['upload_folder'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="deleted_at">
                    {!! trans('automobile::carmodel.label.deleted_at') !!}
                </label><br />
                    {!! $carmodel['deleted_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="updated_at">
                    {!! trans('automobile::carmodel.label.updated_at') !!}
                </label><br />
                    {!! $carmodel['updated_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="created_at">
                    {!! trans('automobile::carmodel.label.created_at') !!}
                </label><br />
                    {!! $carmodel['created_at'] !!}
            </div>
        </div>
    </div>

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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



