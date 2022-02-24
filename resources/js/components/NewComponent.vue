<template>
	<div>
		<img :src="image" alt="sao z">
	</div>
</template>

<script>
	import Avatar from "../../img/avatar_default.png";
	export default {
		data: function () {
            return {
                image: Avatar
            }
        },
		name: 'New',
	};
</script>

<style>
</style>