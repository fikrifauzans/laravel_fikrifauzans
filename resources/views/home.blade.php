@extends('master')
@section('content')
    <div class="content"></div>
@endsection
@push('js')
    <script>
        function del(id) {
            $.ajax({
                type: "post",
                url: "{{ url('delete') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content')
                },
                data: {
                    id: id
                },
                dataType: "json",
                success: function(response) {
                    console.log(response);
                    show();
                }
            });

        }


        function create() {
            $('.postCreate').click(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "post",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                            'content')
                    },
                    url: "{{ url('post') }}",
                    data: $('.createForm').serialize(),
                    dataType: "json",
                    success: function(response) {
                        show()
                        $('.show').remove()
                    }
                });

            });
        }

        function show() {
            $.ajax({
                type: "get",
                url: "{{ url('/show') }}",
                dataType: "html",
                success: function(response) {
                    $('.content').html(response);
                    $('.btn-create').click(function() {
                        $('.createModal').modal('show')
                        create()


                    })
                }
            });
        }
        show()
    </script>
@endpush
