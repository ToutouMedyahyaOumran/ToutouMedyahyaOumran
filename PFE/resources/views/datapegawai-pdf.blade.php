

<!--  
        <h2  class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Listes des Agents

        </h2> -->
        <!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: blue;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: white;
  color: blue;
}
</style>
</head>
<body>

<h1> Listes des Agents
</h1>

<table id="customers">
  <tr>
  <th >id</th>
                <th >nom</th>
                <th >prenom</th>
                <th >phone</th>
                <th >email</th>
                <th >motPs</th>
                <th >departement_id</th>
  </tr>
  
  @foreach ($rq as $item)
            <tr>
                <td >{{$item->id}}</td>
                <td >{{$item->nom}}</td>
                <td>{{$item->prenom}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->email}}</td>
                <td >{{$item->motPs}}</td>
                <td >{{$item->departement_id}}</td>
               



</tr>
@endforeach
  
</table>

</body>
</html>



       
