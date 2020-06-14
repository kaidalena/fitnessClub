@if ($errors->any())
<div class="msg-err" id="msg-err">
    <ul>
        @foreach($errors->all() as $error)
        <li> {{$error}} </li>
        @endforeach
    </ul>
</div>
@endif

@if (session('success'))
<div class="success" style="background-color: lightgreen">
    {{ session('success')}}
</div>
@endif