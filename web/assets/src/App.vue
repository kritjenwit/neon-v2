<template>
    <div id="app">
        <div id="router">
			<main_nav></main_nav>
		</div>
		<div id="stage">
			<router-view></router-view>
		</div>
		<div id="footer" class="footer">
			<vue_footer></vue_footer>
		</div>
		<vue_audio></vue_audio>
    </div>

</template>

<script>

    import music from './components/Music.vue'
    import about from './components/About.vue'
    import main_nav from './components/Nav.vue'
	import vue_footer from './components/Footer.vue'
	import vue_audio from './components/Audio.vue'

    export default {
        components: {music,about,main_nav,vue_footer,vue_audio}
    }
</script>

<style>

</style>
