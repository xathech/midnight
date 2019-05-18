<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'editor', {
        language:'{{ str_replace("_", "-", app()->getLocale()) }}'
    });
</script>