<x-layout>
    <x-navbar></x-navbar>
    <div class='container pad'>
        <div class="row">
          @forelse ($announcements as $announcement)
          <div class="card mx-auto col-md-3 col-10 px-4 mt-5">
              <img class='mx-auto img-thumbnail' src="https://picsum.photos/200/300" width="auto" height="auto"/>
              <div class="card-body text-center mx-auto">
                  <div class='cvp'>
                      <h5 class="card-title font-weight-bold">{{ $announcement->title }}</h5>
                      <p class="card-text">€ {{ $announcement->price }}</p>
                      <p class="card-text">Descrizione: {{ $announcement->body }}</p>
                      <p class="card-text">User: {{ $announcement->user->name }}</p>
                      <button class="button-18 mt-2" role="button"><a href="{{ route('announcements.show', compact('announcement')) }}" class="button-18 text-white text-decoration-none">Visualizza</a></button><br />
                      <button class="button-181 mt-2" role="button"><a href="{{ route('categories.show',['category'=>$announcement->category]) }}"class="text-white text-decoration-none ">Categoria: {{ $announcement->category->name }}</a></button>
                      <p class="text-black text-decoration-none mt-2 p-3">Pubblicato il: {{ date_format($announcement->created_at, 'd/m/Y H:i')}}</p>
                  </div>
              </div>
          </div>
          @empty
           <div class="col-12">
              <div class="alert alert-warning py-3 shadow">
                <p class="lead">Non ci sono annunci per questa ricerca</p>
              </div>
            </div>   

          
          @endforelse
          <div class="py-4">
            {{ $announcements->links() }} {{-- paginazione --}}
          </div>
         
        </div>
      </div>
    </x-layout>
    
    
    
    