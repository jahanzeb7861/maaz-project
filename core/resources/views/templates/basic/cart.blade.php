
@extends($activeTemplate .'layouts.master')
@php
    $banners = getContent('banner.element');
@endphp

@section('content')

<div class="container-fluid">
	  <div class="row justify-content-center">
		<div class="col-md-5">
		  <div class="block heading empty-heading text-center">
				<div class="card">
					<div class="card-body">
						<h3 class="pb-3">Your sales basket is empty</h3>
						<form action="https://sftechbuyer.com/search" method="post">
							<div class="form-group">
							<input type="text" name="search" class="form-control neame_search border-bottom border-top-0 border-right-0 border-left-0 center mx-auto srch_list_of_model" id="autocomplete" placeholder="Search for your device here..." autocomplete="off" data-listener-added_36866933="true">
							</div>
						</form>
						<div class="h4 text-center text-muted pt-2 pb-2">OR</div>
            			<a href="https://sftechbuyer.com#sellSection" class="btn btn-primary choose_brand btn-lg pl-3 pr-3">choose your device type or brand</a>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>

@endsection


