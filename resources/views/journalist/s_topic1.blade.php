@extends ('layout.master2')
@section('content3')
@section('content')
@section('content1')

<!DOCTYPE html>
<html lang="en">
<body>
</div>
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 434px;">
    <!-- Content Header (Page header) -->



<br>
<div class="container">
<div class="row">
                <div class="col-lg-12">
                  <div class="card">



 
<div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">انشاء مقال</h3>
              </div>
              <!-- /.card-header -->
             
                
                <form action="{{  url('topicStort1') }}/{{  $s_topic->id  }}"  method="GET"> 
                 <!-- <form method="GET">   -->
              @csrf
                  <!-- text input -->
                  <div class="form-group">
                    <label>عنوان المقال</label>
                    <input
                     id="name"
                     type="text" 
                     class="form-control @error('name') is-invalid @enderror"
                     name="t_address"
                    value="{{$s_topic->t_address  }}" 
                     required autocomplete="name" 
                     autofocus>

                           @error('name')
                     <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                     </span>
                      @enderror
                  </div>
                
                  <div class="form-group">

<span class="badge  badge-warning"> 
  الفئة الرئسية السابقة: {{$s_topic->c_name }}
  </span>
<span class="badge  badge-warning"> 
  الفئة الفرعية السابقة : {{$s_topic->c_name1 }}
  </span>
  </div>
                 
                 

                  <!-- input states -->
          
                  <div class="form-group">

<label class="" >الفئه الرئيسيه </label>


<select name="c_name">
@foreach($c_viewData as $data)
    <option>{{$data->c_name }}</option>
    @endforeach

</select>

 
</div>




<div class="form-group">

<label class="" >الفئه الفرعيه </label>
<select name="c_name1">
@foreach($c_viewData1 as $data)


<option>{{$data->c_name }}</option>
    @endforeach

</select>
   
 </div>
 <!-- textarea -->
 <div class="form-group">
                    <!-- <label>المحتوي </label>
                    <textarea name="t_body" class="form-control" rows="3" ></textarea>
                  </div> -->
                  <div class="form-group">
                    <label>المحتوي</label>
                    <textarea
                     id="name"
                     type="text"
                     class="form-control @error('name') is-invalid @enderror" 
                     name="t_body" 
                     value="{{ old('name') }}" 
                     required autocomplete="name" 
                     autofocus>
                     {{$s_topic->t_body }}
                     </textarea>

                           @error('name')
                     <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                     </span>
                      @enderror
                  </div>
                  <div class="form-group  pull-right">
            
            <input type="checkbox" name="later" > الحفظ لاوقت لاحق 
            
            
                 </div>

<br><br>

     <div class="form-group  pull-right">
            

    
     <button  class="btn  btn-primary"><a   class="btn  btn-primary" >ارسال</a></button>


     </div>
         

                </form>
              </div>
              <!-- /.card-body -->
            </div>

            <!-- /.content -->
</div>
</div>
</div>
 
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

        @endsection
</body>
</html>