                    <div class="list-view">
                        @forelse($directories as $directory)
                        <div class="card list-view-media"  id="{!! $directory->getRouteKey() !!}">
                            <div class="card-block">
                                <div class="media">
                                    <a class="media-left" href="{!! trans_url('automobile') !!}/{!! $directory->getPublicKey() !!}" target="_blank">
                                        <img class="media-object card-list-img" src="http://via.placeholder.com/150x100/FC0079/FFF?text=ADVT">
                                    </a>
                                    <div class="media-body">
                                        <div class="heading">
                                            <h3><a  href="{!! trans_url('automobiles') !!}/{!! $directory->getPublicKey() !!}" target="_blank">{!! $directory->name !!}</a></h3>
                                            <h6>{!! $directory->email !!}</h6>
                                            <div class="status">
                                                <span class="verified">Verified</span>
                                                <span class="approved">Approved</span>
                                            </div>
                                        </div>
                                        <p>Hi, This is my short intro text. Lorem ipsum is a dummy content sit dollar. You can copy and paste this dummy content from anywhere and to anywhere...{{ ${{$module}}->details }}</p>
                                        <div class="actions">

                                            <a href="{!! guard_url('automobile/directory') !!}/{!! $directory->getRouteKey() !!}" class="text-primary" data-toggle="tooltip" data-placement="left" title="Edit" data-action="EDIT" ><i class="icon-eye"></i></a>

                                            <a href="{!! guard_url('automobile/directory') !!}/{!! $directory->getRouteKey() !!}/edit" class="text-primary" data-toggle="tooltip" data-placement="left" title="Edit" data-action="EDIT" ><i class="icon-pencil"></i></a>

                                            <a href="{!! guard_url('automobile/directory') !!}/{!! $directory->getRouteKey() !!}" class="text-danger" data-toggle="tooltip" data-placement="left" title="Delete" data-action="DELETE" data-remove="{!! $directory->getRouteKey() !!}"><i class="icon-trash"></i></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endif
                </div>