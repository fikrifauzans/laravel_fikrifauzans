@extends('master')
@section('content')
    <div class="content"></div>
@endsection
@push('js')
    <script>
        function filterHospital() {
            $('#selectHospital').on('change', function() {
                $.ajax({
                    type: "get",
                    url: `{{ url('patient/show?hospital_id=') }} ` +
                        $(this).val(),
                    dataType: "html",
                    success: function(response) {
                        $('.content').html(response)
                        filterHospital()
                    }
                });

            })
        }

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
                    filterHospital()
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
