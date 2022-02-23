<template>
	<div>
		Hello!
		<NewComp></NewComp>
		<form action="/" method="post">
			<input type="text" name="a">
			<button type="submit">submit</button>
		</form>
	</div>
</template>

<script>
	import NewComp from './NewComponent.vue';
	export default {
		components: {
			NewComp
		}
	};
</script>

<style>
</style>