<section class="p-1">

    <div id="loader" class="loader"></div>

    <div class="text-center my-2 display-3">
        Painel
        <small class="text-muted">Administrativo</small>
    </div>

    
        <form action="{{ route('admin.filter') }}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="start_date">Data de Início:</label>
                    <input type="date" class="form-control" name="start_date" value="{{ request('start_date') }}">
                </div>
                <div class="form-group col-md-2">
                    <label for="end_date">Data de Fim:</label>
                    <input type="date" class="form-control" name="end_date" value="{{ request('end_date') }}">
                </div>
                <div class="form-group col-md-2">
                    <label for="items_per_page">Itens por Página:</label>
                    <select class="form-control" name="items_per_page">
                        <option value="10" {{ request('items_per_page') == 10 ? 'selected' : '' }}>10</option>
                        <option value="20" {{ request('items_per_page') == 20 ? 'selected' : '' }}>20</option>
                        <option value="50" {{ request('items_per_page') == 50 ? 'selected' : '' }}>50</option>
                        <option value="100" {{ request('items_per_page') == 100 ? 'selected' : '' }}>100</option>
                    </select>
                </div>
                <div class="form-group col-md">
                    <label for="search_term">Termo:</label>
                    <input type="text" class="form-control" name="search_term" value="{{ request('search_term') }}">
                </div>
                <div class="form-group col-md-2">
                    <label for="items_per_page">&nbsp;</label>
                    <div class='class="form-control d-flex justify-content-between'>
                        <button type="submit" class="btn btn-success">Carregar</button>
                        <a href="{{ route('admin') }}" class="btn btn-warning">Limpar</a>
                    </div>
                </div>
            </div>
        </form>
        

    <table class="table table-striped table-hover table-bordered" id="data_Table">
        <thead>
            <tr class="text-center">
                <th scope="col">NOME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">FONE</th>
                <th scope="col">DATA</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($resultado as $key => $value)
                <tr>
                    <td><span class="text-capitalize">{{ $value->nome }}</span></td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->fone }}</td>
                    <td>{{ $value->data }}</td>
                    <td class="d-flex justify-content-evenly">
                        <a class="btn btn-secondary btn-sm"
                            href="{{ route('cliente.show', ['chave' => $value->chave, 'protocolo' => $value->protocolo]) }}"
                            title="Exibir" target="_blank" role="button"><i class="bi bi-eye"></i></a>
                        <a class="btn btn-secondary btn-sm mx-1" href="https://api.whatsapp.com/send?phone=55{{intval($value->fone)}}" role="button" aria-disabled="true" target='_blank'><i
                            class="bi bi-whatsapp"></i></a>
                        <a class="btn btn-secondary btn-sm mx-1" href="https://wa.me/55{{intval($value->fone)}}" role="button" aria-disabled="true" target='_blank'><i
                            class="bi bi-whatsapp"></i></a>

                        <!-- <a class="btn btn-secondary btn-sm mx-1" href="https://api.whatsapp.com/send?phone=55{{intval($value->fone)}}&text=Ol%C3%A1,%0AAcesse%20o%20resultado%20do%20seu%20Teste%20no%20link%0A%0A{{'http://'.$_SERVER['HTTP_HOST']}}/{{$value->chave}}/{{$value->protocolo}}" role="button" aria-disabled="true" target='_blank'><i
                            class="bi bi-whatsapp"></i></a>
                        <a class="btn btn-secondary btn-sm disabled" href="#" role="button" aria-disabled="true"><i
                            class="bi bi-envelope-open"></i></a> -->
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class="text-center">
                <th scope="col">NOME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">FONE</th>
                <th scope="col">DATA</th>
                <th scope="col"></th>
            </tr>
        </tfoot>
    </table>

<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item {{ $resultado->onFirstPage() ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $resultado->url(1) }}" tabindex="-1" aria-disabled="true">Primeira</a>
        </li>
        <li class="page-item {{ $resultado->previousPageUrl() ? '' : 'disabled' }}">
            <a class="page-link" href="{{ $resultado->previousPageUrl() }}" tabindex="-1" aria-disabled="true">Anterior</a>
        </li>

        @for ($i = max(1, $resultado->currentPage() - 5); $i <= min($resultado->currentPage() + 5, $resultado->lastPage()); $i++)
            <li class="page-item {{ $i == $resultado->currentPage() ? 'active' : '' }}">
                <a class="page-link" href="{{ $resultado->url($i) }}">{{ $i }}</a>
            </li>
        @endfor

        <li class="page-item {{ $resultado->nextPageUrl() ? '' : 'disabled' }}">
            <a class="page-link" href="{{ $resultado->nextPageUrl() }}">Próximo</a>
        </li>
        <li class="page-item {{ $resultado->currentPage() == $resultado->lastPage() ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $resultado->url($resultado->lastPage()) }}">Última</a>
        </li>
    </ul>
</nav>

    {{-- $resultado->links() --}}

</section>