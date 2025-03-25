<div class="state-area">
    <div class="state-label">Estado</div>
    <select name="state_id" id="state_id" require>
        <option value="" name="">Selecione um estado</option>
        @foreach($states as $state)
        @if(($state['id'] == old('state_id')) || ($state['id'] == Auth::user()->state_id))
        <option name="{{$state['id']}}" selected value="{{$state['id']}}">{{$state['uf']}} - {{$state['state']}}</option>
        @else
        <option name="{{$state['id']}}" value="{{$state['id']}}">{{$state['uf']}} - {{$state['state']}}</option>
        @endif
        @endforeach
    </select>
    <small>{{$errors->first('state_id')}}</small>
</div>
