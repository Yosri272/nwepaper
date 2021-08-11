@extends ('layout.master2')
@section('content')
@section('content1')



            <!-- /.sidebar-menu -->
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



 


<hr>
@foreach($s_topic as $data)
<div class="">
     <div class="card-header">
   	      <h3>
   	       <a href="{{  url('s_topic1') }}/{{  $data->id  }}  " >{{$data->t_address}}</a>
   	     </h3>
      </div>


         <div class="card-footer">
         <span class="badge  badge-warning">
             <span class="badge  badge-danger">{{$data->t_body}}</span>
             <span class="badge badge-success"> الفئات الرئسية: {{$data->c_name}}</span>
             <span class="badge  badge-danger"> الفئات الفرعية: {{$data->c_name1}}</span>
             <span class="badge badge-success">{{$data->created_at}}</>
                
               </span>
                         

     


          </div>
          </div>
          @endforeach 
</div> 




</div> 



</div> 


<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection 
</body>