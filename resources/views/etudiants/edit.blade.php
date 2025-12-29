<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<div class="content-wrapper">
    <h2 class="page-title">Modifier un étudiant</h2>
    <div class="custom-card">
        <form action="{{ route('etudiants.update',$etudiant->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nom</label>
                <input type="text" name="nom"  value={{ $etudiant->nom }} required>
            </div>
            <div class="form-group">
                <label>Prenom</label>
                <input type="text" name="prenom"  value={{ $etudiant->prenom }} required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value={{ $etudiant->email }} required>
            </div>
            <div class="form-group">
                <label>Âge</label>
                <input type="number" name="age"  value={{ $etudiant->age }}required>
            </div>
            <div class="form-actions">
                <a href="{{ route('etudiants.index') }}" class="main-btn secondary">Retour</a>
                <button type="submit" class="main-btn success">Mettre a jour</button>
            </div>
        </form>
    </div>
</div>