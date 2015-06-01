@if (Session::has('success'))
    <div class="container" style="margin-top:5px">
        <div class="alert alert-success" role="alert">
            <p>{!! Session('success') !!}</p>
        </div>
    </div>
@endif
@if (Session::has('warn'))
    <div class="container" style="margin-top:5px">
        <div class="alert alert-warning">
            <p>{!! Session('warn') !!}</p>
        </div>
    </div>
@endif
