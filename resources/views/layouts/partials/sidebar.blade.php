<div class="sidebar">
	<ul class="list-unstyled">
		<li>
			<a href="{{url('/')}}">
				<i class="fa fa-home"></i>
				<span>Inicio</span>
			</a>
		</li>
		@access('clients')
		<li>
			<a href="#">
				<i class="fa fa-users"></i>
				<span>Clientes</span>
			</a>
			<ul>
				<li>
					<a href="{{ url('clients') }}">Listado</a>
				</li>
				<li>
					<a href="{{ url('paymentMethods') }}">Formas de Pago</a>
				</li>
				<li>
					<a href="{{ url('creditCards') }}">Tarjetas de Crédito</a>
				</li>
			</ul>
		</li>
		@endaccess
		@access('sales')
		<li>
			<a href="#">
				<i class="fa fa-shopping-cart"></i>
				<span>Ventas</span>
			</a>
			<ul>
				<li><a href="{{ url('orders') }}">Ordenes</a></li>
			</ul>
		</li>
		@endaccess
		@access('inventory')
		<li>
			<a href="#">
				<i class="fa fa-archive"></i>
				<span>Inventario</span>
			</a>
			<ul>
				<li><a href="{{ url('stocks') }}">Stocks</a></li>
        <li><a href="{{ url('products') }}">Productos</a></li>
        <li><a href="{{ url('combos') }}">Combos</a></li>
				@owner()
        <li><a href="{{url('departments')}}">Departamentos</a></li>
				<li><a href="{{ url('categories') }}">Categorias</a></li>
				<li><a href="{{ url('subcategories') }}">Subcategorias</a></li>
				<li><a href="{{ url('brands') }}">Marcas</a></li>
        @endowner
        		<li><a href="{{ url('attributes') }}">Atributos</a></li>
			</ul>
		</li>
		@endaccess
		@access('purchase')
		<li>
			<a href="#">
				<i class="fa fa-shopping-bag"></i>
				<span>Compras</span>
			</a>
			<ul>
				<li>
					<a href="{{ url('suppliers') }}">Proveedores</a>
				</li>
				<li>
					<a href="{{ url('purchases') }}">Compras</a>
				</li>
			</ul>
		</li>
		@endaccess
		@access('enterprise')
		<li>
			<a href="#">
				<i class="fa fa-building"></i>
				<span>Empresa</span>
			</a>
			<ul>
				<li>
					<a href="{{ url('enterprise-sections?code=abouts') }}">Acerca</a>
				</li>
				<li>
					<a href="{{ url('enterprise-sections?code=contacts') }}">Contactos</a>
				</li>
				<li>
					<a href="{{ url('termsConditions') }}">Términos y condiciones</a>
				</li>
        <li>
					<a href="{{ url('policies') }}">Políticas de privacidad</a>
				</li>
			</ul>
		</li>
		@endaccess
		@access('support')
		<li>
			<a href="#">
				<i class="fa fa-life-ring"></i>
				<span>Soporte</span>
			</a>
			<ul>
				<li>
					<a href="{{ url('faqs') }}">FAQ's</a>
				</li>
			</ul>
		</li>
		@endaccess
		@access('marketing')
		<li>
			<a href="#">
				<i class="fa fa-trademark"></i>
				<span>Marketing</span>
			</a>
			<ul>
				<li>
					<a href="{{ url('advertisings') }}">Publicidad</a>
				</li>
				<li>
					<a href="{{ url('frequencies') }}">Frecuencias</a>
				</li>
				<li>
					<a href="{{ url('templates') }}">Plantillas</a>
				</li>
        <li>
					<a href="{{ url('coupons') }}">Cupones</a>
				</li>
			</ul>
		</li>
		@endaccess
    @access('users')
      <li>
        <a href="#">
          <i class="fa fa-users"></i>
          <span>Usuarios</span>
        </a>
        <ul>
          @owner()<li><a href="{{url('/stores')}}">Tiendas</a></li>@endowner
          <li><a href="{{url('/users')}}">Listado</a></li>
          @owner()<li><a href="{{url('/roles')}}">Roles</a></li>@endowner
        </ul>
      </li>
    @endaccess
		@access('reports')
		<li>
			<a href="{{url('reports')}}">
				<i class="fa fa-bar-chart"></i>
				<span>Reportes</span>
				<ul>
					<li>
						<a href="{{url('/reports/orders')}}">Ordenes</a>
					</li>
					<li>
						<a href="{{url('/reports/earnings')}}">Ganancias</a>
					</li>
				</ul>
			</a>
		</li>
		@endaccess
	</ul>
</div>
