@extends('back.index')
@section('title')
  
مدیریت کابران- پنل دسته بندی ها

@endsection


@section('content')
<div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
 
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title"> مدیریت دسته بندی ها</h4>
                 
  

                </div>
              </div>
            </div>
            <!-- Page Title Header Ends-->
         <div class="row">

         <a href="{{route('admin.categories.create')}}"  class="badge badge-success">دسته بندی جدید</a>

         <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
     
                  @include('back.messages')
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>نام</th>
                          <th>نام مستعار-slug</th>
                          <th>مدیریت</th>
                        </tr>
                      </thead>
                      <tbody>

                    @foreach($categories as $category)

                        <tr>
                          <td>{{$category->name}}</td>
                          <td>{{$category->slug}}</td>
                          <td>
                         <a href="{{route('admin.categories.edit',$category->id)}}"><label class="badge badge-success">ویرایش</label></a>
                         <a href="{{route('admin.categories.destroy',$category->id)}}"
                          onclick="return confirm('آیا آیتم مورد نظر حذف شود');"
                         ><label class="badge badge-danger">حذف</label></a>
                          </td>
                        </tr>

                    @endforeach

                      </tbody>
                    </table>
                  </div>
                  
                  {{$categories->links()}}

                </div>

              </div>
      
          </div>
      </div>
          <!-- content-wrapper ends -->
          @include('back.footer')

        </div>
@endsection
