@extends('layouts.app')

@section('template_title')
    Create Pago
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')
                <div class="float-right">
                    <a class="btn btn-primary" href="{{ route('pagos.index') }}"> Regresar</a>
                </div>
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Nueva Forma de Pago</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('pagos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            @php
                            $btn=1 
                         @endphp
                            @include('pago.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
