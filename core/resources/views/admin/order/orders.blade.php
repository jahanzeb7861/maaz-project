@extends('admin.layouts.app')
@section('panel')
    <div class="row">
        <div class="col-lg-12">
            <div class="card b-radius--10 ">
                <div class="card-body p-0">
                    <div class="table-responsive--sm table-responsive">
                        <table class="table table--light">
                            <thead>
                            <tr>
                                <th scope="col">@lang('Name')</th>
                                <th scope="col">@lang('Email')</th>
                                <th scope="col">@lang('Phone')</th>
                                <th scope="col">@lang('Location')</th>
                                <th scope="col">@lang('Brand')</th>
                                <th scope="col">@lang('Category')</th>
                                <th scope="col">@lang('Status')</th>
                                <th scope="col">@lang('Created Date')</th>
                                <th scope="col">@lang('Action')</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($items as $item)
                                <tr>
                                    <td data-label="@lang('Name')">
                                        <p class="font-weight-bold"> {{ $item->name }}</p>
                                    </td>
                                    <td data-label="@lang('Email')">
                                        {{$item->email}}
                                    </td>
                                    <td data-label="@lang('Phone')">
                                        {{$item->phone}}
                                    </td>
                                    <td data-label="@lang('Location')">
                                        {{$item->location}}
                                    </td>
                                    <td data-label="@lang('Brand')">
                                        {{$item->brand_id}}
                                    </td>
                                    <td data-label="@lang('Product')">
                                        {{$item->product_model_id}}
                                    </td>
                                    <td data-label="@lang('Status')">
                                        @if($item->status == 'Completed')
                                            <span class="text--small badge font-weight-normal badge--success">@lang('Completed')</span>
                                        @elseif($item->status == 'Pending')
                                            <span class="text--small badge font-weight-normal badge--warning">@lang('Pending')</span>
                                        @endif
                                    </td>
                                    <td data-label="@lang('Last Reply')">
                                        {{ \Carbon\Carbon::parse($item->last_reply)->diffForHumans() }}
                                    </td>
                                    <td data-label="@lang('Action')">
                                        @if($item->status != 'Completed')
                                        <button
                                            class="icon-btn change-status-btn"
                                            data-id="{{ $item->id }}"
                                            data-status="{{ $item->status }}"
                                            data-toggle="tooltip"
                                            title="@lang('Change Status')">
                                            <i class="la la-pencil"></i>
                                        </button>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-muted text-center" colspan="100%">{{ $empty_message }}</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table><!-- table end -->
                    </div>
                </div>
                <div class="card-footer py-4">
                    {{ $items->links('admin.partials.paginate') }}
                </div>
            </div><!-- card end -->
        </div>
    </div>

    <!-- Change Status Modal -->
    <div class="modal fade" id="changeStatusModal" tabindex="-1" aria-labelledby="changeStatusModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="changeStatusModalLabel">@lang('Change Order Status')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/admin/order/change/status') }}" method="GET">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="order_id" id="order_id">
                        <div class="form-group">
                            <label for="status">@lang('Select Status')</label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="Pending">@lang('Pending')</option>
                                <option value="Completed">@lang('Completed')</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('Close')</button>
                        <button type="submit" class="btn btn-primary">@lang('Save Changes')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
<script>
    $(document).ready(function () {
        $('.change-status-btn').click(function () {
            var orderId = $(this).data('id');
            var status = $(this).data('status');

            // Set modal values
            $('#order_id').val(orderId);
            $('#status').val(status);

            // Open modal
            $('#changeStatusModal').modal('show');
        });
    });
</script>
@endpush
