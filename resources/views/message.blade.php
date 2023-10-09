@if (session('success'))
    <div class="alert alert-success text-center" role="alert">
      <p>{{session('success')}}</p>
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger text-center" role="alert">
      <p>{{session('error')}}</p>
    </div>
@endif
