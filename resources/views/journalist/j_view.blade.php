@extends ('layout.master2')

@section('content')
@section('content1')
</div>
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 434px;">
    <!-- Content Header (Page header) -->
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="">

            <div class="card-body">
 
<div class="row">
                <div class="col-lg-12">
                  <div class="card">



     

                    

                    <div class="card-body">


                      <table class="table table-responsive-sm table-bordered table-striped table-sm">
                        <thead>
                          <tr>
                            <th>الاسم </th>
                            <th>البريد الالكترونى</th>
                            <th>تاريخ الاضافه</th>
                            <th>الصلاحيه</th>
                            <th> عدد المقالات</th>
                            <th>تحكم</th>
                          </tr>
                        </thead>
                        <tbody>

        <tr>
        @foreach($a_viewData as $data)
       
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>

                            <td>{{$data->created_at}}</td>
                            


                                <td><span class="badge badge-secondary">{{$data->status}}</span></td>
                            @endforeach

                            

                            <td>{{$data2 }}</td>


                            <td>
                            <span class="badge  badge-warning"> 
                                غير منتهية 

                               </span>

                       </td>

                          </tr>




       


                    </div>
                  </div>
                </div>
                <!-- /.col-->
              </div>

            </div>
        </div>
    </div>
</div>
<!-- /.content-wrapper -->

@endsection
</body>
</html>