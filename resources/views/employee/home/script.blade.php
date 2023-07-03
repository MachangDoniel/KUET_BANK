<!-- container-scroller -->
    <!-- plugins:js -->
    <script src="employee/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="employee/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="employee/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="employee/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="employee/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="employee/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="employee/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="employee/assets/js/off-canvas.js"></script>
    <script src="employee/assets/js/hoverable-collapse.js"></script>
    <script src="employee/assets/js/misc.js"></script>
    <script src="employee/assets/js/settings.js"></script>
    <script src="employee/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="employee/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->

    {{-- <script>
        document.getElementById("balance").addEventListener("click", function() {
            alert("Your Current Balance is: "+ {{$data->balance}});
        });
    
    </script> --}}
    
    <!-- Scripts -->
      <!-- Bootstrap core JavaScript -->
      <script src="user/vendor/jquery/jquery.min.js"></script>
      <script src="user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
      <script src="user/assets/js/isotope.min.js"></script>
      <script src="user/assets/js/owl-carousel.js"></script>
    
      <script src="user/assets/js/tabs.js"></script>
      <script src="user/assets/js/swiper.js"></script>
      <script src="user/assets/js/custom.js"></script>
    
      <script>
        // Event listener for the Deposit button
        document.querySelectorAll('.deposit-btn').forEach(button => {
          button.addEventListener('click', function(event) {
            event.preventDefault();
            const uid = this.dataset.uid;
            showDepositForm(uid);
          });
        });
      
        // Event listener for the Withdraw button
        document.querySelectorAll('.withdraw-btn').forEach(button => {
          button.addEventListener('click', function(event) {
            event.preventDefault();
            const uid = this.dataset.uid;
            showWithdrawForm(uid);
          });
        });
      
        // Function to show the withdraw form
        function showWithdrawForm(uid) {
          document.getElementById('deposit-form').style.display = 'none';
          document.getElementById('withdraw-form').style.display = 'block';
      
          const withdrawSubmitBtn = document.getElementById('withdraw-submit');
          withdrawSubmitBtn.addEventListener('click', function(event) {
            event.preventDefault();
            const withdrawAmount = parseFloat(document.getElementById('withdraw-amount').value);
      
            // Here, you can perform the logic to handle the withdrawal operation
            // using AJAX or form submission to the server
            // For example, you can make an AJAX request to the server with the uid and withdrawAmount
            // and the server will handle the withdrawal operation.
            console.log('Withdraw amount:', withdrawAmount);
            // Perform the necessary action with the withdraw amount
            // You can submit a form or make an AJAX request to the server
            // to handle the withdraw operation
          });
        }
      
        // Function to show the deposit form
        function showDepositForm(uid) {
          document.getElementById('withdraw-form').style.display = 'none';
          document.getElementById('deposit-form').style.display = 'block';
      
          const depositSubmitBtn = document.getElementById('deposit-submit');
          depositSubmitBtn.addEventListener('click', function(event) {
            event.preventDefault();
            const depositAmount = parseFloat(document.getElementById('deposit-amount').value);
      
            // Here, you can perform the logic to handle the deposit operation
            // using AJAX or form submission to the server
            // For example, you can make an AJAX request to the server with the uid and depositAmount
            // and the server will handle the deposit operation.
            console.log('Deposit amount:', depositAmount);
            // Perform the necessary action with the deposit amount
            // You can submit a form or make an AJAX request to the server
            // to handle the deposit operation
          });
        }
      </script>
      
      