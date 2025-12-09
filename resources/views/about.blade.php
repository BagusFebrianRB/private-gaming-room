<x-guest-layout>
    <div class="relative w-full bg-[#faf9f6] overflow-hidden min-h-screen">

        <div class="fixed inset-0"
            style="background:
                radial-gradient(125% 125% at 50% 90%, #fff 40%, #6d94e7 100%);
            ">
        </div>

        <div class="relative z-20">

            <!-- ABOUT CONTENT -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                    <!-- LEFT CONTENT -->
                    <div>
                        <h1 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-6" data-aos="fade-right" data-aos-duration="1000">
                            Tentang <span class="text-blue-600">Private Gaming Room</span>
                        </h1>

                        <p class="text-gray-700 text-lg leading-relaxed mb-6" data-aos="fade-right" data-aos-delay="200">
                            Private Gaming Room adalah tempat hiburan private yang menggabungkan pengalaman bermain
                            Playstation, karaoke, dan menonton Netflix dalam satu ruangan eksklusif.
                        </p>

                        <p class="text-gray-700 text-lg leading-relaxed mb-6" data-aos="fade-right" data-aos-delay="300">
                            Kami hadir untuk memberikan pengalaman bermain yang nyaman, private, dan premium
                            dengan fasilitas terbaik, ruangan eksklusif, serta pelayanan yang ramah.
                        </p>

                        <div class="grid grid-cols-2 gap-4 mt-8" data-aos="zoom-in" data-aos-duration="1000">
                            <div class="bg-white shadow-lg rounded-xl p-4 flex items-center gap-3">
                                🎮 <span class="font-semibold text-gray-800">High-End Console</span>
                            </div>
                            <div class="bg-white shadow-lg rounded-xl p-4 flex items-center gap-3">
                                🎤 <span class="font-semibold text-gray-800">Private Karaoke</span>
                            </div>
                            <div class="bg-white shadow-lg rounded-xl p-4 flex items-center gap-3">
                                📺 <span class="font-semibold text-gray-800">Netflix & Chill</span>
                            </div>
                            <div class="bg-white shadow-lg rounded-xl p-4 flex items-center gap-3">
                                ❄️ <span class="font-semibold text-gray-800">Full AC & Nyaman</span>
                            </div>
                        </div>
                    </div>

                    <!-- RIGHT IMAGE / ILLUSTRATION -->
                    <div class="relative" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="relative w-full aspect-[4/3] rounded-3xl overflow-hidden shadow-2xl bg-gray-200">
                            <img src="{{ asset('images/Logo1.png') }}"
                                alt="About Private Gaming Room"
                                class="w-full h-full object-cover">
                        </div>

                        <!-- Floating Badge -->
                        <div
                            class="absolute -bottom-6 -left-6 bg-white shadow-xl rounded-2xl px-6 py-4 flex items-center gap-3">
                            ⭐ <span class="font-bold text-gray-800">Premium Experience</span>
                        </div>
                    </div>

                </div>

                <!-- VISION & MISSION -->
                <div class="mt-20 grid grid-cols-1 md:grid-cols-2 gap-10" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="bg-white rounded-2xl shadow-xl p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Visi Kami</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Menjadi tempat hiburan private terbaik yang menghadirkan pengalaman bermain, bersantai,
                            dan berkumpul dengan kualitas premium.
                        </p>
                    </div>

                    <div class="bg-white rounded-2xl shadow-xl p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Misi Kami</h3>
                        <ul class="text-gray-700 leading-relaxed space-y-2 list-disc list-inside">
                            <li>Menyediakan fasilitas gaming terbaik</li>
                            <li>Memberikan kenyamanan maksimal bagi pelanggan</li>
                            <li>Menghadirkan ruang hiburan yang private & eksklusif</li>
                            <li>Pelayanan cepat, ramah, dan profesional</li>
                        </ul>
                    </div>
                </div>

                <!-- CTA -->
                <div class="mt-20 text-center" data-aos="zoom-in" data-aos-duration="1000">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">
                        Siap merasakan pengalaman bermain terbaik?
                    </h2>
                    <a href="{{ route('rooms.index') }}"
                        class="inline-flex items-center justify-center px-10 py-4 text-lg font-bold rounded-xl
                        text-white bg-gradient-to-r from-blue-600 to-teal-600 hover:from-blue-700 hover:to-teal-700
                        shadow-xl hover:shadow-2xl transition-all">
                        Lihat Ruangan
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
