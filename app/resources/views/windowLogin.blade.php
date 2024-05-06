<section class="window windowLogin">
    <nav>
      <header id="windowHeader">
        <img src="{{ $iconImg }}" />
        <h1>{{ $windowTitle }}</h1>
      </header>
      <form id="window" action="{{ request()->url() }}" method="GET">
        <!-- <button id="infoWindow" name="infoWindow"><b>?</b></button> -->
        <input id="closeWindow" type="submit" name="closeWindow" value="🗙" />
      </form>
    </nav>
    <main>
      {!! $content !!}
    </main>
  </section>
