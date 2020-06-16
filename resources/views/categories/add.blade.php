@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categories </div>

                <div class="card-body">
                  <h4> Ajouter une Categorie </h4>
                  <hr />
                    <form action="" method="post">

                        @csrf
                        <div class="form-group">
                            <label >Nom de categorie</label>
                            <input type="text" class="form-control" name="categoryName"  >
                          </div>

                          <div class="form-group">
                            <label >Description d'offre</label>
                            <textarea  class="form-control"  name="categoryDescription"></textarea>
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