@extends('front.index')
@section('content')
<section id="intro" class="clearfix"></section>

<main class="container main2">
  <nav aria-lable="breadcrumb" dir="rtl">
    <ol class="breadcrumb bgcolor">
      <li class="breadcrumb-item"><a href="#">خانه</a></li>
      <li class="breadcrumb-item active" aria-current="page"> فعال سازی حساب کاربری</li>
    </ol>
  </nav>

    <div class="d-flex justify-content-center">
     
    <div class="card">
    برای فعال سازی حساب کاربری خود روی دکمه زیر کلیک نمایید تا ایمیل فعال سازی برای شما ارسال شود 
    <hr>
    @if (session('resent'))

    <div class="alert alert-success">یک ایمیل برای فعال سازی حساب کاربری شما ارسال شد.ایمیل خود را بررسی وروی لینک فعال سازی حساب کاربری کلیک نمایید</div> 
    @endif

    <form action="{{route('verification.resend')}}" method="POST">
    @csrf
    <button>ارسال ایمیل فعال سازی</button>
    
    
    </form>

    
    </div>





    </div>
</main>


@endsection
