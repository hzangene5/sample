@extends('front.index')
@section('content')
<section id="intro" class="clearfix"></section>

<main class="container main2">
  <nav aria-lable="breadcrumb" dir="rtl">
    <ol class="breadcrumb bgcolor">
      <li class="breadcrumb-item"><a href="#">خانه</a></li>
      <li class="breadcrumb-item active" aria-current="page"> مطالب </li>
      <li class="breadcrumb-item active" aria-current="page"> {{$article->name}} </li>
    </ol>
  </nav>

    <div class="d-flex justify-content-center"  dir="rtl">
     
    <div class="container">
    <div>
      <h1>{{$article->name}}</h1>
    </div>

     <div class="row" dir="rtl">
       <ul>
         <li>نویسنده: {{$article->user['name']}}</li> |
         <li>تاریخ: {!! jdate($article->created_at)->format('%Y-%B-%d') !!}</li> 
         <li>بازدید: {{$article->hit}} </li> 
       </ul>
     </div>

     <p>{!! $article->description !!}</p>
  
    </div>
 
    </div>
    <div>
      <hr>

      <form action="{{route('comment.store', $article->slug)}}" class="form-group" method="POST">
        @csrf
        <div class="form-row">
        
          @auth
          <div class="form-group col-md-6">  
             <lable for="name">نام:</lable>
             <input class="form-control" type="text" name="name" value="{{Auth::user()->name}}" readonly>
           </div>

           <div class="form-group col-md-6">  
             <lable for="name">ایمیل:</lable>
             <input class="form-control" type="text" name="email"  value="{{Auth::user()->email}}" readonly>
           </div>  
           @else
           <div class="form-group col-md-6">  
             <lable for="name">نام:</lable>
             <input class="form-control" type="text" name="name">
           </div>

           <div class="form-group col-md-6">  
             <lable for="name">ایمیل:</lable>
             <input class="form-control" type="text" name="email">
           </div>  
          @endauth

 

        </div>


       <div class="form-group">
         <lable for="body">متن نظر شما:</lable>
         <textarea class="form-control" name="body" id="" cols="30" rows="10"></textarea>
       </div>

       <div class="container">
         <lable for="recaptcha"> تصویر امنیتی :</lable>
         {!! htmlFormSnippet() !!}
       </div>
      
      <button class="btn btn-primary" type="submit">ارسال نظر</button>
      
     </form>
    </div>

    <div class="row" dir="rtl">
    @foreach($comments as $comment)
     <div>
      <ul>
       <li>نویسنده:{{$comment->name}} </li>
       <li>ایمیل:{{$comment->email}} </li>
      </ul> 
      <div>
        متن نظر: {{$comment->body}}
      </div>   
      <hr>     
     </div>

      @endforeach
    </div>


</main>


@endsection
