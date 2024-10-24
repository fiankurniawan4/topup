@extends('layouts.app')

@section('content')
    {{-- <div class="pt-4 bg-primary">
        <div class="mx-auto max-w-7xl px-4  sm:px-6 lg:px-8">
            <nav class="hidden lg:flex " aria-label="Breadcrumb">
                <ol role="list" class="flex items-center space-x-4">
                    <li>
                        <div>
                            <a href="#" class="text-gray-400 hover:text-gray-500">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="h-5 w-5 shrink-0">
                                    <path
                                        d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z">
                                    </path>
                                    <path
                                        d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z">
                                    </path>
                                </svg>
                                <span class="sr-only">Home</span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" aria-hidden="true" class="h-5 w-5 shrink-0 text-gray-400">
                                <path fill-rule="evenodd"
                                    d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z"
                                    clip-rule="evenodd"></path>
                            </svg><a href="/search" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Cari
                                Game</a></div>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="mx-auto mt-5 max-w-7xl space-y-12 px-4 sm:px-6 lg:px-8">
        </div>
    </div> --}}
    <div class="flex justify-center items-center">
        <img class="rounded-md p-6 w-full h-[380px]"
            src="https://cdn1.codashop.com/S/content/common/images/promos/Oct24/HSR-P2-730x280_ID.jpg" alt="">
    </div>
    <div class="mt-4 p-6" >
        <h1 class="dark:text-white mb-2 font-bold text-2xl font-nunito">Our Shop</h1>
        <div class="grid grid-cols-3 gap-2 sm:gap-4 md:grid-cols-4 md:gap-2 lg:gap-4 xl:grid-cols-6">
            <div>
                <a class="relative flex h-48 w-full flex-col overflow-hidden rounded-xl p-6 hover:opacity-95 sm:h-60 md:h-64"
                    href="#">
                    <span aria-hidden="true" class="absolute inset-0">
                        <figure style="max-width: 100%; height: auto;">
                            <span
                                style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img
                                    alt="8 Ball Pool"
                                    src="https://sin1.contabostorage.com/0a986eb902c4469cb860e43985eb18a1:vocapanel/vcash/8_ball-638a-original-10ba9-original.webp"
                                    decoding="async" data-nimg="fill" class=""
                                    style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: medium; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;"><noscript></noscript></span>
                        </figure>
                    </span>
                    <span aria-hidden="true"
                        class="absolute inset-x-0 bottom-0 h-full bg-gradient-to-t from-gray-800 opacity-100"></span>
                    <article class="absolute inset-x-0 bottom-3 flex flex-col px-1.5 text-center">
                        <h2 class="truncate text-xs font-bold text-white md:text-base">8 Ball Pool</h2>
                        <p class="truncate text-[10px] text-slate-400 md:text-xs">8 Ball Pool</p>
                    </article>
                </a>
            </div>
            <div>
                <a class="relative flex h-48 w-full flex-col overflow-hidden rounded-xl p-6 hover:opacity-95 sm:h-60 md:h-64"
                    href="#">
                    <span aria-hidden="true" class="absolute inset-0">
                        <figure style="max-width: 100%; height: auto;">
                            <span
                                style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img
                                    alt="Mobile Legends"
                                    src="https://sin1.contabostorage.com/0a986eb902c4469cb860e43985eb18a1:vocapanel/vcash/mobilelegends-4702-original-70c3-original.webp"
                                    decoding="async" data-nimg="fill" class=""
                                    style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: medium; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;"><noscript></noscript></span>
                        </figure>
                    </span>
                    <span aria-hidden="true"
                        class="absolute inset-x-0 bottom-0 h-full bg-gradient-to-t from-gray-800 opacity-100"></span>
                    <article class="absolute inset-x-0 bottom-3 flex flex-col px-1.5 text-center">
                        <h2 class="truncate text-xs font-bold text-white md:text-base">Mobile Legends: Bang Bang</h2>
                        <p class="truncate text-[10px] text-slate-400 md:text-xs">Moonton</p>
                    </article>
                </a>
            </div>
            <div>
                <a class="relative flex h-48 w-full flex-col overflow-hidden rounded-xl p-6 hover:opacity-95 sm:h-60 md:h-64"
                    href="#">
                    <span aria-hidden="true" class="absolute inset-0">
                        <figure style="max-width: 100%; height: auto;">
                            <span
                                style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img
                                    alt="Point Blank"
                                    src="https://sin1.contabostorage.com/0a986eb902c4469cb860e43985eb18a1:vocapanel/BisnisVocagame/pointblank-ecae-original.webp"
                                    decoding="async" data-nimg="fill" class=""
                                    style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: medium; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;"><noscript></noscript></span>
                        </figure>
                    </span>
                    <span aria-hidden="true"
                        class="absolute inset-x-0 bottom-0 h-full bg-gradient-to-t from-gray-800 opacity-100"></span>
                    <article class="absolute inset-x-0 bottom-3 flex flex-col px-1.5 text-center">
                        <h2 class="truncate text-xs font-bold text-white md:text-base">Point Blank</h2>
                        <p class="truncate text-[10px] text-slate-400 md:text-xs">Zepetto</p>
                    </article>
                </a>
            </div>
            <div>
                <a class="relative flex h-48 w-full flex-col overflow-hidden rounded-xl p-6 hover:opacity-95 sm:h-60 md:h-64"
                    href="#">
                    <span aria-hidden="true" class="absolute inset-0">
                        <figure style="max-width: 100%; height: auto;">
                            <span
                                style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img
                                    alt="Honkai Star Rail"
                                    src="https://sin1.contabostorage.com/0a986eb902c4469cb860e43985eb18a1:vocapanel/vcash/honkai_starrail-f1069-original-6ba5-original.webp"
                                    decoding="async" data-nimg="fill" class=""
                                    style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: medium; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;"><noscript></noscript></span>
                        </figure>
                    </span>
                    <span aria-hidden="true"
                        class="absolute inset-x-0 bottom-0 h-full bg-gradient-to-t from-gray-800 opacity-100"></span>
                    <article class="absolute inset-x-0 bottom-3 flex flex-col px-1.5 text-center">
                        <h2 class="truncate text-xs font-bold text-white md:text-base">Honkai Star Rail</h2>
                        <p class="truncate text-[10px] text-slate-400 md:text-xs">HoYoverse</p>
                    </article>
                </a>
            </div>
            <div>
                <a class="relative flex h-48 w-full flex-col overflow-hidden rounded-xl p-6 hover:opacity-95 sm:h-60 md:h-64"
                    href="#">
                    <span aria-hidden="true" class="absolute inset-0">
                        <figure style="max-width: 100%; height: auto;">
                            <span
                                style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img
                                    alt="Zenless Zone Zero"
                                    src="https://static-src.vocagame.com/BisnisVocagame/zenless_zone_zero-da84-original.webp"
                                    decoding="async" data-nimg="fill" class=""
                                    style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: medium; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;"><noscript></noscript></span>
                        </figure>
                    </span>
                    <span aria-hidden="true"
                        class="absolute inset-x-0 bottom-0 h-full bg-gradient-to-t from-gray-800 opacity-100"></span>
                    <article class="absolute inset-x-0 bottom-3 flex flex-col px-1.5 text-center">
                        <h2 class="truncate text-xs font-bold text-white md:text-base">Zenless Zone Zero</h2>
                        <p class="truncate text-[10px] text-slate-400 md:text-xs">HoYoverse</p>
                    </article>
                </a>
            </div>
            <div>
                <a class="relative flex h-48 w-full flex-col overflow-hidden rounded-xl p-6 hover:opacity-95 sm:h-60 md:h-64"
                    href="#">
                    <span aria-hidden="true" class="absolute inset-0">
                        <figure style="max-width: 100%; height: auto;">
                            <span
                                style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img
                                    alt="Genshin Impact"
                                    src="https://sin1.contabostorage.com/0a986eb902c4469cb860e43985eb18a1:vocapanel/vcash/genshin_impact-abee-original-abba-original.webp"
                                    decoding="async" data-nimg="fill" class=""
                                    style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: medium; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;"><noscript></noscript></span>
                        </figure>
                    </span>
                    <span aria-hidden="true"
                        class="absolute inset-x-0 bottom-0 h-full bg-gradient-to-t from-gray-800 opacity-100"></span>
                    <article class="absolute inset-x-0 bottom-3 flex flex-col px-1.5 text-center">
                        <h2 class="truncate text-xs font-bold text-white md:text-base">Genshin Impact</h2>
                        <p class="truncate text-[10px] text-slate-400 md:text-xs">HoYoverse</p>
                    </article>
                </a>
            </div>
            <div>
                <a class="relative flex h-48 w-full flex-col overflow-hidden rounded-xl p-6 hover:opacity-95 sm:h-60 md:h-64"
                    href="#">
                    <span aria-hidden="true" class="absolute inset-0">
                        <figure style="max-width: 100%; height: auto;">
                            <span
                                style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img
                                    alt="Genshin Impact"
                                    src="https://sin1.contabostorage.com/0a986eb902c4469cb860e43985eb18a1:vocapanel/vcash/genshin_impact-abee-original-abba-original.webp"
                                    decoding="async" data-nimg="fill" class=""
                                    style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: medium; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;"><noscript></noscript></span>
                        </figure>
                    </span>
                    <span aria-hidden="true"
                        class="absolute inset-x-0 bottom-0 h-full bg-gradient-to-t from-gray-800 opacity-100"></span>
                    <article class="absolute inset-x-0 bottom-3 flex flex-col px-1.5 text-center">
                        <h2 class="truncate text-xs font-bold text-white md:text-base">Genshin Impact</h2>
                        <p class="truncate text-[10px] text-slate-400 md:text-xs">HoYoverse</p>
                    </article>
                </a>
            </div>
            <div>
                <a class="relative flex h-48 w-full flex-col overflow-hidden rounded-xl p-6 hover:opacity-95 sm:h-60 md:h-64"
                    href="#">
                    <span aria-hidden="true" class="absolute inset-0">
                        <figure style="max-width: 100%; height: auto;">
                            <span
                                style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img
                                    alt="Genshin Impact"
                                    src="https://sin1.contabostorage.com/0a986eb902c4469cb860e43985eb18a1:vocapanel/vcash/genshin_impact-abee-original-abba-original.webp"
                                    decoding="async" data-nimg="fill" class=""
                                    style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: medium; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;"><noscript></noscript></span>
                        </figure>
                    </span>
                    <span aria-hidden="true"
                        class="absolute inset-x-0 bottom-0 h-full bg-gradient-to-t from-gray-800 opacity-100"></span>
                    <article class="absolute inset-x-0 bottom-3 flex flex-col px-1.5 text-center">
                        <h2 class="truncate text-xs font-bold text-white md:text-base">Genshin Impact</h2>
                        <p class="truncate text-[10px] text-slate-400 md:text-xs">HoYoverse</p>
                    </article>
                </a>
            </div>
        </div>
    </div>
@endsection
