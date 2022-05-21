
@extends('layouts.app')
@section('title', 'Page not found')

@section('content')


<section class="page404 wf100 p80">
    <div class="container">
       <div class="row">
         <div class="col-md-3"></div>
          <div class="col-lg-6 col-md-6">
             <div class="page-404-txt wf100">
                <h3><span>Something</span> <br> Went <span>Wrong!</span></h3>
                <h1 class="title-404">404</h1>
                <a href="{{ route('welcome') }}"><i class="fa fa-home"></i> Go Home </a>
             </div>
          </div>
       </div>
    </div>
 </section>
</section>
@endsection
@section('script')
<script>


</script>
@endsection
