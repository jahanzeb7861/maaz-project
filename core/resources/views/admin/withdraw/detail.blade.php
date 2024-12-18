@extends('admin.layouts.app')


@section('panel')
    <div class="row mb-none-30">


        <div class="col-lg-4 col-md-4 mb-30">
            <div class="card b-radius--10 overflow-hidden mt-30 box--shadow1">
                <div class="card-body">
                    <h5 class="mb-20 text-muted">@lang('Withdraw Via') {{$withdrawal->method->name}}</h5>

                    <div class="p-3 bg--white">
                        <div class="">
                            <img src="{{$methodImage}}" alt="profile-image"
                                 class="b-radius--10 with-img">
                        </div>
                    </div>

                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            @lang('Date')
                            <span class="font-weight-bold">{{ showDateTime($withdrawal->created_at) }}</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            @lang('Trx Number')
                            <span class="font-weight-bold">{{ $withdrawal->trx }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            @lang('Username')
                            <span class="font-weight-bold">
                                <a href="{{ route('admin.users.detail', $withdrawal->user_id) }}">{{ optional($withdrawal->user)->username }}</a>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            @lang('Method')
                            <span class="font-weight-bold">{{ optional($withdrawal->method)->name}}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            @lang('Amount')
                            <span
                                class="font-weight-bold">{{ getAmount($withdrawal->amount ) }} {{ $general->cur_text }}</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            @lang('Charge')
                            <span
                                class="font-weight-bold">{{ getAmount($withdrawal->charge ) }} {{ $general->cur_text }}</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            @lang('After Charge')
                            <span
                                class="font-weight-bold">{{ getAmount($withdrawal->after_charge ) }} {{ $general->cur_text }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            @lang('Rate')
                            <span class="font-weight-bold">1 {{$general->cur_text}}
                                = {{ getAmount($withdrawal->rate ) }} {{$withdrawal->currency}}</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            @lang('Payable')
                            <span class="font-weight-bold">{{ getAmount($withdrawal->final_amount) }} {{$withdrawal->currency}}</span>
                        </li>




                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            @lang('Status')
                            @if($withdrawal->status == 2)
                                <span class="badge badge-pill bg--warning">@lang('Pending')</span>
                            @elseif($withdrawal->status == 1)
                                <span class="badge badge-pill bg--success">@lang('Approved')</span>
                            @elseif($withdrawal->status == 3)
                                <span class="badge badge-pill bg--danger">@lang('Rejected')</span>
                            @endif
                        </li>

                        @if($withdrawal->admin_feedback)
                        <li class="list-group-item">
                            <strong>@lang('Admin Response')</strong>
                            <br>
                           <p>{{$withdrawal->admin_feedback}}</p>
                        </li>
                        @endif


                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 mb-30">

            <div class="card b-radius--10 overflow-hidden mt-30 box--shadow1">
                <div class="card-body">
                    <h5 class="card-title mb-50 border-bottom pb-2">@lang('User Withdraw Information')</h5>


                    @if($details != null)
                        @foreach(\GuzzleHttp\json_decode($details) as $k => $val)
                            @if($val->type == 'file')
                                <div class="row mt-4">
                                    <div class="col-md-8">
                                        <h6>{{inputTitle($k)}}</h6>
                                        <img src="{{getImage('assets/images/verify/withdraw/'.$val->field_name)}}" alt=".." >
                                    </div>
                                </div>
                            @else
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <h6>{{inputTitle($k)}}</h6>
                                        <p>{{$val->field_name}}</p>
                                    </div>
                                </div>

                            @endif
                        @endforeach
                    @endif


                    @if($withdrawal->status == 2)
                        <div class="row mt-4">
                            <div class="col-md-12">

                                <button class="btn btn--success ml-1 approveBtn" data-toggle="tooltip" title="" data-original-title="Approve"
                                        data-id="{{ $withdrawal->id }}" data-amount="{{ getAmount($withdrawal->final_amount) }} {{$withdrawal->currency}}">
                                    <i class="fas la-check"></i> @lang('Approve')
                                </button>


                                <button class="btn btn--danger ml-1 rejectBtn" data-toggle="tooltip" title="" data-original-title="Reject"
                                        data-id="{{ $withdrawal->id }}" data-amount="{{ getAmount($withdrawal->final_amount) }} {{$withdrawal->currency}}">
                                    <i class="fas fa-ban"></i> @lang('Reject')
                                </button>


                            </div>

                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>



    {{-- APPROVE MODAL --}}
    <div id="approveModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@lang('Approve Withdrawal Confirmation')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.withdraw.approve') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id">
                    <div class="modal-body">
                        <p>Have you Sent <span class="font-weight-bold withdraw-amount text-success"></span>?</p>
                        <p class="withdraw-detail"></p>
                        <textarea name="details" class="form-control pt-3" rows="3" placeholder="@lang('Provide the Details. eg: Transaction number')" required=""></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn--dark" data-dismiss="modal">@lang('Close')</button>
                        <button type="submit" class="btn btn--success">@lang('Approve')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- REJECT MODAL --}}
    <div id="rejectModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@lang('Reject Withdrawal Confirmation')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('admin.withdraw.reject')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id">
                    <div class="modal-body">
                        <strong>@lang('Reason of Rejection')</strong>
                        <textarea name="details" class="form-control pt-3" rows="3" placeholder="@lang('Provide the Details')" required=""></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn--dark" data-dismiss="modal">@lang('Close')</button>
                        <button type="submit" class="btn btn--danger">@lang('Reject')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('style')
<style type="text/css">
    .with-img{
        max-width:100px; 
        max-height:100px; 
        margin:0 auto;
    }
</style>
@endpush
@push('script')
    <script>
        (function($){
            "use strict";
            $('.approveBtn').on('click', function() {
                var modal = $('#approveModal');
                modal.find('input[name=id]').val($(this).data('id'));
                modal.find('.withdraw-amount').text($(this).data('amount'));
                modal.modal('show');
            });

            $('.rejectBtn').on('click', function() {
                var modal = $('#rejectModal');
                modal.find('input[name=id]').val($(this).data('id'));
                modal.find('.withdraw-amount').text($(this).data('amount'));
                modal.modal('show');
            });
        })(jQuery);
    </script>
@endpush
