
<template>
    <footer class="bg-accent border-t border-info-content p-4 w-full">
        <div class="flex items-center">
            <input v-model="form.content" type="text" placeholder="Type a message..."
                   class="border-info-content bg-accent w-full p-2 rounded-md border focus:outline-none focus:border-blue-500">
            <button @click="onSubmit" class="bg-primary text-accent px-4 py-2 rounded-lg ml-2">
                <icon-send/>
            </button>
        </div>
    </footer>
</template>
