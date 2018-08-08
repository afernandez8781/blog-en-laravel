@component('mail::message')
# Tus credenciales para acceder a {{ config('app.name') }}

Utiliza estas credenciales para acceder al sistema

@component('mail::table')
	| Username | Contraseña |
	|:----------|:------------|
	| {{ $user->email }} | {{ $password }} |
@endcomponent


@component('mail::button', ['url' => url('login')])
Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
