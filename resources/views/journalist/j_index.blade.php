@extends ('layout.master2')

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
 <!-- /.sidebar-menu -->
 </div>

</div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 434px;">
    <!-- Content Header (Page header) -->



    <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="row">
                <div class="col-lg-12">
                  <div class="card">



 
    <div class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">الصفحة الرئيسيه</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">


        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">


                
                                    




                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                            <h3>{{  $t_s_data }}</h3>

                                <p>المحفوظات</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="{{ route('s_topic') }}"  class="small-box-footer">تصفح المقالات <i class="fa fa-arrow-circle-left"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->



                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{$data2 }}</h3>

                                <p>ادارة المواد المرفوضة</p>
                            </div>
                            <div class="icon">
                            <i class="ion ion-pie-graph"></i>   
                            </div>
                            <a href="{{ route('j_regcase') }}" class="small-box-footer">تصفح المقالات <i class="fa fa-arrow-circle-left"></i></a>
                        </div>
                    </div>

                    
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                            <h3>{{$ar_data }}</h3>
                                
                                <p> الارشيف</p>
                            </div>
                            <div class="icon">
                                
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="{{ url('j_arshef') }}" class="small-box-footer">تصفح المقالات <i class="fa fa-arrow-circle-left"></i></a>
                        </div>
                    </div>

                


                


                            <!-- ./col -->
            </div>
            <!-- /.row -->


            
                <!-- /.card-footer -->
            </div>


            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- /.content-wrapper -->
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
        @endsection
</body>
</html>