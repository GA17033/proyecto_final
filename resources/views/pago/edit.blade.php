@extends('layouts.app')

@section('template_title')
    Update Pago
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')
                <div class="float-right">
                    <a class="btn btn-primary" href="{{ route('pagos.index') }}"> Regresar</a>
                </div>
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Forma Pago</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('pagos.update', $pago->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                            @php
                            $btn=2 
                         @endphp
                            @include('pago.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
