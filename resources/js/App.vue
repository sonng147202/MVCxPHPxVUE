<template>
    <div>
        <h1>Hello App!</h1>
		<ul>
            <li>
			    <router-link tag="a" to="/">Go to Home</router-link>
            </li>
            <li>
			    <router-link tag="a" to="/about">Go to About</router-link>
            </li>
            <li>
			    <router-link tag="a" to="/data">Go to Data</router-link>
            </li>
		</ul>
        <router-view/>
    </div>
</template>

<script>
export default {};
</script>

<style>
</style>