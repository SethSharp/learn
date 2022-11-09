<template>
    <div class="m-5">
        <Popper
            placement="top"
            hover="true"
            arrow="true"
            :content="description"
            >
            <div class="border-4 border-defaultTeal rotate-45 rounded-xl w-12 h-12"> </div>
        </Popper>
    </div>

</template>

<style>
:root {
    --popper-theme-background-color: #333333;
    --popper-theme-background-color-hover: #333333;
    --popper-theme-text-color: #2dd4bf;
    --popper-theme-border-width: 0px;
    --popper-theme-border-style: solid;
    --popper-theme-border-radius: 6px;
    --popper-theme-padding: 20px;
    --popper-theme-box-shadow: 0 6px 30px -6px rgba(0, 0, 0, 0.25);
}
</style>


<script>
    import { defineComponent } from "vue";
    import Popper from "vue3-popper";

    export default defineComponent({
        props: ['description'],
        components: {
            Popper,
        },
    });
</script>



