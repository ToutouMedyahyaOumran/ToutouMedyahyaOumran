<h4
class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
>
Liste de planning
</h4>
<div class="w-full overflow-hidden rounded-lg shadow-xs">
<div class="w-full overflow-x-auto">
  <table class="w-full whitespace-no-wrap">
    <thead>
      <tr
        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
      >
        <th class="px-4 py-3">Numero</th>
        <th class="px-4 py-3">heure</th> 
        <th class="px-4 py-3">jour</th>
        <th class="px-4 py-3">Admin</th>
        <th class="px-4 py-3">Agent</th>
        
        <th class="px-4 py-3">Actions</th>
      </tr>
    </thead>
    <tbody
      class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
    >


        @foreach ($plannings as $planning)
        <tr class="text-gray-700 dark:text-gray-400">
            <td class="px-4 py-3 text-sm">{{$planning->id}}</td>
            <td class="px-4 py-3 text-sm">{{$planning->heure}}</td>
            <td class="px-4 py-3 text-sm">{{$planning->jour}}</td>
            <td class="px-4 py-3 text-sm">{{$planning->admin_id}}</td>
            <td class="px-4 py-3 text-sm">{{$planning->agent_id}}</td>
            <td class="px-4 py-3">
              <div class="flex items-center space-x-4 text-sm">

                <a href="{{ route('plannings.edit',$planning->id)}}" 
                  class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
             >Modifier</a>
                
                <form action="{{ route('plannings.destroy', $planning->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button  aria-label="Delete"   class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                   type="submit">Supprimer</button>
                </form>
                
              </div>
            </td>
        </tr>
    @endforeach
       
        
      </tr>
      
    </tbody>
  </table>
</div>