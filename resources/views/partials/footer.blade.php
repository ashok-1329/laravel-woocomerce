<!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted mt-5">
  <!-- Copyright -->
  <div class="text-center p-4 footer-main">
    © 2024 Copyright:
    <a class="text-reset fw-bold" href="#">Woocomerce.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

<div class="modal fade" id="productSucess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Added</h4>
        </div>
        <div class="modal-body">
          <p class="success-message">Product added successfully.</p>
        </div>
        <div class="modal-footer" style="display: flex; justify-content: space-between; align-items: center;">
          <a class="nav-link product-list" href="{{ route('products.index') }}">Go to products list</a>
          <button type="button" class="btn btn-default modal-close" data-dismiss="modal">Add New</button>
        </div>
      </div>
      
    </div>
  </div>