@extends ('layout.master4')

@section('content')
@section('content1')

<!DOCTYPE html>
<html lang="en">





     <!-- /.sidebar-menu -->
     </div>
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 406px;">
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
                        <div class="small-box bg-info">
                            <div class="inner">
                            <h3>{{  $s_data1 }}</h3>

                                <p>المقالات المجازة</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="{{ url('s_display1') }}" class="small-box-footer">تصفح المقالات<i class="fa fa-arrow-circle-left"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->




                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                            <h3>{{  $s_data2 }}</h3>

                                <p>المقالات تحت التصحيح</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="{{ url('s_display2') }}" class="small-box-footer">تصفح المقالات <i class="fa fa-arrow-circle-left"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->

                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                            <h3>{{  $s_data }}</h3>

                                <p>المقالات المصححة</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="{{ url('s_display') }}" class="small-box-footer">تصفح المقالات <i class="fa fa-arrow-circle-left"></i></a>
                        </div>
                    </div>



                


                            <!-- ./col -->
            </div>
            <!-- /.row -->


          
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix" style="display: block;">


                </div>
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
@endsection
</body>
</html>