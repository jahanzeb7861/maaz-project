@extends($activeTemplate .'layouts.user')
@section('content')
    @include($activeTemplate.'breadcrumb')
    <section class="cmn-section price">
    	<div class="container">
    		<div class="row justify-content-center">
    			@foreach($plans as $plan)
                    @php
                        $userPlanId = auth()->check() ? auth()->user()->plan_id : null;
                    @endphp
                    @if($userPlanId == $plan->id)
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                            <div class="single-price">
                                <div class="part-top">
                                    <h3>{{ __($plan->name) }}</h3>
                                    <h4>{{ __($plan->price + 0) }} {{$general->cur_text}}<br></h4>
                                </div>
                                <div class="part-bottom">
                                    <ul>
                                        <li>@lang('Plan Details')</li>
                                        <li>1 PSN = 100 RS</li>
                                        <li>@lang('Referral Bonus') : @lang('Upto') {{ $plan->ref_level }} @lang('Level')</li>
                                        <li>@lang('Plan Price') : {{ getAmount($plan->price) }} {{ __($general->cur_text) }}</li>
                                        <li>@lang('Validity') : @lang('Life Time')</li>
                                    </ul>
                                    <button disabled>@lang('Current Plan')</button>
                                </div>
                            </div>
                        </div>
                    @else
                            @if($userPlanId != $plan->id)
                            <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                                    <div class="single-price">
                                        <div class="part-top">
                                            <h3>{{ __($plan->name) }}</h3>
                                            <h4>{{ __($plan->price + 0) }} {{$general->cur_text}}<br></h4>
                                        </div>
                                        <div class="part-bottom">
                                            <ul>
                                                <li>@lang('Plan Details')</li>
                                                <li>1 PSN = 100 RS</li>
                                                <li>@lang('Referral Bonus') : @lang('Upto') {{ $plan->ref_level }} @lang('Level')</li>
                                                <li>@lang('Plan Price') : {{ getAmount($plan->price) }} {{ __($general->cur_text) }}</li>
                                                <li>@lang('Validity') : @lang('Life Time')</li>
                                            </ul>
                                            <button class="buyBtn" data-id="{{ $plan->id }}">@lang('Subscribe Now')</button>
                                        </div>
                                    </div>
                            </div>
                            @endif
                    @endif
                @endforeach


    		</div>
    	</div>
    </section>

    <div id="BuyModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">@lang('Confirmation')</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="{{route('user.buyPlan')}}" method="POST">
                    <div class="modal-body text-center">
                        {{csrf_field()}}
                        <div class="form-group m-0">
                            <input type="hidden" name="id">
                        </div>
                        <strong>@lang('Are you sure to subscribe to this plan?')</strong>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">@lang('Confirm')</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('Close')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
<script type="text/javascript">
    (function ($) {
        "use strict";
    	$('.buyBtn').click(function(){
    		var modal = $('#BuyModal');
    		modal.find('input[name=id]').val($(this).data('id'));
    		modal.modal('show');
    	});
    })(jQuery);
</script>
@endpush
