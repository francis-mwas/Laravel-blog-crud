
    <form method="POST" action="/players/{{ $players->id }}">
 
        @method('DELETE')
        @csrf
     
     
            <div class="field">
     
                <div class="control">
     
                    <button type="submit" class="button is-link">Delete Player</button>
     
                </div>
     
            </div>         
     
        </form>
