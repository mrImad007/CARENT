@if (session()->has('message'))
   <div class="alert alert-primary fixed-top" role="alert" style="left: 25%; right: 25%;">
    <p style="text-align: center; font-size: 1.2em; font-weight: bold;">
      {{session('message')}}
    </p>
  </div>
  
  <script>
    // hide the alert after 2 seconds
    setTimeout(() => {
      document.querySelector('.alert').style.display = 'none';
    }, 3000);
  </script>

@endif