@extends('admin.layouts.app')

@section('panel')

@endsection

@push('script')

    <script>
        var confirmed = confirm("Are you sure you want to delete this user?");
        if (confirmed) {
            window.location.href = "{{ route('delete.user', ['id' => $user->id]) }}";
        } else {
            window.location.href = "{{ route('edit.user', ['id' => $user->id]) }}";
        }
    </script>

    <script>
        (function($){
            "use strict";
            $("select[name=country]").val("{{ @$user->address->country }}");
        })(jQuery);
    </script>
@endpush
