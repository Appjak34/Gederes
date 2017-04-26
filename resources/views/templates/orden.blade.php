{{ csrf_field() }}
    @foreach($orden as $orden)
    <header>
        <div class="col-sm-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="mg-clear">{{$orden->cliente}}</h3>
                </div>
                <div class="panel-body">
                        <ul class="list-unstyled">
                            <li>
                                <h3 class="mg-md">Aqui van los platillos</h3>
                            </li>
                        </ul>
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="mg-clear">Comentarios</h3>
                        </div>
                        <div class="panel-body">
                            <p>{{$orden->comentarios}}</p>
                        </div>
                    </div><a href="index.html" class="btn btn-d btn-lg">Listo<span class="special-tag-for-editing-text-with-html"></span></a></div>
            </div>
        </div>
    </header>
    @endforeach