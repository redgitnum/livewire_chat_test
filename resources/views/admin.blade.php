
<script src="{{ asset('js/app.js') }}"></script>
<script>
    Echo.channel('shots')
        .listen('ShotEvent', () => {
    console.log('shots fired');
});
</script>
    