<template>
	
	<div id="new-release" class="m-top-50">
		<h3>New Release</h3><hr>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-6 py-2" v-for="(music,index) in musics" :key="index">
				<div class="img-container">
					<a href="">
						<img :src="music.cover_url" alt="" class="img-thumnail">
					</a>
					<div class="overlay">
						<div class="text music-queue">
							<!-- <a class="music-list" :href="music.music_url" onclick="$.play(this)" >{{ music.music_name }}</a> -->
							<a class="music-list" :href="music.music_url" @click.prevent v-on:click="play_music($event)" >{{ music.music_name + '  ' + music.artist }}</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
import axios from "axios";

export default {
  data() {
    return {
      msg: "Hello from component",
      musics: null
    };
  },
  mounted() {
    axios
      .get("http://api.neon.me/api/musics")
      .then(response => {
        this.musics = response.data.data;
      })
      .then(error => {
        console.log(error);
      });
  },
  methods: {
    play_music: e => {
      let list = e.target;
      let music_list = $(".music-queue .music-list");
      if ($("#playlist").length > 0) {
        $("#playlist").empty();
      }
      music_list.each((i, e) => {
        $("#playlist").append("<li>" + e.outerHTML + "</li>");
      });
      $("#audio-player")[0].src = $(list)[0].href;
      $("#audio-player")[0].play();
    }
  }
};
</script>

<style scoped>
.img-container {
  position: relative;
  width: 250px;
  height: 250px;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: 0.5s ease;
  background-color: gray;
}

.overlay a {
  color: black;
}
.overlay a:hover {
  color: white;
}

.img-container:hover .overlay {
  opacity: 0.85;
}

.text {
  color: black;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.img-thumnail {
  position: relative;
  width: 250px;
  height: 250px;
}
</style>
