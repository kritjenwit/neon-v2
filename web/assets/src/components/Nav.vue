<template>
	<div class="row m-top-50">
		<div class="col-md-6 offset-md-3">
			<ul class="nav nav-tabs">
				<li class="nav-item" v-for="(nav,index) in navs" :key="index">
					<!--<a class="nav-link" v-bind:class="{active: isActive}" @click.prevent="isActive = !isActive" :href ="nav.path">{{ nav.name }}</a>-->
					<router-link class="nav-link" :to="nav.path">{{ nav.name }}</router-link>
				</li>
			</ul>
		</div>
	</div>
</template>

<script>
	export default {
	    data() {
	        return {
	            isActive: false,
				navs : [
				    {path:'/home/',name:"Home"},
				    {path:'/home/about',name:"About"},
				]
			}
		}
	}
</script>

<style scoped>

</style>
