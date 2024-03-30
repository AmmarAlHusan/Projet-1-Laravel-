
<h1 style="color: green;">
    Liste des memebres 
</h1>


@foreach ($les_membres as $membre)
<h3>
{{ $membre->prenom }} {{ $membre->nom }}
</h3>
<div class='h2' style='color: orange;'>
  {{ $membre->adresse }}
</div>

@endforeach


<h6 style="color: green;">
LP3MI 2024
</h6>