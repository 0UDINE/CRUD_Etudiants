<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<div class="container">
    <h2 class="title">Liste des étudiants</h2>

    <a href="{{ route('etudiants.create') }}" class="btn-add">
        Ajouter un étudiant
    </a>

    <table class="custom-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Âge</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($etudiants as $etudiant)
                <tr>
                    <td>{{ $etudiant->id }}</td>
                    <td>{{ $etudiant->nom }}</td>
                    <td>{{ $etudiant->prenom }}</td>
                    <td>{{ $etudiant->email }}</td>
                    <td>{{ $etudiant->age }}</td>
                    <td class="text-center">
                    <div class="actions-wrapper">
                        <a href="{{ route('etudiants.edit', $etudiant->id) }}" class="action-btn edit-btn">Modifier</a>
                        
                        <form action="{{ route('etudiants.destroy', $etudiant->id) }}" method="POST" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="action-btn delete-btn" onclick="return confirm('etes-vous sur de  supprimer cet etudiant ?')">
                                Supprimer
                            </button>
                        </form>
                    </div>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>