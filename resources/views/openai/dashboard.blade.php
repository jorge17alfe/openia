<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel de control') 
        </h2>
    </x-solot>
--}}

    <div class="flex flex-wrap justify-between justify-content-sm-center">

        @php
            $example = [
                [
                    'color' => 'rgb(213, 130, 239, 0.2)',
                    'link' => 'openai.chat',
                ],
                [
                    'color' => 'rgb(231, 213, 56, 0.2)',
                    'link' => 'openai.image',
                ],
                [
                    'color' => 'rgb(3, 3, 3, 0.2)',
                    'link' => 'openai.example',
                ],
            ];
            
        @endphp

        @foreach ($example as $k=>$v)
            {{-- @php
                print_r($example[$k]['color']);
                
            @endphp --}}

            <div class="mb-2 me-1 p-3 flex items-center justify-center"style="width:250px; background-color:{{ $example[$k]['color'] }}; border-radius: 15px ">
                <h2><a href={{ route($example[$k]['link']) }}>{{ $example[$k]['link'] }}</a></h2>
            </div> 
        @endforeach
    </div>


</x-app-layout>
