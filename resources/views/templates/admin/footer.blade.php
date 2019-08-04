<footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2019 &copy; <a href=''>Vinaenter Edu</a>
            </div>
            
         </div>
      </footer>
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/templates/admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="/templates/admin/js/custom.js"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('ckfinder/ckfinder.js') }}"></script>
    <script> 
      CKEDITOR.replace( 'editor1', {
        filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
        filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
        filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
        filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
        filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
        filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
    } );
     </script>
    <script type="text/javascript">
      $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipient = button.data('whatever')
        var recipient1 = button.data('haha')
        var modal = $(this)
        modal.find('.modal-body #recipient-name').val(recipient)
        modal.find('.modal-body #haha').val(recipient1)
      })
    </script>
    <script type="text/javascript">
        $("#haha").delay(2000).slideUp();
    </script>
    <!-- <script src="/templates/admin/js/jquery-1.10.2.js"></script> -->
  </body>
</html>