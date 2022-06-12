<div id="{{ $name }}_form_group" class="mb-5 fv-row @error($name) has-danger @enderror {{ $row_class ?? '' }}">
    @includeWhen(isset($label), 'metronic::components.inputs._label')

    @yield('inputs')

    @include('metronic::components.inputs._error')

</div>
