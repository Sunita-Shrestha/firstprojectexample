{{-- <style>
    .btnll{
    margin-left: 150;

}
</style> --}}
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">You are successfully login</button>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">
</button>
    <strong>{{ $message }}</strong>
</div>
@endif





@if(Session::has('success-create'))
<div class="alert alert-success mt-2 w-50% text-center btnll" role="alert">
{{Session::get('success-create')}}
</div>
@endif
@if(Session::has('update'))
<div class="alert alert-primary mt-2 w-50% text-center btnll" role="alert">
{{Session::get('update')}}
</div>
@endif
@if(Session::has('delete'))
<div class="alert alert-danger mt-2 w-50% text-center btnll" role="alert">
{{Session::get('delete')}}
</div>
@endif

