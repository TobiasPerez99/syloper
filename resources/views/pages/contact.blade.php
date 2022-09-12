@extends('layouts.default')
@section('content')
    <div class="container border-3 flex justify-content-center">
        <div class="row justify-content-center m-5 align-items-center g-2">
            <div class="col-md-8 bg-light">
                <div class="form">
                    <form action="{{ route('sendEmail') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control" name="name" id="" aria-describedby="helpId"
                                placeholder="">
                            <small id="helpId" class="form-text text-muted">Ingrese Su Nombre</small>
                        </div>

                        <div class="form-group">
                            <label for="">Apellido</label>
                            <input type="text" class="form-control" name="phone" id=""
                                aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Ingrese Su Apellido</small>
                        </div>

                        <div class="form-group">
                            <label for="">Correo Electronico</label>
                            <input type="text" class="form-control" name="email" id=""
                                aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Ingrese Su Correo</small>
                        </div>

                        <div class="form-group">
                            <label for="">Asunto</label>
                            <input type="text" class="form-control" name="subject" id=""
                                aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Ingrese Un Asunto</small>
                        </div>

                        <div class="form-group">
                            <label for="">Mensaje</label>
                            <input type="text" class="form-control" name="message" id=""
                                aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Escriba Su Mensaje</small>
                        </div>

                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
