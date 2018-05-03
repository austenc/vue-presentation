<template>
    <div class="flex flex-wrap w-2/3 pt-8 mx-auto">
        <div v-for="album in albums" class="p-2 mx-auto">
            <div class="bg-white rounded p-4 text-center">
                <img :src="album.image" class="block w-32 h-32 mx-auto">

                <!-- function prop version -->
                <p>{{ fakeSlot({album: album}) }}</p>

                <!-- scoped slot version -->
                <slot :album="album"></slot>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['fakeSlot'],
    
    data() {
        return {
            albums: []
        }
    },

    created() {
        axios.get('/albums.json')
            .then((response) => {
                this.albums = response.data
            })
    }
}
</script>
