<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="font-bold text-center">Chat con GPT3.5</h1>
                    <div id="responsechat"></div>


                    <form id="formchat" class="mt-6 space-y-6">
                        @csrf
                        @method('post')

                        <div>
                            {{-- <x-input-label for="chat" :value="__('Chat')" /> --}}
                            <x-text-input id="chat" name="chat" type="text" class="mt-1 block w-full" required
                                autofocus autocomplete="chat" />
                            <x-input-error class="mt-2" :messages="$errors->get('chat')" />
                        </div>



                        <div class="flex items-center gap-4">
                            <x-primary-button id="sendchat">{{ __('Enviar') }}</x-primary-button>


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
        $("#formchat").on("submit", (e) => {
            e.preventDefault();

            $("#responsechat").append(`<p class="text-end" ><i>${$("#chat").val()}</i></p>`)
            $.post({
                    url: '{{ route('openaicreatechat') }}',
                    data: $("#formchat").serialize()
                })
                .done(function(msg) {
                    data = JSON.parse(msg);
                    data = data.replaceAll("\n", "<br>")
                    console.log(data)
                    $("#responsechat").append(`<p><b>${data}</b></p>`)
                });
            $("#chat").val('')
        })
    </script>
