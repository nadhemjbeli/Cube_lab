@if(count($errors) > 0)
<div class="row">
    <div class="error login-form">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif
@if(Session::has('message'))
<div class="row">
    <div class="login-form success">
        {{Session::get('message')}}
    </div>
</div>
@endif