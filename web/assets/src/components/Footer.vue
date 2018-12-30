<template>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-bottom">
		<div class="container">
			<a class="navbar-brand" href="#" id="music-title">Logo</a>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" v-on:click="play_music()"><i class="fas fa-play icon"></i></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" v-on:click="pause_music()"><i class="fas fa-pause icon"></i></a>
				</li>
			</ul>
		</div>
	</nav>
</template>

<script>
export default {
  data() {
    return {};
  },
  methods: {
    play_music: () => {
      let audio_player = $("#audio-player");
      audio_player[0].play();
    },
    pause_music: () => {
      let audio_player = $("#audio-player");
      audio_player[0].pause();
    }
  }
};
</script>

<style scoped>
.icon {
  cursor: pointer;
}
</style>
