<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="font-bold text-center">Crear Imagen</h1>
                    <div id="responseimage"></div>


                    <form id="formimage" class="mt-6 space-y-6">
                        @csrf
                        @method('post')

                        <div>
                            {{-- <x-input-label for="image" :value="__('image')" /> --}}
                            <x-text-input id="image" name="image" type="text" class="mt-1 block w-full" required  autofocus autocomplete="image" />
                            <x-input-error class="mt-2" :messages="$errors->get('image')" />
                            <br>
                            <x-input-label for="size" :value="__('Elige tu tamaño')" />
                            <x-input-select />

                        </div>



                        <div class="flex items-center gap-4">
                            <x-primary-button id="sendimage">{{ __('Enviar') }}</x-primary-button>


                        </div>
                    </form>




                </div>
            </div>
        </div>
    </div>

</x-app-layout>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>
    $("#formimage").on("submit", (e) => {
        e.preventDefault();

        $("#responseimage").append(`<p class="text-end" style="color:#8EF807"><i>${$("#image").val()}</i></p>`)
        $.post({
                url: '{{ route('openaicreateimage') }}',
                data: $("#formimage").serialize()
            })
            .done(function(msg) {
                data = JSON.parse(msg);
                // data = data.replaceAll("\n", "<br>")
                console.log(data)
                $("#responseimage").append(`<img src='${data}' class='justify-center' />`)
            });
        $("#image").val('')
    })
</script>
