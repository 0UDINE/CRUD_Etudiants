<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<div class="content-wrapper">
    <h2 class="page-title">Ajouter un étudiant</h2>
    <div class="custom-card">
        <form action="{{ route('etudiants.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nom</label>
                <input type="text" name="nom" required>
            </div>
            <div class="form-group">
                <label>Prenom</label>
                <input type="text" name="prenom" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Âge</label>
                <input type="number" name="age" required>
            </div>
            <div class="form-actions">
                <a href="{{ route('etudiants.index') }}" class="main-btn secondary">Retour</a>
                <button type="submit" class="main-btn success">Enregistrer</button>
            </div>
        </form>
    </div>
</div>