<nav class="start-nav-bar">
    <button id="startBtn">
      <div>
        <img src="{{ asset('win95-icons/png/MOD-windows-0.png') }}" />
        Start
      </div>
    </button>
    <button id="actualAppDisplay" class="invisible"></button>
    <form action="{{ url()->current() }}" method="get" id="dateTime">
      <button type="submit" name="Calendar">
        <span id="time"></span><span id="date"></span>
      </button>
    </form>
</nav>
