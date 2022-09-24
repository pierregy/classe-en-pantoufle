@extends('layouts.admin')

@section('content')
<div class="content">
    <h1>{{ strtoupper(trans('dashboard.title_H1')) }}</h1>
    <div class="row">
        <div class="col-lg-8">
            <div class="card-group">
                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/img/contenu_pedag.jpg" alt="Card image cap">
                    <div class="card-body">
                            <h5 class="card-title">Contenu Pédagogique</h5>
                            <p class="card-text">Retrouvez ici tout le contenu pédagogique pour organiser le travail de votre enfant. Basé sur le site du CNED et autres ressources transmises par l'école du Pouy.</p>
                            <a href="{{ Route('contenus') }}" class="btn btn-primary">Voir</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="/img/planning.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Planning de la semaine</h5>
                                <p class="card-text">Retrouvez ici une idée de planning pour bien s'organiser sur la semaine.</p>
                                <a href="#" class="btn btn-primary">Voir</a>
                            </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="/img/activity_draw.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Idées d'activité pour la semaine</h5>
                                <p class="card-text">Retrouvez ici des idées d'activités proposées par les parents et enseignants.</p>
                                <a href="#" class="btn btn-primary">Voir</a>
                            </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="/img/children.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">La room des enfants</h5>
                                <p class="card-text">C'est ici que vous pourrez organiser une séance de visio-conférence pour réduire un peu les distances :)</p>
                                <a href="https://whereby.com/classe-pantoufle" target="_blank" class="btn btn-primary">Voir</a>
                            </div>
                    </div>
            </div>
        </div>
        <div class="col-lg-4">
            <h2>Les prochains rdv</h2>
            <p>... à venir...</p>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection