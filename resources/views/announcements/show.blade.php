<x-layout>
  <x-navbar></x-navbar>
  <div class="container show_announ">
    <div class="row h-100 align-items-center">
      <h1 class="my-3">{{$announcement->title}}</h1>
      <div class="col-md-8" style="align-items: center">
        
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="img-fluid" src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(700, 400) : 'https://picsum.photos/200' }}">
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </div>
          </div>
          
        </div>
        
        <div class="col-md-4">
          <h3 class="my-3">{{ __('ui.description') }}</h3>
          <p>{{ $announcement->body }}</p>
          <h3 class="my-3">{{ __('ui.details') }}</h3>
          <ul>
            <li>€ {{ $announcement->price }}</li>
            <li>Inserito da: {{ $announcement->user->name }}</li>
            <li>Pubblicato il: {{ $announcement->created_at->format('d/m/Y') }}</li>
          </ul>
        </div>
        
      </div>
    </div>
    
    
    
  </x-layout>

<!-- Page Content -->
{{-- <div class="container">

  <!-- Portfolio Item Heading -->
  <h1 class="my-4">{{$announcement->title}}</h1>

  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-8">
      <img class="img-fluid" src="https://picsum.photos/200/300" alt="">
    </div>

    <div class="col-md-4">
      <h3 class="my-3">Descrizione prodotto</h3>
      <p>{{ $announcement->body }}</p>
      <h3 class="my-3">Dettagli Articolo</h3>
      <ul>
        <li>€ {{ $announcement->price }}</li>
        <li>Inserito da: {{ $announcement->user->name }}</li>
        <li>Pubblicato il: {{ $announcement->created_at->format('d/m/Y') }}</li>
      </ul>
    </div>

  </div>
  <!-- /.row -->

  <!-- Related Projects Row -->
  <h3 class="my-4">Related Projects</h3>

  <div class="row">

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="https://picsum.photos/200/300" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="https://picsum.photos/200/300" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="https://picsum.photos/200/300" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="https://picsum.photos/200/300" alt="">
          </a>
    </div>

  </div>
 

</div> --}}




{{-- <div class="container py-5">
  <div class="row justify-content-center ">
  <h1 class="my-4 mt-5"> Annuncio {{$announcement->title}}</h1>
  <div id="carouselExampleControls" class="carousel carouselD slide py-4 " data-bs-ride="carousel" >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://picsum.photos/200/300" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://picsum.photos/200/300" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://picsum.photos/200/300" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <h5 class="card-title">{{ $announcement->title }}</h5>
    <p class="card-text">{{ $announcement->body }}</p>
    <p class="card-text">{{ $announcement->price }}</p>
    <p class="card-text">{{ $announcement->user->name }}</p>
    <button class="button-18" role="button"><a href="{{ route('categories.show',['category'=>$announcement->category]) }}"class="text-white text-decoration-none">categoria: {{ $announcement->category->name }}</a></button>
    <p class="card-footer text-decoration-none">Pubblicato il: {{ $announcement->created_at->format('d/m/Y') }}</p>
    </div>
  </div>
</div>
 --}}
