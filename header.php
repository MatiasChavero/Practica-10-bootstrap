<?php require 'head.php'; ?>

<header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a href="#" class="navbar-brand">Logotipo</a>
			<button
				class="navbar-toggler"
				type="button"
				data-bs-toggle="collapse"
				data-bs-target="#contenidoMenu"
				aria-controls="contenidoMenu"
				aria-expanded="false"
				aria-label="Mostrar/Ocultar Navegacion"
			>
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="contenidoMenu">
				<ul class="navbar-nav me-auto">
					<li class="nav-item">
						<a href="#" class="nav-link">Inicio</a>
					</li>
					<li class="nav-item dropdown">
						<a 
							href="#" 
							class="nav-link dropdown-toggle"
							id="submenuProductos"
							role="button"
							data-bs-toggle="dropdown"
							aria-expanded="false" 
						>
							Productos
						</a>
						<ul class="dropdown-menu" aria-labelledby="submenuProductos">
							<li>
								<a href="#" class="dropdown-item">Computadoras</a>
							</li>
							<li>
								<a href="#" class="dropdown-item">Laptops</a>
							</li>
							<li>
								<a href="#" class="dropdown-item">Smartphones</a>
							</li>
							<li>
								<a href="#" class="dropdown-item">Drones</a>
							</li>
							<li>
								<a href="#" class="dropdown-item">Accesorios</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Contacto</a>
					</li>
				</ul>
				<form action="" class="d-flex">
					<input 
						type="text"
						class="form-control me-2"
						aria-label="Buscar"
						placeholder="Buscar" 
					>
					<button class="btn btn-primary" type="submit">Buscar</button>
				</form>
			</div>
		</div>
	</nav>
</header>
