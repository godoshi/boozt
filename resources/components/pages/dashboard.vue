<template>
	<div class="col">
		<h2>{{ title }}</h2>
		<h3>Customers</h3>
		<ul v-for="customer in customers">
			<li>#{{ customer.ID }}: {{ customer.firstName }} {{ customers.lastName }}</li>
		</ul>
	</div>
</template>

<script>
module.exports = {
	props: {
		customers: Array,
	},
	data() {
		return {
			title: 'Welcome to the Dashboard page!',
		};
	},
}
</script>