<template>
    <div id="main">
        <Header/>
        <div class="container my-5">
            <router-view/>
        </div>
        <Footer/>
    </div>
</template>

<script>
    import Header from '../components/HeaderComponent.vue';
    import Footer from '../components/FooterComponent.vue';

    export default {
        components: {
            Header,
            Footer
        }
    };
</script>

<style>
</style>