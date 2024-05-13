<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Additional CSS or stylesheets -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}" sizes="32x32" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
              <a class="navbar-brand" href="/"><img src="{{ asset('images/logo-1.jpg') }}" height="50px"></a>
             <div class="container">
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ request()->is('products') ? 'active' : '' }}" href="{{ route('products.index') }}">Products</a>
                  </li>
                </ul>
              </div>
             </div>
          </div>
      </nav>
    </header>

    @if(session('success'))
    <div class="alert alert-success" id="success-message">
        {{ session('success') }}
    </div>
  @endif

    <main>
        <!-- Main content area -->
        @yield('content')
    </main>

    <footer>
        <!-- Footer content -->
        @include('partials.footer')
    </footer>

</body>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script> 
      <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
      <script type="text/javascript">
              $(function () {
                var table = $('#myTable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('products.index') }}",
                    columns: [
                        {data: 'name', name: 'name'},
                        {data: 'description', name: 'description'},
                        {data: 'price', name: 'price'},
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                    ]
                });
              });

              document.addEventListener("DOMContentLoaded", function() {
                  var successMessage = document.getElementById('success-message');
                  if (successMessage) {
                      setTimeout(function() {
                          successMessage.style.display = 'none';
                      }, 3000);
                  }
              });
      </script>

<script>
    $(document).ready(function() {
        $('#attribute').click(function(){
            $('.show-attribute').show();
        })

        $('#productSucess').on('click', '.modal-close', function() {
            $('#productSucess').modal('hide');
        });
    })

    let variations = [];
    let variationsValue = [];

    function addVariation() {
        const sizeSelect = document.getElementById('SizeSelect');
        const colorSelect = document.getElementById('ColorSelect');
        const var_stock = document.getElementById('var_stock');
    
        const size = sizeSelect.value;
        const color = colorSelect.value;
        const stock = var_stock.value;

        const sizeValue = sizeSelect.options[sizeSelect.selectedIndex].text;
        const colorValue = colorSelect.options[colorSelect.selectedIndex].text;


        if(size > 0 && color > 0 && stock !="") { 

          variations.push({ attributeValueIds: [color, size], stock });
          variationsValue.push({ attributeValueValue: [sizeValue, colorValue], stock });
           $(".error-message").html();
           displayVariations();
        } else {
          $(".error-message").html('Please select the attribute variation.');
        }

        sizeSelect.selectedIndex = 0;
        colorSelect.selectedIndex = 0;
        var_stock.value = "";
    }


    function displayVariations() {
      // Clear existing content in the container
        $('#variationsContainer').empty();

        // Loop through variations and create HTML for each
        variationsValue.forEach(function(variationVal) {
            var html = '<div>';
            html += 'Attribute Values: ' + variationVal.attributeValueValue.join(', ') + '<br>';
            html += 'Stock: ' + variationVal.stock + '<br>';
            html += '</div>';
            $('#variationsContainer').append(html);
        });
    }

    async function saveVariation() {

      var name = $('#name').val();
      var price = $('#price').val();
      var image = $('#imageInput').val();

      if (name == "" || price == "" || image == "") {
        showErrorMessage('All fields with * are required.');
      } else if(variations.length == 0) {
        showErrorMessage('Please select product variation.');
      } else {
         if(variations.length !=0) {

        const formData = new FormData(document.getElementById('variationForm'));
        var fileInput = $('#imageInput')[0].files[0];
      
        formData.append('image', fileInput); 
        formData.append('variationsData', JSON.stringify(variations))
       

        const token = new FormData(document.getElementById('variationForm'));
       
        const attributeIds = [];
        $('.product-title').each(function() {
              attributeIds.push($(this).data('id'));
        });
        formData.append('attributeIds', JSON.stringify(attributeIds));

        const response = await fetch('{{ route("save.product") }}',{method:'POST', body:formData})
        const data = await response.json();
            if (data.success) {
              $('#variationForm')[0].reset();
              $('.form-error').html("");
              $('#productSucess').modal('show');
            }
      }
      }
     
    }
    function showErrorMessage(msg) {
      if(msg!="") {
        $('.form-error').css("visibility", 'visible')
        $('.form-error').html(msg);
      }
    }
</script>
</html>
