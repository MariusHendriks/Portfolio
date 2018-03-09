
{{-- Zorgt ervoor dat je de 'main' verder bouwd main.blade.php --}}
@extends('main')

{{-- Veranderd de titel van courses met de blade-manier van laravel --}}
@section('title')
    Courses
@endsection

{{-- Zorgt ervoor dat er doorgebouwd word op de plaats van @yield van de main.blade.php --}}
@section('Main')
<div class="row">
  <form class="col s12">
    <h1>Add a new week!</h1>
    <div class="row">
      <div class="input-field col s6">
        <input placeholder="Weeknummer" id="week" type="text" class="validate">
        <label for="week">Weeknummer</label>
      </div>
        <div class="input-field col s12 m6">
            <div class="select-wrapper"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-a5d767e3-2b06-b437-5e61-815c397ae96d" value="Choose your option"><ul id="select-options-a5d767e3-2b06-b437-5e61-815c397ae96d" class="dropdown-content select-dropdown" style="width: 358.391px; position: absolute; top: 0px; left: 0px; display: none; opacity: 1;"><li class="disabled"><span>Choose your option</span></li><li class=""><span>Option 1</span></li><li class="active"><span>Option 2</span></li><li class=""><span>Option 3</span></li></ul><select data-select-id="a5d767e3-2b06-b437-5e61-815c397ae96d" class="initialized">
                    <option value="" disabled="" selected="">Choose your option</option>
                    <option value="1">Sco</option>
                    <option value="2">Uxu</option>
                    <option value="3">Ptm</option>
                    <option value="4">Ded</option>
                    <option value="5">Me</option>
                </select></div>
            <label>Materialize Select</label>
        </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input placeholder="vak" id="vak" type="text" class="validate">
        <label for="vak">Vak</label>
      </div>
    </div>

  </form>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('select').material_select();
    });
</script>
@endsection