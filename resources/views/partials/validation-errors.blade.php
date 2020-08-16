@if( $errors->any() )
    <ul class="m-0">
        <div class="alert alert-danger">
            @foreach( $errors->all() as $error )
                <li>{{ $error }}</li>
            @endforeach
        </div>
    </ul>
@endif