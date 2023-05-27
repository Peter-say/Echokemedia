  <!-- Required Framework JavaScript -->
  <script src="{{ $dashboard_assets }}/skrn/js/libs/jquery-3.3.1.min.js"></script><!-- jQuery -->
  <script src="{{ $dashboard_assets }}/skrn/js/libs/popper.min.js" defer></script><!-- Bootstrap Popper/Extras JS -->
  <script src="{{ $dashboard_assets }}/skrn/js/libs/bootstrap.min.js" defer></script><!-- Bootstrap Main JS -->
  <!-- All JavaScript in Footer -->

  <!-- Additional Plugins and JavaScript -->
  <script src="{{ $dashboard_assets }}/skrn/js/navigation.js" defer></script><!-- Header Navigation JS Plugin -->
  <script src="{{ $dashboard_assets }}/skrn/js/jquery.flexslider-min.js" defer></script><!-- FlexSlider JS Plugin -->
  <script src="{{ $dashboard_assets }}/skrn/js/jquery-asRange.min.js" defer></script><!-- Range Slider JS Plugin -->
  <script src="{{ $dashboard_assets }}/skrn/js/circle-progress.min.js" defer></script><!-- Circle Progress JS Plugin -->
  <script src="{{ $dashboard_assets }}/skrn/js/afterglow.min.js" defer></script><!-- Video Player JS Plugin -->
  <script src="{{ $dashboard_assets }}/skrn/js/script.js" defer></script><!-- Custom Document Ready JS -->
  <script src="{{ $dashboard_assets }}/skrn/js/script-dashboard.js" defer></script><!-- Custom Document Ready for Dashboard Only JS -->

  <!-- TinyMCE -->
  <script src="https://cdn.tiny.cloud/1/9kceokxig3p7h7aj82ykjwy3ohrak2bq8wozjh90w23fr1mz/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'advlist autolink lists link image charmap preview anchor pagebreak',
      toolbar_mode: 'floating',
    });
  </script>