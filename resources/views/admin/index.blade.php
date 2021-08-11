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
                        <div class="small-box bg-info">
                            <div class="inner">
                            <h3>{{  $d_data }}</h3>

                                <p>المقالات الجديده</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="{{ url('d_topic') }}" class="small-box-footer">تصفح المقالات<i class="fa fa-arrow-circle-left"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->




                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                          <h3>  {{  $d_data1 }} </h3>

                                <p>المقالات المجازة</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="{{ url('a_display1') }}" class="small-box-footer">تصفح المقالات <i class="fa fa-arrow-circle-left"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->



                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                            <h3>{{  $d_data2 }}</h3>

                                <p>صندوق تحت التصحيح</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="{{ url('a_display2') }}" class="small-box-footer">تصفح المقالات <i class="fa fa-arrow-circle-left"></i></a>
                        </div>
                    </div>


                    <!-- ./col -->
                  

                


                


                            <!-- ./col -->
            </div>
            <!-- /.row -->


            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">المهام</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-widget="collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-widget="remove">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0" style="display: block;">
                    <div class="table-responsive">
                    <table class="table m-0">
                            <thead>
                            <tr>
                                <th>رقم المهمه</th>
                                <th>الاعضاء</th>
                                <th>تاريخ زمان المهمه</th>
                                <th> عنوان المهمه</th>
                                <th>الشرح</th>
                                <th>الفئات الرائسية</th>
                                <th>الفئات الفرعية</th>
                                <th>التحكم</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($c_viewData as $data)
                                <th> {{$data->id}}        </th>
                                <th> {{$data->m_person}}  </th>
                                <th> {{$data-> 	created_at }}</th>
                                <th> {{$data->m_address}} </th>
                                <th> {{$data->m_describe}}</th>
                                <th> {{$data-> 	c_name1 }}</th>
                                <th> {{$data-> 	c_name }}</th>

                                <th>
                                <span class="badge  badge-warning"> 
                                غير منتهية 

                               </span>
                                </th>
                          

                            </tbody>
                            @endforeach

                        </table>
                       
                    </div>
                    <!-- /.table-responsive -->
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

<!-- Control Sidebar -->
        @endsection
</body>
</html>