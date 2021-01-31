@if(Session::has ('dato_borrado'))
    <div id="hecho" class="alert alert-success" data-dismiss="alert">
        {{Session::get ('dato_borrado')}}
    </div>
@endif
