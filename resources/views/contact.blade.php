<x-app-layout :title="$title">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xs sm:rounded-lg">
                <div class="py-4 px-4 mx-auto max-w-screen-xl lg:px-6">

                    <div class="mb-10 text-center">
                        <span class="inline-block px-3 py-1 mb-4 text-xs font-medium tracking-wider uppercase rounded-full bg-primary-100 text-primary-600 dark:bg-primary-900 dark:text-primary-300">
                            Hubungi Kami
                        </span>
                        <h1 class="mb-3 text-3xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                            Punya Cerita atau Ide? Kami Ingin Dengar.
                        </h1>
                        <p class="max-w-2xl mx-auto text-base text-gray-600 dark:text-gray-400">
                            Baik itu masukan, kolaborasi, atau sekadar sapaan — tim Naia Blog selalu
                            terbuka untuk percakapan baru.
                        </p>
                    </div>

                    <div class="grid gap-10 lg:grid-cols-2">

                        {{-- Form Contact --}}
                        <div class="p-6 border border-gray-200 rounded-lg dark:border-gray-700">
                            <form action="" method="POST" class="space-y-5">
                                @csrf
                                <div>
                                    <label for="name" class="block mb-2 text-sm font-medium text-heading">Nama</label>
                                    <input type="text" id="name" name="name"
                                        class="block w-full p-3 bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand shadow-xs placeholder:text-body"
                                        placeholder="Nama lengkap kamu" />
                                </div>
                                <div>
                                    <label for="email" class="block mb-2 text-sm font-medium text-heading">Email</label>
                                    <input type="email" id="email" name="email"
                                        class="block w-full p-3 bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand shadow-xs placeholder:text-body"
                                        placeholder="nama@email.com" />
                                </div>
                                <div>
                                    <label for="subject" class="block mb-2 text-sm font-medium text-heading">Subjek</label>
                                    <input type="text" id="subject" name="subject"
                                        class="block w-full p-3 bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand shadow-xs placeholder:text-body"
                                        placeholder="Tentang apa pesan ini?" />
                                </div>
                                <div>
                                    <label for="message" class="block mb-2 text-sm font-medium text-heading">Pesan</label>
                                    <textarea id="message" name="message" rows="5"
                                        class="block w-full p-3 bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand shadow-xs placeholder:text-body"
                                        placeholder="Tulis pesanmu di sini..."></textarea>
                                </div>
                                <button type="submit"
                                    class="w-full text-white bg-brand hover:bg-brand-strong box-border border border-transparent focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded text-sm px-4 py-3 focus:outline-none">
                                    Kirim Pesan
                                </button>
                            </form>
                        </div>

                        {{-- Info Kontak --}}
                        <div class="flex flex-col justify-between p-6 border border-gray-200 rounded-lg dark:border-gray-700">
                            <div class="space-y-6">
                                <div class="flex items-start space-x-4">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-primary-100 dark:bg-primary-900">
                                        <svg class="w-5 h-5 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-900 dark:text-white">Email</p>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">hello@naiastudiolabs.com</p>
                                    </div>
                                </div>

                                <div class="flex items-start space-x-4">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-primary-100 dark:bg-primary-900">
                                        <svg class="w-5 h-5 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-900 dark:text-white">Lokasi</p>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">Jakarta, Indonesia</p>
                                    </div>
                                </div>

                                <div class="flex items-start space-x-4">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-primary-100 dark:bg-primary-900">
                                        <svg class="w-5 h-5 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-900 dark:text-white">Jam Respons</p>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">Senin–Jumat, 09.00–17.00 WIB</p>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-6 mt-6 border-t border-gray-200 dark:border-gray-700">
                                <p class="text-sm italic text-gray-500 dark:text-gray-400">
                                    "Setiap pesan yang masuk kami baca sendiri — bukan sekadar tiket
                                    otomatis yang dilupakan."
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>