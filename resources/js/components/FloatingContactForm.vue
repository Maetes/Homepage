<template>
    <div>
        <div class="fixed rounded-2xl shadow-md bottom-20 right-20 bg-white z-40 h-96 w-72 p-4 border border-gray-200">
            <form class=" ">
                <div class="mb-4">
                    <label class="block text-mtw-text text-sm font-basic font-bold mb-2" for="username">
                        Name
                    </label>
                    <input name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Name">
                </div>
                <div class="mb-4">
                    <label class="block text-mtw-text text-sm font-basic font-bold mb-2" for="email">
                        Email
                    </label>
                    <input name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="text" placeholder="Name">
                </div>
                <div class="mb-6">
                    <label class="block text-mtw-text text-sm font-basic font-bold mb-2" for="message">
                        Nachricht
                    </label>
                    <textarea name="message" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="message" type="password" placeholder="Ihre Nachricht ..."></textarea>
<!--                    <p class="text-red-500 text-xs italic">Please choose a password.</p>-->
                </div>
                <div class="flex items-center justify-end">
                    <button class="bg-mtw-primary hover:bg-gray-800  text-mtw-secondary font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        Senden
                    </button>
                </div>
            </form>
<!--            <div class="h-full w-full flex flex-col px-5 py-2">-->
<!--                <label>-->
<!--                    Name-->
<!--                    <input type="text">-->
<!--                </label>-->
<!--                <label>-->
<!--                    E-Mail-Adresse-->
<!--                    <input type="text">-->
<!--                </label>-->
<!--                <label>-->
<!--                    Nachricht-->
<!--                    <textarea name="" id="" rows="5"></textarea>-->
<!--                </label>-->
<!--            </div>-->
        </div>
    </div>
</template>

<script>
export default {
    name: "FloatingContactForm"
}
</script>

<style scoped>

</style>
