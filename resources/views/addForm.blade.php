<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Formulir Rekam Medis') }}
        </h2>
    </x-slot>

    <div class="bg-white h-screen flex items-center justify-center overflow-hidden shadow-sm sm:rounded-lg">
        <div class="container p-2 justify-center max-w-3xl bg-white border-b border-gray-200 rounded-lg">
            <h1 class="text-3xl text-center font-semibold mb-6">
                Formulir Rekam Medis
            </h1>
                <form action="/valid" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="mb-6">
                        <label for="patient" class="block mb-2 text-sm font-medium text-gray-900 ">Pilih nama pasien</label>
                        <select id="patient" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option value="">Pilih nama pasien!</option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <label for="doctor" class="block mb-2 text-sm font-medium text-gray-900 ">Pilih nama dokter</label>
                        <select id="doctor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="">Pilih nama dokter!</option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <label for="kondisi" class="block mb-2 text-sm font-medium text-gray-900 ">Kondisi Kesehatan</label>
                        <input type="text" id="kondisi" name="kondisi" class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 "
                        value="{{ old('kondisi') }}" class="@error('kondisi') is-invalid @enderror">
                    </div>
                    <div class="mb-6">
                        <label for="suhu" class="block mb-2 text-sm font-medium text-gray-900 ">Suhu Tubuh</label>
                        <input type="text" id="suhu" name="suhu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required
                        value="{{ old('nrp') }}" class="@error('suhu') is-invalid @enderror">
                    </div>
                    <div class="mb-6">  
                        <label class="block mb-2 text-sm font-medium text-gray-900 " for="user_avatar">Upload Resep</label>
                        <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent -600  " aria-describedby="user_avatar_help" id="user_avatar" name="user_avatar" type="file"
                        value="{{ old('user_avatar') }}" class="@error('user_avatar') is-invalid @enderror">
                    </div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Submit</button>        
                </form>
        </div>
    </div>

</x-app-layout>
