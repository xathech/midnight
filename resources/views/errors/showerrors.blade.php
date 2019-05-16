<!--Show errors-->
@if ($errors->any())
    <div class="alert alert-danger" role="alert">

        @foreach ($errors->all() as $message)
            <li>{{$message}}</li>
        @endforeach

    </div>
@endif