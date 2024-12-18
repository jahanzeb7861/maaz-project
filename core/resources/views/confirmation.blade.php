@extends('admin.layouts.app')


@push('script')

    <script>
        var confirmed = confirm("Are you sure you want to delete this user?");
        if (confirmed) {
            window.location.href = "{{ route('admin.users.delete', ['id' => $user->id]) }}";
        } else {
            window.location.href = "{{route('admin.users.all')}}";
        }

    </script>

    <script>
        (function($){
            "use strict";
            $("select[name=country]").val("{{ @$user->address->country }}");
        })(jQuery);
    </script>
@endpush
