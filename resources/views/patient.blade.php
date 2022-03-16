@extends('master')
@section('content')
    <div class="content"></div>
@endsection
@push('js')
    <script>
        function show() {
            $.ajax({
                type: "get",
                url: "{{ url('patient/show') }}",
                dataType: "html",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content')
                },
                success: function(response) {
                    $(".content").html(response);
                }
            });
        }
        show();

        function del(de) {
            $.ajax({
                type: "Post",
                url: "{{ url('patient/delete') }}",
                data: {
                    id: de
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content')
                },
                dataType: "json",
                success: function(response) {
                    console.log(response);
                    show()
                }
            });
        }
    </script>
@endpush
