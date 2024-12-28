
@extends($activeTemplate .'layouts.master')
@php
    $banners = getContent('banner.element');
@endphp

@section('content')


<section id="faqs" class="py-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="text-center mb-4">Frequently Asked Questions</h2>
					<div id="accordion">
						<div class="card">
							<div class="card-header" id="headingOne">
								<h5 class="mb-0">
									<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										How do I sell my smartphone?
									</button>
								</h5>
							</div>
							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="card-body">
									To sell your smartphone, simply select the model and condition of your device and we will provide you with an instant quote.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTwo">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										What types of devices can I sell?
									</button>
								</h5>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="card-body">
									You can sell smartphones, tablets, and game consoles of various brands and models.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										How do I get paid for my device?
									</button>
								</h5>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="card-body">
									Once we receive and inspect your device, we will send your payment via your chosen method.
								</div>
							</div>
						</div>
						<!-- Add more cards as needed -->
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection


