@extends('layouts.template-frontend')

@section('contenido')
    <!-- Catálogo de productos -->
    <section class="catalog">
        <h2>Catálogo de Productos</h2>
        <div class="products">

            <!-- Producto 1 -->
            @foreach ($products as $product)
                <div class="product-card">
                    <img src="{{ asset('storage/'.$product->image)}}" alt="{{ $product->name }}">
                    <h3>{{ $product->name}}</h3>
                    <p>{{ $product->description }}</p>
                    <p class="price">${{ $product->price }}</p>
                </div>
            @endforeach

        <!-- Paginación -->
        <div class="pagination">
            <a href="#" class="page">1</a>
            <a href="#" class="page">2</a>
            <a href="#" class="page">3</a>
            <a href="#" class="page">Siguiente &raquo;</a>
        </div>
    </section>

@endsection