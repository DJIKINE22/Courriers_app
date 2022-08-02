@extends ('admin.master');

@section('content');
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header ">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="d-flex justify-content-center">
          <h1><strong>Tableau de bord</strong></h1>
        </div> 
      <div class="row d-flex justify-content-center" >
        <div class="input-group col-md-4">
            <input class="form-control py-2" type="search" value="recherche des courriers" id="example-search-input">
            <span class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </div><br>
      </div>
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-12">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>5</h3>
                <p>Courrier entrant</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>5<sup style="font-size: 20px"></sup></h3>
                <p>Courrier sortant</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer"></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>5</h3>
                <p>Archives</p>
              </div>
            </div>
          </div>
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- tables-->
           <div class="container">
               <h1 style="text-align:center;">Les actions du jour</h1>
                  <hr class="small-box bg-warning">
                  <table class="table table-bordered" style="width:900px;">
                    <thead class="table-primary">
                      <tr>
                        <th>Refereence</th>
                        <th>Objet</th>
                        <th>Types</th>
                        <th>Date</th>
                        <th>Heure</th>
                        <th>Fichier jointe</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Demande partenariat</td>
                        <td>sortant</td>
                        <td>02/05/2022</td>
                        <td>12h00</td>
                        <td>Fichier jointe</td>
                      </tr>
                      <tr>
                      <td>2</td>
                        <td>Reunion</td>
                        <td>entrant</td>
                        <td>09/05/2022</td>
                        <td>15h00</td>
                        <td>Fichier jointe</td>
                      </tr>
                      <tr>
                      <td>3</td>
                        <td>Information</td>
                        <td>sortant</td>
                        <td>10/05/2022</td>
                        <td>7h00</td>
                        <td>Fichier jointe</td>
                      </tr>
                    </tbody>
                  </table>
              
              
            </div>
          </section>  
        </div>
  @endsection
  