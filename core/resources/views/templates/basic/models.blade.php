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
            onclick="openModal('{{ $model->image }}', '{{ $model->name }}', '{{ $model->upto }}' , '{{request()->segment(1)}}', '{{request()->segment(2)}}','{{$model->slug}}')">
            <div class="img">
                <img src="{{ $model->image }}" style="width: 40% !important; margin: 0 auto;" class="img-fluid">
            </div>
            <h4 class="my-3">{{ $model->name }}</h4>
            <p class="my-3 text-primary">Upto {{ $model->upto }}</p>
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
            <input type="email" class="form-control" id="email2" required>
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
        <button type="button" class="btn btn-primary" onclick="submitForm()" disabled>Save</button>
      </div>
    </div>
  </div>
</div>


<div class="modal modal-lg fade" id="modelInformationBox" tabindex="-1" role="dialog" aria-labelledby="modelInformationBoxLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="modelInformationBoxLabel">Lets Get You Paid!</h5>
        <button type="button" class="close" onclick="closeModal()" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">

      <div class="spec">
    <!-- Connectivity Section -->
                <div class="spec-container" id="network">
                    <div class="spec-container-full">
                        <hr>
                        <div class="spec-collapse">
                            <div class="collapse-head">
                                <div class="spec-collapse-head">
                                    <div class="flex items-center">
                                        <span class="spec-title">{{ $modelDetails['options']['network']['title'] }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="spec-collapse-body">
                                @foreach($modelDetails['options']['network']['choices'] as $network)
                                <a href="#" class="spec-choices" data-slug="{{ $network['slug'] }}">
                                    <div class="card card--border card--active-primary spec-choice">
                                        <div class="spec-choice-container">
                                            <div class="spec-choice-content">
                                                <div class="spec-choice-image-container">
                                                    <img src="{{ $network['network_image'] }}" alt="{{ $network['name'] }}" class="spec-choice-image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Capacity Section -->
                <div class="spec-container" id="size" style="display: none;">
                    <div class="spec-container-full">
                        <hr>
                        <div class="collapse-default collapse--disabled spec-collapse">
                            <div class="collapse-head">
                                <div class="spec-collapse-head">
                                    <div class="flex items-center">
                                        <span class="spec-title">{{ $modelDetails['options']['size']['title'] }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="spec-collapse-body">
                                @foreach($modelDetails['options']['size']['choices'] as $size)
                                <a href="#" class="spec-choices">
                                    <div class="card card--border card--active-primary spec-choice">
                                        <div class="spec-choice-container">
                                            <div class="spec-choice-content">
                                                <div>{{ $size['name'] }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Conditions Section -->
                <div class="spec-container" id="conditions" style="display: none;">
                    <div class="spec-container-full">
                        <hr>
                        <div class="collapse-default collapse--disabled spec-collapse">
                            <div class="collapse-head">
                                <div class="spec-collapse-head">
                                    <div class="flex items-center">
                                        <span class="spec-title">{!! $modelDetails['options']['conditions']['title'] !!}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="spec-collapse-body spec-collapse-body--condition">
                                @foreach($modelDetails['options']['conditions']['choices'] as $condition)
                                <a href="#" class="spec-choices">
                                    <div class="card card--border card--active-primary spec-choice selected-{{ $condition['id'] }}">
                                        <div class="spec-choice-container">
                                            <div class="spec-choice-content">
                                                <div>
                                                    <div class="collapse-default">
                                                        <div class="collapse-container">
                                                            <span class="collapse-head">
                                                                <div class="text-center">{{ $condition['name'] }}</div>
                                                            </span>
                                                        </div>
                                                        <div class="spec-terms">
                                                            <p class="spec-terms-title">{{ $condition['terms']['title'] }}</p>
                                                            <ul class="spec-terms-list">
                                                                @foreach($condition['terms']['content'] as $term)
                                                                <li class="spec-terms-list-container">
                                                                    <div class="spec-terms-list">
                                                                        <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="spec-terms-list-icon">
                                                                            <path fill="currentColor" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m-2 15l-5-5l1.41-1.41L10 14.17l7.59-7.59L19 8z"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <span>{{ $term }}</span>
                                                                </li>
                                                                @endforeach
                                                            </ul>
                                                            <div class="spec-terms-button button button--color button--weight button-size button--color_secondary">
                                                                Confirm Condition
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>


                <div class="spec-container" id="customer_details" style="display: none;">

                    <!-- <div class="form-group p-2" style="text-align: left;">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" required>
                        <div class="invalid-feedback">Please enter a valid email.</div>
                        class="w-full px-3 py-2 border rounded @error('email') border-red-500 @enderror"
                    </div> -->

                <form id="orderForm2" class="space-y-4">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="form-control"
                            required
                            pattern="[^@\s]+@[^@\s]+\.[^@\s]+"
                            title="Please enter a valid email address"
                        >
                    </div>
                    <!-- <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                        Submit
                    </button> -->
                </form>
            </div>
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="closeModal()">Close</button>
        <button type="button" id="saveBtn" class="btn btn-primary" onclick="submitForm()" disabled>Save</button>
      </div>
    </div>
  </div>
</div>


<style>
.spec {
    padding: 1rem;
}

.spec-container {
    margin-bottom: 1.5rem;
}

.spec-container-full hr {
    margin: 1rem 0;
    border-top: 1px solid #e5e7eb;
}

.spec-title {
    font-size: 1.125rem;
    font-weight: 600;
    margin-bottom: 1rem;
}

.spec-choices {
    display: block;
    text-decoration: none;
    margin-bottom: 0.75rem;
}

.card {
    border: 1px solid #e5e7eb;
    border-radius: 0.5rem;
    transition: all 0.3s ease;
}

.card:hover {
    border-color: #2563eb;
}

.spec-choice-container {
    padding: 1rem;
}

.spec-choice-image-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 60px;
}

.spec-choice-image {
    /* max-height: 100%; */
    /* width: auto; */
    /* width: 43% !important; */
    object-fit: contain !important;
}

.spec-terms {
    padding: 1rem;
    background-color: #f9fafb;
    border-radius: 0.5rem;
    margin-top: 0.5rem;
}

.spec-terms-title {
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.spec-terms-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.spec-terms-list-container {
    display: flex;
    align-items: center;
    margin-bottom: 0.5rem;
}

.spec-terms-list-icon {
    margin-right: 0.5rem;
    color: #2563eb;
}

.spec-terms-button {
    margin-top: 1rem;
    padding: 0.5rem 1rem;
    background-color: #2563eb;
    color: white;
    border-radius: 0.375rem;
    text-align: center;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.spec-terms-button:hover {
    background-color: #1d4ed8;
}

.text-primary {
    color: #2563eb;
}

.text-center {
    text-align: center;
}

.card.active {
    border-color: #2563eb;
    background-color: #f0f7ff;
}

.spec-choices {
    cursor: pointer;
}

</style>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    let brandId;
    let categoryId;
    let product_model_id;
    let model_slug;
    let productId;
    let conditionId;

    function openModal(image, Modelname, price, catId, brandIdParam,Modelslug) {
        document.getElementById('modelImage').src = image;
        document.getElementById('modelName').innerHTML = Modelname;
        document.getElementById('modelPrice').innerHTML = 'Upto ' + price;
        // $('#modelModal').modal('show');
        $('#modelInformationBox').modal('show');
        brandId = brandIdParam;
        categoryId = catId;
        product_model_id = Modelname;
        model_slug = Modelslug;
    }

    function closeModal() {
        // $('#modelModal').modal('hide');
        $('#modelInformationBox').modal('hide');
    }

    function submitForm() {


                // alert('final data form 2:');

                // localStorage.getItem('productId');

                    // alert(localStorage.getItem('productId'));
                    // alert(localStorage.getItem('conditionId'));


                    // alert(customer_email);
                    // alert(shipping_firstname);
                    // alert(shipping_lastname);


                    // Call order/in-mail API here
                    // Make the API request
                        // $.ajax({
                        //         url: `https://api.reusely.com/api/v2/public/order/mail-in`,
                        //         type: 'POST',
                        //         body:
                        //         {
                        //         "payment_method":"Store Credit",
                        //         "order_detail":[
                        //                 {
                        //                 "product_id":20051,
                        //                 "condition_id":10,
                        //                 "description":"New Oder",
                        //                 "notes":"New Oder",
                        //                 "qty":1
                        //                 }
                        //             ],
                        //         "customer_email":"johndoe@email.com",
                        //         "shipping_firstname":"john",
                        //         "shipping_lastname":"doe"
                        //         },
                        //         headers: {
                        //             'accept': 'application/json',
                        //             'x-api-key': 'khFohASwrgJm8oYSdfOaTZG7aq41mrzZg3GC8gsQbqAT7JzwHqDvorgbB13LadmN',
                        //             'x-tenant-id': 'a395524ecd10937b12b14e7ff33ea54e6d4d0b21d67568f518163aac0056b26b'
                        //         },
                        //         data: {
                        //             network: networkSlug
                        //         },
                        //         success: function(response) {
                        //             if (response.status_code === 200) {
                        //                 // Update the size options
                        //                 const sizeChoices = response.result.size.choices;
                        //                 let sizeHtml = '';

                        //                 sizeChoices.forEach(size => {
                        //                     sizeHtml += `
                        //                         <a href="#" class="spec-choices" onclick="handleSizeClick('${size.slug}')">
                        //                             <div class="card card--border card--active-primary spec-choice">
                        //                                 <div class="spec-choice-container">
                        //                                     <div class="spec-choice-content">
                        //                                         <div>${size.name}</div>
                        //                                     </div>
                        //                                 </div>
                        //                             </div>
                        //                         </a>
                        //                     `;
                        //                 });

                        //                 sizeSection.innerHTML = sizeHtml;
                        //             } else {
                        //                 sizeSection.innerHTML = '<div class="text-center text-danger">Error loading capacity options</div>';
                        //             }
                        //         },
                        //         error: function(xhr, status, error) {
                        //             sizeSection.innerHTML = '<div class="text-center text-danger">Failed to load capacity options</div>';
                        //             console.error('Error:', error);
                        //         }
                        //     });

        var form = document.getElementById('orderForm');

            // var data = {
            //     // name: document.getElementById('name').value,
            //     email: document.getElementById('email').value,
            //     // phone: document.getElementById('phone').value,
            //     // location: document.getElementById('location').value,
            //     // brandId: brandId,
            //     condition_id: conditionId,
            //     product_id: productId,
            // };

            var data = {
                        "payment_method":"Store Credit",
                        "order_detail":[
                                {
                                "product_id":localStorage.getItem('productId'),
                                "condition_id":localStorage.getItem('conditionId'),
                                "description":"New Oder",
                                "notes":"New Order",
                                "qty":1
                                }
                            ],
                        "customer_email": document.getElementById('email').value,
                        "shipping_firstname":"john",
                        "shipping_lastname":"doe",
                        };

            // Assuming you have a CSRF token setup
            const orderUrl = "https://api.reusely.com/api/v2/public/order/mail-in";
            $.ajax({
                url: orderUrl,
                type: 'POST',
                data: data,
                headers: {
                            'accept': 'application/json',
                            'x-api-key': 'khFohASwrgJm8oYSdfOaTZG7aq41mrzZg3GC8gsQbqAT7JzwHqDvorgbB13LadmN',
                            'x-tenant-id': 'a395524ecd10937b12b14e7ff33ea54e6d4d0b21d67568f518163aac0056b26b'
                        },
                success: function(response) {
                    // handle response
                    if (response.status_code === 201) {
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

                    $('#modelInformationBox').modal('hide');
                    location.reload();

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
        // form.classList.add('was-validated');


    function updateSizeOptions(networkSlug) {
        // alert(networkSlug);
        // alert(brandId);
        // alert(model_slug);
        // Show loading state in size section
        const sizeSection = document.querySelector('#size .spec-collapse-body');
        sizeSection.innerHTML = '<div class="text-center">Loading...</div>';

        // Make the API request
        $.ajax({
            url: `https://api.reusely.com/api/v2/public/catalog/spec?brand=${brandId}&model=${model_slug}&network=${networkSlug}`,
            type: 'GET',
            headers: {
                'accept': 'application/json',
                'x-api-key': 'khFohASwrgJm8oYSdfOaTZG7aq41mrzZg3GC8gsQbqAT7JzwHqDvorgbB13LadmN',
                'x-tenant-id': 'a395524ecd10937b12b14e7ff33ea54e6d4d0b21d67568f518163aac0056b26b'
            },
            data: {
                network: networkSlug
            },
            success: function(response) {
                if (response.status_code === 200) {
                    // Update the size options
                    const sizeChoices = response.result.size.choices;
                    let sizeHtml = '';

                    sizeChoices.forEach(size => {
                        sizeHtml += `
                            <a href="#" class="spec-choices" onclick="handleSizeClick('${size.slug}')">
                                <div class="card card--border card--active-primary spec-choice">
                                    <div class="spec-choice-container">
                                        <div class="spec-choice-content">
                                            <div>${size.name}</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        `;
                    });

                    sizeSection.innerHTML = sizeHtml;
                } else {
                    sizeSection.innerHTML = '<div class="text-center text-danger">Error loading capacity options</div>';
                }
            },
            error: function(xhr, status, error) {
                sizeSection.innerHTML = '<div class="text-center text-danger">Failed to load capacity options</div>';
                console.error('Error:', error);
            }
        });

        // alert('call end');
    }

    function handleSizeClick(sizeSlug) {
        // Remove active class from all size choices
        document.querySelectorAll('#size .spec-choices .card').forEach(card => {
            card.classList.remove('active');
        });

        // Add active class to clicked choice
        event.currentTarget.querySelector('.card').classList.add('active');

        $('#conditions').css('display','block');


        // Here you can make another API call or trigger the next action

        // Get the selected network slug
        const selectedNetwork = document.querySelector('#network .spec-choices .card.active');
        const networkSlug = selectedNetwork ? selectedNetwork.closest('.spec-choices').getAttribute('data-slug') : null;

        if (networkSlug) {
            updateConditionOptions(networkSlug, sizeSlug);
        }


    }

    function updateConditionOptions(networkSlug, sizeSlug) {
    // Show loading state in conditions section
    const conditionsSection = document.querySelector('#conditions .spec-collapse-body');
    conditionsSection.innerHTML = '<div class="text-center">Loading...</div>';
    const deviceSlug = '{{$deviceSlug}}';

    // Make the API request
    $.ajax({
        url: `https://api.reusely.com/api/v2/public/catalog/condition?brand=${brandId}&spec[device]=${deviceSlug}&spec[model]=${model_slug}&spec[network]=${networkSlug}&spec[size]=${sizeSlug}`,
        type: 'GET',
        headers: {
            'accept': 'application/json',
            'x-api-key': 'khFohASwrgJm8oYSdfOaTZG7aq41mrzZg3GC8gsQbqAT7JzwHqDvorgbB13LadmN',
            'x-tenant-id': 'a395524ecd10937b12b14e7ff33ea54e6d4d0b21d67568f518163aac0056b26b'
        },
        data: {
            network: networkSlug,
            size: sizeSlug
        },
        success: function(response) {
            if (response.status_code === 200 && response.result?.conditions) {
                const conditions = response.result.conditions;
                const productId = response.result.product.product_id;
                let conditionsHtml = '';

                conditions.forEach((condition, index) => {
                    conditionsHtml += `
                        <div class="spec-choices">
                            <div class="card card--border card--active-primary spec-choice selected-${condition.id}">
                                <div class="spec-choice-container">
                                    <div class="spec-choice-content">
                                        <div class="collapse-default">
                                            <div class="collapse-container" onclick="toggleAccordion(${index})">
                                                <div class="collapse-head d-flex justify-content-between align-items-center p-3">
                                                    <div class="condition-name">${condition.name}(${condition.price})</div>
                                                    <div class="condition-price"></div>
                                                    <span class="accordion-icon">▼</span>
                                                </div>
                                            </div>
                                            <div class="spec-terms collapse" id="condition-content-${index}">
                                                <p class="spec-terms-title">${condition.terms.title}</p>
                                                <ul class="spec-terms-list">
                                                    ${condition.terms.content.map(term => `
                                                        <li class="spec-terms-list-container">
                                                            <div class="spec-terms-list">
                                                                <svg viewBox="0 0 24 24" width="1.2em" height="1.2em" class="spec-terms-list-icon">
                                                                    <path fill="currentColor" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m-2 15l-5-5l1.41-1.41L10 14.17l7.59-7.59L19 8z"></path>
                                                                </svg>
                                                            </div>
                                                            <span>${term}</span>
                                                        </li>
                                                    `).join('')}
                                                </ul>
                                                <div class="spec-terms-button button button--color button--weight button-size button--color_secondary"
                                                    onclick="handleConditionClick('${productId}','${condition.id}','${condition.name}', '${condition.price}')">
                                                    Confirm Condition
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                });

                conditionsSection.innerHTML = conditionsHtml;

                // Add necessary CSS
                const style = document.createElement('style');
                style.textContent = `
                    .collapse-head {
                        cursor: pointer;
                    }
                    .collapse {
                        display: none;
                        padding: 1rem;
                    }
                    .collapse.show {
                        display: block;
                    }
                    .accordion-icon {
                        transition: transform 0.3s ease;
                    }
                    .accordion-icon.rotated {
                        transform: rotate(180deg);
                    }
                `;
                document.head.appendChild(style);

            } else {
                conditionsSection.innerHTML = '<div class="text-center text-danger">Error loading condition options</div>';
            }
        },
        error: function(xhr, status, error) {
            conditionsSection.innerHTML = '<div class="text-center text-danger">Failed to load condition options</div>';
            console.error('Error:', error);
        }
    });
}

// Add this function to handle the accordion toggle
function toggleAccordion(index) {
    const content = document.getElementById(`condition-content-${index}`);
    const icon = content.parentElement.querySelector('.accordion-icon');

    // Close all other accordions
    document.querySelectorAll('.spec-terms.collapse.show').forEach(item => {
        if (item.id !== `condition-content-${index}`) {
            item.classList.remove('show');
            item.parentElement.querySelector('.accordion-icon').classList.remove('rotated');
        }
    });

    // Toggle the clicked accordion
    content.classList.toggle('show');
    icon.classList.toggle('rotated');
}

            // let productId;
            // let conditionId;

            // Add handler for condition selection
            function handleConditionClick(productId,conditionId,conditionName, price) {
                event.preventDefault();

                // Remove active class from all condition choices
                // document.querySelectorAll('#conditions .spec-choices .card').forEach(card => {
                //     card.classList.remove('active');
                // });

                // Add active class to clicked choice
                // event.currentTarget.querySelector('.selected-'.conditionId).classList.add('active');

                // Store the selected values
                const selectedNetwork = document.querySelector('#network .spec-choices .card.active');
                const selectedSize = document.querySelector('#size .spec-choices .card.active');

                if (selectedNetwork && selectedSize) {
                    const selectedData = {
                        network: selectedNetwork.closest('.spec-choices').getAttribute('data-slug'),
                        size: selectedSize.closest('.spec-choices').getAttribute('data-slug'),
                        condition: conditionName,
                        price: price
                    };

                    // Here you can handle the final selection, e.g., show the price or enable a continue button
                    console.log('Selected options:', selectedData);

                    localStorage.setItem('productId',productId);
                    localStorage.setItem('conditionId',conditionId);


                    productId = productId;
                    conditionId = conditionId;
                    // alert('final data:');
                    // alert(productId);
                    // alert(conditionId);


                    $('#network').css('display','none');
                    $('#size').css('display','none');
                    $('#conditions').css('display','none');
                    $('#customer_details').css('display','block');
                    $('#saveBtn').prop('disabled', false);



                    // alert(customer_email);
                    // // alert(shipping_firstname);
                    // // alert(shipping_lastname);


                    // // Call order/in-mail API here
                    // // Make the API request
                    //     $.ajax({
                    //             url: `https://api.reusely.com/api/v2/public/order/mail-in`,
                    //             type: 'POST',
                    //             body:
                    //             {
                    //             "payment_method":"Store Credit",
                    //             "order_detail":[
                    //                     {
                    //                     "product_id":20051,
                    //                     "condition_id":10,
                    //                     "description":"New Oder",
                    //                     "notes":"New Oder",
                    //                     "qty":1
                    //                     }
                    //                 ],
                    //             "customer_email":"johndoe@email.com",
                    //             "shipping_firstname":"john",
                    //             "shipping_lastname":"doe"
                    //             },
                    //             headers: {
                    //                 'accept': 'application/json',
                    //                 'x-api-key': 'khFohASwrgJm8oYSdfOaTZG7aq41mrzZg3GC8gsQbqAT7JzwHqDvorgbB13LadmN',
                    //                 'x-tenant-id': 'a395524ecd10937b12b14e7ff33ea54e6d4d0b21d67568f518163aac0056b26b'
                    //             },
                    //             data: {
                    //                 network: networkSlug
                    //             },
                    //             success: function(response) {
                    //                 if (response.status_code === 200) {
                    //                     // Update the size options
                    //                     const sizeChoices = response.result.size.choices;
                    //                     let sizeHtml = '';

                    //                     sizeChoices.forEach(size => {
                    //                         sizeHtml += `
                    //                             <a href="#" class="spec-choices" onclick="handleSizeClick('${size.slug}')">
                    //                                 <div class="card card--border card--active-primary spec-choice">
                    //                                     <div class="spec-choice-container">
                    //                                         <div class="spec-choice-content">
                    //                                             <div>${size.name}</div>
                    //                                         </div>
                    //                                     </div>
                    //                                 </div>
                    //                             </a>
                    //                         `;
                    //                     });

                    //                     sizeSection.innerHTML = sizeHtml;
                    //                 } else {
                    //                     sizeSection.innerHTML = '<div class="text-center text-danger">Error loading capacity options</div>';
                    //                 }
                    //             },
                    //             error: function(xhr, status, error) {
                    //                 sizeSection.innerHTML = '<div class="text-center text-danger">Failed to load capacity options</div>';
                    //                 console.error('Error:', error);
                    //             }
                    //         });



                }
            }

        // Add click handlers to network choices
        document.querySelectorAll('#network .spec-choices').forEach(choice => {
            choice.addEventListener('click', function(e) {
                e.preventDefault();

                // Remove active class from all network choices
                document.querySelectorAll('#network .spec-choices .card').forEach(card => {
                    card.classList.remove('active');
                });

                // Add active class to clicked choice
                this.querySelector('.card').classList.add('active');

                // Get the network slug from the clicked choice
                const networkSlug = this.getAttribute('data-slug');


                // ('#network').css('display','none');
                $('#size').css('display','block');

                // Update size options
                updateSizeOptions(networkSlug);
            });
        });

</script>

@endsection
