<table class="default-table">
    <thead>
        <tr>
            <td>#</td>
            <td>Nome do Grupo</td>
            <td>Instituição</td>
            <td>Nome do responsável</td>
            <td>Opções</td>
        </tr>
    </thead>
 
    <tbody>
       @foreach ($group_list as $group)
          <tr>
             <td>{{ $group->id }}</td>
             <td>{{ $group->name }}</td>
             <td>{{ $group->instituition->name }}</td>
             <td>{{ $group->owner->name }}</td>
             <td>
                {!! Form::open(['route' => ['group.destroy', $group->id], 'method' => 'delete' ]) !!}
                {!! Form::submit("Remover") !!}
                {!! Form::close() !!}
             
             </td>
          </tr>    
       @endforeach
    </tbody>
 </table>