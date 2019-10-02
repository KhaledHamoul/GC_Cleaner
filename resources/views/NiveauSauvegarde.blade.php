{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('niveau', 'Niveau:') !!}
			{!! Form::text('niveau') !!}
		</li>
		<li>
			{!! Form::label('id_poubelle', 'Id_poubelle:') !!}
			{!! Form::text('id_poubelle') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}