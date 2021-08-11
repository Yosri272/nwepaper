@extends ('layout.master1')
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


                
 
   	<br>
<h3>
{{  $edit->t_address  }}
</h3>
 <p> <p>{{  $edit->t_body  }}
</p> </p>
<hr>



<!--  check if admin and post is panding -->

<a href="{{  url('editAssept')  }}/{{  $edit->id  }}" class="btn  btn-success">قبول</a>
<br>








<a href="{{  url('modfile')  }}/{{  $edit->id  }}" class="btn  btn-info">تعديل</a>


<br>
<form  action="{{ url('regcase')}}/{{  $edit->id  }}" method="GET">

<label>سبب الرفض</label>
<input type="hidden" name="r_address" value="{{  $edit->t_address  }}">
<input type="text" name="r_reason">
<input type="submit" class="btn  btn-danger"  value="رفض"> 
</form>
 


<!--  check if editor and post is panding -->


<!--  check if editor and post is panding -->



<!--  check if corrector and post is Active -->
<!--  &&$post->isActive == 1
 -->
	
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