<footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights | About Me <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Hà Dương</a></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="/templates/aboutme/js/jquery.min.js"></script>
  <script src="/templates/aboutme/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/templates/aboutme/js/popper.min.js"></script>
  <script src="/templates/aboutme/js/bootstrap.min.js"></script>
  <script src="/templates/aboutme/js/jquery.easing.1.3.js"></script>
  <script src="/templates/aboutme/js/jquery.waypoints.min.js"></script>
  <script src="/templates/aboutme/js/jquery.stellar.min.js"></script>
  <script src="/templates/aboutme/js/owl.carousel.min.js"></script>
  <script src="/templates/aboutme/js/jquery.magnific-popup.min.js"></script>
  <script src="/templates/aboutme/js/aos.js"></script>
  <script src="/templates/aboutme/js/jquery.animateNumber.min.js"></script>
  <script src="/templates/aboutme/js/scrollax.min.js"></script>
  
  <script src="/templates/aboutme/js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
      <!-- <script type="text/javascript">
      $(document).ready(function(){
        $(document).on('click', '.pagination a', function(event){
          event.preventDefault();
          $.ajaxSetup({
            headers: {
                 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                // you have to pass  in between tag
            }
          })
          //console.log("ok");
          var page = $(this).attr('href').split('?page=')[1];
          $.ajax({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              url: "/pagination/fetch_data?page="+page,
              
              type: 'POST',
              cache: false, 
              data: {
                  page: page,
              },
              success: function(data){
                  $('#tabledata').html(data);
              },
              error: function (){
                  alert('Có lỗi xảy ra');
              }
          });
          return false;
          // $.ajax({
          //   headers: {
          //                           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          //                       },
          //   url:'getdata?page='+url,
          // }).done(function(data){
          //   $('#tabledata').html(data);
          // });
          // fetch_data(page);
        });
        function fetch_data(page)
        {
         // $.ajax({
         //   // headers: {
         //   //          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         //   //          },
         //   url:'/pagination/fetch_data?page='+page,
         //   // type: 'POST',
         //   //          cache: false,
         //   success:function(data)
         //   {
         //     $('#tabledata').html(data);
         //   location.hash = page;
         //   }
         //   // error: function (){
         //   //              alert('Có lỗi xảy ra');
         //   //          } 
         //});
          //  $.ajax({
          //   headers: {
          //           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          //           },
          //     url : '/pagination/fetch_data?page=' + page,
          //     dataType: 'json',
          // }).done(function (data) {
          //     $('#tabledata').html(data);
          //     location.hash = page;
          // }).fail(function () {
          //     alert('Posts could not be loaded.');
          // });
        }
       });
    </script> -->
    <script type="text/javascript">
                        function searchPublic(value){
                            $.ajax({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                url: "/searchnewspublic",
                                
                                type: 'POST',
                                cache: false, 
                                data: {
                                    search_keyword1: value,
                                },
                                success: function(data){
                                    $('.danhsachpublic').html(data);
                                },
                                error: function (){
                                    alert('Có lỗi xảy ra');
                                }
                            });
                            return false;
                        }
                    </script>
                    @yield('script')
  </body>
</html>