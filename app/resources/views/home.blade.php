@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Services Here</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

        <form class="needs-validation" action="addServices" method="POST" novalidate>
            {{csrf_field()}}
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="heading">Heading</label>
                <input type="text" class="form-control" id="heading" placeholder="Enter heading here" value="" name="heading" required>
                <div class="invalid-feedback">
                  Valid Heading is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="sub_heading">Sub Heading</label>
                <input type="text" class="form-control" id="sub_heading" placeholder="Enter subheading here" value="" name="sub_heading" required>
                <div class="invalid-feedback">
                  Valid Sub Heading is required.
                </div>
              </div>

            </div>

            <div class="mb-3">
              <label for="description">Description </label>
              <textarea name="description" class="form-control" id="description" placeholder="Enter detailed description here">
                  
              </textarea>
              <div class="invalid-feedback">
                Please enter a valid description.
              </div>
            </div>

            <div class="mb-3 form-group">
            <label for="exampleFormControlSelect1">Choose Service Icon</label>
            <select class="form-control" name="icon" id="exampleFormControlSelect1">
              <option>fa-anchor</option>
              <option>fa-truck</option>
              <option>fa-fighter-jet</option>
              <option>fa-docker</option>
              <option>fa-clock</option>
              <option>fa-money-bill-alt</option>
            </select>
          </div>
            
                <button type="submit" class="btn btn-primary">Add Service</button>
                
   
            </div>
            <hr class="mb-4">
           
          </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
