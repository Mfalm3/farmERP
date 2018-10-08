@if (count($errors) > 0)
    @foreach($errors->all() as $error)
        <script>
            swal({
                text:"{!! $error !!}",
                icon: "error",
            });
        </script>
    @endforeach
@endif

@if(session('success'))
    <script>
        swal({
            text:"{!! session('success')!!}",
            icon: "success",
        });
    </script>
@endif

@if(session('error'))
    <script>
        swal({
            text: "{{session('error')}}",
            icon: "error",
        });
    </script>
@endif