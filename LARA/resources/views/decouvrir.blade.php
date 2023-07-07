@extends('app')

@section('content')

        <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="{{ route('african') }}">Mets Africains</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('european') }}">Mets Européens</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
        <!-- Le reste du contenu de la page de commande -->
@endsection

@section('scripts')
<script>
    alert('Hello decouvrir')
</script>
@endsection
