<h1>Olá 4Linux View!</h1>
<h2>{{ $blade }}</h2>

<ul>
@foreach ($pedidos as $pedido)
	<li>{{ $pedido }}</li>
@endforeach
</ul>