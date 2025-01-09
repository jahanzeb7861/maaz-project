@extends($activeTemplate .'layouts.master')
@php
$banners = getContent('banner.element');
@endphp

@section('content')

<div class="wsus__author_category mt_95 xs_mt_55 p-5" style="background-color:#3C97D3; margin:0 !important;">
    <div class="container py-5">
        <div class="row">
            <div class="col-xl-7 col-lg-8 m-auto">
                <div class="block heading text-center">
                <h3 class="p-5" style="color:#fff; font-size: 2em; font-weight: 700;">Choose a Model to calculate the cost:</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
        @foreach($models as $model)
        <a href="javascript:void(0);" class="col-xl-3 col-sm-6 col-lg-3 text-center my-4 mx-2 model-link"
            style="background: #fff; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); padding: 20px; display: flex; border-radius: 10px; flex-direction: column; justify-content: center; text-decoration: none;"
            onclick="openModal('{{ $model->image }}', '{{ $model->name }}', '{{ $model->price }}' , '{{request()->segment(1)}}', '{{request()->segment(2)}}')">
            <div class="img">
                <img src="{{ $model->image }}" style="width: 40% !important; margin: 0 auto;" class="img-fluid">
            </div>
            <h4 class="my-3">{{ $model->name }}</h4>
            <p class="my-3 text-primary">Upto {{ $model->price }}</p>
        </a>
        @endforeach
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modelModal" tabindex="-1" role="dialog" aria-labelledby="modelModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="modelModalLabel">Lets Get You Paid!</h5>
        <button type="button" class="close" onclick="closeModal()" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <img id="modelImage" src="" class="img-fluid w-25">
        <h4 id="modelName"></h4>
        <p id="modelPrice"></p>
        <form id="orderForm" class="text-left p-4">
          <div class="form-group p-2" style="text-align: left;">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" required>
            <div class="invalid-feedback">Please enter your name.</div>
          </div>
          <div class="form-group p-2" style="text-align: left;">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" required>
            <div class="invalid-feedback">Please enter a valid email.</div>
          </div>
          <div class="form-group p-2" style="text-align: left;">
            <label for="phone">Phone Number</label>
            <input type="tel" class="form-control" id="phone" required>
            <div class="invalid-feedback">Please enter your phone number.</div>
          </div>
          <div class="form-group p-2" style="text-align: left;">
            <label for="location">-- Select Location --</label>
            <select class="form-control" id="location" required>
              <option value="">-- Select Location --</option>
              <option value="Clovis">Clovis</option>
              <option value="Bakersfield">Bakersfield</option>
            </select>
            <div class="invalid-feedback">Please select a location.</div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="closeModal()">Close</button>
        <button type="button" class="btn btn-primary" onclick="submitForm()">Save</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    let brandId;
    let categoryId;
    let product_model_id;

    function openModal(image, Modelname, price, catId, brandIdParam) {
        document.getElementById('modelImage').src = image;
        document.getElementById('modelName').innerHTML = Modelname;
        document.getElementById('modelPrice').innerHTML = 'Upto ' + price;
        $('#modelModal').modal('show');
        brandId = brandIdParam;
        categoryId = catId;
        product_model_id = Modelname;
    }

    function closeModal() {
        $('#modelModal').modal('hide');
    }

    function submitForm() {
        var form = document.getElementById('orderForm');
        if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
        } else {
            var data = {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                phone: document.getElementById('phone').value,
                location: document.getElementById('location').value,
                brandId: brandId,
                categoryId: categoryId,
                product_model_id: product_model_id,
            };

            // Assuming you have a CSRF token setup
            const orderUrl = "{{ route('order.send') }}";
            $.ajax({
                url: orderUrl,
                type: 'POST',
                data: data,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    // handle response
                    if (response.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: response.message,
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: response.message,
                        });
                    }
                },
                error: function(xhr, status, error) {
                    var errorMessage = xhr.status + ': ' + xhr.statusText
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'CSRF token mismatch.',
                    });
                }
            });
        }
        form.classList.add('was-validated');
    }
</script>

@endsection
