<script setup>
    import { computed } from 'vue';

    const props = defineProps(['dark']);
    //https://d2wks4gidu9630.cloudfront.net/f9e7e5eb-767a-4239-a8b4-63b76580c003/svg/codinglabs-logo.svg
    const newImg = 'https://d2wks4gidu9630.cloudfront.net/9bfe4af0-d7a0-4399-930f-d93ec6019812/svg/codinglabs-logo-stacked.svg';

</script>

<template>
    <img
        :src="newImg"
        alt="Coding Labs"
    />
</template>
