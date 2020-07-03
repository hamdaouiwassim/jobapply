@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liste des offres </div>

                <div class="card-body">
                  <h4> Ajouter un offre d'emploi </h4>
                  <hr />
                    <form action="/societe/addOfferToDb" method="post">
                        @csrf
                         <div class="form-group">
                            <label >Titre d'offre</label>
                            <input type="text" class="form-control" name="name"  >
                          </div>

                          <div class="form-group">
                            <label >Description d'offre</label>
                            <textarea  class="form-control"  name="description"></textarea>
                          </div>

                          
                          <div class="form-group">
                            <label >Categorie d'offre</label>
                            <select  class="form-control"  name="categorie">
                              @foreach ( $categories as $categorie )
                                          <option value="{{ $categorie->id }}">
                                            {{ $categorie->name }}
                                          </option>
                              @endforeach
                              

                          </select>
                           
                          </div>
                          <div class="form-group">
                            <label >Localisation  d'offre</label>
                            <input type="text"  class="form-control"  name="location">
                          </div>
                          <div class="form-group">
                            <label >Dernier date pour cette offre</label>
                            <input type="date"  class="form-control"  name="lastday">
                          </div>

                          <div class="form-group">
                            <label >Type de contrat pour cette offre</label>
                            <select  class="form-control"  name="contrat">
                                <option value="CDD">
                                        CDD
                                </option>
                                <option value="CDI">
                                        CDI
                                </option>
                                <option value="SIVP">
                                        SIVP
                                </option>
                                <option value="Mission Freelance">
                                  Mission Freelance
                                </option>

                            </select>
                          </div>
                          
                          <div class="form-group">
                            <label >Engagement du travaille pour cette offre</label>
                            <select  class="form-control"  name="engagement">
                                <option value="Temps complet">
                                        Temps complet
                                </option>
                                <option value="Temps partielle">
                                        Temps partielle
                                </option>
                                <option value="Travaille libre">
                                        Travaille libre
                                </option>

                            </select>
                          </div>
                          
                          <div class="form-group">
                            <label >Salaire proposer pour cette offre</label>
                            <input type="number"  class="form-control"  name="salaire">
                          </div>
                          <div class="form-group">
                            
                            <input type="submit"  class="btn btn-primary"  value="Ajouter">
                          </div>


                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection