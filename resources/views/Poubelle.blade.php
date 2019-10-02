{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('niveau', 'Niveau:') !!}
			{!! Form::text('niveau') !!}
		</li>
		<li>
			{!! Form::label('lat', 'Lat:') !!}
			{!! Form::text('lat') !!}
		</li>
		<li>
			{!! Form::label('lng', 'Lng:') !!}
			{!! Form::text('lng') !!}
		</li>
		<li>
			{!! Form::label('taille', 'Taille:') !!}
			{!! Form::text('taille') !!}
		</li>
		<li>
			{!! Form::label('id_pidiaterie', 'Id_pidiaterie:') !!}
			{!! Form::text('id_pidiaterie') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}