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
                                <th scope="col">@lang('Box Id')</th>
                                <th scope="col">@lang('Email')</th>
                                <th scope="col">@lang('Price')</th>
                                <th scope="col">@lang('Location')</th>
                                <th scope="col">@lang('Status')</th>
                                <th scope="col">@lang('Created Date')</th>
                                <th scope="col">@lang('Action')</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($items as $item)
                                <tr>
                                    <td data-label="@lang('Box Id')">
                                        {{$item['box_id']}}
                                    </td>
                                    <td data-label="@lang('Email')">
                                        {{$item['customer_email']}}
                                    </td>
                                    <td data-label="@lang('Price')">
                                        {{$item['payout_total']}}
                                    </td>
                                    <td data-label="@lang('Location')">
                                        {{$item['location_name']}}
                                    </td>
                                    <td data-label="@lang('Status')">
                                        @if($item['status'] == 'Active Leads')
                                            <span class="text--small badge font-weight-normal badge--success">@lang('Active Leads')</span>
                                        @else
                                            <span class="text--small badge font-weight-normal badge--warning">{{$item['status']}}</span>
                                        @endif
                                    </td>
                                    <td data-label="@lang('Created Date')">
                                        {{ \Carbon\Carbon::parse($item['created_at'])->diffForHumans() }}
                                    </td>
                                    <td data-label="@lang('Action')">
                                        <a href="{{$item['customer_portal_url']}}" target="_blank">View</a>
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
