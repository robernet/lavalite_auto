@forelse($carmodel as $key => $val)
<div class="carmodel-gadget-box">
    <p>{!!@$val->name!!}</p>
    <p class="text-muted"><small><i class="ion ion-android-person"></i> {!!@$val->user->name!!} at {!! format_date($val->created_at)!!}</small></p>
</div>
@empty
<div class="carmodel-gadget-box">
    <p>No Carmodel</p>
</div>
@endif