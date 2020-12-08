 <li><a href="/">Home</a></li>
 <li><a href="{{ route("moods.index") }}">Moods</a></li>
 <li class="drop-down"><a href="{{ route('profile.show') }}">{{ \Illuminate\Support\Facades\Auth::user()->name }}</a>
     <ul>
         <li><a href="{{ route('teams.show', [\Illuminate\Support\Facades\Auth::user()->currentTeam->id]) }}">Team Settings</a></li>
         <li><a href="{{ route('teams.create') }}">Create New Team</a></li>
         <li class="drop-down"><a href="#">Switch Teams</a>
             <ul>
                 @foreach (\Illuminate\Support\Facades\Auth::user()->allTeams() as $team)
                    <li>
                        <form action="{{ route('current-team.update') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="team_id" value="{{ $team->id }}">
                            <a href="#" onclick="event.preventDefault(); this.closest('form').submit();">{{ ($team == \Illuminate\Support\Facades\Auth::user()->currentTeam ? '@ ' : '') .  $team->name }}</a>
                        </form>
                    </li>
                 @endforeach
             </ul>
         </li>
         <li>
             <form action="{{ route('logout') }}" method="POST" class="">
                @csrf
                 <a href="" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
             </form>
         </li>
     </ul>
 </li>
