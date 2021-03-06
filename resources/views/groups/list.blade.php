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
                {!! Form::open(['route' => ['group.destroy', $group->id], 'method' => 'delete', 'class' => 'form-botao']) !!}
                {!! Form::submit("Remover") !!}
                {!! Form::close() !!}
               <a class="botao-detalhes" href="{{ route('group.show', $group->id) }}">Detalhes</a>
               <a class="botao-editar" href="{{ route('group.edit', $group->id) }}">Editar</a>
             </td>
          </tr>    
       @endforeach
    </tbody>
 </table>