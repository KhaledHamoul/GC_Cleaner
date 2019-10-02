{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('raison_sociale', 'Raison_sociale:') !!}
			{!! Form::text('raison_sociale') !!}
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
			{!! Form::label('tel', 'Tel:') !!}
			{!! Form::text('tel') !!}
		</li>
		<li>
			{!! Form::label('email', 'Email:') !!}
			{!! Form::text('email') !!}
		</li>
		<li>
			{!! Form::label('username', 'Username:') !!}
			{!! Form::text('username') !!}
		</li>
		<li>
			{!! Form::label('passeword', 'Passeword:') !!}
			{!! Form::text('passeword') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}