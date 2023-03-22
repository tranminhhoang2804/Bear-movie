<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}">Admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{route('category.create')}}">Danh mục phim</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('genre.create')}}">Thể loại phim</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('country.create')}}">Quốc gia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('movie.create')}}">Phim</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('episode.create')}}">Tập phim</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Tìm kiếm..." aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Tìm</button>
      </form>
    </div>
  </div>
</nav>
