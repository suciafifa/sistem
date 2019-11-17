<div class="main-container">
      <div class="row">
        <div class="col-lg-11 col-md-11 col-sm-10 col-xs-10">
      <div class="min-height-200px">
  <div  class="pd-30 bg-white border-radius-4 box-shadow mb-20">
          <div class="clearfix mb-20">
            <div class="pull-center">
              <h5 class="text-blue">Data Table Simple</h5>
              <p class="font-14">you can find more options <a class="text-primary" href="https://datatables.net/" target="_blank">Click Here</a></p>
            </div>
          </div>
          <div class="row">
            <table id="dataguru" class="data-table stripe hover nowrap">
              <thead>
                <tr>
                  <th>Nig</th>
                  <th class="table-plus datatable-nosort">NAMA</th>
                  <th>no-telp</th>
                  <th class="datatable-nosort">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $d)
                <tr>
                  <td class="table-plus">{{$d->nama}}</td>
                  <td>
                    <div class="dropdown">
                      <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <i class="fa fa-ellipsis-h"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="fa fa-eye"></i> View</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Edit</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>