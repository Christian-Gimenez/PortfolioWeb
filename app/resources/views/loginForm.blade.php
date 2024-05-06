<form action="{{ url('/access') }}" method="POST">
    @csrf
    <figure>
      <img src="{{ asset('win95-icons/png/key_padlock-0.png') }}"/>
    </figure>

    <div>
      <p>Type a user name and password to log on to PortfolioWeb.
      <br/>If you don't have an administrator's account, <u>you can <strong>log in as a Guest</strong></u>.</p>
      <label for='userName'><u>U</u>ser name:</label>
      <input type='text' id='userName' name='userName'/>
      <br/>
      <label for='userPassword'><u>P</u>assword:</label>
      <input type='password' id='userPassword' name='userPassword'/>
      <br/>
      </div>
    <div>
      <input type='submit' name='ok' value='OK'/>
      <input type='reset' name='cancel' value='Cancel'/>
      <input type='submit' name='guest_login' value='Guest Login'/>
    </div>
  </form>
