@extends ('layout.master1')

@section('content')
@section('content1')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
                <h3 class="card-title">اضافه مهمه جديده</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form action="{{ url('jointopdStort')}}" method="GET">
              @csrf
                              <input type="hidden" name="_token" value="">

                  <!-- text input -->
                  <div class="form-group">
                    <label>عنوان المهمه</label>
                    <input name="m_address" type="text" class="form-control">
                  </div>
                

                  <!-- textarea -->
                  <div class="form-group">
                    <label>وصف المهمه </label>
                    <textarea name="m_describe" class="form-control" rows="3" placeholder="برجاء كتابه وصف مختصر"></textarea>
                  </div>
                 

                  <!-- input states -->
          
                  <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> برجاء اختيار الاشخاص لهذه المهمه</label>
              
<br>
<select multiple="multiple" name="m_person">

@foreach($c_viewData2 as $data)
    <option>{{$data->name }}</option>
    @endforeach

</select>




                    

             
                  </div>
                  
                  <div class="form-group">

                  <label class="" >الفئه الرئيسيه </label>
<select name="c_name">

   @foreach($c_viewData as $data)
    <option>{{$data->c_name }}</option>
    @endforeach
    
</select>
   
</div>
<label class="" >الفئه الفرعيه </label>
<select name="c_name1">
@foreach($c_viewData1 as $data)


<option>{{$data->c_name }}</option>
    @endforeach

</select>

   
 </div>




                    

             
                  </div>
                
                  
     <div class="form-group  pull-right">
     <br><br>

     <input type="submit" name="later" class="btn  btn-primary" value="ارسال المهمه">

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