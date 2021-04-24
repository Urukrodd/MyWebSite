<textarea class="form-control ckeditor" name="{{ $row->field }}" id="richtext{{ $row->field }}">
    {{ old($row->field, $dataTypeContent->{$row->field} ?? '') }}
</textarea>

@push('javascript')
    <script src="/ckeditor/ckeditor.js"></script>
    <script>
        $(document).ready(function() {
            {{--var additionalConfig = {--}}
            {{--    selector: 'textarea.richTextBox[name="{{ $row->field }}"]',--}}
            {{--}--}}

            {{--$.extend(additionalConfig, {!! json_encode($options->tinymceOptions ?? '{}') !!})--}}

            {{--tinymce.init(window.voyagerTinyMCE.getConfig(additionalConfig));--}}
            $('.ckeditor').ckeditor();
        });
    </script>
@endpush
