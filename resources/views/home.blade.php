<x-app-layout meta-description="The Komar N.M. personal blog about ukrainian language">
    <div class="container max-w-3xl mx-auto py-6">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!--Latest Post -->
            <div class="col-span-2">
                <h2 class="text-lg sm:text-xl font-bold text-blue-500 uppercase pb-1 border-b-2 border-blue-500 mb-3">
                    Latest Post
                </h2>

                <x-post-item :post="$latestPost"/>
            </div>

            <!--Popular 3 post -->
            <div>
                <h2 class="text-lg sm:text-xl font-bold text-blue-500 uppercase pb-1 border-b-2 border-blue-500 mb-3">
                    Popular Posts
                </h2>
            </div>
        </div>

        <!--Recommended posts -->
        <div>
            <h2 class="text-lg sm:text-xl font-bold text-blue-500 uppercase pb-1 border-b-2 border-blue-500 mb-3">
                Recommended Posts
            </h2>
        </div>

        <!--Latest Categories -->
        <div>
            <h2 class="text-lg sm:text-xl font-bold text-blue-500 uppercase pb-1 border-b-2 border-blue-500 mb-3">
                Recent Categories
            </h2>
        </div>


    </div>
</x-app-layout>
