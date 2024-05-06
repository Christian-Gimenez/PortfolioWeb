
<div class="start-menu hide-element">
    <div class="ban-menu">
      <h2>Portfolio<span>Web</span></h2>
    </div>
    <form class="item-menu" action="{{ url()->current() }}" method="get">
      <button type="submit" name="Projects"><img src="{{ asset('win95-icons/png/shell_window6-0.png') }}" />Projects</button>
    </form>

    <form class="item-menu" action="{{ url()->current() }}" method="get">
      <button type="submit" name="About"><img src="{{ asset('win95-icons/png/help_book_cool-0.png') }}" alt="">About me</button>
    </form>

    <form class="item-menu" action="{{ url()->current() }}" method="get">
      <button type="submit" name="Knowledge"><img src="{{ asset('win95-icons/png/program_manager-1.png') }}" alt="">Knowledge</button>
    </form>

    <form class="item-menu" action="{{ url()->current() }}" method="get">
      <button type="submit" name="Education"><img src="{{ asset('win95-icons/png/certificate_seal.png') }}" alt="">Education</button>
    </form>

    <form class="item-menu" action="{{ url()->current() }}" method="get">
      <button type="submit" name="Experience"><img src="{{ asset('win95-icons/png/user_card.png') }}" alt="">Experience</button>
    </form>

    <form class="item-menu" action="{{ url()->current() }}" method="get">
      <button type="submit" name="Contact"><img src="{{ asset('win95-icons/png/outlook_express-5.png') }}" alt="">Contact</button>
    </form>

    <form class="item-menu" action="{{ url()->current() }}" method="get">
      <button type="submit" name="LogOff"><img src="{{ asset('win95-icons/png/keys-5.png') }}" alt="">Log Off...</button>
    </form>

    <form class="item-menu" action="{{ url()->current() }}" method="get">
      <button type="submit" name="ShutDown"><img src="{{ asset('win95-icons/png/shut_down_cool-5.png') }}" alt="">Shut Down...</button>
    </form>

</div>

