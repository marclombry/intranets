@extends('layouts.app')
@section('title')      
    <div class="title m-b-md text-center">
        <i class="iColor iSpray  fas fa-gem"></i> RésiNet <i class="iColor iSpray fas fa-gem"></i>
    </div>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!--
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
            -->
        </div>
    </div>
</div>
@endsection

@if(Auth::check())
@section('portail')
    <div class=" blockBaground">
        <div style="display:flex;justify-content: space-between;">
            <p class='fontTitle'>Portail CEGO</p>
            <p class='fontTitle'><i class="iColor iTomato fas fa-archway "></i></p>
        </div>
        <h2>Portefeuille Clients</h2>
        <ul>
            <li><a href="{{route('ord')}}">Commandes (ORD)</a></li>
            <li><a href="{{route('liv')}}">Livrabilité (LIV)</a></li>  
            <li><a href="{{route('epo')}}">Fin de préparation (EPO)</a></li>  
            <li><a href="{{route('shi')}}">Expéditions (SHI)</a></li>  
        </ul>  
        <h2>Base Articles</h2>    
        <ul>
            <li><a href="{{route('sto')}}">Stock (STO)</a></li> 
        </ul>  
    </div>
@endsection
@endif

@if(Auth::check())
@section('vente')
    <div class=" blockBaground">
        <div style="display:flex;justify-content: space-between;">
            <p class='fontTitle'>Ventes</p>
            <p class='fontTitle'><i class="iColor iDarkSapphire fas fa-marker"></i></p>
        </div>
        <ul>
            <li><a href="{{route('comparatif_ca')}}">Comparatif CA</a></li>
            <li><a href="{{route('rotation_lentes')}}">Rotations lentes</a></li>  
            <li><a href="{{route('statistique')}}">Statistique commerciale</a></li>  
            <li><a href="{{route('reliquats')}}">Suivi des reliquats</a></li>  
        </ul>  
    </div>
@endsection
@endif

@if(Auth::check())
@section('logistique')
    <div class=" blockBaground">
        <div style="display:flex;justify-content: space-between;">
        <p class='fontTitle'>Logistique</p>
        <p class='fontTitle'><i class="iColor iDarkSapphire fas fa-dolly-flatbed "></i></p>
        </div>
        <ul>
            <li><a href="{{route('catalogue_plv')}}">Catalogue PLV</a></li>
            <li><a href="{{route('livraisons')}}">Portefeuille livraisons</a></li>  
            <li><a href="{{route('simulateur_livrabilite')}}">Simulateur de Livrabilité</a></li>  
            <li><a href="{{route('tableau_de_bord_plv')}}">Tableau de bord PLV</a></li>  
        </ul>
    </div>
@endsection
@endif

@if(Auth::check())
@section('informatique')
    <div class=" blockBaground">
        <div style="display:flex;justify-content: space-between;">
            <p class='fontTitle'>Informatique </p>
            <p class='fontTitle'><i class="iColor iCarrot fas fa-laptop "></i></p>
        </div>
        <ul>
            <li><a href="{{route('code_libres')}}">Codes libres</a></li>
            <li><a href="{{route('comparateur_cegid_ego')}}">Comparaison Cegid/Ego</a></li>  
            <li><a href="{{route('bank_dzb')}}">DZB Bank</a></li>  
            <li><a href="{{route('edi_checker')}}">EDI Checker</a></li>
            <li><a href="{{route('glpi_version')}}">GLPI Version 2</a> <a href="{{route('glpi_version1')}}">(V1)</a></li>  
            <li><a href="{{route('la_bible')}}">La Bible du Geek Heureux</a></li> 
        </ul>     
    </div>
@endsection
@endif

@if(Auth::check())
@section('achat')          
    <div class=" blockBaground">
        <div style="display:flex;justify-content: space-between;">
            <p class='fontTitle'>achat</p>
            <p class='fontTitle'><i class="iColor iDarkSapphire fas fa-money-bill-alt"></i></p>
        </div>
        <ul>
            <li><a href="{{route('achat_animation')}}">État des animations</a></li>
            <li><a href="{{route('previsionnel_commandes')}}">Prévisionnel de commandes</a></li>  
            <li><a href="{{route('seuil_alerte_plv')}}">Suivi des seuils d'alerte PLV</a></li>  
        </ul>     
    </div>
@endsection
@endif

@if(Auth::check())
@section('inventaire')
    <div class=" blockBaground">
        <div style="display:flex;justify-content: space-between;">
            <p class='fontTitle'>Inventaire</p>
            <p class='fontTitle'><i class="iColor iDarkSapphire fas fa-clipboard-list "></i></p>
        </div>
        <ul>
            <li><a href="{{route('invent_r')}}">Invent'R</a></li>
            <li><a href="{{route('limbo')}}">Références mortes</a></li>  
            <li><a href="{{route('emplacement_occupe')}}">Suivi des emplacements occupés</a></li>                       
        </ul>
    </div>
@endsection
@endif
@section('commun')
    <div class=" blockBaground">
        <div style="display:flex;justify-content: space-between;">
            <p class='fontTitle'>Commun</p>
            <p class='fontTitle'><i class="iColor iParadiseGreen fas fa-headset"></i></p>
        </div>
        <ul>
            <li><a href="{{route('deb')}}">DEB</a></li>
            <li><a href="{{route('generateur_signature')}}">Générateur de signature e-mail</a></li>  
            <li><a href="{{route('phototheque')}}">Photothèque</a></li> 
        </ul>
    </div>
@endsection
@section('warning')
    <p style='color:red;margin:0 10px;'><strong>alpha-test</strong>: outil en cours de développement, toutes les fonctionnalités attendues ne sont pas forcément disponibles.</p>
    <p style='color:red;margin:0 10px;'><strong>beta-test</strong>: outil prêt à l'utilisation, toutes les fonctionnalités attendues sont disponibles mais les données sont à vérifier.</p>
@endsection
   

