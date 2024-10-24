@extends('layouts.app')
@section('content')
    <div class="p-6">
        <h1 class="text-dark-dark-light dark:text-dark-light text-2xl">Genshin Topup</h1>
        <div class="border rounded-lg shadow-md px-4 py-2 mt-4 w-1/2">
            <h1 class="text-dark-dark-light dark:text-dark-light text-2xl">Masukkan Data</h1>
            <form class="flex flex-col p-4 gap-2">
                {{-- TODO: Menambahkan Input Form UID dan Server--}}
                <div class="flex flex-col">
                    <label for="uid" class="form-label text-dark-dark-light dark:text-dark-light">UID: </label>
                    <input type="text" name="uid" id="uid" class="form-input">
                </div>
                <div class="flex flex-col">
                    <label for="server" class="form-label text-dark-dark-light dark:text-dark-light">Server: </label>
                    <select name="server" id="server" class="form-select">
                        <option value="null" selected disabled>Pilih Server</option>
                        <option>Europe</option>
                        <option>America</option>
                        <option>Asia</option>
                        <option>TW, HK, MO</option>
                    </select>
                </div>
            </form>
        </div>
    </div>
@endsection
