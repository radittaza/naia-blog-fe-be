<x-app-layout :title="$title">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xs sm:rounded-lg">
                <div class="py-12 px-6 mx-auto max-w-screen-xl ">

                    <span class="inline-block px-3 py-1 mb-4 text-xs font-medium tracking-wider uppercase rounded-full bg-primary-100 text-primary-600 dark:bg-primary-900 dark:text-primary-300">
                        Tentang Kami
                    </span>

                    <h1 class="mb-6 text-3xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                        Naia Blog | Ruang untuk Ide yang Ingin Bertumbuh
                    </h1>
—
                    <div class="space-y-5 text-base leading-relaxed text-gray-600 dark:text-gray-400">
                        <p>
                            Naia Blog lahir dari satu keyakinan sederhana: setiap ide, sekecil apa pun,
                            layak punya rumah untuk ditulis, dibaca, dan didiskusikan. Kami percaya
                            tulisan yang jujur dan reflektif punya kekuatan untuk menghubungkan orang-orang
                            yang belum pernah bertemu sekalipun.
                        </p>
                        <p>
                            Di sini, kamu akan menemukan cerita, pemikiran, dan perspektif yang ditulis
                            dengan hati|bukan sekadar konten, tapi jejak pikiran yang terus berkembang
                            seiring waktu. Setiap artikel adalah percakapan yang belum selesai, menunggu
                            kamu untuk melanjutkannya lewat sudut pandangmu sendiri.
                        </p>
                        <p>
                            Naia Blog dikembangkan dan dirawat oleh <span class="font-semibold text-gray-800 dark:text-gray-200">Naia Studio Labs</span>,
                            sebuah studio kecil yang percaya bahwa teknologi dan kreativitas seharusnya
                            berjalan beriringan | sederhana dalam bentuk, namun bermakna dalam isi.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 gap-6 mt-10 sm:grid-cols-3">
                        <div class="p-5 text-center border border-gray-200 rounded-lg dark:border-gray-700">
                            <p class="text-2xl font-bold text-primary-600">1000+</p>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Tulisan Dipublikasikan</p>
                        </div>
                        <div class="p-5 text-center border border-gray-200 rounded-lg dark:border-gray-700">
                            <p class="text-2xl font-bold text-primary-600">5+</p>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Kategori Topik</p>
                        </div>
                        <div class="p-5 text-center border border-gray-200 rounded-lg dark:border-gray-700">
                            <p class="text-2xl font-bold text-primary-600">1000+</p>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Pembaca Setia</p>
                        </div>
                    </div>

                    <div class="pt-8 mt-10 border-t border-gray-200 dark:border-gray-700">
                        <p class="text-sm italic text-gray-500 dark:text-gray-400">
                            "Kami tidak menulis untuk didengar semua orang, kami menulis untuk
                            ditemukan oleh orang yang tepat, di waktu yang tepat."
                        </p>
                    </div>

                    <div class="mt-8">
                        <a href="/posts" class="inline-flex items-center text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">
                            Mulai membaca artikel kami
                            <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>