@extends ('layout.master3')
@section('content3')
@section('content')
@section('content1')

            <!-- /.sidebar-menu -->
            </div>
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <div class="container">
   	<br>
   	<div class="row">
                <div class="col-lg-12">
                  <div class="card">
                  <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">صفحة انجاز المهمة</h3>
                </div>

                
 
   	<br>
       <form action="{{  url('c_editAssept')  }}/{{  $edit->id  }}">
<h3>
                    <div class="form-group">
                    <label>عنوان المهمة</label>
                   <div class="form-group">
                    <input name="t_address" type="text" class="form-control" value="{{   $edit->t_address    }}">
                  </div>
</h3>
          <span class="badge  badge-warning"> 
          الفئة الرئسية السابقة : {{   $edit->c_name    }}
                    </span>
          <span class="badge  badge-warning"> 
           الفئة الفرعية السابقة: {{   $edit->c_name1    }}
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
 <p> <p>         
                    <div class="form-group">
                    <label>المحتوي</label>
                    <textarea 
                      name="t_body"
                      class="form-control"
                      rows="5" >{{   $edit->t_body    }}
                     </textarea>
                  </div>
</p> </p>
<hr>



<!--  check if admin and post is panding -->

<input type="submit" name="later" class="btn  btn-primary" value="التحويل الي الطباعة">
</form >
<!--  check if editor and post is panding -->


<!--  check if editor and post is panding -->



<!--  check if corrector and post is Active -->
<!--  &&$post->isActive == 1-->
	
</div>

</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@endsection 
</body>
