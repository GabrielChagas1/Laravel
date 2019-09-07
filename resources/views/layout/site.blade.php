{{-- Incluindo o topo do site --}}
@include('layout._includes.topo')

{{-- Incluindo o corpo do nosso site --}}
@yield('conteudo')

{{-- Incluindo o rodapé do nosso site --}}
@include('layout._includes.footer')
