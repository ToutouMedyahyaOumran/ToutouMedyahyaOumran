@extends("layouts.master")
@section("contenu")

<div class="my-3 p-3 bg-body rounded shadow-sm">
        <h6 class="border-bottom pb-2 mb-4 ">Les interventions archivées</h6>

        <div class="mt-4">
            <div class="d-flex justify-content-end mt-4">

            <h3><a class="btn btn-success" href="restore-all"><i class="fa fa-sharp fa-solid fa-trash-arrow-up"></i> Restaurer tout</a></h3>  </div>

        <table class="table table-border table-hover mt-2">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date</th>
      <th scope="col"> Vehicule</th>
      <th scope="col"> Support</th>
      <th scope="col"> Restaurer</th>
    </tr>
  </thead>
  <tbody>
    @foreach($interventions as $intervention)
    <tr>
      <th scope="row">{{$intervention->id}}</th>
      <td>{{$intervention->Date}}	</td>
      <td>{{$intervention->vehicules_id}}</td>
      <td>{{$intervention->support_id}}</td>

      <td>
      <a href="restore/{{$intervention->id}}" class="text-primary btn"><i class="fa fa-sharp fa-solid fa-trash-arrow-up"></i></a>

    </td>
    </tr>
    @endforeach
</tbody>

</table></div>
      </div>


@endsection
