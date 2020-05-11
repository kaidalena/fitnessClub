@if ($errors->any())
<div class="errors" style="background-color: indianred">
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