            @include('automobile::public.directory.partial.header')

            <section class="grid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            @include('automobile::public.directory.partial.aside')
                        </div>
                        <div class="col-md-9 ">
                            <div class="main-area parent-border list-item">
                                @foreach($directories as $directory)
                                <div class="item border">
                                    <div class="feature">
                                        <a href="{{trans_url('directories')}}/{{@$directory['slug']}}">
                                            <img src="{{url($directory->defaultImage('images'))}}" class="img-responsive center-block" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4><a href="{{trans_url('directory')}}/{{$directory['slug']}}">{{str_limit($directory['title'], 300)}}</a> 
                                        </h4>
                                        <div class="metas mt20">
                                            <div class="tag pull-left">
                                                <a href="#" class="">Seo Tips</a>
                                            </div>
                                            <div class="date-time pull-right">
                                                <span><i class="fa fa-comments"></i>{{@$directory->viewcount}}</span>
                                                <span><i class="fa fa-calendar"></i>{{format_date($directory['posted_on'])}}</span>
                                            </div>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="author">
                                            <div class="avatar pull-left">
                                                {{@$directory->user->badge}}
                                            </div>
                                            <div class="actions">
                                                

                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                @endforeach
                            </div>
                            <div class="pagination text-center">
                            {{ $directories->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </section> 