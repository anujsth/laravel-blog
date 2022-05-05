<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="UTF-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <link rel="stylesheet" href="{{ url('css/main.css') }}" />
 <title>Document</title>
 </head>
 <body>
 <nav class="navbar">
 <!-- LOGO -->
 <div class="logo">MUO</div>
 <!-- NAVIGATION MENU -->
 <ul class="nav-links">
 <!-- USING CHECKBOX HACK -->
 <input type="checkbox" id="checkbox_toggle" />
 <label for="checkbox_toggle" class="hamburger">&#9776;</label>
 <!-- NAVIGATION MENUS -->
 <div class="menu">
 <li><a href="/">Home</a></li>
 <li><a href="{{ route('post') }}">Post</a></li>
 <li class="services">
 <a href="/">Services</a>
 <!-- DROPDOWN MENU -->
 <ul class="dropdown">
 <li><a href="/">Dropdown 1 </a></li>
 <li><a href="/">Dropdown 2</a></li>
 <li><a href="/">Dropdown 2</a></li>
 <li><a href="/">Dropdown 3</a></li>
 <li><a href="/">Dropdown 4</a></li>
 </ul>
 </li>
 <li>
	 <form action="{{ route('logout') }}" method="POST">
		@csrf
		<button type='submit' >Logout</button>
</form>
 </li>
 <li><a href="/">Contact</a></li>
 </div>
 </ul>
 </nav>
  @foreach($posts as $post)
  <div class="divi">
	<h1 >{{ $post->title }}</h1>
	<span class="spantime">{{ $post->created_at->diffForHumans() }}</span>
  </div>
  <div>
	<p class="para">{{ $post->body }}</p>
  </div>
  <div class="divname">
	  -{{ $post->user->name }}
  </div>
  <div>
    <form action="{{route('like', $post) }}" method="POST">
      @csrf
      <button type="submit" class="like">Like</button>
      <button type="submit" class="like"> Dislike </button>
    </form>
    <span>{{ $post->likes->count() }} likes</span>
  </div>
  @endforeach
  {{ $posts->links() }}
 </body>
</html>