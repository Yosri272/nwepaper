@extends ('layout.master4')

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
@foreach($topicData as $data)
<div class="">
     <div class="card-header">
   	      <h3>
   	      <a>{{$data->t_address}}</a>
   	     </h3>
      </div>


         <div class="card-footer">
             <span class="badge badge-success">{{$data->created_at}}</>
               <span class="badge  badge-warning"> 
               اسم الصحفي : {{$data->journalist}}

               </span>
               <span class="badge  badge-warning"> 
               اسم المصحح : {{$data->corrector}}

               </span>
                         

     

                        <span class="badge  badge-primary">{{$data->c_name}}</span>
                        <span class="badge  badge-primary">{{$data->c_name1}}</span>
                        <a href="{{  url('getpdf')  }}/{{  $data->id  }}" class="btn btn-primary">طباعة</a>


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